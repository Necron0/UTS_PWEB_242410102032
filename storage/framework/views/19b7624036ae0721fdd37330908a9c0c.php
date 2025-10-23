<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <title>Navbar</title>
</head>
<body>
    <?php
    $username = request()->query('username');
    ?>
    <nav class="bg-[#14213d] text-white  flex justify-between items-center p-6">
        <div class = "container mx-auto flex justify-between items-center">
            <a href="#" class = 'logo transition delay-75 duration-300 ease-in-out transform hover:translate-x-1000 hover:scale-150 hover'>Luxury Auto-Butique</a>
        <div class="flex space-x-6">
            <a href="/dashboard?username=<?php echo e($username); ?>" class = 'Home hover:text-[#fca311] transition delay-75 duration-300 ease-in-out hover:scale-120'>Home</a>
            <a href="/pengelolaan?username=<?php echo e($username); ?>" class = 'Pengelolaan hover:text-[#fca311] transition delay-75 duration-300 ease-in-out hover:scale-120'>Pengelolaan</a>
        <?php if($username): ?>
            <a href="/profile?username=<?php echo e($username); ?>" class="hover:text-[#fca311] transition delay-75 duration-300 ease-in-out hover:scale-120">Profile</a>
        <?php else: ?>
            <a href="/login" class="hover:text-[#fca311] transition delay-75 duration-300 ease-in-out hover:scale-120">Login</a>
        <?php endif; ?>


    </nav>
</body>
</html>
<?php /**PATH C:\laragon\www\mini-project-laravel\resources\views/components/navbar.blade.php ENDPATH**/ ?>