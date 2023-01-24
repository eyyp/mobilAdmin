<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <?php if(isset($titles)) { foreach($titles as $title) {?>
                <th><?php echo $title; ?></th>
            <?php }} ?>
            <?php if(isset($buttons)){ echo '<th>İşlemler</th>'; } ?>
        </tr>
    </thead>
    <tbody>
        <?php if(isset($rows) && !empty($rows)) { 
            foreach($rows as $datas) { ?>
            <tr>
                <?php if(isset($datas)) { foreach($datas as $key=>$data) {
                    if(array_search($key,$keys)>-1){
                    echo '<td>'.$data.'</td>';
                }}}?>
                <?php if(isset($buttons)){?>
                    <td>
                    <?php foreach($buttons as $button){ ?>
                        <a href="<?php echo base_url('index.php/AdminPanel/'.$button['file'].'/'.$datas->id.'')?>" class="btn btn-<?php echo isset($button['buttonType']) ? $button['buttonType'] :'secondary' ?>"><i class="<?php echo $button['icon'];?>"></i> <?php echo $button['title'];?></a>
                    <?php }} ?>
                    </td>
            </tr>
        <?php }} ?>
    </tbody>
</table>