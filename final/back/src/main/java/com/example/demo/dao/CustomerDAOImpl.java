
package com.example.demo.dao;



import java.util.ArrayList;

import java.util.List;



import java.sql.Connection;

import java.sql.PreparedStatement;

import java.sql.ResultSet;

import java.sql.SQLException;



import javax.sql.DataSource;



import org.springframework.beans.factory.annotation.Autowired;

import org.springframework.stereotype.Repository;



import com.example.demo.entity.Customer;



@Repository

public class CustomerDAOImpl implements CustomerDAO {



  @Autowired

  private DataSource dataSource;



//jdbc  

  public Customer findOne(int id) {

    Customer customer = new Customer();

    try {

      Connection conn = dataSource.getConnection();

      String sql = "select id,account,password,name,categories from account where id = ?";


      PreparedStatement stmt = conn.prepareStatement(sql);

      stmt.setInt(1, id);

      ResultSet rs = stmt.executeQuery();

      

      if (rs.next()) {

        customer = getCustomer(rs);

      }



    } catch(Exception e) {

      //something wrong

      System.out.println(e);

    }



    return customer;

    

 }



public List<Customer> findAll() {

  List<Customer> customers = new ArrayList<Customer>();

  try {

    Connection conn = dataSource.getConnection();

    String sql = "select * from account";


    PreparedStatement stmt = conn.prepareStatement(sql);

    

    ResultSet rs = stmt.executeQuery();

    while (rs.next()){

      customers.add(getCustomer(rs));

    }



  } catch(Exception e) {

      //something wrong

      System.out.println(e);

  }

     return customers;

 }



 public Customer getCustomer(ResultSet rs) throws SQLException{
    return new Customer(
      rs.getInt("id"),
      rs.getString("account"),
      rs.getString("password"),
      rs.getString("name"),
      rs.getString("categories")
    );

 }




public int insert(Customer customer) {

  int result = 0;

  try {

    Connection conn = dataSource.getConnection();

    String sql = "insert into account (id,account,password,name,categories) values(?, ?, ?, ?, ?)";

    PreparedStatement stmt = conn.prepareStatement(sql);

    stmt.setInt(1, customer.getId());
    stmt.setString(2, customer.getaccount());
    stmt.setString(3, customer.getpassword());
    stmt.setString(4, customer.getname());
    stmt.setString(5, customer.getcategories());


    result = stmt.executeUpdate();

  } catch(Exception e) {

    //something wrong

    System.out.println(e);

  }

  return result;



}

 

public int update(Customer customer) {

  int result = 0;

  try {

    Connection conn = dataSource.getConnection();

    String sql = "update account set account=?,password=?,name=?,categories=? where id =?";

    PreparedStatement stmt = conn.prepareStatement(sql);

    stmt.setString(1, customer.getaccount());
    stmt.setString(2, customer.getpassword());
    stmt.setString(3, customer.getname());
    stmt.setString(4, customer.getcategories());
    stmt.setInt(5, customer.getId());

    result = stmt.executeUpdate();

  } catch(Exception e) {

    //something wrong

    System.out.println(e);

  }

  return result;

}



public int delete(int id) {

  int result = 0;

  try {

    Connection conn = dataSource.getConnection();

    String sql = "delete from account where id =?";

    PreparedStatement stmt = conn.prepareStatement(sql);

    stmt.setInt(1, id);

    result = stmt.executeUpdate();

  } catch(Exception e) {

    //something wrong

    System.out.println(e);

  }

  return result;



 }



}