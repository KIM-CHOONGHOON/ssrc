package com.example.ssrc;

import java.io.IOException;
import java.nio.ByteBuffer;
import java.nio.channels.AsynchronousFileChannel;
import java.nio.channels.CompletionHandler;
import java.nio.file.Path;
import java.nio.file.StandardOpenOption;

public class asyncFileChannelTest {

    private void asyncFileChannelTest(Path sourceFilePath, boolean isWrite) throws IOException {

        //// try-with-resource 대신 try-catch-finally 적용
        try {
            System.err.println("AsynchronousFileChannel 테스트 시작");

            AsynchronousFileChannel asyncFileChannel = AsynchronousFileChannel.open(
                    sourceFilePath,
                    StandardOpenOption.READ
            );

            long startTime = System.nanoTime();
            long fileSize = asyncFileChannel.size();

            // ByteBuffer 크기를 8k로 축소
            ByteBuffer byteBuffer = ByteBuffer.allocate(8 * 1024);

            ////// attachment 용 객체
            class AsyncIOResultInfo {
                long iterations = 0L;
                long totalBytesRead = 0L;
            }
            AsyncIOResultInfo asyncIOResultInfo = new AsyncIOResultInfo();
            System.err.println("AsynchronousFileChannel.read() 호출");
            asyncFileChannel.read(
                    byteBuffer, 0, asyncIOResultInfo,    ////// iterations 대신 asyncIOResultInfo 전달
                    new CompletionHandler<Integer, AsyncIOResultInfo>() {    ////// 타입 파라미터에 Long 대신 AsyncIOResultInfo 전달

                        @Override
                        public void completed(Integer result, AsyncIOResultInfo asyncIOResultInfo) {    ////// Long 대신 AsyncIOResultInfo 전달
                            if (result == -1) {
                                long endTime = System.nanoTime();
                                System.err.println("비정상 종료 : " + (endTime - startTime) + " ns elapsed.");

                                //// asyncFileChannel 닫기
                                closeAsyncFileChannel(asyncFileChannel);

                                return;
                            }

                            // 반복 회수 확인
                            System.err.println((asyncIOResultInfo.iterations + 1) + "회차 반복");    ////// iterations 대신 asyncIOResultInfo.iterations

                            ////// 읽어들인 바이트수 누적
                            asyncIOResultInfo.totalBytesRead += result;

                            byteBuffer.flip();
                            byteBuffer.mark();
                            if (isWrite) System.out.write(byteBuffer.array(), 0, result);
                            byteBuffer.reset();

                            // 읽어들인 바이트수가
                            // 파일사이즈와 같거나(버퍼 크기와 파일 크기가 같은 경우)
                            // 버퍼 사이즈보다 작다면 파일의 끝까지 읽은 것이므로 종료 처리
                            if (result == fileSize || result < byteBuffer.capacity()) {
                                long endTime = System.nanoTime();
                                System.err.println("AsynchronousFileChannel.read() 완료 : " + (endTime - startTime) + " ns elapsed.");

                                ////// 총 읽어들인 바이트수 비교
                                System.err.println("fileSize       : " + fileSize);
                                System.err.println("totalBytesRead : " + asyncIOResultInfo.totalBytesRead);

                                //// asyncFileChannel 닫기
                                closeAsyncFileChannel(asyncFileChannel);

                                return;
                            }
                            // 읽을 내용이 남아있으므로 반복 회수를 증가 시키고 다시 읽는다.
                            ////// iterations 대신 asyncIOResultInfo.iterations
                            asyncIOResultInfo.iterations++;
                            asyncFileChannel.read(byteBuffer, result * asyncIOResultInfo.iterations, asyncIOResultInfo, this);
                        }

                        @Override
                        public void failed(Throwable exc, AsyncIOResultInfo iterations) {    ////// Long 대신 AsyncIOResultInfo 전달
                            exc.printStackTrace();
                            //// asyncFileChannel 닫기
                            closeAsyncFileChannel(asyncFileChannel);
                        }
                    }
            );

            System.err.println("AsyncFileChannel I/O 진행 중에는 다른 작업도 할 수 있지롱");
            System.err.println("그동안 그리스에도 다녀오고");
            System.err.println("크로아티아에도 갔다오자");

        } catch (Exception e) {
            e.printStackTrace();
            throw new RuntimeException(e);    //// 상황에 맞는 예외 처리 필요
        }
    }

    //// asyncFileChannel 닫기
    private void closeAsyncFileChannel(AsynchronousFileChannel asyncFileChannel) {

        if (asyncFileChannel != null && asyncFileChannel.isOpen()) {

            try {
                asyncFileChannel.close();
            } catch (IOException e) {
                e.printStackTrace();
                throw new RuntimeException(e);    //// 상황에 맞는 예외 처리 필요
            }
        }
    }
}
