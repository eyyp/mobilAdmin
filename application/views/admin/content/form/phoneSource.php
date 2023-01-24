<form action = "<?php echo base_url('index.php/AdminPanel/phoneSourcedb')?>" method ="POST" >
    <?php 
        $this->load->view(component('form','input'),[
            'name'=>'imail',
            'type'=>'text',
            'label'=>$labels['telefonSorgulaIMEINo'],
            'placeholder'=>$labels['telefonSorgulaIMEINo'],
            'required'=>'required'
        ]);
         ?>
    <div class="form-group mb-0">
        <div>
            <button type="submit" class="btn btn-primary waves-effect waves-light">
                <?php echo $labels['telefonSorgulaButton']?>
            </button>
            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                Cancel
            </button>
        </div>
    </div>
</form>