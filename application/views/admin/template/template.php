<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view(component('base','head')); ?>
    <body>
        <!-- Begin page -->
        <div id="wrapper">
            <?php $this->load->view(component('base','tabBar')); ?>
            <?php $this->load->view(component('base','leftSideBar')); ?>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <?php $this->load->view(component('menu','pageTitleBox')) ?>
                        <?php $this->load->view(pages($pagesFile,$mainContant))?>
                    </div>
                </div>
                <?php $this->load->view(component('base','footer'))?>
            </div>
        </div>
        <?php $this->load->view(component('base','scriptsAdd'))?>
    </body>
</html>