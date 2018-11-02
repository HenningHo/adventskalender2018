<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
$(document).ready(function(){
    $("p.move").click(function(){
            $( ".login" ).fadeOut(function(){
                $( ".register" ).fadeIn().css("display","grid");
            });
            
        });
    $("p.move2").click(function(){
            $( ".register" ).fadeOut(function(){
                $( ".login" ).fadeIn().css("display","grid");
            });
            
        });
});
</script>
</head>
<body>
    <div class="logincontainer">
        <div class="login">
            <input type="text" name="user" id="" placeholder="User" autofocus />
            <input type="password" name="pw" placeholder="Passwort" id=""/>
            <div class="submitbereich">
                <input type="submit" value="Login">
                <p class="move">Registrieren</p>
                <p>Gastzugang</p>
            </div>
            <?php
            ?>
        </div>
        <div class="register">
            <input type="email" name="email" id="" placeholder="E-Mail" />
            <input type="text" name="user" id="" placeholder="User" />
            <input type="password" name="pw" id="" placeholder="Password" />
            <div class="submitbereich">
                <input type="submit" value="Registrieren">
                <p class="move2">zur&uuml;ck zum Login</p>
            </div>
        </div>
    </div>

</body>
</html>