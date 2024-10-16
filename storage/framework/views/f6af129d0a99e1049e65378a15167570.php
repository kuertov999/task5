
<?php $__env->startSection('content'); ?>
<div class="w-full flex justify-between items-center">
    <h1 class="text-3xl font-bold py-5">Отчеты</h1>
</div>
<div class="flex gap-5">
    <div class="flex flex-col gap-5 flex-wrap justify-between w-1/2">
        <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="flex flex-col p-4 border-2 mb-5 gap-3">
            <p>Номер: <?php echo e($report['number']); ?></p>
            <p>Описание: <?php echo e($report['description']); ?></p>
            <form method="POST" action="<?php echo e(route('reports.destroy', $report->id)); ?>">
                <?php echo method_field('delete'); ?>
                <?php echo csrf_field(); ?>
                <input class="cursor-pointer w-20 bg-red-700 text-white" type="submit" value="Удалить">
            </form>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <form class="border-2 h-fit p-4 w-1/2" method="POST" action="<?php echo e(route('reports.store')); ?>">
        <?php echo csrf_field(); ?>
        <p class="font-semibold text-3xl">Создать отчет</p>
        <div class="flex flex-col w-full mb-5">
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Описание</label>
                <textarea name="description" type="text" id="description" class="w-full p-3 border-2 rounded-sm" placeholder="Описание" required></textarea>
            </div>
        </div>
        <button type="submit" class="border-2 p-3 hover:bg-slate-100">Создать</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\task3-main\resources\views/report/index.blade.php ENDPATH**/ ?>