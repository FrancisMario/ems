<?php

   include 'connection.php';
   include 'query.php';

   $sql = "SELECT * FROM 'clients' WHERE payment = payed ";
   $query = new query();

   $array = $query->doQuery($link,$sql);

        foreach ($array as $i) {
        
      echo "<thead><tr>
                       <th>".$array[$i]['client-id']."</th>
                       <th>".$array[$i]['first-name'] + $array[$i][' last-name'].".</th>
                       <th>".$array[$i]['phone']."</th>
                       <th>".$array[$i]['Plot-location']."</th>
                       <th>".$array[$i]['plot-dimension']."</th>
                       <th>".$array[$i]['plot-id']."</th>
                       <th>".$array[$i]['pay-method']."</th>
                    </tr>
               </thead>";
                                    }
?>