package com.example.ssrc.mapper;

import com.example.ssrc.domain.Post;
import org.apache.ibatis.annotations.Mapper;
import org.springframework.stereotype.Repository;

import java.time.LocalDateTime;
import java.util.List;

@Mapper
@Repository
public interface BoardMapper {
    LocalDateTime getTime();

    List<Post> listPosts(Post post);

    Post getPost(Post post);

    int createPost(Post post);

    int updatePost(Post post);

    int deletePost(Post post);




}