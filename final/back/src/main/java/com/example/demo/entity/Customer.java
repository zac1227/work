package com.example.demo.entity;



public class Customer {
 private int id;
 private String account;
 private String password;
 private String name;
 private String categories;
 public Customer(){

}

 public Customer(int id, String account,String password,String name,String categories){
     this.id = id;
     this.account=account;
     this.password=password;
     this.name= name;
     this.categories=categories;
 }



 public int getId() {

  return id;

 }

 public void setId(int id) {

  this.id = id;

 }



 public String getaccount() {

  return account;

 }

 public void setaccount(String account) {

  this.account=account;

 }



 public String getpassword() {

  return password;

 }

 public void setpassword(String password) {

  this.password=password;

 }


 public String getname() {

    return name;
  
   }
  
   public void setname(String name) {
  
    this.name=name;
  
   }


 public String getcategories() {

  return categories;

 }

 public void setcategories(String categories) {

  this.categories=categories;

 }

}