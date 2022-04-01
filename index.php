<?php

include __DIR__.'\include\view\doctype.php';


?>

<body class="Color-bg-darkBlue Color-lightGreen">
    
<?php

include __DIR__.'\include\view\header.php';
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

<?php





include __DIR__.'\include\view\footer.php';
?>

    </body>
</html>
