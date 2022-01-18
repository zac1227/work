package com.example.demo.controller;



import java.sql.SQLException;

import java.util.List;

import org.springframework.security.access.prepost.PreAuthorize;

import org.springframework.beans.factory.annotation.Autowired;

import org.springframework.web.bind.annotation.RestController;

import org.springframework.web.bind.annotation.GetMapping;

import org.springframework.web.bind.annotation.PathVariable;

import org.springframework.web.bind.annotation.PostMapping;

import org.springframework.web.bind.annotation.PutMapping;

import org.springframework.web.bind.annotation.DeleteMapping;

import org.springframework.web.bind.annotation.RequestBody;



import com.example.demo.dao.CustomerDAO;

import com.example.demo.entity.Customer;




@RestController(value = "/student")

public class CustomerController {

 @Autowired

 CustomerDAO dao;

 

    

 @GetMapping(value = {"/student"})

 public List<Customer> retrieveCustomers() throws SQLException{

    return dao.findAll();

 }



 @GetMapping(value = {"/student/{id}"})

 public Customer retrieveOneCustomer(@PathVariable("id") int id) throws SQLException{

    return dao.findOne(id);

 }


 @PostMapping(value = "/student")

 public void processFormCreate(@RequestBody Customer customer) throws SQLException {

    dao.insert(customer);

 }



 @PutMapping(value = "/student")

 public void processFormUpdate(@RequestBody Customer customer) throws SQLException {

    dao.update(customer);

 }



 @DeleteMapping(value = "/student/{id}")

 public void deleteCustomer(@PathVariable("id") int id) {

    dao.delete(id);

 }



 

}