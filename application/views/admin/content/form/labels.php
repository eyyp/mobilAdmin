<?php echo form_open_multipart(base_url("index.php/AdminPanel/labeldb"));?>
<form action = "<?php echo base_url("index.php/AdminPanel/labeldb")?>" method ="POST" >
        <div class="fallback">
        <?php 
            $this->load->view(component('form','input'),[
                'name'=>'icon',
                'type'=>'file',
                'label'=>'Siteicon',
                'id'=>'icon',
                'inputProps'=>['multiple="multiple"']
            ]);?>
        </div>
        <?php 
        foreach($labels as $keyLabel => $label){
            $this->load->view(component('form','inputValue'),[
                'name'=>$keyLabel,
                'type'=>'text',
                'label'=>$keyLabel,
                'value'=>$label,
                'required'=>'required'
            ]);
        }
         ?>
    <div class="form-group mb-0">
        <div>
            <button type="submit" class="btn btn-primary waves-effect waves-light">
                Submit
            </button>
            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                Cancel
            </button>
        </div>
    </div>
</form>