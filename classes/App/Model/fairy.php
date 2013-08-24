<?php
namespace App\Model;

//ORM will guess the name of the table
//using the name of the class
class Fairy extends \PHPixie\ORM\Model {
     public $belongs_to = array('tree');
}
