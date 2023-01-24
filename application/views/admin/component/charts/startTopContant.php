<!-- start top-Contant -->
<div class="row">
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center p-1">
                    <div class="col-lg-6">
                        <h5 class="font-16">Toplam Üye Sayısı</h5>
                        <h4 class="text-info pt-1 mb-0"><?php echo $veri->userCount->count?></h4>
                    </div>
                    <div class="col-lg-6">
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center p-1">
                    <div class="col-lg-6">
                    <h5 class="font-16">Toplam Kisi Sayısı</h5>
                        <h4 class="text-warning pt-1 mb-0"><?php echo $veri->personCount->count?></h4>
                    </div>
                    <div class="col-lg-6">
                        <div id="chart2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center p-1">
                    <div class="col-lg-6">
                    <h5 class="font-16">Toplam Cihaz Sayısı</h5>
                        <h4 class="text-primary pt-1 mb-0"><?php echo $veri->phoneCount->count?></h4>
                    </div>
                    <div class="col-lg-6">
                        <div id="chart3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center p-1">
                    <div class="col-lg-6">
                    <h5 class="font-16">Toplam Adress Sayısı</h5>
                        <h4 class="text-danger pt-1 mb-0"><?php echo $veri->addressCount->count?></h4>
                    </div>
                    <div class="col-lg-6">
                        <div id="chart4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end top-Contant -->