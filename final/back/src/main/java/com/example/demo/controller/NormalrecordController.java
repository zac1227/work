package com.example.demo.controller;



import java.sql.SQLException;

import java.util.List;



import org.springframework.beans.factory.annotation.Autowired;

import org.springframework.web.bind.annotation.RestController;

import org.springframework.web.bind.annotation.GetMapping;

import org.springframework.web.bind.annotation.PathVariable;

import org.springframework.web.bind.annotation.PostMapping;

import org.springframework.web.bind.annotation.PutMapping;

import org.springframework.web.bind.annotation.DeleteMapping;

import org.springframework.web.bind.annotation.RequestBody;





import com.example.demo.dao.NormalrecordDAO;

import com.example.demo.entity.normalrecord;



@RestController

public class NormalrecordController {

 @Autowired

 NormalrecordDAO dao;

 

    

 @GetMapping(value = {"/student1"})

 public List<normalrecord> retrieveNormalrecords() throws SQLException{

    return dao.findAll();

 }



 @GetMapping(value = {"/student1/{id}"})

 public normalrecord retrieveOneNormalrecord(@PathVariable("id") int rent_id) throws SQLException{

    return dao.findOne(rent_id);

 }


 



 @DeleteMapping(value = "/student1/{id}")

 public void deleteNormalrecord(@PathVariable("id") int rent_id) {

    dao.delete(rent_id);

 }

 @PostMapping(value = "/student1")

 public void processFormCreate(@RequestBody normalrecord a_normalrecord) throws SQLException {
   //  System.out.println("r_id:"+a_normalrecord.getRoom_id());

    dao.insert(a_normalrecord);

 }


 

}
