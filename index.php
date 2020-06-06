<?php

$submit = filter_input(INPUT_POST, 'submit');
$dough = filter_input(INPUT_POST, 'dough');
$ingredients = $_POST['ingredients'];

?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
      <body>
<?php
   
    if(isset($submit)) { ?>
 
        <h2>Potvrzeni objednavky</h2>
        <p>Dekujeme za vasi objednavku, kterou vam odvezeme co nejdrive.</p>
        <p>Objednal jste si </p>
        <p><?= $dough ?> testo</p>
        <h3>Ingredience</h3>
        
        <ul>
        <?php
        foreach ($ingredients as $item) { ?>
            <li><?= $item; ?></li>
        <?php }
 
        ?>
        </ul>       

        

        <?php
        }   else { ?>
            
            <form action="index.php" method="post">
        <h2>Typ testa</h2>
        <input type="radio" name="dough" id="normal" value="Normální">
        <label for="normal">Normalni</label></br>
        
        <input type="radio" name="dough" id="glutenfree" value="Glutenfree">
        <label for="glutenfree">Bezlepkove</label></br>
        
        <h2>Ingredience</h2>
                
        <input type="checkbox" name="ingredients[]" id="ham" value="Sunka">
        <label for="ham">Sunka</label></br>
        
        <input type="checkbox" name="ingredients[]" id="cheese" value="Syr">
        <label for="cheese">Syr</label></br>        
        
        <input type="checkbox" name="ingredients[]" id="corn" value="Kukurice">
        <label for="corn">Kukurice</label></br>       
        
        <input type="checkbox" name="ingredients[]" id="mushroms" value="Houby">
        <label for="mushroms">Houby</label></br>

        <input type="checkbox" name="ingredients[]" id="salami" value="Salam">
        <label for="salami">Salam</label></br>
        
        <input type="checkbox" name="ingredients[]" id="fefe" value="Feferonky">
        <label for="fefe">Feferonky</label></br>        
        
        <input type="checkbox" name="ingredients[]" id="bacon" value="Slaninova">
        <label for="bacon">Slaninova</label></br>       
        
        <input type="checkbox" name="ingredients[]" id="olive" value="Olivova">
        <label for="olive">Olivova</label></br>

        <input type="checkbox" name="ingredients[]" id="spinach" value="Spenatova">
        <label for="spinach">Spenatova</label></br>        
        
        <input type="checkbox" name="ingredients[]" id="jala" value="Jalapenos">
        <label for="jala">Jalapenos</label></br>       
        
        <input type="checkbox" name="ingredients[]" id="Kari" value="Kari">
        <label for="Kari">Kari</label></br>

        <input type="submit" name="submit" value="Odeslat" value="">
    </form>
      <?php  } 
    
    ?>
      </body>
</html>