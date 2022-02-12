package com.example.ssrc.controller;

import com.example.ssrc.service.CommonService;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class CommonController {

    private static final Logger LOGGER = LoggerFactory.getLogger(CommonController.class);
    public CommonController(CommonService common) {this.common = common;}
    private final CommonService common;

    @RequestMapping("test")
    public String page() {
        return "template2/index";
    }

}
