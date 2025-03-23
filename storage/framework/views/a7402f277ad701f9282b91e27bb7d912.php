<?php $__env->startSection('title', 'Register Basic - Pages'); ?>

<?php $__env->startSection('page-style'); ?>
<?php echo app('Illuminate\Foundation\Vite')([
  'resources/assets/vendor/scss/pages/page-auth.scss'
]); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="position-relative">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner py-6 mx-4">

      <!-- Register Card -->
      <div class="card p-7">
        <!-- Logo -->
        <div class="app-brand justify-content-center mt-5">
          <a href="<?php echo e(url('/')); ?>" class="app-brand-link gap-3">
            <span class="app-brand-logo demo"><?php echo $__env->make('_partials.macros',["height"=>20], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></span>
            <span class="app-brand-text demo text-heading fw-semibold"><?php echo e(config('variables.templateName')); ?></span>
          </a>
        </div>
        <!-- /Logo -->
        <div class="card-body mt-1">
          <h4 class="mb-1">Adventure starts here 🚀</h4>
          <p class="mb-5">Make your app management easy and fun!</p>

          <form id="formAuthentication" class="mb-5" action="<?php echo e(url('/')); ?>" method="GET">
            <div class="form-floating form-floating-outline mb-5">
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus>
              <label for="username">Username</label>
            </div>
            <div class="form-floating form-floating-outline mb-5">
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
              <label for="email">Email</label>
            </div>
            <div class="mb-5 form-password-toggle">
              <div class="input-group input-group-merge">
                <div class="form-floating form-floating-outline">
                  <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <label for="password">Password</label>
                </div>
                <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line ri-20px"></i></span>
              </div>
            </div>

            <div class="mb-5 py-2">
              <div class="form-check mb-0">
                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                <label class="form-check-label" for="terms-conditions">
                  I agree to
                  <a href="javascript:void(0);">privacy policy & terms</a>
                </label>
              </div>
            </div>
            <button class="btn btn-primary d-grid w-100 mb-5">
              Sign up
            </button>
          </form>

          <p class="text-center mb-5">
            <span>Already have an account?</span>
            <a href="<?php echo e(url('auth/login-basic')); ?>">
              <span>Sign in instead</span>
            </a>
          </p>
        </div>
      </div>
      <!-- Register Card -->
      <img src="<?php echo e(asset('assets/img/illustrations/tree-3.png')); ?>" alt="auth-tree" class="authentication-image-object-left d-none d-lg-block">
      <img src="<?php echo e(asset('assets/img/illustrations/auth-basic-mask-light.png')); ?>" class="authentication-image d-none d-lg-block" height="172" alt="triangle-bg">
      <img src="<?php echo e(asset('assets/img/illustrations/tree.png')); ?>" alt="auth-tree" class="authentication-image-object-right d-none d-lg-block">
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/blankLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\materio\html-laravel-free-internal\full-version\resources\views/content/authentications/auth-register-basic.blade.php ENDPATH**/ ?>