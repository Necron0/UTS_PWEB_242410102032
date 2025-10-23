<?php $__env->startSection('content'); ?>
<h1> Welcome <?php echo e($username ?? 'King'); ?></h1>


<div class="flex items-center justify-center mt-20">
    <span class="bg-[#fca311] mr-5 w-auto min-w-60 flex justify-center p-10 rounded-4xl  hover:bg-[#14213d] hover:text-white transition ease-in-out delay-100"> Jumlah Data Kendaraan : <?php echo e($jumlah); ?></span>
    <span class="bg-[#fca311] ml-5 p-10 w-auto min-w-60 flex justify-center rounded-4xl hover:bg-[#14213d] hover:text-white transition ease-in-out delay-100">Jumlah User : 1 </span>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\mini-project-laravel\resources\views/dashboard.blade.php ENDPATH**/ ?>