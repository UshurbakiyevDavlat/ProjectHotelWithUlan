<?php
try{ 

    if(isset($_REQUEST['reqbook'])){ 

    $user = "root";
    $pass = "";

    $dbh = new PDO('mysql:host=localhost;dbname=u.d.hotel;',$user,$pass);

    echo "Succes!<br>";
    
    $dateIn = $_REQUEST['dateIn'];
    $dateOut = $_REQUEST['dateOut'];
    $guests =  $_REQUEST['selectGuest'];
    $children = $_REQUEST['selectChild'];

   /* echo $dateIn; 
    echo "<br>";
    echo $dateOut;
    echo "<br>";
*/
    foreach( $guests as $i){
        $gue  = $i;
    }

    echo "<br>";

    foreach($children as $j){
        $chil = $j;
    }

        $dbh->beginTransaction();
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->commit();

        echo "<br>";

    //$sql = 'SELECT CheckOUT,CheckIN,GuestsAmount,ChildrenAmount  FROM  infobooking1 ORDER BY NAME';
   

        $sql = "INSERT INTO `infobooking1`(`CheckIN`, `CheckOUT`, `GuestsAmount`, `ChildrenAmount`) VALUES ('$dateIn','$dateOut','$gue','$chil')";
        $dbh->query($sql);
        print($sql);
    

        $sth = null;
        $dbh = null;

        }
}
catch (PDOException $e){
    $dbh->rollback();
    print("Error!:" . $e->getMessage() . "<br>");
    die();
}
?>