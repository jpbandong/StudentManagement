<?php

namespace Bandong\StudentManagement\Model;
use Bandong\StudentmManagement\Core\Crud;

class StudentMode implements Crud {

    public $id;
    public $fullname;
    public $yearlevel;
    public $course;
    public $section;

    public function __construct()
    {
        $this->id = "";
        $this->fullname = "";
        $this->yearlevel = "";
        $this->course = "";
        $this->section = "";
    }


    public function displayInfo(){
        echo "ID : ".$this->id."\n";
        echo "Name : ".$this->fullname."/n";
        echo "Yearl Level : ".$this->yearlevel."/n";
        echo "Course : ".$this->course."/n";
        echo "Section : ".$this->section."/n";
    }

    public function create(){

    }
    public function read(){

    }
    public function update(){

    }
    public function delete(){

    }
}