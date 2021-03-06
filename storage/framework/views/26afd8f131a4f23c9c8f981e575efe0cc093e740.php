<?php $general_setting = DB::table('general_settings')->find(1); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e($general_setting->site_title); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/bootstrap/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/vendor/bootstrap/css/bootstrap-datepicker.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/vendor/bootstrap/css/bootstrap-select.min.css') ?>" type="text/css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/font-awesome/css/font-awesome.min.css') ?>" type="text/css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo asset('public/css/fontastic.css') ?>" type="text/css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo asset('public/css/grasp_mobile_progress_circle-1.0.0.min.css') ?>" type="text/css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') ?>" type="text/css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo asset('public/css/style.default.css') ?>" id="theme-stylesheet" type="text/css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo asset('public/css/custom.css') ?>" type="text/css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><strong class="text-primary"><?php echo e($general_setting->site_title); ?></strong></div>
            <form method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>
              <div class="form-group-material">
                <input id="register-username" type="text" name="name" required class="input-material">
                <label for="register-username" class="label-material"><?php echo e(trans('file.UserName')); ?> *</label>
                <?php if($errors->has('name')): ?>
                    <p>
                        <strong><?php echo e($errors->first('name')); ?></strong>
                    </p>
                <?php endif; ?>
              </div>
              <div class="form-group-material">
                <input id="register-email" type="email" name="email" required class="input-material">
                <label for="register-email" class="label-material"><?php echo e(trans('file.Email')); ?> *</label>
                <?php if($errors->has('email')): ?>
                    <p>
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </p>
                <?php endif; ?>
              </div>
              <div class="form-group-material">
                <input id="register-phone" type="text" name="phone" required class="input-material">
                <label for="register-phone" class="label-material"><?php echo e(trans('file.Phone Number')); ?> *</label>
              </div>
              <div class="form-group-material">
                <input id="register-company" type="text" name="company_name" class="input-material">
                <label for="register-company" class="label-material"><?php echo e(trans('file.Company Name')); ?></label>
              </div>
              <div class="form-group-material">
                <select name="role_id" required class="selectpicker form-control" data-live-search="true" data-live-search-style="begins" title="Select Role...">
                  <?php $__currentLoopData = $lims_role_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              <div class="form-group-material" id="biller-id">
                <select name="biller_id" required class="selectpicker form-control" data-live-search="true" data-live-search-style="begins" title="Select Biller*...">
                  <?php $__currentLoopData = $lims_biller_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $biller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($biller->id); ?>"><?php echo e($biller->name); ?> (<?php echo e($biller->phone_number); ?>)</option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              <div class="form-group-material" id="warehouse-id">
                <select name="warehouse_id" required class="selectpicker form-control" data-live-search="true" data-live-search-style="begins" title="Select Warehouse*...">
                  <?php $__currentLoopData = $lims_warehouse_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($warehouse->id); ?>"><?php echo e($warehouse->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              <div class="form-group-material">
                <input id="password" type="password" class="input-material" name="password" required>
                <label for="passowrd" class="label-material"><?php echo e(trans('file.Password')); ?> *</label>
                <?php if($errors->has('password')): ?>
                    <p>
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </p>
                <?php endif; ?>
              </div>
              <div class="form-group-material">
                <input id="password-confirm" type="password" name="password_confirmation" required class="input-material">
                <label for="password-confirm" class="label-material"><?php echo e(trans('file.Confirm Password')); ?> *</label>
              </div>
              <input id="register" type="submit" value="Register" class="btn btn-primary">
            </form><small><?php echo e(trans('file.Already have an account')); ?>? </small><a href="<?php echo e(url('login')); ?>" class="signup"><?php echo e(trans('file.LogIn')); ?></a>
          </div>
          <div class="copyrights text-center">
           <!--  <p><?php echo e(trans('file.Developed By')); ?> <a href="http://lion-coders.com" class="external">LionCoders</a></p> -->
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="<?php echo asset('public/vendor/jquery/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/jquery/jquery-ui.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/jquery/bootstrap-datepicker.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/popper.js/umd/popper.min.js') ?>">
</script>
<script type="text/javascript" src="<?php echo asset('public/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/bootstrap/js/bootstrap-select.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/js/grasp_mobile_progress_circle-1.0.0.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/jquery.cookie/jquery.cookie.js') ?>">
</script>
<script type="text/javascript" src="<?php echo asset('public/vendor/chart.js/Chart.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/jquery-validation/jquery.validate.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('public/js/charts-home.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/js/front.js') ?>"></script>
  </body>
<script type="text/javascript">
    $('.selectpicker').selectpicker({
      style: 'btn-link',
    });

    $('#warehouse-id').hide();
    $('#biller-id').hide();

    $('select[name="role_id"]').on('change', function() {
        if($(this).val() > 2){
            $('select[name="warehouse_id"]').prop('required',true);
            $('select[name="biller_id"]').prop('required',true);
            $('#biller-id').show();
            $('#warehouse-id').show();
        }
        else{
            $('select[name="warehouse_id"]').prop('required',false);
            $('select[name="biller_id"]').prop('required',false);
            $('#biller-id').hide();
            $('#warehouse-id').hide();
        }
    });
</script>
</html>