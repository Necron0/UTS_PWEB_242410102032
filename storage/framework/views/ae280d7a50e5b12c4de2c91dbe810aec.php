<?php $__env->startSection('content'); ?>
<div>
    <h1 class="text-3xl flex justify-center mt-10 mb-30 bg-[#14213d] text-gray-400 p-6">
        Halaman Pengelolaan
    </h1>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 p-20 ml-12">
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="item-cards " >
        <img src="<?php echo e($item['gambar']); ?>" alt="Error" class="rounded-2xl object-cover  w-90 h-52  ">
        <h class="text-l font-semibold text-gray-600"><?php echo e($item['nama']); ?></h>
        <h1 class="text-black"><?php echo e($item['harga']); ?></h1>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\mini-project-laravel\resources\views/pengelolaan.blade.php ENDPATH**/ ?>