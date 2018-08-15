<?php

class funciones{


function seleccion($tabla,$campo){
 $this->query="select ".$campo." from ".$tabla." ";
  //echo $this->query;
$this->cons=mysql_query($this->query);
}



}






?>