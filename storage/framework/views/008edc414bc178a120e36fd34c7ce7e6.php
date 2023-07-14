<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>QUIZ | PBWL</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <script src="<?php echo e(asset('js/bootstrap.bundle.js')); ?>"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    QUIZ PBWL INDAH SAPUTRI
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav nav-pills">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                        <ul class="nav nav-underline">
                            <li class="nav-item">
                                <a id="nav-link-disabled" class="nav-link disabled" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(url('/golongan')); ?>">Data Golongan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(url('/users')); ?>">Data Users</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(url('/pelanggan')); ?>">Data Pelanggan</a></li>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();
                                                  return confirm('Apakah yakin ingin keluar?')">
                                     <?php echo e(__('Logout')); ?>

                                     <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                         <?php echo csrf_field(); ?>
                                     </form>
                                    </a>
                                </li>
                                </ul>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    
                                    
                                    
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\SI3\pbwl-laravel-quiz-indah\resources\views/layouts/app.blade.php ENDPATH**/ ?>