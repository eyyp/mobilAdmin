
<div class="accountbg"></div>
<div class="wrapper-page">
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-lg-5">
            <?php if(array_search('AdminPanel/android',$powers)) { ?>
                <div class="card card-pages shadow-none ">
                    <div class="card-body">
                        <div class="text-center mt-0 mb-3">
                            <a href="<?php echo base_url('index.php/AdminPanel/operating/android')?>" class="logo logo-admin">
                            <p class="text-muted w-75 mx-auto mb-4 mt-4"><?php echo isset($labels['android']) ? $labels['android'] :'' ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if(array_search('AdminPanel/ios',$powers)) { ?>
                <div class="card card-pages shadow-none ">
                    <div class="card-body">
                        <div class="text-center mt-0 mb-3">
                            <a href="<?php echo base_url('index.php/AdminPanel/operating/ios')?>" class="logo logo-admin">
                            <p class="text-muted w-75 mx-auto mb-4 mt-4"><?php echo isset($labels['ios']) ? $labels['ios'] : '' ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>