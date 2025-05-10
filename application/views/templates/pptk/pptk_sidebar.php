<!-- Sidebar -->
<ul class="navbar-nav bg-info sidebar toggled sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('pptk/index'); ?>">
        <div class="sidebar-brand-icon">
            <img width="40%" class="img-thumbnail m-0 " src="<?= base_url('assets/img/icon/icon_smart_pjlp.png'); ?>" alt="icon_smart_pjlp">
        </div>
        <div class="b sidebar-brand-text mx-3 my-1 text-body-tertiary">SMART PJLP</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Heading -->
    <div class="sidebar-heading my-2 text-body-tertiary">
        PPTK
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('pptk/index'); ?>">
            <i class="fas fa-fw fa-home text-body-tertiary"></i>
            <span class="text-body-tertiary">Dashboard</span></a>
    </li>

    <!-- Nav Item - Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('pptk/profile'); ?>">
            <i class="fas fa-fw fa-user-cog text-body-tertiary"></i>
            <span class="text-body-tertiary">Profile</span></a>
    </li>

    <!-- Nav Item - Laporan -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('pptk/rekaplaporan'); ?>">
            <i class="fas fa-fw fa-tasks text-body-tertiary"></i>
            <span class="text-body-tertiary">Rekap Laporan</span></a>
    </li>

    <!-- Nav Item - Verifikasi Cuti -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="< base_url('pptk/verifikasicuti'); ?>">
            <i class="fas fa-fw fa-hourglass-end"></i>
            <span>Verifikasi Cuti</span></a>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->