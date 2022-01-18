package com.example.demo.dao;



import java.util.List;

import com.example.demo.entity.semesterrecord;



public interface SemesterrecordDAO {



  public semesterrecord findOne(int id);

  public List<semesterrecord> findAll();

  

  public int delete(int rent_id);



}