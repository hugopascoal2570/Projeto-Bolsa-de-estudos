<?php $__env->startSection('title', 'Cursos'); ?>
<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- prising_area  -->
        <div class="prising_area">
            <div class="container">

                <div class="row no-gutters align-items-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="single_prising text-center wow fadeInUp">
                            <div class="prising_header d-flex justify-content-between blue_header">
                                <h3><?php echo e($curso->name); ?></h3>
                            </div>
                            <ul>
                                <li>total de bolsas com desconto: <?php echo e($curso->desconto->bolsas); ?></li>
                                <li>Início da matricula:
                                    <?php echo e(\Carbon\Carbon::parse($curso->inicio)->format('d/m/Y')); ?></li>
                                <li>Final da matricula:
                                    <?php echo e(\Carbon\Carbon::parse($curso->final)->format('d/m/Y')); ?></li>
                            </ul>
                            <div class="prising_bottom">
                                <a href="<?php echo e(url('/curso', ['slug' => $curso->slug])); ?>" class="get_now prising_btn">Essa
                                    Bolsa é minha!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\estudoLaraval\ProjetoBolsa\ProjetoBolsa\resources\views/site/cursos.blade.php ENDPATH**/ ?>