<?php $this->load->view(
                component('base','cardBody'),['content'=>
                component('tables','dataTables'),'data'=>[
                    'titles'=>['title','Dosya Adı','Oluşturulma Tarihi',],
                    'rows'=>$veri,
                    'keys'=>['title','imageUrl','createDate'],
                    'buttons'=>[['title'=>'Sil','icon'=>'mdi mdi-trash-can-outline','file'=>'deleteBanner','buttonType'=>'danger']]
                ]])?>