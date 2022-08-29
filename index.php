<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Grupo: Final Cut</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <!--[if IE]><link rel="shortcut icon" href="img/favicon.png"><![endif]-->
        <link rel="icon" href="img/favicon.png">
    </head>
    <body>
        <div class="loader"></div>
        <header class="header content">
            <div class="header_video">
            </div>

            <div class="grupo">
                <?php include("includes/tv.php");?>
                <?php include("includes/control.php");?>
            </div>   
        </header>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $(".loader").fadeOut("slow");
            });
        </script>
        <script type="text/javascript">
            $(window).load(function() {
                $(".loaderblack").fadeOut("slow");
            });
        </script>
    </body>
</html>