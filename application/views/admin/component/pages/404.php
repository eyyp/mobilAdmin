<div class="error-bg"></div>

<!-- Begin page -->
<div class="home-btn d-none d-sm-block">
    <a href="<?php echo base_url("index.php/Administrator/index")?>" class="text-white"><i class="mdi mdi-home h1"></i></a>
</div>

<div class="wrapper-page">

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5">
                <div class="card card-pages shadow-none mt-4">

                    <div class="text-center p-3">

                        <div class="img">
                            <img src="assets/images/error.png" class="img-fluid" alt="">
                        </div>

                        <h1 class="error-page mt-5"><span>404!</span></h1>
                        <h4 class="mb-4 mt-5"><?php echo $heading?></h4>
                        <p class="mb-4 w-75 mx-auto"><?php echo $message?></p>
                        <a class="btn btn-primary mb-4 waves-effect waves-light" href="<?php echo base_url("index.php/Administrator/index")?>"><i class="mdi mdi-home"></i>Dashboard'a Git</a>
                    </div>

                </div>

            </div>
        </div>
        <!-- end row -->
    </div>
</div>
