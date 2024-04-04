<?php
 include ("../db_kobling.php");
 
 $navn_input = $_POST['navn_brukerInput'];
 $epost_input = $_POST['epost_brukerInput'];
 $sak_tittel = $_POST['sakTittelInput'];
 $sakBeskrivelse = $_POST['sakBeskrivelseInput'];




if(empty($navn_input)){
    echo("location: inlogging.php?error=Name is required!");
    exit();
  } else if (empty($epost_input)) {
    echo("location: inlogging.php?error=Email is required!");
    exit();
  } else if (empty($sak_tittel)) {
    echo("location: inlogging.php?error=Case title is required!");
    exit();
  } else if(empty($sakBeskrivelse)) {
    echo("location: inlogging.php?error=Case description is required!");
    exit();

  };



$sql = "SET FOREIGN_KEY_CHECKS=0";
$result = mysqli_query($conn, $sql);


 $sql = "INSERT INTO oppdrag_uketolv.bruker (navn_bruker, epost_bruker) VALUES ('$navn_input', '$epost_input')";
 $result = mysqli_query($conn, $sql) or die('Error querying database.');
 //henter bruker id fra bruker til sak
 $idbruker = mysqli_insert_id($conn);

 $sql = "INSERT INTO oppdrag_uketolv.sak (fk_idbruker, sak_tittel, sak_beskrivelse, sak_dato) VALUES ('$idbruker', '$sak_tittel', '$sakBeskrivelse', NOW())";
 $result = mysqli_query($conn, $sql) or die('Error querying database.');

 header("Location: ../brukerSider/sakStatusSide.php");
 exit();
?>