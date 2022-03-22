<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Painel de Controle</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>Sejam Ben-vindos ao painel de controle.</p>

    <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($curso->desconto->active == 1): ?>
            <div class="card card-title col-lg-4">
                <div class="card-header">
                    <h3 class="card-title">
                        <?php echo e($curso->name); ?>

                    </h3>
                    <div class="card-tools">
                        <span class="badge badge-primary">Novo</span>
                    </div>
                </div>
                <div class="card-footer">
                    <li>total de bolsas com desconto: <?php echo e($curso->desconto->bolsas); ?></li>
                </div>
                <div class="card-footer">
                    <li>Início da matricula:<?php echo e(\Carbon\Carbon::parse($curso->inicio)->format('d/m/Y')); ?></li>
                </div>
                <div class="card-footer">
                    <li>Final da matricula:<?php echo e(\Carbon\Carbon::parse($curso->final)->format('d/m/Y')); ?></li>
                </div>
                <div class="card-footer">
                    <a href="<?php echo e(url('/curso/adquirir', ['id' => $curso->id])); ?>" class="btn btn-block btn-info btn-lg">Essa
                        Bolsa é minha!</a>
                </div>
            </div>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        console.log('Hi!');
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\estudoLaraval\ProjetoBolsa\ProjetoBolsa\resources\views/admin/home.blade.php ENDPATH**/ ?>