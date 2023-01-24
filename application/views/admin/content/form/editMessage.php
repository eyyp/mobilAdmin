<form class = "" action = "<?php echo base_url('index.php/AdminPanel/editMessagedb/'.$veri->id) ?>" method ="POST" >
<?php 
        $this->load->view(component('form','input'),[
            'name'=>'title',
            'type'=>'text',
            'label'=>'Title',
            'inputProps'=>['required'],
            'placeholder'=>$veri->tittle
        ]); ?>
    <?php 
        $this->load->view(component('form','input'),[
            'name'=>'message',
            'type'=>'text',
            'label'=>'Mesaj',
            'inputProps'=>['required'],
            'placeholder'=>$veri->message
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