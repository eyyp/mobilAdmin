<div class="accountbg"></div>

    <div class="wrapper-page">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5">
                    <div class="card card-pages shadow-none mt-4">
                        <div class="card-body">
                            <div class="text-center mt-0 mb-3">
                                <a href="index.html" class="logo logo-admin">
                                    <img src="<?php echo isset($labels['icon']) ? base_url('uploads/'.$labels['icon']):'';?>" class="mt-3" alt="" height="26"></a>
                                <p class="text-muted w-75 mx-auto mb-4 mt-4"><?php echo isset($labels['loginParagraf']) ? $labels['loginParagraf']:'' ?></p>
                            </div>
                                <?php echo validation_errors(); ?>
                                <?php echo $this->session->flashdata('hata'); ?>
                            <form class="form-horizontal mt-4" method="POST" action="<?php echo base_url("index.php/Administrator/login")?>">

                                <div class="form-group">
                                    <div class="col-12">
                                        <label for="username"><?php echo isset($labels['loginUserLabel']) ? $labels['loginUserLabel'] :'' ?></label>
                                        <input class="form-control" name="username" type="text" id="username" placeholder="<?php echo isset($labels['loginUserLabel']) ? $labels['loginUserLabel'] :''; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-12">
                                        <label for="password"><?php echo isset($labels['loginForgotLabel']) ? $labels['loginPaswordLabel'] :''; ?></label>
                                        <input class="form-control" name="password" type="password" id="password" placeholder="<?php echo isset($labels['loginPasswordLabel']) ? $labels['loginPasswordLabel'] :''?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-12">
                                        <div class="checkbox checkbox-primary">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Beni hatırla</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group text-center mt-3">
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Giriş</button>
                                    </div>
                                </div>

                                <?php if(isset($loginForgotLabel)){ ?>
                                <div class="form-group text-center mt-4">
                                    <div class="col-12">
                                        <div class="float-left">
                                            <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock mr-1"></i><?php echo isset($loginForgotLabel) ? $loginForgotLabel :''?> </a>
                                        </div>
                                        <div class="text-right">
                                            <a href="pages-register.html" class="text-muted"><?php echo isset($logincreateLabel)? $logincreateLabel :'' ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </form>

                        </div>

                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
    </div>