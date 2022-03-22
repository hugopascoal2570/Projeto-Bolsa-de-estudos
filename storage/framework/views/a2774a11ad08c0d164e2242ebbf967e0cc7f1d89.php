
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

                <th>Estudantes</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Foto</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $curso->estudantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dados): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($dados->name == ''): ?>
                        <td><?php echo 'Não informado pelo usuário'; ?></td>
                    <?php else: ?>
                        <td><?php echo e($dados->name); ?></td>
                    <?php endif; ?>
                    <?php if($dados->email == ''): ?>
                    <?php else: ?>
                        <td><?php echo e($dados->email); ?></td>
                    <?php endif; ?>
                    <td><?php echo e($dados->phone); ?></td>
                    <td><img src="<?php echo e(asset("storage/{$dados->image}")); ?>" width="100px"></td>
                    </td>
                    <td>
                        <a href="<?php echo e(route('visualizarResponsaveis', ['id' => $dados->id])); ?>"
                            class="btn btn-sm btn-success">
                            Vizualizar Responsáveis</a>
                        <a href="" class="btn btn-sm btn-info">Realizar Sorteio</a>
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
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\estudoLaraval\ProjetoBolsa\ProjetoBolsa\resources\views/admin/bolsas/view.blade.php ENDPATH**/ ?>