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





import com.example.demo.dao.SemesterrecordDAO;

import com.example.demo.entity.semesterrecord;



@RestController

public class SemesterrecordController {

 @Autowired

 SemesterrecordDAO dao;

 

    

 @GetMapping(value = {"/a"})

 public List<semesterrecord> retrieveSemesterrecords() throws SQLException{

    return dao.findAll();

 }



 @GetMapping(value = {"/a/{id}"})

 public semesterrecord retrieveOneSemesterrecord(@PathVariable("id") int rent_id) throws SQLException{

    return dao.findOne(rent_id);

 }


 



 @DeleteMapping(value = "/a/{id}")

 public void deleteSemesterrecord(@PathVariable("id") int rent_id) {

    dao.delete(rent_id);

 }



 

}
