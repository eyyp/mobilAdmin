<div class="col-xl-4">
    <div class="card messages">
        <div class="card-body">
            <h4 class="mt-0 header-title mb-4">En Son Mesaj</h4>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">
                    <div class="p-2 mt-2">
                        <ul class="list-unstyled latest-message-list mb-0">
                            <li class="message-list-item">
                                <a href="#">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="float-right font-12 text-muted"><?php echo $veri->messageLast->uname ?></p>
                                            <h6 class="mt-0"><?php echo $veri->messageLast->tittle ?></h6>
                                            <p class="text-muted mb-0"><?php echo $veri->messageLast->message; ?></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <a href="<?php echo base_url('index.php/AdminPanel/messages')?>" class="btn btn-primary btn-sm">Tüm Mesajlar</a>
                    </div>
                </div>
            </div>
            <!-- end tab-content -->
        </div>
    </div>
</div>