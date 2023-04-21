<?php
include_once 'ui/battle.php';
?>

<!doctype html>
<html lang="en">
<?php include_once 'components/head.php'; ?>
<body>
<div class="container">
    <?php include_once 'components/nav.php'; ?>

    <main>
        <h2 class="text-center mt-3">Battle</h2>
        <div class="text-center">
            <form method="POST" action="index.php">
                <input type="submit" name="submit" value="Start" class="btn btn-dark ps-4 pe-4" />
            </form>
            <?php
            if(isset($_POST['submit'])) {
                battle();
            }
            ?>
        </div>
    </main>
</div>
</body>
</html>