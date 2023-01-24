<form action = "<?php echo base_url("index.php/AdminPanel/personSourcedb")?>" method ="POST" >
    <?php 
        $this->load->view(component('form','input'),[
            'name'=>'Name',
            'type'=>'text',
            'label'=>$labels['kisiSorgulaAd'],
            'placeholder'=>$labels['kisiSorgulaAd'],
            'required'=>'required'
        ]);
        $this->load->view(component('form','input'),[
            'name'=>'Sorname',
            'type'=>'text',
            'label'=>$labels['kisiSorgulaSoyad'],
            'placholder'=>$labels['kisiSorgulaSoyad'],
            'required'=>'required'
        ]); 
        $this->load->view(component('form','select'),[
            'name'=>'day',
            'label'=>$labels['kisiSorgulaGun'],
            'placholder'=>$labels['kisiSorgulaGun'],
            'value'=>$days,
            'required'=>''
        ]); 
        $this->load->view(component('form','select'),[
            'name'=>'mount',
            'label'=>$labels['kisiSorgulaAy'],
            'placholder'=>$labels['kisiSorgulaAy'],
            'value'=>$mounts,
            'required'=>''
        ]);
            $this->load->view(component('form','input'),[
                'name'=>'year',
                'type'=>'text',
                'label'=>$labels['kisiSorgulaYıl'],
                'placeholder'=>$labels['kisiSorgulaYıl'],
                'required'=>''
            ]); 
         ?>
    <div class="form-group mb-0">
        <div>
            <button type="submit" class="btn btn-primary waves-effect waves-light">
                <?php echo $labels['kisiSorgulaButton'];?>
            </button>
            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                Cancel
            </button>
        </div>
    </div>
</form>