<?php

class persona 
{
   public function __construct($name, $lastname){
       $this->name = $name;
       $this->lastname = $lastname;
   }

   public function GetName(){
       return $this->name;
   }

   public function GetLastName(){
       return $this->lastname;
   }
}
