<?php $this->load->view(
                component('base','cardBody'),['content'=>
                component('tables','dataTables'),'data'=>[
                    'titles'=>['Başlık','Açıklama','Oluşturulma Tarihi','Görsel'],
                    'rows'=>$veri,
                    'keys'=>['title','body','createDate','imageUrl'],
                    'buttons'=>[['title'=>'Edit','icon'=>'mdi mdi-square-edit-outline','file'=>'editOpportunity','buttonType'=>'success'],['title'=>'Sil','icon'=>'mdi mdi-trash-can-outline','file'=>'deleteOpportunity','buttonType'=>'danger']]
                ]]) ?>