<?php

$page_name= basename($_SERVER['SCRIPT_NAME'], '.php');
if( $page_name == 'index') $page_name = 'home';


?>


<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content=""> <!-- 160 char max -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Da+2:600|Roboto:900&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>NEW WEB / <?php echo ucfirst($page_name) ?></title>
</head>


<body class="<?php echo $page_name ?>">

    <header>

        <nav>
            <div class="container">
                <ul class="group">
                    <?php

                    $pages = glob('*.php');
                    $pages = array_reverse($pages);

                    foreach ($pages as  $file){
                       
                        $page = basename($file, '.php');
                        if ($page == 'index') $page = 'home';

                        if ($page_name == $page) echo '<li><strong>'. ucfirst($page) .'</strong></li>'; else echo '<li><a href="'.  $file .'">'. ucfirst($page) .'</a></li>';

                    }
                 
                    ?>  
                </ul>
            </div>
        </nav>

    </header>

    <main>
    