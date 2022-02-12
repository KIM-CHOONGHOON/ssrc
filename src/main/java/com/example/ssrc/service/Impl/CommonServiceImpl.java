package com.example.ssrc.service.Impl;

import com.example.ssrc.mapper.CommonMapper;
import com.example.ssrc.service.CommonService;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.stereotype.Service;

import java.time.LocalDateTime;
import java.util.Map;

@Service
public class CommonServiceImpl implements CommonService {
    private static final Logger LOGGER = LoggerFactory.getLogger(CommonServiceImpl.class);

    private CommonMapper mapper;

    public CommonServiceImpl(CommonMapper mapper) {
        this.mapper = mapper;
    }

    @Override
    public LocalDateTime getTime() {
        LocalDateTime time = (LocalDateTime)mapper.getTime();
        LOGGER.info("시간이 찍히는지 봅시다 --> {}", time);
        return time;
    }

}
