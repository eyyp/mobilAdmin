<form action = "<?php echo base_url('index.php/AdminPanel/personEditdb/'.$veri->id)?>" method ="POST" >
    <?php 
        $this->load->view(component('form','input'),[
            'name'=>'Name',
            'type'=>'text',
            'label'=>'Ad',
            'placeholder'=>$veri->Name,
            'required'=>'required'
        ]);
        $this->load->view(component('form','input'),[
            'name'=>'Sorname',
            'type'=>'text',
            'label'=>'Soyad',
            'placholder'=>$veri->Sorname,
            'required'=>'required'
        ]); 
        $this->load->view(component('form','select'),[
            'name'=>'day',
            'label'=>'Gün',
            'placholder'=>'Gün',
            'value'=>$days,
            'required'=>'required'
        ]); 
        $this->load->view(component('form','select'),[
            'name'=>'mount',
            'label'=>'Ay',
            'placholder'=>'Ay',
            'value'=>$mounts,
            'required'=>'required'
        ]);
            $this->load->view(component('form','input'),[
                'name'=>'year',
                'type'=>'text',
                'label'=>'Yıl',
                'placeholder'=>'Yıl',
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