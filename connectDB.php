<?php
function Connect(){

           try{
                $conn = new PDO("mysql:host=localhost;dbname=amci",'root','');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        return $conn;
}
?>