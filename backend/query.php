<?php 

/**Autor Mario Gomez..
 * CamcoderTech
 *The query class, it makes all the queries for the side opon being called
 */
class query
{
	
	function doQuery($link,$sql){
         
         if (mysqli_query($link,$sql)) {
         	
         	if (mysqli_fetch_array($link)) {

         		$array = mysqli_fetch_array($link);
                 mysqli_close();
         		return $array;
         	}  }
	}

   function getReturnNo($link,$sql){

        if (mysql_query($link,$sql)) {
        	if (mysqli_affected_rows($link)) {
        		$affected = mysqli_affected_rows($link);
                mysqli_close();
        		return $affected;
        	}
        }
   }	

   

}


?>