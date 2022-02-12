package com.example.ssrc.mapper;

import org.apache.ibatis.annotations.Mapper;
import org.springframework.stereotype.Repository;

import java.time.LocalDateTime;

@Mapper
@Repository
public interface CommonMapper {
    LocalDateTime getTime();
}
