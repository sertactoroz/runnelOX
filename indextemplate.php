<?php
include('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('screens/_head.php');
?>

<body>
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
        <?php
        include('screens/_preloader.php');
        include('screens/_scrollbutton.php');
        include('screens/_search.php');

        include('screens/_topbar.php');

        include('screens/_header.php');

        include('screens/' . $pagename . '.php');

        include('screens/_footer.php');


        include('scripts/global.php');
        include('scripts/' . $pagename . '.php');

        // include('assets/js/api-js/update-buttons.js');
        ?>

</body>

</html>