package com.example.ssrc.controller;

import com.example.ssrc.service.BoardService;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

import java.time.LocalDateTime;


@Controller
public class BoardController {

    private static final Logger LOGGER = LoggerFactory.getLogger(BoardController.class);
    public BoardController(BoardService common) {this.common = common;}
    private final BoardService common;

    @RequestMapping("editor")
    public String summerEditor(Model model) {
        LOGGER.info("editor");
        return "summerNote";
    }


}
