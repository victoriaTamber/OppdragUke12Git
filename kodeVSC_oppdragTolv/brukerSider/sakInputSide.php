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
<form action="../back/sakInput.php" method="post">
  <label for="navn_brukerInput">navn:</label>
  <input type="text" id="navn_brukerInput" name="navn_brukerInput" ><br><br>

  <label for="epost_brukerInput">E-post:</label>
  <input type="email" id="epost_brukerInput" name="epost_brukerInput"><br><br>

  <label for="sakTittelInput" >tittel:</label>
  <input type="text" id="sakTittelInput" name="sakTittelInput"> <br><br>

  <label for="sakBeskrivelseInput" >Beskrivelse av problemet:</label>
  <input type="text" id="sakBeskrivelseInput" name="sakBeskrivelseInput" rows="4" cols="50">
   
  </select> <br> <br>
  <button type="submit">Send inn</button>
 
 
</form> 
<a href="sakStatusSide.php"><button>Status på henvedelse</button></a>
</body>
</html>


