<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <!-- Meta title & meta -->
    <?php print app('meta')->render(); ?>

    <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                color: #000000;
            }

            .title {
                font-size: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .footer {
                position:fixed;
                width:100%;
                height:20px;
                padding:5px;
                bottom:0px;
                font-size: smaller;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <!-- Laravel variables for js -->
        <script> window.Laravel = {"locale":"en"}</script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

                <div class="top-right links">
                  

                    <?php if(Route::has('login')): ?>
                        <?php if(!Auth::check()): ?>
                            <?php if(config('auth.users.registration')): ?>
                            
                            <?php endif; ?>
                            <a href="<?php echo e(url('/login')); ?>">Masuk</a>
                        <?php else: ?>
                            <?php if(auth()->user()->hasRole('administrator')): ?>
                                <a href="<?php echo e(url('/admin')); ?>">Dashboard</a>
                            <?php endif; ?>
                            <a href="<?php echo e(url('/logout')); ?>">Keluar</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

            <div class="content">
                <?php echo $__env->yieldContent('content'); ?>
                <div class="footer">
                    by fikri aulia || Informatika UII 2013
                </div>
            </div>
        </div>
    </body>
</html>
