 @extends('index')
 @push('style')
     <title>Projects - Hridoy Portfolio</title>
     <style>
         .row {
             display: flex;
             justify-content: space-between;
             
         }

         .box {
            margin-top: 10px;
             width: 30%;
             height: 300px;
             background-color: lightblue;
             text-align: center;
             border: 1px solid #000;
             border-radius: 10px;
         }

         img {
            height: 50px;
            width: 50px;
         }
     </style>
 @endpush
 @section('main-contents')
     <div class="row">
         <div class="box"><img
                 src="https://github.com/mdmamunurrashidhridoy/DIU_TravelMate/blob/main/images_for_readme/Screenshot_20250414-173733.png?raw=true"
                 alt="">
             <h2>DIU TravelMate</h2>
             <h4>
                 A Transport App to help the Student of DIU.
             </h4>
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi dolores corporis, minima iste optio
                 dolor
                 consequuntur error non nobis laborum. Accusantium et enim atque dicta consequatur obcaecati expedita
                 voluptate
                 id!</p>
         </div>
         <div class="box"><img
                 src="https://github.com/mdmamunurrashidhridoy/DIU_TravelMate/blob/main/images_for_readme/Screenshot_20250414-173733.png?raw=true"
                 alt="">
             <h2>DIU TravelMate</h2>
             <h4>
                 A Transport App to help the Student of DIU.
             </h4>
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi dolores corporis, minima iste optio
                 dolor
                 consequuntur error non nobis laborum. Accusantium et enim atque dicta consequatur obcaecati expedita
                 voluptate
                 id!</p>
         </div>
         <div class="box"><img
                 src="https://github.com/mdmamunurrashidhridoy/DIU_TravelMate/blob/main/images_for_readme/Screenshot_20250414-173733.png?raw=true"
                 alt="">
             <h2>DIU TravelMate</h2>
             <h4>
                 A Transport App to help the Student of DIU.
             </h4>
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi dolores corporis, minima iste optio
                 dolor
                 consequuntur error non nobis laborum. Accusantium et enim atque dicta consequatur obcaecati expedita
                 voluptate
                 id!</p>
         </div>
     </div>
 @endsection
