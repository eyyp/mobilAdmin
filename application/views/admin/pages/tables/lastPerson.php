<?php $this->load->view(
                component('base','cardBody'),['content'=>
                component('tables','dataTables'),'data'=>[
                    'titles'=>[$labels['enSonEklenenKisilerAd'],$labels['enSonEklenenKisilerSoyad'],$labels['enSonEklenenKisilerDogumTarihi'],$labels['enSonEklenenKisilerEklenmeTarihi'],$labels['enSonEklenenKisilerModerator'],$labels['enSonEklenenKisileroperating']],
                    'rows'=>$veri,
                    'keys'=>['Name','Sorname','dogumTarihi','insertDate','Moderator','operating'],
                    'buttons'=>[['title'=>$labels['enSonEklenenKisilerEditButton'],'icon'=>'mdi mdi-square-edit-outline','file'=>'personEdit','buttonType'=>'success']]
                ]])?>