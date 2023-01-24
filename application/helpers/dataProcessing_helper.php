<?php

function kullaniciler($username,$password,$yetkiler,$durum,$token){
    return array(
        'uname'=>$username, 
		'password'=>md5($password), 
		'Yetki'=>$yetkiler, 
		'Active'=>$durum, 
		'token'=>$token, 
		'createDate'=>date("d-m-Y")
    );
}

function logData($type,$Moderator,$data,$table,$definition){
    return array(
        'type'=>$type,
        'Moderator'=>$Moderator,
        'createDate'=>date("d-m-Y"),
        'data'=>$data,
        'tables'=>$table,
        'definition'=>$definition
    );
}

function address($il,$ilce,$mahalle,$cadde,$sokak,$no,$Moderator,$operating){
    return array(
            'il'=>permalink($il),
            'ilçe'=>permalink($ilce),
            'mahalle' => permalink($mahalle),
            'cadde' => permalink($cadde),
            'sokak' => permalink($sokak),
            'no' => permalink($no),
            'createDate' =>date("d-m-Y"),
            'Moderator' => permalink($Moderator),
            'operating'=> permalink($operating)
    );
}

function kisi_kayit($Name,$Sorname,$dogumTarihi,$Moderator,$operating){
    return  array(
                'Name' => permalink($Name),
                'Sorname' => permalink($Sorname),
                'dogumTarihi' => $dogumTarihi,
                'insertDate' =>date("d-m-Y"),
                'Moderator' =>$Moderator,
                'operating' =>$operating
            );
}

function messages($uname,$message,$title){
    return  array(
                'uname'=> $uname,
                'createDate'=>date("d-m-Y"),
                'message' => $message,
                'tittle' => $title,
                'situation' => "true"
            );
}

function telefon_kayit($Marka,$Model,$imail,$Moderator,$operating){
    return  array('imail' => $imail,
            'Marka' => permalink($Marka),
            'Model' => permalink($Model),
            'insertDate' =>date("d-m-Y"),
            'Moderator' =>$Moderator,
            'operating' =>$operating
    );
}

function cements($Moderator,$text,$title,$situation,$file){
    return array(
        'Moderator'=>$Moderator,
        'createDate'=>date('d-m-Y'),
        'text'=>$text,
        'title'=>$title,
        'situation'=>$situation,
        'seflink'=>permalink($title),
        'file'=>$file
    );
}

function product($title,$companyName,$ImageUrl,$simillar,$colors,$category,$active,$exp,$property,$sss){
    return array(
        'title'=>$title,
        'companyName'=>$companyName,
        'see'=>0,
        'imageUrl'=>$ImageUrl,
        'colors'=>$colors,
        'similar'=>$simillar,
        'property'=>$property,
        'createDate'=>date('d-m-Y H:i:s'),
        'category'=>$category,
        'exp'=>$exp,
        'sss'=>$sss,
        'title-sef'=>permalink($title),
        'Active'=>$active
    );
}

function banner($title,$imageUrl){
    return array(
        'title'=>$title,
        'imageUrl'=>$imageUrl,
        'createDate'=>date('d-m-Y H:i:s'));
}


function notification($title,$body){
    return array(
        'title'=>$title,
        'body'=>$body,
        'createDate'=>date('d-m-Y H:i:s'));
}

function opportunity($title,$body,$imageUrl){
    return array(
        'title'=>$title,
        'body'=>$body,
        'createDate'=>date('d-m-Y H:i:s'),
        'imageUrl'=>$imageUrl
    );
}

