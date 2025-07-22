 
 <?php $__env->startPush('style'); ?>
     <title>Education - Hridoy Portfolio</title>
     <style>
         .main-container {
             font-family: Arial, sans-serif;
             margin: 0;
             padding: 0;
             display: flex;
             justify-content: center;
             align-items: center;
             height: 100vh;
             background-color: #f2f2f2;
         }

         .container {
             display: flex;
             width: 70%;
             height: 400px;
             background: white;
             border: 1px solid #ccc;
             box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
             border-radius: 10px;
         }

         .section {
             flex: 1;
             padding: 20px;
         }
         .infor {
            flex: 1;
             padding: 20px;
             font-size: 12px;
         }

         .divider {
             width: 1px;
             background-color: #ccc;
         }

         h2 {
             font-size: 2.4rem;
             text-align: center;
             border-bottom: 1px solid #eee;
             padding-bottom: 10px;
             color: #4D4DFF;
         }

         ul {
             padding-left: 20px;
         }

         li {
             font-size: 1.5rem;
         }
     </style>
 <?php $__env->stopPush(); ?>
 <?php $__env->startSection('main-contents'); ?>
     <div class="main-container">
         <div class="container">
             <div class="section">
                 <h2>Education</h2>
                 <ul>
                     <li onclick="showinfo('IBN Taimiya School & College','GPA 5','2015-2016')">Secondary School Certificate(SSC)</li>
                     <li onclick="showinfo('Comilla Government College','GPA 5', '2017-2018')">Higher Secondary Certificate(HSC)</li>
                     <li onclick="showinfo('Daffodil International University', 3.9, '2022-Present')">Bachelor of Science</li>
                 </ul>
             </div>
             <div class="divider"></div>
             <div class="infor" id='target'>

             </div>

         </div>
     </div>

     <script>
 
     </script>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Full_Stack_Dynamic_Portfolio\resources\views/education.blade.php ENDPATH**/ ?>