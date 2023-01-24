<div class="table-rep-plugin">
    <div class="table-responsive b-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
                <tr>
                    <?php if(!empty($titles)) { foreach($titles as $title) {?>
                        <th><?php echo $title; ?></th>
                    <?php }} ?>
                    <?php if(!empty($buttons)){ echo '<th>İşlemler</th>'; } ?>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($rows)) { 
                    foreach($rows as $datas) { ?>
                    <tr>
                        <?php { foreach($datas as $key=>$data) {
                             if(array_search($key,$keys)>-1){
                                echo '<td>'.$data.'</td>';
                            }
                        }}?>
                        <?php if(!empty($buttons)){?>
                            <td>
                            <?php foreach($buttons as $button){ ?>
                                <a href="<?php echo base_url('index.php/AdminPanel/'.$button['file'].'/'.$datas->id.'')?>" class="btn btn-<?php echo isset($button['buttonType']) ? $button['buttonType'] :'secondary' ?>"><i class="<?php echo $button['icon'];?>"></i> <?php echo $button['title'];?></a>
                            <?php }} ?>
                            </td>
                    </tr>
                <?php }} ?>
            </tbody>
        </table>
    </div>
</div>