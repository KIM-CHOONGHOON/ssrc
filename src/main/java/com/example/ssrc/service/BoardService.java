package com.example.ssrc.service;

import com.example.ssrc.domain.Post;

import java.time.LocalDateTime;
import java.util.List;

public interface BoardService {

    LocalDateTime getTime();

    List<Post> list(Post post);

    Post getPost(Post post);

    int createPost(Post post);

    int modifyPost(Post post);

    int removePost(Post post);


}
