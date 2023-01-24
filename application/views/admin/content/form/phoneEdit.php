<form action = "<?php echo base_url('index.php/AdminPanel/phoneEditdb/'.$veri->id)?>" method ="POST" >
    <?php 
        $this->load->view(component('form','input'),[
            'name'=>'marka',
            'type'=>'text',
            'label'=>'Marka',
            'placeholder'=>$veri->Marka,
            'required'=>'required'
        ]);
        $this->load->view(component('form','input'),[
            'name'=>'model',
            'type'=>'text',
            'label'=>'Model',
            'placholder'=>$veri->Model,
            'required'=>'required'
        ]);
        $this->load->view(component('form','input'),[
            'name'=>'imail',
            'type'=>'text',
            'label'=>'İmeil',
            'placholder'=>$veri->imail,
            'required'=>'required'
        ]);  

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