<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <?php include_once '../templates/header.php'; ?>

    <div class="container">
        <?php
        // This is where the content of the specific view will be injected
        if (isset($content)) {
            echo $content;
        }
        ?>
    </div>

    <?php include_once '../templates/footer.php'; ?>
</body>
</html>