<?php
      //Class
    Class Store{
      //Class Properties
      private $id;
      private $store_name;
      //Constructors
      function __construct($store_name, $id = null)
      {
          $this->store_name = $store_name;
          $this->id = $id;
      }

     //Getters and Setters
     function getName()
     {
         return $this->name;
     }
     function setName($new_name)
     {
         $this->name = $new_name;
     }
     function getLocation()
     {
         return $this->location;
     }
     function setLocation($new_location)
     {
         $this->location = $new_location;
     }
     function getId()
     {
         return $this->id;
     }
     ////////////////End Getters and Setters/////////////


     needs save
     update name
     update loacation
     add brand
     get brands multiple


     static functions
     get all
     dell all
     find ? 


      ?>
