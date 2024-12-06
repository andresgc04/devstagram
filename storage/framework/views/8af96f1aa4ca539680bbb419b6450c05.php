<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DevStagram - <?php echo $__env->yieldContent('titulo'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</head>

<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">
                DevStagram
            </h1>

            <!-- Verificar si un usuario esta autenticado o no: -->
            <?php if(auth()->guard()->check()): ?>
                <nav class="flex gap-2 items-center">
                    <a class="font-bold text-gray-600 text-sm" href="#">
                        Hola: <span class="font-normal"><?php echo e(Auth::user()->username); ?></span>
                    </a>

                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="font-bold uppercase text-gray-600 text-sm">Cerrar Sesión</button>
                    </form>
                </nav>
            <?php endif; ?>

            <?php if(auth()->guard()->guest()): ?>
                <nav class="flex gap-2 items-center">
                    <a class="font-bold uppercase text-gray-600 text-sm" href="<?php echo e(route('login')); ?>">Login</a>
                    <a class="font-bold uppercase text-gray-600 text-sm" href="<?php echo e(route('register')); ?>">Crear Cuenta</a>
                </nav>
            <?php endif; ?>
        </div>
    </header>
    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">
            <?php echo $__env->yieldContent('titulo'); ?>
        </h2>
        <?php echo $__env->yieldContent('contenido'); ?>
    </main>
    <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
        DevStagram - Todos los derechos reservados <?php echo e(now()->year); ?>

    </footer>
</body>

</html>
<?php /**PATH /var/www/html/resources/views/layouts/app.blade.php ENDPATH**/ ?>