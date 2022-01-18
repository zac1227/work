package com.example.demo.dao;



import java.util.List;

import com.example.demo.entity.Customer;



public interface CustomerDAO {



  public Customer findOne(int id);

  public List<Customer> findAll();

  public int insert(Customer customer);

  public int update(Customer customer);

  public int delete(int id);



}