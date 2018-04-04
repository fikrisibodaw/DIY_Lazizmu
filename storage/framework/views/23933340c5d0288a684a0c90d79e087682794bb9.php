<?php $__env->startSection('content'); ?>
    <!-- page content -->
    <!-- top tiles -->
    <table class="table table-striped table-bordered">
      <thead>
        <tr class="headings">
          <th>Jenis Kantor</th>
          <th>Nama Kantor</th>
          <th>deskripsi</th>
          <th>alamat</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $isi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($isi->jenis_kantor); ?></td>
            <td><?php echo e($isi->nama_kantor); ?></td>
            <td><?php echo e($isi->deskripsi); ?></td>
            <td><?php echo e($isi->alamat); ?></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>

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