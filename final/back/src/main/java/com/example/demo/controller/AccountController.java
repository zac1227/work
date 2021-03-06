package com.example.demo.controller;



import org.springframework.web.bind.annotation.RestController;

import org.springframework.web.bind.annotation.GetMapping;

import org.springframework.web.bind.annotation.PostMapping;

import org.springframework.web.bind.annotation.RequestBody;

import org.springframework.beans.factory.annotation.Autowired;

import org.springframework.security.access.prepost.PreAuthorize;



import com.example.demo.dao.AccountDAO;

import com.example.demo.entity.Account;



@RestController

public class AccountController {

    @Autowired

    AccountDAO dao;

    

    @PostMapping(value = {"/account"})

    public String signUp(@RequestBody Account account) {

        int result = dao.signUp(account);

        return (result == 1)? "帳號已註冊成功": "帳號未註冊成功";

    }

    

    @PreAuthorize("hasAnyRole('ADMIN', 'USER')")

    @GetMapping(value = {"/account"})

    public String login() {

        return "登入成功";

    }


}