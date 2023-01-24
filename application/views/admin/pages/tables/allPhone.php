<?php $this->load->view(
                component('base','cardBody'),['content'=>
                component('tables','dataTables'),'data'=>[
                    'titles'=>['id','Marka','Model','İmeil','Kayıt Tarihi','Moderator','İşetim Sistemi'],
                    'rows'=>$veri,
                    'keys'=>['id','Marka','Model','imail','insertDate','Moderator','operating'],
                    'buttons'=>[['title'=>'Edit','icon'=>'mdi mdi-square-edit-outline','file'=>'phoneEdit','buttonType'=>'success'],['title'=>'Sil','icon'=>'mdi mdi-trash-can-outline','file'=>'phoneDelete','buttonType'=>'danger']]
                ]])?>