<?php 
$this->load->view(
                component('base','cardBody'),['content'=>
                component('tables','responsive'),'data'=>[
                    'titles'=>['Tipi','Moderator','oluşturulma Tarihi','Tablosu','Tanımı'],
                    'rows'=>$veri,
                    'keys'=>['type','Moderator','createDate','tables','definition']
                ]]) ?>