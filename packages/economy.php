<!--Include the Config File -->
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/a_config.php";
   include_once($path);
?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Head tags from PHP includes-->
    <?php 
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .= "/includes/head-tags.php";
       include_once($path);
    ?>
</head>
<body>

<div id="content">
    <!--Import Header content-->
    <?php 
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .= "/includes/header-content.php";
       include_once($path);
    ?>
    <!--Import Nav bar-->
    <?php 
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .= "/includes/navigation.php";
       include_once($path);
    ?>
    <!--Main Content-->
    <main>
        <div class="alignDiv">
            <h1> ECONOMY PACKAGE</h1>
        </div>
    </main>

</div>

<!--Import Footer-->
<?php include("includes/footer.php");?>

</body>
</html>