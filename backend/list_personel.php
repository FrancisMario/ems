<?php
/*      Name: list estates
*       Author: Mario Gomez
*       Description:
*this file gets all the estates on the database and returns it
*to the request.
*/

class personel_list
{
    
 function __construct() {
     
include "connection/uplink.php";    

// Adding estate to the list of estates
$sql = "SELECT * FROM `personel_list`;"; 
$query = new connector("estate_users","root","");
$query->setSql($sql);


$GLOBALS['response'] = '
<link rel="stylesheet" href="assets/css/Admin.min.css">
<!--    Hover Rows  -->
<div class="panel panel-default" style="">
    <div class="panel-heading">
       <button class="btn btn-primary" data-toggle="modal" data-target="#add_estate"><i class="fa fa-plus "></i> Add</button>
       <button class="btn btn-primary" data-toggle="modal" data-target="#estate_options"><i class="fa fa-plus "></i> Options</button>
       <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus "></i>add</button>
    </div>
</div> ';

if ($query->runQueryBoolean()) {
    $array = $query->runQuery();

    for ($i=0; $i < sizeof($array); $i++) { 
        $GLOBALS['response'] .= '
        <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img class="img-circle" src="assets/images/user7-128x128.jpg" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">'.$array[$i]['firstname'].' '.$array[$i]['lastname'].'</h3>
              <h5 class="widget-user-desc">'.$array[$i]['firstname'].'</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
              </ul>
            </div>
          </div>
        ';
    };
    
} else {
    $GLOBALS['response'] = 401;
}

    
 }

 function getResponse(){
        return $GLOBALS['response'];
     }
}

