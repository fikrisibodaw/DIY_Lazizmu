<?php $__env->startSection('content'); ?>

    <div class="logo">
      <img src=<?php echo e(asset('assets/images/lazizmu-logo.png')); ?>>
    </div>

    <div class="h1">
   		<h1>  بِسْــــــــــــــــــمِ اللهِ الرَّحْمَنِ الرَّحِيْمِ </h1>
    </div>

    <div class="title">
        <br>Sistem Informasi Manajemen Lazizmu D.I. Yogyakarta</br>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>