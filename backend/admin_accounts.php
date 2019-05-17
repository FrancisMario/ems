<?php


class admin_accounts {
  
function  __construct(){   
    $_SESSION['active'] = true;
    if (!$_SESSION['active'] == true) {
        echo "Session has ended, re-login to continue ";
    }
    include 'connection/uplink.php';
    
    $sql = "SELECT * FROM company_personel WHERE `admin` = 'true' ;"; // ORDER BY orderid DESC LIMIT 20"; 
    $query = new connector("estate_users","root","");
        
    $query->setSql($sql);
    $array = $query->runQuery();
    $a = 0;
    $GLOBALS['echo'] = "<h1>Admin Personel</h1>";
    for ($i=0; $i < $query->getReturnNo(); $i++) {
    
    // foreach ($array[$i][$i] as $value) {

       $GLOBALS['echo'] .= '
       
     <div class="panel panel-default" style="">
    <div class="panel-heading">
    </div>
    <div class="panel-body">
    <div class="table-responsive">
    <table class="table table-hover">
    <thead>
    <tr>
        <h3>Department</h3>'.$array[$i]['department'].'</b>
    <th>Image</th>
    <th>Name</th>
    <th>LastName</th>
    <th>Phone</th>
    <th>Branch</th>
    </tr>
    </thead>
    <tbody>
    <tr id="'.$array[$i]['database_key'].'">
    <td>
    <img class="card-img-top"  width="70rem" height="70rem" src='.$array[$i]['photo_url'].' alt="Employee image">
    </td>
    <td>'.$array[$i]['name'].'</td>
    <td>'.$array[$i]['lastname'].'</td>
    <td>'.$array[$i]['phone'].'</td>
    <td>'.$array[$i]['branch'].'</td>
    </tr>
    </tbody>
    </pre>
    </table>
    </div>
    </div>
</div>
<style>
tr {
    cursor:pointer;
}
</style>
<!-- End  Hover Rows  -->';
                
                              $a++; 
                                }
                              
  }

  function getAccounts(){

    return $GLOBALS['echo'];
  }  
  
}
