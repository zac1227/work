package com.example.demo.dao;



import java.util.List;

import com.example.demo.entity.normalrecord;



public interface NormalrecordDAO {



  public normalrecord findOne(int id);

  public List<normalrecord> findAll();

  

  public int delete(int rent_id);

  public int insert(normalrecord normalrecord);

}