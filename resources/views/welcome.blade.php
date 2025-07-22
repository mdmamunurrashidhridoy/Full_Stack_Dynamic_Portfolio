 @extends('index')
 @push('style')
     <title>Hridoy</title>
 @endpush
 @section('main-contents')

     <h1>Hey, I am Hridoy🙋‍♂️,</h1>
     <img src="{{ asset('asset/image/image.webp') }}" alt="Photo of X">
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
 @endsection
