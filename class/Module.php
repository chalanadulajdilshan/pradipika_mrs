<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author chalana
 */
class Module {

    public $id;
    public $course;
    public $semester;
    public $module_number;
    public $name;
    public $sort;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `modules` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->course = $result['course'];
            $this->semester = $result['semester'];
            $this->module_number = $result['module_number'];
            $this->name = $result['name'];
            $this->sort = $result['sort'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `modules` (`course`,`semester`,`module_number`,`name`,`sort`) VALUES  ('"
                . $this->course . "', '"
                . $this->semester . "', '"
                . $this->module_number . "', '"
                . $this->name . "', '"
                . $this->sort . "')";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `modules` ORDER BY sort ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `modules` SET " 
                . "`module_number` ='" . $this->module_number . "', "
                . "`name` ='" . $this->name . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        unlink(Helper::getSitePath() . "upload/brand/" . $this->name);


        $query = 'DELETE FROM `modules` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getModulesByCourse($id,$sem) {

        $query = 'SELECT * FROM `modules` WHERE course="' . $id . '" AND semester="' . $sem . '"  ORDER BY sort ASC';
       
        
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function arrange($key, $img) {

        $query = "UPDATE `modules` SET `sort` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
