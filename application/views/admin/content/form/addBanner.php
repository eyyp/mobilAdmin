<?php echo form_open_multipart(base_url("index.php/AdminPanel/addBannerdb"));?>
    <form  action = "<?php echo base_url("index.php/AdminPanel/addBannerdb")?>" method ="POST">
        <div class="fallback">
            <?php 
                $this->load->view(component('form','input'),[
                    'name'=>'title',
                    'type'=>'text',
                    'label'=>'Banner Başlığı',
                    'placeholder'=>'Banner Başlığı',
                    'required' =>'required'
                ]);
                $this->load->view(component('form','input'),[
                    'name'=>'image',
                    'type'=>'file',
                    'label'=>'Banner Görseli',
                    'placeholder'=>'Banner Görseli',
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