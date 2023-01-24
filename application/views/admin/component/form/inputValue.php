<?php //situation-title-paragraf-label-id-required-size-name-type-value-paleceholder-inputProps-message-caution ?>
<div class="form-group <?php if(isset($situation)){echo 'has-'.$situation;} ?>">
    <?php if(isset($title)) { ?><h6 class="text-muted"><?php echo $title ?></h6><?php } ?>
    <?php if(isset($paragraf)) { ?><p class="text-muted mb-3"><?php echo $paragraf ?></p><?php } ?>
    <?php if(isset($label)) { ?> <label <?php if(isset($id)){ echo 'for="'.$id.'"';} ?> class="col-sm-2 col-form-label"><?php echo $label ?></label><?php }?>
    <div class="col-sm-10">
        <input 
            <?php echo isset($required) ? $required : ''?> 
            class="form-control <?php if(isset($size)){echo 'form-control-'.$size;} if(isset($situation)){echo 'form-control-'.$situation;} ?>" 
            <?php if(isset($name)){echo 'name="'.$name.'"';} ?> 
            <?php if(isset($type)){echo 'type="'.$type.'"';} ?>  
            <?php if(isset($placeholder)){echo 'placeholder="'.$placeholder.'"';} ?> 
            <?php if(isset($name)){echo 'id="'.$name.'"';} ?> 
            <?php if(isset($value)){ echo 'value="'.$value.'"';} ?>
            <?php if(isset($inputProps)){ foreach($inputProps as $prop){echo $prop;}} ?>>
        <?php if(isset($message)){ ?><div class="form-control-feedback"><?php echo $message ?></div><?php } ?>
        <?php if(isset($caution)){ ?><small class="form-text text-muted"><?php echo $caution ?></small><?php } ?>
    </div>
</div>