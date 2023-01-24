<label><?php echo isset($label) ? $label : '' ?></label>
<?php 
    $this->load->view(component('form','input'),[
        'type'=>'text',
        'inputProps'=>['data-mask="'.$mask.'"']
    ])
?>
<span class="font-13 text-muted"><?php echo isset($span) ? $span : '' ?></span>