<?php $this->load->view(
                component('base','cardBody'),['content'=>
                component('tables','dataTables'),'data'=>[
                    'titles'=>['title','Marka Adı','Görülme Sayısı','Resim Adresi','Renkler','Benzer Ürünler','Özellikleri','Oluşturulma Tarihi','Kategorisi','Açıklama','Sıkça Sorulan Sorular','Active'],
                    'rows'=>$veri,
                    'keys'=>['title','companyName','see','imageUrl','colors','createDate','similar','property','createDate','category','exp','sss','Active'],
                    'buttons'=>[['title'=>'Edit','icon'=>'mdi mdi-square-edit-outline','file'=>'editProduct','buttonType'=>'success'],['title'=>'Sil','icon'=>'mdi mdi-trash-can-outline','file'=>'deleteProduct','buttonType'=>'danger']]
                ]])?>