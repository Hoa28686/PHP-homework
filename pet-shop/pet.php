<?php
class Pet{
    public $name;
    public $age;
    public $type;

    function __construct($name,$age,$type){
        $this->name=$name;
        $this->age=$age;
        $this->type=$type;
    }
    
    function action($name){
        return "";
    }
    function __toString(){
        return "<li>
                <p class='name'>$this->name</p>
                <p>".($this->age > 1? "$this->age years old.":"$this->age year old.")."</p>
                <p>Type: $this->type</p>
                <p>".$this->action($this->name)."</p>
                </li>";
    }
 }
 class Dog extends Pet{
    function action($name){
        return "🐕 Woof woof! I'm $name.<br>Nice to see you!";
    }
 }
 class Bird extends Pet{
    function action($name){
        return "🐥Tweet tweet! I'm $name. <br> Nice to see you!";
    }
 }
 class Cat extends Pet{
    function action($name){
        return " 🐱Meow meow! I'm $name.<br> Nice to see you!";
    }
 }
?>