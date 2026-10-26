<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo e($title ?? 'Laravel POS'); ?></title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }

        nav {
            background-color: #222;
            padding: 15px;
        }

        nav a {
            color: white;
            margin-right: 20px;
            text-decoration: none;
        }

        main {
            padding: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>

    <nav>
        <a href="<?php echo e(route('home')); ?>">Home</a>
        <a href="<?php echo e(route('about')); ?>">About</a>
        <a href="<?php echo e(route('customers')); ?>">Customers</a>
        <a href="<?php echo e(route('users')); ?>">Users</a>
    </nav>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

</body>
</html><?php /**PATH C:\Users\Jarr\Documents\myproj\myproj\resources\views/layouts/app.blade.php ENDPATH**/ ?>