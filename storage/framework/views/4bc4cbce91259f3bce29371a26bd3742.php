<?php $__env->startSection('title', 'Login Basic - Pages'); ?>

<?php $__env->startSection('page-style'); ?>
<?php echo app('Illuminate\Foundation\Vite')([
  'resources/assets/vendor/scss/pages/page-auth.scss'
]); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="position-relative">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner py-6 mx-4">

      <!-- Login -->
      <div class="card p-7">
        <!-- Logo -->
        <div class="app-brand justify-content-center mt-5">
          <a href="<?php echo e(url('/')); ?>" class="app-brand-link gap-3">
            <span class="app-brand-logo demo"><?php echo $__env->make('_partials.macros',["height"=>20,"withbg"=>'fill: #fff;'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></span>
            <span class="app-brand-text demo text-heading fw-semibold"><?php echo e(config('variables.templateName')); ?></span>
          </a>
        </div>
        <!-- /Logo -->

        <div class="card-body mt-1">
          <h4 class="mb-1">Welcome to <?php echo e(config('variables.templateName')); ?>! 👋🏻</h4>
          <p class="mb-5">Please sign-in to your account and start the adventure</p>

          <form id="formAuthentication" class="mb-5" action="<?php echo e(url('/')); ?>" method="GET">
            <div class="form-floating form-floating-outline mb-5">
              <input type="text" class="form-control" id="email" name="email-username" placeholder="Enter your email or username" autofocus>
              <label for="email">Email or Username</label>
            </div>
            <div class="mb-5">
              <div class="form-password-toggle">
                <div class="input-group input-group-merge">
                  <div class="form-floating form-floating-outline">
                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                    <label for="password">Password</label>
                  </div>
                  <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line ri-20px"></i></span>
                </div>
              </div>
            </div>
            <div class="mb-5 pb-2 d-flex justify-content-between pt-2 align-items-center">
              <div class="form-check mb-0">
                <input class="form-check-input" type="checkbox" id="remember-me">
                <label class="form-check-label" for="remember-me">
                  Remember Me
                </label>
              </div>
              <a href="<?php echo e(url('auth/forgot-password-basic')); ?>" class="float-end mb-1">
                <span>Forgot Password?</span>
              </a>
            </div>
            <div class="mb-5">
              <button class="btn btn-primary d-grid w-100" type="submit">login</button>
            </div>
          </form>

          <p class="text-center mb-5">
            <span>New on our platform?</span>
            <a href="<?php echo e(url('auth/register-basic')); ?>">
              <span>Create an account</span>
            </a>
          </p>
        </div>
      </div>
      <!-- /Login -->
      <img src="<?php echo e(asset('assets/img/illustrations/tree-3.png')); ?>" alt="auth-tree" class="authentication-image-object-left d-none d-lg-block">
      <img src="<?php echo e(asset('assets/img/illustrations/auth-basic-mask-light.png')); ?>" class="authentication-image d-none d-lg-block" height="172" alt="triangle-bg">
      <img src="<?php echo e(asset('assets/img/illustrations/tree.png')); ?>" alt="auth-tree" class="authentication-image-object-right d-none d-lg-block">
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/blankLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\materio\html-laravel-free-internal\full-version\resources\views/content/authentications/auth-login-basic.blade.php ENDPATH**/ ?>