<?php
    if(isset($veri)){ ?>
        <div class="row">
    <?php foreach($veri as $mesaj){ 
            $this->load->view(component('uielements','QCard'),$mesaj); 
        } ?>
        </div>
<?php  }
    else{
        echo '<p class="sub-title">Hiç mesaj bulunmamaktadır</p>';
    }
?>