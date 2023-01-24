<div class="col-xl-4">
    <div class="card">
        <?php if(isset($uname)){ echo '<div class="card-header">'.$uname.'</div>'; }?>
        <div class="card-body">
            <blockquote class="card-bodyquote">
                <?php if(isset($message)) { echo '<p>'.$message.'</p>'; } ?>
                <footer class="blockquote-footer font-12">
                   <?php if(isset($tittle)) { echo '<cite title="Source Title">'.$tittle.'</cite>'; } ?>
                </footer>
            </blockquote>
        </div>
    </div>
</div>