<?php
try{
    $conn = new PDO('mysql:host=172.31.22.43;dbname=Simran200555884', 'Simran200555884', 'FQIqMa6wiB');
    //Setting the PDO Error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo "<p> Connection failed :" . $e->getMessage();
}
?>
