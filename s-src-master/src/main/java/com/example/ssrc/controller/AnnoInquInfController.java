package com.example.ssrc.controller;

import com.example.ssrc.service.CommonService;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

import java.time.LocalDateTime;

public class AnnoInquInfController {

    private static final Logger LOGGER = LoggerFactory.getLogger(AnnoInquInfController.class);
    public AnnoInquInfController(CommonService common) {this.common = common;}
    private final CommonService common;

    @RequestMapping("time")
    public String getTime(Model model) {
        LocalDateTime time = common.getTime();
        LOGGER.info("time --> {}", time);
        model.addAttribute("time", time);
        return "time";
    }

}
