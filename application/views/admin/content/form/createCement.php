<?php echo form_open_multipart(base_url("index.php/AdminPanel/createCementdb"));?>
    <form  action = "<?php echo base_url("index.php/AdminPanel/createCementdb")?>" method ="POST" >
        <div class="fallback">
        <?php 
            $this->load->view(component('form','input'),[
                'name'=>'cementImage',
                'type'=>'file',
                'label'=>'Duyuru Resmi',
                'id'=>'cementImage',
                'inputProps'=>['multiple="multiple"']
            ]);?>
        </div>
    <?php 
        $this->load->view(component('form','input'),[
            'name'=>'title',
            'type'=>'text',
            'label'=>'Duyuru Başlığı',
            'placeholder'=>'Başlık',
        ]);?>

        <?php $this->load->view(component('form','area'),[
            'name'=>'text',
            'ckeditor'=>'true',
            'label'=>'Duyuru içeriği'
        ]); ?>

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
