package com.example.demo.entity;

public class Employee{

  //  private String name;

    //private String department;
    private String desc;
    private int price;
    private String category;
    private int inventory;
    private int safetyStock;

    public Employee() {

 

    }

 //   public Employee(final String name, final String department)
    public Employee(final String desc,final int price,final String category,final int inventory,final int safetyStock) {

  //    this.name = name;

//      this.department = department;
      this.desc = desc;
      this.price = price;
      this.category =category ;
      this.inventory =inventory ;
      this.safetyStock = safetyStock;
    }


/*
    public String getName() {

      return name;

    }



    public void setName(String name) {

      this.name = name;

    }



    public String getDepartment() {

      return department;

    }



    public void setDepartment(String department) {

      this.department = department;

    }

*/
    public String getDesc() {

        return desc;
  
      }
  
  
  
      public void setDesc(String desc) {
  
        this.desc = desc;
  
      }

      public int getprice() {

        return price;
  
      }
  
  
  
      public void setprice(int price) {
  
        this.price = price;
  
      }

      public String getcategString() {

        return category;
  
      }
  
  
  
      public void setcategory(String category) {
  
        this.category = category;
  
      }
      public int getinventory() {

        return inventory;
  
      }
  
  
  
      public void setinvetory(int inventory) {
  
        this.inventory =inventory;
  
      }
      public int getsafetyStock() {

        return safetyStock;
  
      }
  
  
  
      public void setsafetyStock(int safetyStock) {
  
        this.safetyStock=safetyStock;
  
      }
}