<?php $this->load->view(
                component('base','cardBody'),['content'=>
                component('tables','responsive'),'data'=>[
                    'titles'=>['Kullanıcı Adı','Oluşturm Tarihi','Mesaj','Başlığı','Durumu'],
                    'rows'=>$veri,
                    'keys'=>['uname','createDate','message','tittle','situation'],
                    'buttons'=>[['title'=>'Edit','icon'=>'mdi mdi-square-edit-outline','file'=>'editMessage','buttonType'=>'success'],['title'=>'Sil','icon'=>'mdi mdi-trash-can-outline','file'=>'deleteMessage','buttonType'=>'danger']]
                ]])?>