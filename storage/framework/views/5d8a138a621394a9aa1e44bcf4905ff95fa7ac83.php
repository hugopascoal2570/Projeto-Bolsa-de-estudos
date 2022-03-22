
<?php $__env->startSection('title', 'Cursos'); ?>

<?php $__env->startSection('content_header'); ?>

    <h1>Lista de Secretários</h1>
    <a href="<?php echo e(route('secretarios.add')); ?>" class="btn btn-sm btn-success">Adicionar Curso</a>
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
                <th>Nome do Secretário(a)</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $secretarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dados): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e($dados->name); ?></td>
                <td><?php echo e($dados->email); ?></td>

                <td>

                    <a href="" class="btn btn-sm btn-info">Editar</a>
                    <form class="d-inline" method="POST" action=""
                        onsubmit="return confirm('tem certeza que deseja excluir?')">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </td>
                </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
    </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\estudoLaraval\ProjetoBolsa\ProjetoBolsa\resources\views/admin/secretarios/home.blade.php ENDPATH**/ ?>