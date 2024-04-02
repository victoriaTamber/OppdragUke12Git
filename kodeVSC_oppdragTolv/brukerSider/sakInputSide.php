<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sakInput</title>
</head>
<body>
    <h1>Fjell Bedriftløsninger sin ticketsystem </h1>
<form action="sakInputSide.php">
  <label for="navnInput">navn:</label>
  <input type="text" id="navn" name="navn"><br><br>

  <label for="epostInput">E-post:</label>
  <input type="email" id="epost" name="epostInput"><br><br>

  <label for="sakTittelInput" >tittel:</label>
  <input type="text" name="sakTittelInput" >

  <label for="sakBeskrivelseInput" >Beskrivelse av problemet:</label>
  <input type="text" name="sakBeskrivelseInput"  rows="4" cols="50">
   
  </select> <br> <br>
  <button type="submit">Send inn</button>
 
</form>
</body>
</html>

<?php
 include ("../db_kobling.php");
 
 $navn_input = $_POST['navn_bruker'];
 $epost_input = $_POST['epost_bruker'];
 $sak_tittel = $_POST['sak_tittel'];
 $sakBeskrivelse = $_POST['sak_beskrivelse'];




 //if(empty($navn_input)){
   // header("location: inlogging.php?error=Name is required!");
    exit();
 //} else if (empty($epost_input)) {
   // header("location: inlogging.php?error=Email is required!");
    //exit();
 
//}



 $sql = "SET FOREIGN_KEY_CHECKS=0";
 $result = mysql_query($conn, $sql);

 $sql = "INSERT INTO oppdrag_uketolv.sak (sak_tittel, sak_beskrivelse, sak_dato) VALUES ('$sak_tittel', '$sakBeskrivelse', NOW())";
 $result = mysqli_query($conn, $sql) or die('Error querying database.');


?>
