<div class="page-title-box">
    <div class="row align-items-center ">
        <div class="col-md-8">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
                <ol class="breadcrumb">
                    <?php if(isset($crumbs)) { 
                            foreach($crumbs as $key=>$crumb) { ?>
                                <li class ="<?php echo isset($key) == 'active' ? 'breadcrumb-item-active' : 'breadcrumb-item' ?>">
                                    <a href ="<?php echo base_url('"index.php/Administrator/'.$crumb.'"')?>"><?php echo $crumb ?></a>
                                </li>
                            <?php } ?>
                    <?php } ?>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page-title -->