<!-- notification -->
<li class="dropdown notification-list list-inline-item">
    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
        <i class="fas fa-bell noti-icon"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
        <!-- item-->
        <h6 class="dropdown-item-text">Mesajlar</h6>
        <div class="slimscroll notification-item-list">
            <?php if(isset($allMessages)) { foreach($allMessages as $message) {?>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                    <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                    <b><?php echo $message->uname ?></b>
                    <p class="notify-details"><b><?php echo $message->tittle ?></b><span class="text-muted"><?php echo $message->message; ?></span></p>
                </a>
            <?php }} ?>
        </div>
        <!-- All-->
        <a href="<?php echo base_url("index.php/AdminPanel/messages")?>" class="dropdown-item text-center notify-all text-primary">
            Tüm Mesajlar<i class="fi-arrow-right"></i>
        </a>
    </div>
</li>