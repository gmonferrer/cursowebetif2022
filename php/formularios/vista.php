<!DOCTYPEhtml>
<html lang="ca">
    <head>
        <title>Formularide Contacte</title>
    <head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
            <input type="text" name="nom" placeholder="Nom"> 
            <input type="email" name="correu" placeholder="Correu"> 
            <input type="submit" name="submit" value="EnviarCorreu">
        </form>
    </body>
</html> 