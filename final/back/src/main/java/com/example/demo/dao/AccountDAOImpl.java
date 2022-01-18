package com.example.demo.dao;

import java.sql.Connection;

import java.sql.PreparedStatement;

import javax.sql.DataSource;



import com.example.demo.entity.Account;



import org.springframework.beans.factory.annotation.Autowired;

import org.springframework.stereotype.Repository;

import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;





@Repository

public class AccountDAOImpl implements AccountDAO {

    @Autowired

    private DataSource dataSource;

    

    public int signUp(Account account){

        int result = 0;

        try {

          Connection conn = dataSource.getConnection();

          String sql = "insert into users (username, password, enabled) values(?, ?, 1)";

          PreparedStatement stmt = conn.prepareStatement(sql);

          stmt.setString(1, account.getUsername());

          String encoded = "{bcrypt}"+new BCryptPasswordEncoder().encode(account.getPassword());

          stmt.setString(2, encoded);

          result = stmt.executeUpdate();

          if (result == 1){

            sql = "insert into authorities (username, authority) values(?, 'ROLE_USER')";

            stmt = conn.prepareStatement(sql);

            stmt.setString(1, account.getUsername());

            result = stmt.executeUpdate();

          }

          conn.close();

        } catch(Exception e) {

          //something wrong

          System.out.println(e);

        }

        return result;

    }

}