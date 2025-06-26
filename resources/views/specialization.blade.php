 @extends('index')
 @push('style')
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

         .bubble:hover{
            background-color: #4e54c8;
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
 @endpush
 @section('main-contents')
     <div class="container">
         <div class="bubble-container">
             <div class="bubble">Python</div>
             <div class="bubble">JavaScript</div>
             <div class="bubble">Java</div>
             <div class="bubble">C++</div>
             <div class="bubble">Go</div>
             <div class="bubble">Ruby</div>
             <div class="bubble">Rust</div>
             <div class="bubble">Swift</div>
             <div class="bubblecenter">Specialization</div>
         </div>
     </div>
 @endsection
