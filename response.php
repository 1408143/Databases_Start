<?php
/**
 * Created by PhpStorm.
 * User: 1408143
 * Date: 07/03/2017
 * Time: 16:13
 */
#
include "dbConnect.php";
$query= $_GET["query"];

switch($query){
    default:
        echo "Nothing selected!";
        break;
    case "all":
        $q="SELECT * FROM marvelmovies";
        $result=$link->query($q);
        while($row = $result->fetch_array()){
            echo $row['title']."</br>";
        }
        $result->close();
        break;
    case "marvel":
        $q="SELECT * FROM marvelmovies WHERE productionStudio LIKE 'Marvel Studios'";
        $result=$link->query($q);
        while($row = $result->fetch_array()){
            echo $row['title']."</br>";
        }
        $result->close();
        break;
    case "2010":
        $q="SELECT * FROM marvelmovies WHERE yearReleased>=2010";
        $result=$link->query($q);
        while($row = $result->fetch_array()){
            echo $row['title']."</br>";
        }
        $result->close();
        break;
    case "xmen":
        $q="SELECT * FROM marvelmovies WHERE  title LIKE '%X-Men%'";
        $result=$link->query($q);
        while($row = $result->fetch_array()){
            echo $row['title']."</br>";
        }
        $result->close();
        break;
}
$link->close();
?>