<?php echo form_open_multipart(base_url("index.php/AdminPanel/addOpportunitydb"));?>
    <form  action = "<?php echo base_url("index.php/AdminPanel/addOpportunitydb")?>" method ="POST">
        <div class="fallback">
            <?php 
                $this->load->view(component('form','input'),[
                    'name'=>'title',
                    'type'=>'text',
                    'label'=>'Başlık',
                    'placeholder'=>'Başlık',
                    'required' =>'required'
                ]);
                $this->load->view(component('form','input'),[
                    'name'=>'body',
                    'type'=>'text',
                    'label'=>'Açıklama',
                    'placeholder'=>'Açıklama',
                    'required' =>'required'
                ]);
                $this->load->view(component('form','input'),[
                    'name'=>'image',
                    'type'=>'file',
                    'label'=>'Görsel',
                    'placeholder'=>'Görsel',
                    'required' =>'required'
                ]);
            ?>
        </div>  
        <div class="form-group mb-10">
            <div>
                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                    İptal
                </button>
                <button type="submit" class="btn btn-primary waves-effect waves-light">
                    Gönder
                </button>
            </div>
        </div>
    </form>