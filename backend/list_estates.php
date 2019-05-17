<?php
/*      Name: list estates
*       Author: Mario Gomez
*       Description:
*this file gets all the estates on the database and returns it
*to the request.
*/

class estates_list
{
    
 function __construct() {
     
include "connection/uplink.php";

// Adding estate to the list of estates
$sql = "SELECT * FROM `all_estates`"; 
$query = new connector("estate_properties","root","");
$query->setSql($sql);


$GLOBALS['response'] = '
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
        <!--    Hover Rows  -->
<div class="panel panel-default" style="">
    <div class="panel-heading">
       '.$array[$i]['name'].'
       <span class="edit" style="float:right; cursor:pointer;">Edit <i id='.$array[$i]['table_id'].' class="edit fa fa-gear"></i></span>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>location</th>
                        <th>Total of plots</th>
                        <th>Remaining plots</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>'.$array[$i]['name'].'</td>
                        <td>'.$array[$i]['location'].'</td>
                        <td>'.$array[$i]['total_units'].'</td>
                        <td>'.$array[$i]['available_units'].'</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End  Hover Rows  -->

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

