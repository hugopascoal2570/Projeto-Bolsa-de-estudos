


<?php $__env->startSection('title', 'Nova Curso'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Adicionando Curso</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="card">

        <div class="card-body">
            <form action="<?php echo e(route('secretatios.addAction')); ?>" method="POST" class="form-horizontal"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo $__env->make('admin.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Nome do secretário</label>
                    <div class="col-sm-4">
                        <input type="text" name="name" id="name" required
                            class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    </div>

                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-from-label"></label>
                    <input type="submit" value="cadastrar" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\estudoLaraval\ProjetoBolsa\ProjetoBolsa\resources\views/admin/secretarios/add.blade.php ENDPATH**/ ?>