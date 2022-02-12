package com.example.ssrc.service.Impl;

import com.example.ssrc.domain.Post;
import com.example.ssrc.mapper.BoardMapper;
import com.example.ssrc.service.BoardService;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.stereotype.Service;

import java.time.LocalDateTime;
import java.util.List;

@Service
public class BoardServiceImpl implements BoardService {
    private static final Logger LOGGER = LoggerFactory.getLogger(BoardServiceImpl.class);

    private final BoardMapper mapper;

    public BoardServiceImpl(BoardMapper mapper) {
        this.mapper = mapper;
    }

    @Override
    public LocalDateTime getTime() {
        LocalDateTime time = mapper.getTime();
        LOGGER.info("시간이 찍히는지 봅시다 --> {}", time);
        return time;
    }

    @Override
    public List<Post> list(Post post) {
        return mapper.listPosts(post);
    }

    @Override
    public Post getPost(Post post) {
        return mapper.getPost(post);
    }

    @Override
    public int createPost(Post post) {
        return mapper.createPost(post);
    }

    @Override
    public int modifyPost(Post post) {
        return mapper.updatePost(post);
    }

    @Override
    public int removePost(Post post) {
        return mapper.deletePost(post);
    }
}
