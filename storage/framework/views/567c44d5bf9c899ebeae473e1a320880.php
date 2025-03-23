<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
$containerNav = $containerNav ?? 'container-fluid';
$navbarDetached = ($navbarDetached ?? '');

?>

<!-- Navbar -->
<?php if(isset($navbarDetached) && $navbarDetached == 'navbar-detached'): ?>
<nav class="layout-navbar <?php echo e($containerNav); ?> navbar navbar-expand-xl <?php echo e($navbarDetached); ?> align-items-center bg-navbar-theme" id="layout-navbar">
  <?php endif; ?>
  <?php if(isset($navbarDetached) && $navbarDetached == ''): ?>
  <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="<?php echo e($containerNav); ?>">
      <?php endif; ?>

      <!--  Brand demo (display only for navbar-full and hide on below xl) -->
      <?php if(isset($navbarFull)): ?>
      <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-6">
        <a href="<?php echo e(url('/')); ?>" class="app-brand-link gap-2">
          <span class="app-brand-logo demo"><?php echo $__env->make('_partials.macros',["height"=>20], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></span>
          <span class="app-brand-text demo menu-text fw-semibold ms-1"><?php echo e(config('variables.templateName')); ?></span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
          <i class="ri-close-fill align-middle"></i>
        </a>
      </div>
      <?php endif; ?>

      <!-- ! Not required for layout-without-menu -->
      <?php if(!isset($navbarHideToggle)): ?>
      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0<?php echo e(isset($menuHorizontal) ? ' d-xl-none ' : ''); ?> <?php echo e(isset($contentNavbar) ?' d-xl-none ' : ''); ?>">
        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
          <i class="ri-menu-fill ri-24px"></i>
        </a>
      </div>
      <?php endif; ?>

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
          <div class="nav-item d-flex align-items-center">
            <i class="ri-search-line ri-22px me-1_5"></i>
            <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2 ms-50" placeholder="Search..." aria-label="Search...">
          </div>
        </div>
        <!-- /Search -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">

          <!-- Place this tag where you want the button to render. -->
          <li class="nav-item lh-1 me-4">
            <a class="github-button" href="<?php echo e(config('variables.repository')); ?>" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themeselection/materio-html-laravel-admin-template-free on GitHub">Star</a>
          </li>

          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="<?php echo e(asset('assets/img/avatars/1.png')); ?>" alt class="w-px-40 h-auto rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
            <li>
                <a class="dropdown-item" href="javascript:void(0);">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-2">
                      <div class="avatar avatar-online">
                        <img src="<?php echo e(asset('assets/img/avatars/1.png')); ?>" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0 small">John Doe</h6>
                      <small class="text-muted">Admin</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);">
                  <i class="ri-user-3-line ri-22px me-2"></i>
                  <span class="align-middle">My Profile</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);">
                  <i class='ri-settings-4-line ri-22px me-2'></i>
                  <span class="align-middle">Settings</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);">
                  <span class="d-flex align-items-center align-middle">
                    <i class="flex-shrink-0 ri-file-text-line ri-22px me-3"></i>
                    <span class="flex-grow-1 align-middle">Billing</span>
                    <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger h-px-20 d-flex align-items-center justify-content-center">4</span>
                  </span>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <div class="d-grid px-4 pt-2 pb-1">
                  <a class="btn btn-danger d-flex" href="javascript:void(0);">
                    <small class="align-middle">Logout</small>
                    <i class="ri-logout-box-r-line ms-2 ri-16px"></i>
                  </a>
                </div>
              </li>
            </ul>
          </li>
          <!--/ User -->
        </ul>
      </div>

      <?php if(!isset($navbarDetached)): ?>
    </div>
    <?php endif; ?>
  </nav>
  <!-- / Navbar -->
<?php /**PATH C:\xampp\htdocs\materio\html-laravel-free-internal\full-version\resources\views/layouts/sections/navbar/navbar.blade.php ENDPATH**/ ?>