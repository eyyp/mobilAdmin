<div class="col-xl-6">
    <div class="card">
        <div class="card-body">
            <h4 class="mt-0 header-title mb-4">Son Eklenen Apple Kişi</h4>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Ad</th>
                            <th scope="col">Soyad</th>
                            <th scope="col">Doğum Tarihi</th>
                            <th scope="col">Moderator</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- start 1 -->
                        <?php foreach($veri->lastPersonApple as $rows){?>
                        <tr>
                            <?php foreach($rows as $row){
                                echo '<td>'.$row.'</td>';     
                        }?>
                        </tr>
                        <?php } ?>
                        <!-- end 1 -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>