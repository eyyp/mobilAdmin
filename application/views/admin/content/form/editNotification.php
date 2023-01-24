<form  action = "<?php echo base_url("index.php/AdminPanel/editNotificationdb/".$veri->id)?>" method ="POST">
    <div class="fallback">
        <?php 
            $this->load->view(component('form','input'),[
                'name'=>'title',
                'type'=>'text',
                'label'=>'Bildirim başlığı',
                'placeholder'=>$veri->title,
                'required' =>'required'
            ]);
            $this->load->view(component('form','input'),[
                'name'=>'body',
                'type'=>'text',
                'label'=>'Bildirim Mesajı',
                'placeholder'=>$veri->body,
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