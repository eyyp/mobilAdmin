<?php $this->load->view(
                component('base','cardBody'),['content'=>
                component('tables','responsive'),'data'=>[
                    'titles'=>['Kullanıcı Adı','Sifresi','Yetkileri','Durumu','Açılma Tarihi'],
                    'rows'=>$veri,
                    'keys'=>['uname','password','Yetki','Active','createDate'],
                    'buttons'=>[['title'=>'Edit','icon'=>'mdi mdi-square-edit-outline','file'=>'editUser','buttonType'=>'success'],['title'=>'Mesajları','icon'=>'ion ion-md-chatbubbles','file'=>'userMessages','buttonType'=>'primary'],['title'=>'Sil','icon'=>'mdi mdi-trash-can-outline','file'=>'userDelete','buttonType'=>'danger']]
                ]])?>
               