 
 <?php $__env->startPush('style'); ?>
     <title>Contact- Hridoy Portfolio</title>
     <style>
         body {
             margin: 0;
             font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
             background-color: #f1f1f1;
             color: #333;
         }

         .contact-container {
             max-width: 600px;
             margin: 60px auto 30px;
             background: white;
             padding: 30px;
             box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
             border-radius: 8px;
         }

         h1 {
             text-align: center;
             margin-bottom: 25px;
             color: #222;
         }

         form {
             display: flex;
             flex-direction: column;
         }

         input,
         textarea {
             padding: 12px;
             margin-bottom: 18px;
             border: 1px solid #ccc;
             border-radius: 4px;
             font-size: 16px;
         }

         button {
             background-color: #4e54c8;
             color: white;
             padding: 12px;
             border: none;
             border-radius: 4px;
             font-size: 16px;
             cursor: pointer;
         }

         button:hover {
             background-color: #3b3fc8;
         }

         .info-box {
             max-width: 600px;
             margin: 50px auto 50px;
             background: #ffffffcc;
             padding: 20px;
             border-radius: 8px;
             text-align: center;
             box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
         }

         .info-box h2 {
             margin-bottom: 15px;
         }

         .info-box p {
             margin: 8px 0;
         }

         .info-box a {
             color: #4e54c8;
             text-decoration: none;
         }

         .info-box a:hover {
             text-decoration: underline;
         }
     </style>
 <?php $__env->stopPush(); ?>
 <?php $__env->startSection('main-contents'); ?>
     <div class="info-box">
         <h2>Or Reach Out Directly</h2>
         <p>📞 Phone: +880-1234-567890</p>
         <p>✉️ Email: <a href="mailto:yourname@email.com">yourname@email.com</a></p>
         <p>🌐 Socials:
             <a href="#">Facebook</a> |
             <a href="#">Twitter</a> |
             <a href="#">LinkedIn</a> |
             <a href="#">GitHub</a>
         </p>
     </div>
     <div class="contact-container">
         <h1>Contact Me</h1>
         <form action="#" method="post">
             <input type="text" name="name" placeholder="Your Name" required />
             <input type="email" name="email" placeholder="Your Email" required />
             <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
             <button type="submit">Send Message</button>
         </form>
     </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Full_Stack_Dynamic_Portfolio\resources\views/contact.blade.php ENDPATH**/ ?>