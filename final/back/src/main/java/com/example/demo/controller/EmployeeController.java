package com.example.demo.controller;



import java.util.ArrayList;



import org.springframework.web.bind.annotation.DeleteMapping;

import org.springframework.web.bind.annotation.GetMapping;

import org.springframework.web.bind.annotation.PathVariable;

import org.springframework.web.bind.annotation.PostMapping;

import org.springframework.web.bind.annotation.PutMapping;

import org.springframework.web.bind.annotation.RequestBody;

import org.springframework.web.bind.annotation.RestController;



import com.example.demo.entity.Employee;



@RestController

public class EmployeeController {

  private ArrayList<Employee> employeeList = new ArrayList<>();

  

  public EmployeeController(){

    employeeList.add(new Employee("iPhone 11",20000, "智慧型手機", 20, 10));

    employeeList.add(new Employee("iPhone 11 pro",25000, "智慧型手機", 10, 5));

    employeeList.add(new Employee("iPhone X",18000, "智慧型手機",3,5));

    
  }



  @GetMapping("/employee")

  public ArrayList<Employee> get() {

    return employeeList;

  }



  @GetMapping("/employee/{id}")

  public Employee retrieveOneEmployee(@PathVariable("id") int id){

     return employeeList.get(id);

  }



  @PostMapping("/employee")

  public void addOneEmployee(@RequestBody Employee employee) {

    employeeList.add(employee);

  }



  @PutMapping("/employee/{id}")

  public void editOneEmployee(@PathVariable("id") int id, @RequestBody Employee employee) {

    employeeList.set(id, employee);

  }



  @DeleteMapping("/employee/{id}")

  public void removeOneEmployee(@PathVariable("id") int id) {

    employeeList.remove(id);

  }

}