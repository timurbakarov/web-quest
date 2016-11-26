<?php /** @var $asset \Symfony\Component\Asset\PackageInterface */?><!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->insert('partials/meta') ?>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="well logo">
            </div>

            <?=$this->widget(\App\Template\Widget\Navbar::class)?>

            <div class="well">
                <?=$this->section('content')?>
            </div>
        </div>
    </div>
</div>

<script src="<?=$asset->getUrl('vendor/jquery/dist/jquery.min.js')?>"></script>
<script src="<?=$asset->getUrl('vendor/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<script src="<?=$asset->getUrl('assets/js/app.js')?>"></script>

</body>
</html>