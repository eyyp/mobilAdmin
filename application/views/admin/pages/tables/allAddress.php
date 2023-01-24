<?php $this->load->view(
                component('base','cardBody'),['content'=>
                component('tables','responsive'),'data'=>[
                    'titles'=>['id','il','ilçe','mahalle','cadde','sokak','no','Moderator','İşletim sistemi'],
                    'rows'=>$veri,
                    'keys'=>['id','il','ilçe','mahalle','cadde','sokak','no','Moderator','operating'],
                    'buttons'=>[['title'=>'Edit','icon'=>'mdi mdi-square-edit-outline','file'=>'addressEdit','buttonType'=>'success'],['title'=>'Sil','icon'=>'mdi mdi-trash-can-outline','file'=>'addressDelete','buttonType'=>'danger']]
                ]])?>