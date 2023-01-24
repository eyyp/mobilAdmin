<table class="table table-striped mb-0">
    <thead>
        <tr>
            <?php if(isset($titles)){ foreach($titles as $title){?>
                <th><?php echo $title ?></th>
            <?php }} ?>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>asdfasdf</td>
        </tr>
        <?php if(isset($rows)){ foreach($rows as $datas){?>
                <tr>
                    <?php foreach($datas as $data){?>
                        <td>
                            <a href="#" id="inline-username" data-type="text" data-pk="1" ><?php echo $data ?></a>
                        </td>
                    <?php } ?>  
                </tr>
            <?php }} ?>
    </tbody>
</table>