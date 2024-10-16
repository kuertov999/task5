<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/logo.png" alt="логотип" class="img">
        </div>
        <nav>
            <a href="<?php echo e(route('home')); ?>">Главная</a>
            <a href="<?php echo e(route('array')); ?>">Массивы</a>
        </nav>
    </header>
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer>
        <p>©Батурин 2024</p>
    </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\example-app\resources\views/layouts/main.blade.php ENDPATH**/ ?>