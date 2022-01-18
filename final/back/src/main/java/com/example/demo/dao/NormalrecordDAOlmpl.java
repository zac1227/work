
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



import com.example.demo.entity.normalrecord;



@Repository

public class NormalrecordDAOlmpl implements NormalrecordDAO {



  @Autowired

  private DataSource dataSource;



//jdbc  

  public normalrecord findOne(int rent_id) {

    normalrecord Normalrecord = new normalrecord();

    try {

      Connection conn = dataSource.getConnection();

      String sql = "select rent_id,building,week_day,normal_date,room_avail_start,room_avail_end from normalrecord where rent_id = ?";


      PreparedStatement stmt = conn.prepareStatement(sql);

      stmt.setInt(1, rent_id);

      ResultSet rs = stmt.executeQuery();

      

      if (rs.next()) {

        Normalrecord = getNormalrecord(rs);

      }



    } catch(Exception e) {

      //something wrong

      System.out.println(e);

    }



    return Normalrecord;

    

 }



public List<normalrecord> findAll() {

  List<normalrecord> Normalrecord = new ArrayList<normalrecord>();

  try(Connection conn = dataSource.getConnection();) {

    String sql = "select * from normalrecord";

    PreparedStatement stmt = conn.prepareStatement(sql);

    

    ResultSet rs = stmt.executeQuery();

    while (rs.next()){

        Normalrecord.add(getNormalrecord(rs));

    }



  } catch(Exception e) {

      //something wrong

      System.out.println(e);

  }

     return Normalrecord;

 }



 public normalrecord getNormalrecord(ResultSet rs) throws SQLException{
    return new normalrecord(
      rs.getInt("rent_id"),
      rs.getString("building"),
      null, rs.getInt("week_day"),
      rs.getDate("normal_date"),
      rs.getString("room_avail_start"),
      rs.getString("room_avail_end")
    );

 }





 



public int delete(int rent_id) {

  int result = 0;

  try {

    Connection conn = dataSource.getConnection();

    String sql = "delete from normalrecord where rent_id =?";

    PreparedStatement stmt = conn.prepareStatement(sql);

    stmt.setInt(1, rent_id);

    result = stmt.executeUpdate();

  } catch(Exception e) {

    //something wrong

    System.out.println(e);

  }

  return result;
 }

 public int insert(normalrecord normalrecord) {

  int result = 0;

  try {

    Connection conn = dataSource.getConnection();

    String sql = "insert into normalrecord (rent_id,building,week_day,normal_date,room_avail_start,room_avail_end) values(?,?,?,?,?,?)";

    PreparedStatement stmt = conn.prepareStatement(sql);
    stmt.setInt(1, normalrecord.getRent_Id());
    stmt.setString(2, normalrecord.getBuilding());
    // System.out.println(normalrecord.getRoom_id());    
    
    stmt.setInt(3, normalrecord.getWeek_day());    
    stmt.setDate(4, normalrecord.getNormal_day());
    stmt.setString(5, normalrecord.getRoom_avail_start());    
    stmt.setString(6, normalrecord.getRoom_avail_end());

    result = stmt.executeUpdate();

  } catch(Exception e) {

    //something wrong

    System.out.println(e);

  }

  return result;



}

 


}