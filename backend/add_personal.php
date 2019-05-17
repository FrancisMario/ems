<?php
/* 
*Name  : Add Personel.
*Author: Mario Gomez.
*   Description:
This code just simple adds new personel to the database.
it recieves parameters via the post variables..  
*/

if (!isset($_POST[""])) {
    echo "Error";
}

include_once("connection/uplink.php");

$array  = [];

$sql = "INSERT INTO `company_personel` (`table_id`, `database_key`,
 `name`, `lastname`, `phone`, `email`, `home_address`, `qualification`,
  `nationality`, `spoken_languages`, `employed_date`, `branch`, `department`,
   `position`, `contact_person`, `contact_person_address`, `contact_person_phone`,
    `relation_to_contact_person`, `employer_note`, `gender`, `photo_url`)
VALUES
(NULL, $array['db_key'], $array['name'],
 $array['lastname'], $array['phone'], $array['email'],
  $array['home_address'], $array['qualification'], $array['nationality'],
   $array['spoken_languages'], $array['date'], $array['branch'], $array['department'],
    $array['position'], $array['contact_person'], $array['contact_person_address'], $array['contact_person_phone'],
    $array['relation_to_contact_person'], $array['employer_note'], $array['gender'], $array['photo_url']);";

$query = new connector("estate_users","root","");
$query->setSql($sql);
$boolean = $query->runQueryBoolean();

if ($boolean) {
    echo '200';
} else {
    echo "404";
}

