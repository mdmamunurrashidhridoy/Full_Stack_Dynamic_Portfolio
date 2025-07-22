 
 <?php $__env->startPush('style'); ?>
     <title>Specialization - Hridoy Portfolio</title>

     <style>
         .container {
             margin: 0;
             height: 100vh;
             display: flex;
             justify-content: center;
             align-items: center;
             font-family: sans-serif;
         }

         .bubble-container {
             position: relative;
             width: 600px;
             height: 600px;
         }

         .bubble {
             position: absolute;
             width: 100px;
             height: 100px;
             background: #007FFF;
             color: white;
             border-radius: 50%;
             display: flex;
             align-items: center;
             justify-content: center;
             font-weight: bold;
             backdrop-filter: blur(4px);
             border: 1px solid #ffffff55;
         }

         .bubble:hover {
             background-color: #4e54c8;
             width: 110px;
             height: 110px;
         }

         /* Position bubbles in a circular layout */
         .bubble:nth-child(1) {
             top: 0%;
             left: 50%;
             transform: translate(-50%, 0);
         }

         .bubble:nth-child(2) {
             top: 20%;
             left: 85%;
             transform: translate(-50%, -50%);
         }

         .bubble:nth-child(3) {
             top: 50%;
             left: 100%;
             transform: translate(-50%, -50%);
         }

         .bubble:nth-child(4) {
             top: 80%;
             left: 85%;
             transform: translate(-50%, -50%);
         }

         .bubble:nth-child(5) {
             top: 100%;
             left: 50%;
             transform: translate(-50%, -100%);
         }

         .bubble:nth-child(6) {
             top: 80%;
             left: 15%;
             transform: translate(-50%, -50%);
         }

         .bubble:nth-child(7) {
             top: 50%;
             left: 0%;
             transform: translate(-50%, -50%);
         }

         .bubble:nth-child(8) {
             top: 20%;
             left: 15%;
             transform: translate(-50%, -50%);
         }

         .bubblecenter {
             position: absolute;
             width: 150px;
             height: 150px;
             background: #ADD8E6;
             color: white;
             border-radius: 50%;
             display: flex;
             align-items: center;
             justify-content: center;
             font-weight: bold;
             backdrop-filter: blur(4px);
             border: 1px solid #ffffff55;
             top: 50%;
             left: 50%;
             transform: translate(-50%, -50%);
             background: #4e54c8;
         }
     </style>
 <?php $__env->stopPush(); ?>
 <?php $__env->startSection('main-contents'); ?>
     <div class="container">
         <div class="bubble-container">
             <div class="bubble"
                 data-info="Python is a versatile, high-level programming language great for web development, data science, and automation.">
                 Python</div>
             <div class="bubble"
                 data-info="JavaScript is the language of the web, enabling interactive and dynamic web pages.">JavaScript
             </div>
             <div class="bubble"
                 data-info="Java is a robust, platform-independent language used in enterprise applications and Android development.">
                 Java</div>
             <div class="bubble" data-info="C++ is a powerful language for system/software development and game programming.">
                 C++</div>
             <div class="bubble"
                 data-info="Go is a statically typed language designed at Google, known for simplicity and concurrency.">Go
             </div>
             <div class="bubble"
                 data-info="Ruby is a dynamic, object-oriented language famous for its elegant syntax and Rails framework.">
                 Ruby</div>
             <div class="bubble" data-info="Rust is a systems programming language focused on safety and performance.">Rust
             </div>
             <div class="bubble"
                 data-info="Swift is Apple's programming language for iOS and macOS apps, combining performance and safety.">
                 Swift</div>
             <div class="bubblecenter">Specialization</div>
         </div>
     </div>

     <script>
         var bubbles = document.querySelectorAll('.bubble');

         for (var i = 0; i < bubbles.length; i++) {
             bubbles[i].onclick = function() {
                 alert(this.getAttribute('data-info'));
             }
         }
     </script>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Full_Stack_Dynamic_Portfolio\resources\views/specialization.blade.php ENDPATH**/ ?>