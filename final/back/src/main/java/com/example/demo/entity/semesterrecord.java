package com.example.demo.entity;



public class semesterrecord {
 private int rent_id;
 private String room_id;
 private String building;
 private int room_day;
 private String room_avail_start;
 private String room_avail_end;
 public semesterrecord(){

}

 public semesterrecord(int rent_id, String room_id,String building,int room_day,String room_avail_start,String room_avail_end){
     this.rent_id = rent_id;
     this.room_id=room_id;
     this.building=building;
     this.room_day= room_day;
     this.room_avail_start=room_avail_start;
     this.room_avail_end=room_avail_end;
 }



 public int getRent_Id() {

  return rent_id;

 }

 public void setRent_Id(int rent_id) {

  this.rent_id = rent_id;

 }



 public String getRoom_Id() {

  return room_id;

 }

 public void setRoom_Id(String room_id) {

  this.room_id=room_id;

 }



 public String getBuilding() {

  return building;

 }

 public void setBuilding(String building) {

  this.building=building;

 }


 public int getRoom_Day() {

    return room_day;
  
   }
  
   public void setRoom_Day(int room_day) {
  
    this.room_day=room_day;
  
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