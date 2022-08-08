<?php
    include('includes/pdoconfig.php');
    if(!empty($_POST["apartmentid"])) {	
    $id=$_POST['apartmentid'];
    $stmt = $DB_con->prepare("SELECT * FROM apartment WHERE apartment_number = :id");
    $stmt->execute(array(':id' => $id));
    ?>
    <?php
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
    ?>
    <?php echo htmlentities($row['building_number']); ?>
    <?php
    }
}


?>