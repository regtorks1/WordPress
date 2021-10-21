<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGINALD'S FIRST THEME</title>
</head>
<body>
    <?php 
         wp_nav_menu( array( 'theme_location' => 'header-menu' ) );   
    ?>
    <div class = "first_header_wrap">
    <h1 class = "first_header">APPLE'S GATE</h1>
    </div>

</body>
</html>