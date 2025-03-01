<header class="app-header ec">
 <nav class="navbar navbar-expand-lg">
  <ul class="navbar-nav">
   <li class="nav-item d-block d-xl-none">
    <a class="nav-link sidebartoggler nav-icon-hover" href="javascript:void(0)" id="headerCollapse">
     <i class="ti ti-menu-2"></i>
    </a>
   </li>
   <li class="nav-item">
    <a class="nav-link nav-icon-hover" href="javascript:void(0)">
     <i class="ti ti-bell-ringing"></i>
     <div class="notification bg-primary rounded-circle"></div>
    </a>
   </li>
  </ul>
  <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
   <ul class="navbar-nav align-items-center justify-content-end ms-auto flex-row">
    <li class="nav-item">

     <button class="btn btn-secondary" data-bs-target="#firefoxModal" data-bs-toggle="modal" type="button">
      open modal
     </button>
     <div class="container">
      <div aria-hidden="true" aria-labelledby="firefoxModalLabel" class="modal fade" id="firefoxModal" tabindex="-1">
       <div class="modal-dialog">
        <div class="modal-content">
         <div class="modal-header">
          <h1 class="modal-title fs-4" id="firefoxModalLabel">Firefox Bug Test</h1>
          <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
         </div>
         <div class="modal-body">
          <ol>
           <li>Ensure you're using Firefox.</li>
           <li>Open a new tab and then switch back to this tab.</li>
           <li>Click into this input: <input id="ff-bug-input" type="text"></li>
           <li>Switch to the other tab and then back to this tab.</li>
          </ol>
          <p>Test result: <strong id="ff-bug-test-result"></strong></p>
         </div>
         <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
          <button class="btn btn-primary" type="button">Save changes</button>
         </div>
        </div>
       </div>
      </div>
     </div>
    </li>
    <li class="nav-item dropdown">
     <a aria-expanded="false" class="nav-link nav-icon-hover" data-bs-toggle="dropdown" href="javascript:void(0)" id="drop2">
      <img alt="" class="rounded-circle" height="35" src="../assets/images/profile/user-1.jpg" width="35">
     </a>
     <div aria-labelledby="drop2" class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up">
      <div class="message-body">
       <a class="d-flex align-items-center dropdown-item gap-2" href="javascript:void(0)">
        <i class="ti ti-user fs-6"></i>
        <p class="fs-3 mb-0">My Profile</p>
       </a>
       <a class="d-flex align-items-center dropdown-item gap-2" href="javascript:void(0)">
        <i class="ti ti-mail fs-6"></i>
        <p class="fs-3 mb-0">My Account</p>
       </a>
       <a class="d-flex align-items-center dropdown-item gap-2" href="javascript:void(0)">
        <i class="ti ti-list-check fs-6"></i>
        <p class="fs-3 mb-0">My Task</p>
       </a>
       <a class="btn btn-outline-primary d-block mx-3 mt-2" href="./authentication-login.html">Logout</a>
      </div>
     </div>
    </li>
   </ul>
  </div>
 </nav>
</header>
