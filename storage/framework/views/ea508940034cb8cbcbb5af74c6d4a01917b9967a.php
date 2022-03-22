

<?php $__env->startSection('title', 'Cursos'); ?>
<?php $__env->startSection('content'); ?>

    <!-- prising_area  -->
    <div class="prising_area">
        <div class="container">

            <div class="row no-gutters align-items-center">
                <div class="col-xl-12 col-md-12">
                    <div class="single_prising text-center wow fadeInUp">
                        <div class="prising_header d-flex justify-content-between blue_header">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome do Curso</th>
                                        <th>Nome do Usuário</th>
                                        <th>Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $resultados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $dado->sorteio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td><?php echo e($dado->name); ?></td>
                                            <td><?php echo e($data->name); ?></td>

                                            <td><img src="<?php echo e(asset("storage/{$data->image}")); ?>" width="100px"></td>
                                            </td>
                                            </tr>
                                </tbody>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\estudoLaraval\ProjetoBolsa\ProjetoBolsa\resources\views/site/sorteados.blade.php ENDPATH**/ ?>