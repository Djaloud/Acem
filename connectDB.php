<?php
function Connect(){

           try{
                 //PDO("mysql:host=localhost;dbname=id17926745_amci",'id17926745_localhost','We>_u6=$Y1x+OE?W');
                $conn = new PDO("mysql:host=localhost;dbname=amci",'root','');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        return $conn;
}
?>



       
                