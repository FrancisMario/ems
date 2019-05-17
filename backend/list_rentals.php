<?php
/*      Name: list estates
*       Author: Mario Gomez
*       Description:
*this file gets all the Rentals on the database and returns it
*to the request.
*/

class rental_list
{
    
 function __construct() {
     
include "connection/uplink.php";

// Adding estate to the list of renta
$sql = "SELECT * FROM `all_rentals`"; 
$query = new connector("estate_rentals","root","");
$query->setSql($sql);
$GLOBALS['response'] = '
<button class="btn btn-primary" data-toggle="modal" data-target="#add_rental"><i class="fa fa-plus "></i> Add</button>
        ';

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
                        <th>Rent Name</th>
                        <th>location</th>
                        <th>Total units</th>
                        <th>Available units</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>'.$array[$i]['table_id'].'</td>
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

