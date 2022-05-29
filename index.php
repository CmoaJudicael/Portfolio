<?php
include __DIR__.'/include/view/doctype.php';


?>

<body class="Color-lightBlue">
    
<?php

include __DIR__.'/include/view/header.php';
?>
<body>

    
<?php
include __DIR__.'/include/view/bg.php';
?>

<div class="wrap">

<?php

if (!isset($_GET['page']))
{
    $currentPage = 'accueil';
}
else
{
    $currentPage = $_GET['page'];
}
if (file_exists(__DIR__.'/include/view/'.$currentPage.'.php')) 
{
    include __DIR__.'/include/view/'.$currentPage.'.php';
}
else
{
    include __DIR__.'/include/view/page_404.php';
}

?>

</div>

</body>
<?php





include __DIR__.'/include/view/footer.php';
?>

    </body>
</html>
