<?php $__env->startSection('content'); ?>
    <!-- page content -->
    <!-- top tiles -->


  <form action="<?php echo e(route('wilayah.store')); ?>" method="post">
  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      <div class="form-group" >
        <label>jenis Kantor</label>
        <input type="text" class="form-control" name="jenis_kantor">
      </div>

      <div class="form-group" >
        <label>Nama Kantor</label>
        <input type="text" class="form-control" name="nama_kantor">
      </div>

      <div class="form-group" >
        <label>Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi">
      </div>

      <div class="form-group" >
        <label>Alamat</label>
        <input type="text" class="form-control" name="alamat">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
    <?php echo e(Html::script(mix('assets/admin/js/dashboard.js'))); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
    <?php echo e(Html::style(mix('assets/admin/css/dashboard.css'))); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('wilayah.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>