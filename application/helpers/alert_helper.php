<?php 
//primary-success-info-warning-danger-secondary-light-dark
function alert($type,$message){
    return '<div class="alert '.(isset($type) ? ('alert-'.$type):'').'" role="alert">'.
                (isset($message) ? $message :'').
            '</div>';
}