<?php
include_once 'ui/warriors.php';
?>

<!doctype html>
<html lang="en">
<?php include_once 'components/head.php'; ?>
<body>
<div class="container">
<?php include_once 'components/nav.php'; ?>

    <main>
        <h2 class="text-center mt-3">Warriors</h2>
        <div class="d-flex flex-wrap justify-content-center mb-3">
            <?php
            foreach (warriors as $warrior) {
                showWarrior($warrior);
            }
            ?>
        </div>
    </main>
</div>
</body>
</html>