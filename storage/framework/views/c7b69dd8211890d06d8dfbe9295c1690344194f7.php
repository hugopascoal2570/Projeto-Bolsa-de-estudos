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
                <th>Nome do Curso</th>
                <th>Número de Bolsas</th>
                <th>Status</th>
                <th>Inicio das Matriculas</th>
                <th>Final das Matriculas</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e($curso->name); ?></td>
                <td><?php echo e($curso->desconto->bolsas); ?></td>
                <td>
                    <?php if($curso->desconto->active == 0): ?>
                        <?php echo 'Curso Encerrado'; ?>
                    <?php else: ?>
                        <?php echo 'Curso Ativo'; ?>
                    <?php endif; ?>
                <td><?php echo e($curso->desconto->inicio); ?></td>
                <td><?php echo e($curso->desconto->final); ?></td>
                </td>
                <td>
                    <a href="<?php echo e(route('visualizarBolsas', ['id' => $curso->id])); ?>" class="btn btn-sm btn-success">
                        Vizualizar Curso</a>
                    <a href="<?php echo e(route('sorteioResult', ['id' => $curso->id])); ?>" class="btn btn-sm btn-warning">
                        Vizualizar Ganhadores</a>
                    <a href="<?php echo e(route('sortear', ['id' => $curso->id])); ?>" class="btn btn-sm btn-info">Sortear Bolsas</a>
                    <a href="<?php echo e(route('disableCourse', ['id' => $curso->id])); ?>" class="btn btn-sm btn-danger">Cancelar
                        Bolsas</a>
                </td>
                </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
    </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\estudoLaraval\ProjetoBolsa\ProjetoBolsa\resources\views/admin/bolsas/home.blade.php ENDPATH**/ ?>