<?php 
    //type = Zorunlu alertin tipini belirtir
    //strongText = Opsiyonle güçlü yazı oluşturmak için kullanılır
    //alertText = Opsiyonel mesajın texti 
?>
<div class="alert alert-<?php echo $type?>" role="alert">
    <?php echo isset($strongText) ?'<strong>'.$strongText.'</strong> ' :''?><?php echo isset($alertText) ? $alertText :'' ?>
</div>