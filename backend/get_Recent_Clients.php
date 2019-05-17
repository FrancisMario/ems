<?php

class get_Recent_Clients {
  
function  __construct(){   
    $_SESSION['active'] = true;
    if (!$_SESSION['active'] == true) {
        echo "Session has ended, re-login to continue ";
    }
    include 'connection/uplink.php';
    
    $sql = "SELECT * FROM recent_clients ;"; // ORDER BY orderid DESC LIMIT 20"; 
    $query = new connector("stats_tracking","root","");
        
    $query->setSql($sql);
    $array = $query->runQuery();
    $a = 0;
    $GLOBALS['echo'] = "";
    for ($i=0; $i < $query->getReturnNo(); $i++) {
    
    // foreach ($array[$i][$i] as $value) {
         
       $GLOBALS['echo'] .= "<tbody class='' onclick='viewClient('')'><tr>
                        <td>".$a."</td>
                        <td>".$array[$i]['fullname']."</td>
                        <td>".$array[$i]['phone']."</td>
                        <td>".$array[$i]['location']."</td>
                        <td>".$array[$i]['dimensions']."</td>
                        <td>".$array[$i]['number']."</td>
                        <td>".$array[$i]['payment']."</td>
                     </tr>
                </tbody>";
                              $a++; 
                                }
                              //  echo $query->getReturnNo();
                            //    var_dump($array[$i]);
  }

  function getClients(){

    return $GLOBALS['echo'];
  }  
  
}
