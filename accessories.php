<?php
include_once 'ui/accessoires.php';
?>

<!doctype html>
<html lang="en">
<?php include_once 'components/head.php'; ?>
<body>
<div class="container">
    <?php include_once 'components/nav.php'; ?>

    <main>
        <h2 class="text-center mt-3">Accessories</h2>
        <div class="d-flex flex-wrap justify-content-center mb-3">
            <?php
            foreach (accessories as $accessory) {
                showAccessory($accessory);
            }
            ?>
        </div>
    </main>
</div>
</body>
</html>