<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<p>Selamat Datang <?php echo session()->get('username'); ?> !!</p>
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner">
            <div class="item active mr-auto">
                <img src="<?= base_url() ?>/iphone.JPG" alt="Iphone" style="width: 50%;">
            </div>

            <div class="item">
                <img src="<?= base_url() ?>/iphone.JPG" alt="Iphone" style="width:50%;">
            </div>

            <div class="item">
                <img src="<?= base_url() ?>/iphone.JPG" alt="Iphone" style="width:50%;">
            </div>
        </div>


        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<?= $this->endSection() ?>