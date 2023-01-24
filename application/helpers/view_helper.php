<?php 

function component($file = 'base',$page='head'){
    $pages = 'component/';
    return path($file.'/'.$page,$pages); 
}

function pages($file,$page = 'index'){
    $pages = 'pages/';
    if(isset($file)){
        $page=$file.'/'.$page;
    }
    return path($page,$pages);
}

function path($fileName = 'index',$path = 'component/'){
    $basePath='admin/';
    return $basePath.$path.$fileName;
}

function content($file,$page){
    $pages = 'content/';
    if(isset($file)){
        $page=$file.'/'.$page;
    }
    return path($page,$pages);
}
?>