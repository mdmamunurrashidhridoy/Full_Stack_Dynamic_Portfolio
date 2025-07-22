<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $__env->yieldPushContent('style'); ?>
    <link rel='stylesheet' href='<?php echo e(asset('asset/css/style.css')); ?>'>
</head>

<body>
    <nav>
        <div>
            <h6>Hriody</h6>
        </div>
        <div class="menu">
            <a href="<?php echo e(url('/')); ?>" id="home">Home</a>
            <a href="<?php echo e(url('/education')); ?>">Education</a>
            <a href="<?php echo e(url('/specialization')); ?>">Specialization</a>
            <a href="<?php echo e(url('/projects')); ?>">Projects</a>
            <a href="<?php echo e(url('/mystory')); ?>">My Story</a>
            <a href="<?php echo e(url('/contact')); ?>">Contacts</a>
        </div>
    </nav>

    <?php echo $__env->yieldContent('main-contents'); ?>

    <script src="<?php echo e(asset('asset/js/script.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\laragon\www\Full_Stack_Dynamic_Portfolio\resources\views/index.blade.php ENDPATH**/ ?>