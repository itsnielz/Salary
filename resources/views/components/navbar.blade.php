<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
     <a class="navbar-brand" href="#"><img src="{{ asset('images/logo/logo salary.png') }}" alt=""> </a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="{{asset('/')}}"> <i class="fa-solid fa-house"></i> หน้าแรก</a>
         </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{asset('/edit')}}"> <i class="fa-solid fa-users"></i> จัดการพนักงาน</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{asset('/salary')}}"><i class="fa-solid fa-hand-holding-dollar"></i> จัดการเงินเดือน</a>
        </li>
       </ul>
     </div>
   </div>
 </nav>