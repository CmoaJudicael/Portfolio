<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="include/css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="include/css/style.css">
    <link rel="stylesheet" href="include/css/header.css">

    <?php
       if (!isset($_GET['page']))
       {
            $currentPage = 'accueil';
       }
       else
       {
           $currentPage = $_GET['page'];
       }
       echo '<link rel="stylesheet" href="include/css/'.$currentPage.'.css">';
    ?>
</head>