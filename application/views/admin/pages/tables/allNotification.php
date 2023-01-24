<?php $this->load->view(
                component('base','cardBody'),['content'=>
                component('tables','dataTables'),'data'=>[
                    'titles'=>['title','Bildirim İçeriği','Oluşturulma Tarihi'],
                    'rows'=>$veri,
                    'keys'=>['title','body','createDate'],
                    'buttons'=>[['title'=>'Edit','icon'=>'mdi mdi-square-edit-outline','file'=>'editNotification','buttonType'=>'success'],['title'=>'Sil','icon'=>'mdi mdi-trash-can-outline','file'=>'deleteNotification','buttonType'=>'danger']]
                    ]]) ?>