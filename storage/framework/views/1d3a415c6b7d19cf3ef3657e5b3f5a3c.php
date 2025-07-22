 
 <?php $__env->startPush('style'); ?>
     <title>Hridoy</title>
 <?php $__env->stopPush(); ?>
 <?php $__env->startSection('main-contents'); ?>

     <h1>Hey, I am Hridoy🙋‍♂️,</h1>
     <img src="<?php echo e(asset('asset/image/image.webp')); ?>" alt="Photo of X">
     <div class="info">
         <h2>About Me</h2>
         <p>I’m a passionate student, currently learning:</p>
         <ul>
             <li>Computer Science & Engineering</li>
             <li>Political Science</li>
             <li>Communication Science</li>
         </ul>
         <p>Let's connect and create something great together!</p>
     </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Full_Stack_Dynamic_Portfolio\resources\views/welcome.blade.php ENDPATH**/ ?>