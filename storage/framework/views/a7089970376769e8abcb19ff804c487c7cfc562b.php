
<?php $__env->startSection('title', 'Cursos'); ?>

<?php $__env->startSection('content_header'); ?>

    <h1>Lista de Bolsas de Estudos</h1>

    <div class="container">
        <form action="" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Procurar">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome do Responsável</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $responsaveis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $data->responsaveis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dados): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td><?php echo e($dados->name); ?></td>
                    <td><?php echo e($dados->email); ?></td>
                    <td><?php echo e($dados->phone); ?></td>
                    <td><img src="<?php echo e(asset("storage/{$dados->image}")); ?>" width="100px"></td>
                    </td>

                    </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\estudoLaraval\ProjetoBolsa\ProjetoBolsa\resources\views/admin/bolsas/viewResponsaveis.blade.php ENDPATH**/ ?>