<?php
include "pet.php";

session_start();

class PetShop{
   function addPet($name, $age,$type){
       switch($type){
           case 'dog':
               $pet = new Dog($name, $age,$type);
               break;
           case 'cat':
               $pet = new Cat($name, $age,$type);
               break;
           case 'bird':
               $pet = new Bird($name, $age,$type);
               break;
       }
       // initialize and add object $pet to $_SESSION['pets'] array
       $_SESSION['pets'][]=$pet;
   }
   
   function listPet(){
       if(!empty($_SESSION['pets'])){
       foreach($_SESSION['pets'] as $pet){
           echo $pet;
       }}
   }  
}
?>