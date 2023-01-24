<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h4 class="mt-0 header-title"><?php echo isset($title) ? $title : '';?></h4>
            <div class="">
                <img src="<?php echo isset($file) ? base_url('uploads/'.$file) :'' ?>" class="img-fluid" alt="Responsive image">
            </div>
            <p class="sub-title"><?php echo isset($text) ? $text : ''; ?></p>
        </div>
    </div>
</div>