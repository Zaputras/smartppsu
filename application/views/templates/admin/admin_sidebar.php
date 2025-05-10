 <!-- Sidebar -->
 <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
         <div class="sidebar-brand-icon">
             <img width="40%" class="img-thumbnail m-0 " src="<?= base_url('assets/img/icon/icon_smart_pjlp.png'); ?>" alt="icon_smart_pjlp">
         </div>
         <div class="sidebar-brand-text mx-3 text-gray-100">SMART PJLP</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="<?= base_url('admin'); ?>">
             <i class="fas fa-fw fa-home text-gray-100"></i>
             <span class="text-gray-100">Beranda</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading text-gray-100">
         Management
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="<?= base_url('admin/profile'); ?>">
             <i class="fas fa-fw fa-user-cog text-gray-100"></i>
             <span class="text-gray-100">Profil</span>
         </a>
     </li>

     <li class="nav-item">
         <a class="nav-link collapsed" href="<?= base_url('admin/member'); ?>" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-user-plus text-gray-100"></i>
             <span class="text-gray-100">Akun Pengguna</span>
         </a>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header text-gray-100">Akun</h6>
                 <a class="collapse-item text-gray-100" href="<?= base_url('admin/memberpptk'); ?>">Akun PPTK</a>
                 <a class="collapse-item text-gray-100" href="<?= base_url('admin/memberpjlp'); ?>">Akun PJLP</a>
             </div>
         </div>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading text-gray-100">
         Report and Task
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="<?= base_url('admin/laporan'); ?>">
             <i class="fas fa-fw fa-tasks text-gray-100"></i>
             <span class="text-gray-100">Laporan</span>
         </a>
         <a class="nav-link collapsed" href="<?= base_url('admin/berita'); ?>">
             <i class="fas fa-fw fa-podcast text-gray-100"></i>
             <span class="text-gray-100">Berita</span>
         </a>
         <!-- <a class="nav-link collapsed" href="< base_url('admin/jadwal'); ?>">
             <i class="fas fa-fw fa-calendar-check"></i>
             <span>Jadwal</span>
         </a> -->
         <!-- <a class="nav-link collapsed" href="< base_url('admin/cuti'); ?>">
             <i class="fas fa-fw fa-hourglass-end"></i>
             <span>Cuti</span>
         </a> -->
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->