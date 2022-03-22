
<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($erro); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>

<?php if(session('message')): ?>
    <div class="alert alert-success">
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
<div class="alert alert-danger">
    <?php echo e(session('error')); ?>

</div>
<?php endif; ?>

<?php if(session('info')): ?>
<div class="alert alert-warning">
    <?php echo e(session('info')); ?>

</div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\estudoLaraval\ProjetoBolsa\resources\views/admin/includes/alerts.blade.php ENDPATH**/ ?>