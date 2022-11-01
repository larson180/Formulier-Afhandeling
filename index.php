<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,
              initial-scale=1.0">
       <link rel="stylesheet" href="style.css">
</head>
<body>

        <form method="get" action="">
        Naam: <input type="text" name="naam" placeholder="
               naam" required /><br/> 
        Land:
         
        <select name="land">
                <option value=""disabled selected hidden>Maak uw Keuze</option>
                <option value="NL">Nederland</option>
                <option value="DE">Duitsland</option>
                <option value="EN">Engeland</option>
                <option value="FR">Frankrijk</option>
                <option value="ES">Spanje</option>
                <option value="IT">Italiaans</option>
                
</select>
<br />
<input class="Btn" type="submit" name="submit" value="gegevens
       versturen"/>
</form>
       <?php
if(isset($_GET['submit'])){
$land = $_GET['land'];
       switch($land){
              case "NL":
                     echo "Goedemorgen";
              break;
              case "DE":
                     echo "Guten morgen";
              break;
              case "EN":
                     echo "Good morning";
              break;
              case "FR":
                     echo "Bonjour";
              break;
              case "ES":
                     echo "Buenos dias";
              break;
              case "IT":
                     echo "Buongiorno";
              break;
       }

}



  

?>

</body>
</html>