<!DOCTYPEhtml>
<html lang="ca">
    <head>
        <title>Formularide Contacte</title>
<<<<<<< Updated upstream
    <head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
            <input type="text" name="nom" placeholder="Nom"> 
            <input type="email" name="correu" placeholder="Correu"> 
            <input type="submit" name="submit" value="EnviarCorreu">
        </form>
    </body>
</html> 
=======
        <style>
        .error{color:red;}
    </style>
    <head>
    <body>
        <form action="3index.php" method="post"> <!--  con el action digo donde se guarda y pongo el método post -->
        
            <input type="text" name="nom" placeholder="Nom"> 
                <?php if(!empty($errorNombre)): ?>   
                    <!-- mensaje de error si no pongo el nombre -->
                <div class="error"><?php echo $errorNombre; ?></div>
                 <?php endif; ?>
                <br>
            <input type="email" name="correu" placeholder="Correu"> 
                <?php if(!empty($errorCorreo)): ?>
                    <!-- mensaje de error si no pongo el mail -->
                <div class="error"><?php echo $errorCorreo; ?></div>
                <?php endif; ?>
                <br>         
            <input type="submit" name="submit" value="EnviarCorreu">
        </form>
    </body>
    </html>
>>>>>>> Stashed changes
