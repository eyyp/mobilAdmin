
<?php 
    // type = Zorunlu text-search-email-url-tel-password-number-(datetime-local)-date-month-week-time-color-null 
    // for = Opsiyonel type
    // label = Opsiyonel labelverisi
    // value = Opsiyonel input value
    // placeholder = Opsiyonel input placeholder
    // message = Opsiyonel büyük punto message
    // caution = Opsiyonel küçük dikkat yazısı
    // situation = Opsiyonel danger-warning-success parametreleri ile inputu belirler 
    // size = Opsiyonel sm-lg inputun boyutunu belirler
    // selected = Opsiyonel selectde seçili elemanı belirtmek için 
    // name = Opsiyonel ama veri çekilemez kesinlikle eklenmelidir. eklenen elementin name'ni içerir
    // inputProps = Opsiyonel tüm propslar dizi olarak verilmelidir.
    // colorInput = Opsiyonel inputu color seçme türe çeker
    // title = title için
    // textLabel textLabel için
    // id olmak zorundadır 
    ?>

    <?php if(isset($title)) { ?><h6 class="text-muted"><?php echo $title ?></h6><?php } ?>
    <?php if(isset($paragraf)) { ?><p class="text-muted mb-3"><?php echo $paragraf ?></p><?php } ?>
    <div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" <?php if(isset($name)) { echo 'name='.$name; }?> class="custom-control-input" <?php if(isset($id)){ echo 'id="'.$id.'"';}?> data-parsley-multiple="groups" data-parsley-mincheck="2" <?php echo (isset($checked) ? ($checked ? 'checked' :''):'') ?>>
            <?php if(isset($checkLabel)){ ?> <label class="custom-control-label" <?php if(isset($id)) { echo 'for='.$id; } ?>><?php echo $checkLabel ?></label><?php } ?>
        </div>
    </div>
    <?php if(isset($message)){ ?> <div class="form-control-feedback"><?php echo $message;?></div> <?php } ?>
    <?php if(isset($caution)){ ?> <small class="form-text text-muted"><?php echo $caution; ?></small> <?php } ?>