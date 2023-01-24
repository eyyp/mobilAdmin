<?php /*$url = explode('/',$_SERVER['REQUEST_URI']);
    if(array_search($url[3].'/'.$url[4],$powers)>-1){
        
    }else{
        redirect('index.php/Administrator/Exit');
    }*/
    ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?php echo isset($labels['title']) ? $labels['title'] : '';?></title>
    <meta content="kayıt" name="description" />
    <meta content="kayıt" name="author" />
    <link rel="shortcut icon" href="<?php echo isset($labels['icon']) ? base_url('uploads/'.$labels['icon']):'';?>">

    <link href="<?php echo base_url("assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css")?>" rel="stylesheet" />

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/plugins/morris/morris.css"); ?>">

    <!-- Dropzone css -->
    <link href="<?php echo base_url("assets/plugins/dropzone/dist/dropzone.css"); ?>" rel="stylesheet" type="text/css">
    <!-- Table css -->
    <link href="<?php echo base_url("assets/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css") ?>" rel="stylesheet" type="text/css" media="screen">

    <!-- DataTables -->
    <link href="<?php echo base_url("assets/plugins/datatables/dataTables.bootstrap4.min.css")?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/plugins/datatables/buttons.bootstrap4.min.css")?>" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url("assets/plugins/datatables/responsive.bootstrap4.min.css")?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets/css/metismenu.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets/css/icons.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets/css/style.css") ?>" rel="stylesheet" type="text/css">
</head>