 @extends('index')
 @push('style')
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

         .divider {
             width: 1px;
             background-color: #ccc;
         }

         h2 {
             text-align: center;
             border-bottom: 1px solid #eee;
             padding-bottom: 10px;
         }

         ul {
             padding-left: 20px;
         }
     </style>
 @endpush
 @section('main-contents')
     <div class="main-container">
         <div class="container">
             <div class="section">
                 <h2>Education</h2>
                 <ul>
                     <li>BSc in Computer Science</li>
                     <li>MSc in Data Science</li>
                     <li>Diploma in UX Design</li>
                 </ul>
             </div>
             <div class="divider"></div>
             <div class="section">
                 <h2>Courses</h2>
                 <ul>
                     <li>Web Development Bootcamp</li>
                     <li>Machine Learning Specialization</li>
                     <li>Effective Communication</li>
                 </ul>
             </div>
         </div>
     </div>
 @endsection
