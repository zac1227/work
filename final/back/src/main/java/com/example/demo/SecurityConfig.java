package com.example.demo;

import org.springframework.http.HttpMethod;//new

import org.springframework.security.config.annotation.authentication.builders.AuthenticationManagerBuilder;
import org.springframework.security.config.annotation.method.configuration.EnableGlobalMethodSecurity;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;

import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;

import org.springframework.security.config.annotation.web.configuration.WebSecurityConfigurerAdapter;
import org.springframework.security.crypto.factory.PasswordEncoderFactories;
import org.springframework.security.crypto.password.PasswordEncoder;

import javax.sql.DataSource;



import org.springframework.beans.factory.annotation.Autowired;


@EnableWebSecurity

@EnableGlobalMethodSecurity(prePostEnabled = true)

public class SecurityConfig extends WebSecurityConfigurerAdapter {

    @Override

    protected void configure(HttpSecurity http) throws Exception { 

        http
        .httpBasic().and()
        // .cors().and()

        .csrf().disable().authorizeRequests()

        .antMatchers(HttpMethod.POST,"/account").permitAll()//new

        .antMatchers("/a").permitAll()
        .antMatchers("/a/{id}").permitAll()
        .antMatchers("/account").permitAll()
        .antMatchers("/student1/{id}").permitAll()
        .antMatchers("/student1").permitAll()
        .antMatchers("/student").permitAll()
        .antMatchers("/student/{id}").permitAll()

        .anyRequest().authenticated()

        .and().logout().permitAll().and()
        

        .formLogin();

    }
    @Autowired

    private DataSource dataSource;

    @Autowired

    public void configureGlobal(AuthenticationManagerBuilder auth) throws Exception {

      PasswordEncoder passwordEncoder = PasswordEncoderFactories.createDelegatingPasswordEncoder();

      auth

        .jdbcAuthentication()

      .dataSource(dataSource).passwordEncoder(passwordEncoder);

    }
    

}