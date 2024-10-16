
<?php $__env->startSection('content'); ?>
<div class="flex flex-wrap justify-between py-10 px-20 gap-10">
    <?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="w-[400px] flex flex-col border-2 p-4">
            <img src="<?php echo e($card['path']); ?>" alt="карточка" class="img">
            <h2><?php echo e($card['id']); ?>. <?php echo e($card['title']); ?></h2>
            <p><?php echo e($card['price']); ?> р.</p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\task3-main\resources\views/array.blade.php ENDPATH**/ ?>