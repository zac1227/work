package com.example.demo.entity;

import java.sql.Date;

public class normalrecord {
 private int rent_id;
 private String building;
 private String room_id;
 private int week_day;
 private Date normal_day;
 private String room_avail_start;
 private String room_avail_end;
 public normalrecord(){

}

 public normalrecord(int rent_id,String building, String room_id,int week_day,Date normal_day,String room_avail_start,String room_avail_end){
     this.rent_id = rent_id;
     this.building=building;
     this.room_id=room_id;
     this.week_day= week_day;
     this.normal_day= normal_day;
     this.room_avail_start=room_avail_start;
     this.room_avail_end=room_avail_end;
 }



 public int getRent_Id() {

  return rent_id;

 }

 public void setRent_Id(int rent_id) {

  this.rent_id = rent_id;

 }



 public String getRoom_id() {

  return room_id;

 }

 public void setRoom_id(String room_id) {

  this.room_id=room_id;

 }



 public String getBuilding() {

  return building;

 }

 public void setBuilding(String building) {

  this.building=building;

 }


 public int getWeek_day() {

    return week_day;
  
   }
  
   public void setWeek_day(int week_day) {
  
    this.week_day=week_day;
  
   }
   public Date getNormal_day() {

    return normal_day;
  
   }
  
   public void setNormal_day(Date normal_day) {
  
    this.normal_day=normal_day;
  
   }


 public String getRoom_avail_start() {

  return room_avail_start;

 }

 public void setRoom_avail_start(String room_avail_start) {

  this.room_avail_start=room_avail_start;

 }


public String getRoom_avail_end() {

    return room_avail_end;
  
   }
  
   public void setRoom_avail_end(String room_avail_end) {
  
    this.room_avail_end=room_avail_end;
  
   }
  
  }