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
$sql = "SELECT * FROM `personnel_list`;"; 
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
        $GLOBALS['response'] .= '<div class="col-md-4">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-aqua-active">
            <h3 class="widget-user-username">'.$array[$i]['firstname'].' '.$array[$i]['lastname'].'</h3>
            <h5 class="widget-user-desc">'.$array[$i]['position'].'</h5>
          </div>
          <div class="widget-user-image">
            <img class="img-circle" src="assets/images/user7-128x128.jpg" alt="User Avatar">
          </div>
          <div class="box-footer">
            <div class="row">
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">3,200</h5>
                  <span class="description-text">SALES</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">13,000</h5>
                  <span class="description-text">FOLLOWERS</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4">
                <div class="description-block">
                  <h5 class="description-header">35</h5>
                  <span class="description-text">PRODUCTS</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.widget-user -->
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

