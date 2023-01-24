<?php $this->load->view(
                component('base','cardBody'),['content'=>
                component('tables','dataTables'),'data'=>[
                    'titles'=>['il','ilce','mahalle','cadde','sokak','no','İşletim sistemi'],
                    'rows'=>$veri,
                    'keys'=>['il','ilçe','mahalle','cadde','sokak','no','operating'],
                    'buttons'=>[['title'=>'Edit','icon'=>'mdi mdi-square-edit-outline','file'=>'addressEdit','buttonType'=>'success']]
                ]])?>