<!-- notification -->
<li class="dropdown notification-list list-inline-item ">
    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
        <i class="fas fa-plus-square"></i>
    </a>
    <div class="pl-2 dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg ">
        <!-- item-->
        <h6 class="dropdown-item-text">
            Mesaj Oluştur
        </h6>
                <form class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg" action = "<?php echo base_url("index.php/AdminPanel/messageSend")?>" method ="POST">
                    <?php $this->load->view(component('form','input'),[
                        'name'=>'mesajTitle',
                        'type'=>'text',
                        'placeholder'=>'Mesaj Başlığı',
                    ])?>
                    <?php $this->load->view(component('form','area'),[
                        'name'=>'message',
                        'type'=>'text',
                        'placeholder'=>'Mesaj',
                        'inputProps'=>['rows="10"']
                    ])?>
                            <!-- All-->
                    <button type="submit" class="dropdown-item text-center notify-all text-primary">
                        Mesajı Oluştur<i class="fi-arrow-right"></i>
                    </button>
                </form>
    </div>
</li>