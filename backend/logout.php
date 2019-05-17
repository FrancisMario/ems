<?php
session_start();
session_unset();
if(session_destroy()){
echo "200";
header("Location: ../index.html");
}else {
    echo "404";
}