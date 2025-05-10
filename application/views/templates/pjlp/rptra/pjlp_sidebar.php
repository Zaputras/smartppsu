 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('pjlp'); ?>">
         <div class="sidebar-brand-icon">
             <img width="40%" class="img-thumbnail m-0 " src="<?= base_url('assets/img/icon/icon_smart_pjlp.png'); ?>" alt="icon_smart_pjlp">
         </div>
         <div class="sidebar-brand-text mx-3">SMART PJLP</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="<?= base_url('rptra'); ?>">
             <i class="fas fa-fw fa-home"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Management
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="<?= base_url('rptra/profile'); ?>">
             <i class="fas fa-fw fa-user-cog"></i>
             <span>Profile</span>
         </a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Report and Task
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="<?= base_url('rptra/laporan'); ?>">
             <i class="fas fa-fw fa-tasks"></i>
             <span>Laporan</span>
         </a>
         <!-- <a class="nav-link collapsed" href="< base_url('pjlp/jadwal'); ?>">
             <i class="fas fa-fw fa-calendar-check"></i>
             <span>Jadwal</span>
         </a> -->
         <!-- <a class="nav-link collapsed" href="< base_url('pjlp/cuti'); ?>">
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