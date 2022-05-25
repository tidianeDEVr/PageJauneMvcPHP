<?php
     if(isset($_POST["what"])){
          $connect = new PDO("mysql:host=localhost;dbname=bddpjsenegal", "root", "");
          $data = array();
          $condition = preg_replace('/[^A-Za-z0-9\-]/', '', $_POST["what"]);
          $query = 
          "SELECT * FROM annuaires WHERE NOM LIKE '%".$condition."%'
          ORDER BY ID DESC LIMIT 10";
          $result = $connect->query($query);
          $replace_string = '<b>'.$condition.'</b>';
          foreach($result as $row){
               $data[]=array(
                    'what'    => str_ireplace($condition, $replace_string, $row["what"])
               );
          }
          echo json_encode($data);
     }
?>  