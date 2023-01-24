<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title"><?php echo isset($pageTitle) ? $pageTitle:'' ?></h4>
                <p class="sub-title"><?php echo isset($pageParagraf) ? $pageParagraf : '' ?></p>
                <?php echo $this->session->flashdata('data');echo $this->session->flashdata('conclusion')?>
                <?php $this->load->view($content,$data);?>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->