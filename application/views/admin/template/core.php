<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view(component('base','head')); ?>
    <body>
        <?php $this->load->view(pages($pagesFile,$mainContant))?>
        <?php $this->load->view(component('base','scriptsAdd'))?>
    </body>
</html>