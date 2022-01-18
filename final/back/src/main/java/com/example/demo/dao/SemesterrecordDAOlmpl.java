
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



import com.example.demo.entity.semesterrecord;



@Repository

public class SemesterrecordDAOlmpl implements SemesterrecordDAO {



  @Autowired

  private DataSource dataSource;



//jdbc  

  public semesterrecord findOne(int rent_id) {

    semesterrecord Semesterrecord = new semesterrecord();

    try {

      Connection conn = dataSource.getConnection();

      String sql = "select rent_id,room_id,building,room_day,room_avail_start,room_avail_end from semesterrecord where rent_id = ?";


      PreparedStatement stmt = conn.prepareStatement(sql);

      stmt.setInt(1, rent_id);

      ResultSet rs = stmt.executeQuery();

      

      if (rs.next()) {

        Semesterrecord = getSemesterrecord(rs);

      }



    } catch(Exception e) {

      //something wrong

      System.out.println(e);

    }



    return Semesterrecord;

    

 }



public List<semesterrecord> findAll() {

  List<semesterrecord> Semesterrecord = new ArrayList<semesterrecord>();

  try {

    Connection conn = dataSource.getConnection();

    String sql = "select * from semesterrecord";


    PreparedStatement stmt = conn.prepareStatement(sql);

    

    ResultSet rs = stmt.executeQuery();

    while (rs.next()){

      Semesterrecord.add(getSemesterrecord(rs));

    }



  } catch(Exception e) {

      //something wrong

      System.out.println(e);

  }

     return Semesterrecord;

 }



 public semesterrecord getSemesterrecord(ResultSet rs) throws SQLException{
    return new semesterrecord(
      rs.getInt("rent_id"),
      rs.getString("room_id"),
      rs.getString("building"),
      rs.getInt("room_day"),
      rs.getString("room_avail_start"),
      rs.getString("room_avail_end")
    );

 }





 



public int delete(int rent_id) {

  int result = 0;

  try {

    Connection conn = dataSource.getConnection();

    String sql = "delete from semesterrecord where rent_id =?";

    PreparedStatement stmt = conn.prepareStatement(sql);

    stmt.setInt(1, rent_id);

    result = stmt.executeUpdate();

  } catch(Exception e) {

    //something wrong

    System.out.println(e);

  }

  return result;



 }



}