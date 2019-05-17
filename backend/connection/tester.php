<?php

for ($i=0; $i < 10; $i++) { 
    $connection = mysqli_connect("localhost","root","","stats_tracking");
		
    $query = mysqli_query($connection, "INSERT INTO `recent_clients` (`table_Id`, `transaction_Id`, `fullname`, `phone`, `dimensions`, `location`, `number`, `payment`) VALUES (NULL, '3213e', 'Mario f Gomez', '3212123', '29X34', '3asdasd', '212321', 'mortage')
    ;");
}