<?php echo form_open_multipart(base_url("index.php/AdminPanel/editProductdb/".$veri->id));?>
    <form  action = "<?php echo base_url("index.php/AdminPanel/editProductdb/".$veri->id)?>" method ="POST">
        <div class="fallback">
            <?php 
                $this->load->view(component('form','input'),[
                    'name'=>'title',
                    'type'=>'text',
                    'label'=>'Ürün Başlığı',
                    'placeholder'=>$veri->title,
                    'required' =>'required'
                ]);
                $this->load->view(component('form','input'),[
                    'name'=>'image',
                    'type'=>'file',
                    'label'=>'Ürün Görseli',
                    'placeholder'=>'',
                    'required' =>'required'
                ]);
                $this->load->view(component('form','input'),[
                    'name'=>'companyName',
                    'type'=>'text',
                    'label'=>'Marka Adı',
                    'placeholder'=>$veri->companyName,
                    'required' =>'required'
                ]);
                $this->load->view(component('form','select'),[
                    'name'=>'category',
                    'label'=>'Kategori',
                    'placholder'=>'Kategori',
                    'value'=>['Motor','Lastik','Yedek Parça','Kask','Mont',],
                    'required'=>'required'
                ]);
                $this->load->view(component('form','input'),[
                    'name'=>'simillar',
                    'label'=>'Benzer Ürünler',
                    'placholder'=>$veri->similar,
                    'message'=>'Lütfen ürün isimlerini birebir giriniz. Ürün isimleri arasına virgül atınız lütfen',
                    'required'=>'required'
                ]);
            ?>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Renk Seçenkleri</label>
                <div>
                    <?php foreach($colors as $color){
                        $this->load->view(component('form','check'),[
                            'name'=>permalink($color),
                            'checkLabel'=>$color,
                            'id'=>$color,
                            'message'=>'',
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
                            'name'=>'productActive',
                            'checkLabel'=>'',
                            'id'=>'productActive'
                        ]);
                    ?>
                </div>
            </div>

            <?php $this->load->view(component('form','area'),[
                'name'=>'exp',
                'ckeditor'=>'true',
                'label'=>'Ürün Açıklması',
                'value'=>$veri->exp,
                'message'=>''
            ]); ?>
            <?php $this->load->view(component('form','area'),[
                'name'=>'productProperty',
                'ckeditor'=>'true',
                'label'=>'Ürün Özellikleri',
                'value'=>$veri->property,
                'message'=>''
            ]); ?>
            <?php $this->load->view(component('form','area'),[
                'name'=>'sss',
                'ckeditor'=>'true',
                'label'=>'Ürün Sıkça Sorulan Sorula',
                'value'=>$veri->sss,
                'message'=>''
            ]); ?>
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