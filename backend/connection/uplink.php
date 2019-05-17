
<?php
/* 
*Name  : Connector Class.
*Author: Mario Gomez.
*   Description:
This class takes any sql statement,
 runs it on any database and returns 
 the either the result[array],
number affected rows[int], Status[true/false]
 of the query, or Not Found[404].  
*/
    class connector
    {

        // function construct.
       function __construct($db,$user,$pass)
        {   
            $GLOBALS['db'] = $db;
            $GLOBALS['user'] = $user;
            $GLOBALS['pass'] = $pass;  

        }
        // query setter method
        public function setSql($sql){
            $GLOBALS['sql'] = $sql;
        }
		
        // go button
		public function runQuery(){
		$connection = mysqli_connect("localhost",$GLOBALS['user'],$GLOBALS['pass'],$GLOBALS['db']);
		
		$query = mysqli_query($connection, $GLOBALS['sql']);
        $result = mysqli_affected_rows($connection);
        if ($result > 0) {
            $i = 0;
            $array;
            while ($row = mysqli_fetch_array($query)) {
                   $array[$i] = $row;
                   $i++;
            }
            mysqli_close($connection);
            return $array;
        } else {
			$connection = mysqli_connect("localhost",$GLOBALS['user'],$GLOBALS['pass'],$GLOBALS['db']);
            mysqli_close($connection);
            return "404"; //mysqli_error($connection);
        }
        
		}

		 // go button
		 public function runQueryBoolean(){
			$connection = mysqli_connect("localhost",$GLOBALS['user'],$GLOBALS['pass'],$GLOBALS['db']);
			
			$query = mysqli_query($connection, $GLOBALS['sql']);
			
			if ($query) {
				mysqli_close($connection);
				return true;
			} else {
				mysqli_close($connection);
				return false; //mysqli_error($connection);
			}
			
			}
		
		public function getReturnNo()
		{
			$connection = mysqli_connect("localhost",$GLOBALS['user'],$GLOBALS['pass'],$GLOBALS['db']);
			$query = mysqli_query($connection, $GLOBALS['sql']);
			return mysqli_affected_rows($connection);
		}
    }
    

    ?>