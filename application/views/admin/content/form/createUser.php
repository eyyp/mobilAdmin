<form action = "<?php echo base_url("index.php/AdminPanel/createUserdb")?>" method ="POST" >
    <?php 
        $this->load->view(component('form','input'),[
            'name'=>'username',
            'type'=>'text',
            'label'=>'Kullanıcı adı',
            'placeholder'=>'Kullanıcı adı',
        ]);
        $this->load->view(component('form','input'),[
            'name'=>'password',
            'type'=>'text',
            'label'=>'Şifre',
            'placholder'=>'Şifre'
        ]); ?>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Yetkiler</label>
            <div>
                <?php foreach($links as $link){
                    $this->load->view(component('form','check'),[
                        'name'=>$link,
                        'checkLabel'=>$link,
                        'id'=>$link
                    ]);
                }
                ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Aktiflik</label>
            <div>
                <?php 
                    $this->load->view(component('form','check'),[
                        'name'=>'userActive',
                        'checkLabel'=>'Kullanıcı aktifliği',
                        'id'=>'userActive'
                    ]);
                ?>
            </div>
        </div>
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