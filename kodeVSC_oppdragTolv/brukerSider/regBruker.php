<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nybruker</title>
</head>
<body>
    <div id="wrapper">
      <div class="nybruker">
      <form action="regNyAnsatt.php" method="post">
        <h2>Lag en ny bruker</h2>
        <!-- registrere navn -->
        <label>Navn: </label>
        <input type="text" name="navn_bruker" placeholder="navn"><br/>

        
        <!-- registrere epost adressen -->
        <label>epost registrering: </label>
        <input type="text" name="epost_bruker" placeholder="epost"><br/>
        
        <button type="submit" name="registrer">Registrer</button>

    
      </form>
    </div> 

     


</body>
</html>


//<?php
 //include ("../db_kobling.php");

 // henter 
 //$navn_input = $_POST["navn_bruker"];
 //$epost_input = $_POST["epost_bruker"];
 //$tilgang_input = $_POST["tilgang_bruker"];

 //if(empty($navn_input)){
   // header("location: inlogging.php?error=Name is required!");
 //} else if (empty($epost_input)) {
  //  header("location: inlogging.php?error=Email is required!");
 //} else if (empty($tilgang_bruker)) {
   // header("location: inlogging.php?error=Email is required!");

 //}
  
  //skjekker om alt er riktig
  //$sql = "SET FOREIGN_KEY_CHECKS=0";
  //$result = mysql_query($conn, $sql);

 //setter inn verdiene i databasen
  //$sql = $conn->query("INSERT INTO oppdrag_uketolv.bruker (navn_bruker, epost_bruker, tilgang) VALUES ("$navn_input", "$epost_input", "$tilgang_bruker");
  //$result = mysqli_query($conn, $sql) or die('Error querying database.');

  ?>