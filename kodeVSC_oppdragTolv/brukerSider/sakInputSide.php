<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sakInput</title>
</head>
<body>
    <h1>Fjell Bedriftløsninger sin ticketsystem </h1>
    <h3>Sett inn henvedelse</h3>
<form action="sakInputSide.php">
  <label for="navn_brukerInput">navn:</label>
  <input type="text" id="navn" name="navn"><br><br>

  <label for="epost_brukerInput">E-post:</label>
  <input type="email" id="epost" name="epostInput"><br><br>

  <label for="sakTittelInput" >tittel:</label>
  <input type="text" name="sakTittelInput" >

  <label for="sakBeskrivelseInput" >Beskrivelse av problemet:</label>
  <input type="text" name="sakBeskrivelseInput"  rows="4" cols="50">
   
  </select> <br> <br>
  <button type="submit">Send inn</button>
 
 
</form> 
<a href="sakStatusSide.php"><button>Status på henvedelse</button></a>
</body>
</html>

<?php
 include ("../db_kobling.php");
 
 $navn_input = $_POST['navn_brukerInput'];
 $epost_input = $_POST['epost_brukerInput'];
 $sak_tittel = $_POST['sakTittelInput'];
 $sakBeskrivelse = $_POST['sakBeskrivelseInput'];




 //if(empty($navn_input)){
   // header("location: inlogging.php?error=Name is required!");
    exit();
 //} else if (empty($epost_input)) {
   // header("location: inlogging.php?error=Email is required!");
    //exit();
 
//}



$sql = "SET FOREIGN_KEY_CHECKS=0";
$result = mysqli_query($conn, $sql);


 $sql = "INSERT INTO oppdrag_uketolv.bruker (navn_bruker, epost_bruker) VALUES ('$navn_input', '$epost_input')";

 //henter bruker id fra bruker til sak
 $idbruker = mysqli_insert_id($conn);

 $sql = "INSERT INTO oppdrag_uketolv.sak (fk_idbruker, sak_tittel, sak_beskrivelse, sak_dato) VALUES ('$idbruker', '$sak_tittel', '$sakBeskrivelse', NOW())";
 $result = mysqli_query($conn, $sql) or die('Error querying database.');


?>
