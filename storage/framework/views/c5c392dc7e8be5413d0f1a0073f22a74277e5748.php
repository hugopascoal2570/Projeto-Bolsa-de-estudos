



<?php $__env->startSection('title', 'Adicionando'); ?>

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">

                </div>
            </div>
        </div>
    </div>
</div>


<form action="<?php echo e(route('cadastro')); ?>" method="POST" id="regForm" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo $__env->make('site.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <h1>Faça seu cadastro</h1>


    <!-- One "tab" for each step in the form: -->
    <div class="card">

        <div class="card-body">
            <label>Email</label>
            <p><input type="email" name="email" placeholder="email" oninput="this.className = ''"></p>
            <label>Senha</label>
            <p><input type="password" name="password" placeholder="Senha" oninput="this.className = ''"></p>

            <input type="hidden" value="<?php echo e($curso->id); ?>" name="curso_id">
            <label class="col-sm-2 col-from-label"></label>
            <input type="submit" value="cadastrar" class="btn btn-info">
        </div>
    </div>

</form>

<?php echo $__env->make('site.style.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\estudoLaraval\ProjetoBolsa\ProjetoBolsa\resources\views/site/adicionar.blade.php ENDPATH**/ ?>