<?php 
    // situation = Opsiyonel danger-warning-success parametreleri ile inputu belirler 
    // title = title için 
    // paragraf = paragraf yazısı 
    // label = Opsiyonel label verisi
    // for = Opsiyonel id 
    // required = Opsiyonel required
    // name = Opsiyonel ama veri çekilemez kesinlikle eklenmelidir. Eklenen elementin name'ni içerir  
    // id = id değerini belirtir 
    // type = Zorunlu text-search-email-url-tel-password-number-(datetime-local)-date-month-week-time-color-null 
    // value = Opsiyonel input value 
    // placeholder = Opsiyonel input placeholder 
    // message = Opsiyonel büyük punto message 
    // caution = Opsiyonel küçük dikkat yazısı 
    // size = Opsiyonel sm-lg inputun boyutunu belirler. 
    // selected = Opsiyonel selectde seçili elemanı belirtmek için 
    // inputProps = Opsiyonel tüm propslar dizi olarak verilmelidir. 
    // colorInput = Opsiyonel inputu color seçme türe çeker.  
    ?>
<div class="form-group row <?php if(isset($situation)){echo 'has-'.$situation;} ?>">
    <?php if(isset($title)) { ?><h6 class="text-muted"><?php echo $title ?></h6><?php } ?>
    <?php if(isset($paragraf)) { ?><p class="text-muted mb-3"><?php echo $paragraf ?></p><?php }?>
    <?php if(isset($label)) { ?><label <?php if(isset($id)){ echo 'for="'.$id.'"';} ?> class="col-sm-2 col-form-label"><?php echo $label ?></label><?php }?>
    <div class="col-sm-10">
        <select <?php echo isset($required) ? $required : '' ?><?php if(isset($name)){ ?> name="<?php echo $name ?>"<?php } ?> <?php if(isset($id)){ ?> id="<?php echo $id ?>" <?php }?> class="custom-select <?php if(isset($situation)){ echo 'has-'.$situation;}?>">
            <?php if(isset($selected)) { ?><option selected><?php echo $selected ?></option><?php }
           if(isset($value)) foreach($value as $element){
            ?>
                <option value="<?php echo $element ?>"><?php echo $element ?></option>
            <?php } ?>
        </select>
        <?php if(isset($message)){ ?><div class="form-control-feedback"><?php echo $message; ?></div><?php } ?>
        <?php if(isset($caution)){ ?><small class="form-text text-muted"><?php echo $caution ?></small><?php } ?>
    </div>
</div>