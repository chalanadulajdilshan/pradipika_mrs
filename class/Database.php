<?php

/**

 * Description of User

 *

 * @author sublime holdings

 * @web www.sublime.lk

 * */
class Database {

//    private $host = 'localhost';
//    private $name = 'suhatdux_auroralanka';
//    private $user = 'suhatdux_auroralanka';
//   private $password = 'iE,@lxE0HGWr';


    private $host = 'localhost';
    private $name = 'pradipika';
    private $user = 'root';
    private $password = '';
    public $DB_CON = '';

    public function __construct() {
        $this->DB_CON = mysqli_connect($this->host, $this->user, $this->password, $this->name);
    }

    public function readQuery($query) {
        $result = mysqli_query($this->DB_CON, $query) or die('Error: ' . mysqli_error($this->DB_CON));
        return $result;
    }

}
