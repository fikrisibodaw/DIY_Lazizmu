<?php $__env->startSection('title', __('views.admin.users.show.title', ['name' => $user->name])); ?>

<?php $__env->startSection('content'); ?>

    <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Design <small>different form elements</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Female
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>



    <div class="row">
        <table class="table table-striped table-hover">
            <tbody>
            <tr>
                <th><?php echo e(__('views.admin.users.show.table_header_0')); ?></th>
                <td><img src="<?php echo e($user->avatar); ?>" class="user-profile-image"></td>
            </tr>

            <tr>
                <th><?php echo e(__('views.admin.users.show.table_header_1')); ?></th>
                <td><?php echo e($user->name); ?></td>
            </tr>

            <tr>
                <th><?php echo e(__('views.admin.users.show.table_header_2')); ?></th>
                <td>
                    <a href="mailto:<?php echo e($user->email); ?>">
                        <?php echo e($user->email); ?>

                    </a>
                </td>
            </tr>
            <tr>
                <th><?php echo e(__('views.admin.users.show.table_header_3')); ?></th>
                <td>
                    <?php echo e($user->roles->pluck('name')->implode(',')); ?>

                </td>
            </tr>
            <tr>
                <th><?php echo e(__('views.admin.users.show.table_header_4')); ?></th>
                <td>
                    <?php if($user->active): ?>
                        <span class="label label-primary"><?php echo e(__('views.admin.users.show.active')); ?></span>
                    <?php else: ?>
                        <span class="label label-danger"><?php echo e(__('views.admin.users.show.inactive')); ?></span>
                    <?php endif; ?>
                </td>
            </tr>

            <tr>
                <th><?php echo e(__('views.admin.users.show.table_header_5')); ?></th>
                <td>
                    <?php if($user->confirmed): ?>
                        <span class="label label-success"><?php echo e(__('views.admin.users.show.confirmed')); ?></span>
                    <?php else: ?>
                        <span class="label label-warning"><?php echo e(__('views.admin.users.show.not_confirmed')); ?></span>
                    <?php endif; ?></td>
                </td>
            </tr>

            <tr>
                <th><?php echo e(__('views.admin.users.show.table_header_6')); ?></th>
                <td><?php echo e($user->created_at); ?> (<?php echo e($user->created_at->diffForHumans()); ?>)</td>
            </tr>

            <tr>
                <th><?php echo e(__('views.admin.users.show.table_header_7')); ?></th>
                <td><?php echo e($user->updated_at); ?> (<?php echo e($user->updated_at->diffForHumans()); ?>)</td>
            </tr>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>