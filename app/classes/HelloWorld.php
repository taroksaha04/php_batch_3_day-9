<?php
namespace App\classes;
class HelloWorld
{
    public $name = 'BITM';
    public function  index()
    {
        //echo "Hello World";
          echo $this->name;
          $firstName = 'Sobuj';
          $lastName = 'khan';
          echo $firstName.$lastName;
    }



}