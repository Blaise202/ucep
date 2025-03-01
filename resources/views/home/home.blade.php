@include('home.include.header')
<div class="page-wrapper ec" data-header-position="fixed" data-layout="vertical" data-navbarbg="skin6" data-sidebar-position="fixed" data-sidebartype="full" id="main-wrapper">
 @include('home.include.sidebar')
 <div class="body-wrapper">
  @include('home.include.navbar')
  <div class="container-fluid">
   <div class="row">
    <div class="col-12">
     <div class="card w-100 rounded-0">
      <div class="card-body">
       <div class="d-lg-flex">
        <div class="col-lg-8">
         <b class="advert">Get first hand adaptive Noise cancelling wireless JBL Tune 770NC.</b>
         <div class="mt-0">
          <span class="title nowrap">First 5 purchases are 25% OFF</span>
          <span class="fs-10 emoji">🤩</span>
         </div>
         <div class="col-lg-10 mt-4 text-center">
          <button class="btn col-4 btn-brown btn-lg rounded-5 text-white">
           <span class="fs-4 inria fw-lighter">BUY NOW</span>
          </button>
         </div>
        </div>
        <div class="d-none d-lg-block col-lg-4 text-end">
         <div class="mb-n3 p-3">
          <img alt="..." height="200" src="../assets/images/1 (1).png">
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <p class="card-title mt-n3 inria fw-light mb-9">
    <span class="fw-lighter">Home/ </span>
    <span class="fw-semibold">Products </span>
   </p>
   <div class="row">
    @for ($i = 1; $i <= 15; $i++)
     <div class="col-sm-6 col-xl-3">
      <div class="card rounded-0">
       <div class="p-3">
        <div class="text-secondary text-end">
         <img class="mb-n4 mt-n5 m-2" src="{{ asset('assets/icons/Heart.svg') }}"><br>
         <div class="mt-n3">
          <span class="fs-2">1.9k</span>
         </div>
        </div>
        <div class="text-center">
         <div class="position-relative mt-n4 text-center">
          <img alt="..." class="card-img-top w-85 rounded-0" src="../assets/images/1 (1).png">
         </div>
         <div class="mt-2">
          <b class="text-black">JBL Tune 770NC</b>
          <div class="mt-2">
           <span class="inria mt-2">Adaptive Noise cancelling wireless headsets</span>
          </div>
         </div>
        </div>
        <div class="d-flex mt-2">
         <div class="col-4">
          <b class="fs-4 nowrap text-black">${{ number_format(4383) }}</b>
         </div>
         <div class="col-8 text-end">
          <button class="btn btn-sm btn-dark">Add To Cart</button>
         </div>
        </div>
       </div>
      </div>
     </div>
    @endfor
   </div>
  </div>
 </div>
</div>
@include('home.include.footer')
