<?php

class IndexModel extends Model {
 
 public static function loadDepartment(){

    $connection = db::connToDB();
    $mass = array();
    $i=0;

    foreach($connection->query('SELECT * FROM department') as $row) {
        $mass[$i] = $row['departmentName'];
        $i++;
    }
    return( $mass);
 }
}

 
    
