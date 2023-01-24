<?php $this->load->view(
                component('base','cardBody'),['content'=>
                component('tables','responsive'),'data'=>[
                    'titles'=>['id','Ad','Soyad','dogumTarihi','insertDate','Moderator','oparating'],
                    'rows'=>$veri,
                    'keys'=>['id','Name','Sorname','dogumTarihi','insertDate','Moderator','operating'],
                    'buttons'=>[['title'=>'Edit','icon'=>'mdi mdi-square-edit-outline','file'=>'personEdit','buttonType'=>'success'],['title'=>'Sil','icon'=>'mdi mdi-trash-can-outline','file'=>'personDelete','buttonType'=>'danger']]
                ]])?>