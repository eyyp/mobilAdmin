<div class="row">
    <?php if(isset($veri)) foreach($veri as $card){
        $this->load->view(component('uielements','cementCard'),$card);
    } ?>
</div>