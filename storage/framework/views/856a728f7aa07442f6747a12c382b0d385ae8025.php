<?php $__env->startSection('title', 'Nova Bolsa de Estudos'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Adicionar Nova Renda</h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        jQuery(document).ready(function() {
            $('.phone').mask.mask('(00) 00000-0000');
            $('.cpf').mask('000.000.000-00', {
                reverse: true
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="card">

        <div class="card-body">
            <form action="<?php echo e(route('scholarship.store')); ?>" method="POST" class="form-horizontal"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo $__env->make('admin.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Selecione a sala</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="course_id" required>
                            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($course->id); ?>"><?php echo e($course->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label"></label>
                    <input type="submit" value="cadastrar" class="btn btn-success">
                </div>

            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\estudoLaraval\ProjetoBolsa\ProjetoBolsa\resources\views/admin/bolsas/add.blade.php ENDPATH**/ ?>