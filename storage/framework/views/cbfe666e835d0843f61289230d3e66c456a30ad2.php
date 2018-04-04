<?php $__env->startSection('content'); ?>

<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h4><small>Buat Akun</small></h4>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Akun<span class="required"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kantor<span class="required"> *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option class="">Pilih Kantor</option>
                            <option>Wilayah</option>
                            <option>Daerah</option>
                            <option>Layanan</option>                    
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Kantor<span class="required"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      
                       
        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Role<span class="required"> *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option class="">Pilih Kantor</option>
                            <option>Wilayah</option>
                            <option>Daerah</option>
                            <option>Layanan</option>                    
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" rows="3" placeholder="Alamat Lengkap Kantor"></textarea>
                        </div>
                      </div>

                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Provinsi<span class="required"> *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option class="">Pilih Provinsi</option>                  
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kabupaten<span class="required"> *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option class="">Pilih Kabupaten</option>                                               
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan<span class="required"> *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option class="">Pilih Kecamatan</option>                 
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Desa<span class="required"> *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option class="">Pilih Desa</option>                  
                          </select>
                        </div>
                      </div>

                                           
                     <div class="form-group">* Wajib Di Isi</div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">                          
                          
                          <button type="submit" class="btn btn-success">Simpan</button>
                          <button href="<?php echo e(url('/dashboard')); ?>" class="btn btn-primary" type="button">Kembali</button>
                        </div>
                      </div>
                    
                    </form>
                  </div>
                </div>

              </div>
            </div>

    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
    <?php echo e(Html::style(mix('assets/admin/css/users/edit.css'))); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
    <?php echo e(Html::script(mix('assets/admin/js/users/edit.js'))); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>