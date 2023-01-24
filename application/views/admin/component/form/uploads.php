<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Resim Yükleme</h4>
                <p class="sub-title">Lütfen Resmi 1000x1000 çözünürlülükte yükleyiniz. Resmileriniz 2mb geçmesin</p>
                <div class="">
                    <form action="#" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple="multiple">
                        </div>
                    </form>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary waves-effect waves-light" <?php echo isset($name) ? 'name="'.$name.'"' : ''?>><?php echo isset($buttonName) ? $buttonName :''?></button>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->