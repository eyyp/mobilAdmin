<?php $this->load->view(
                component('base','cardBody'),['content'=>
                component('tables','dataTables'),'data'=>[
                    'titles'=>[$labels['enSonEklenenTelefonlarMarka'],$labels['enSonEklenenTelefonlarEklenmeTarihi'],$labels['enSonEklenenTelefonlarIMEI'],$labels['enSonEklenenTelefonlarEklenmeTarihi'],$labels['enSonEklenenTelefonlarModerator'],$labels['sonEklenenTelefonlaroperating']],
                    'rows'=>$veri,
                    'keys'=>['Marka','Model','imail','insertDate','Moderator','operating'],
                    'buttons'=>[['title'=>$labels['enSonEklenenTelefonlarEditButton'],'icon'=>'mdi mdi-square-edit-outline','file'=>'phoneEdit','buttonType'=>'success']]
                ]])?>