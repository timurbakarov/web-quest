<?php /** @var $asset \Symfony\Component\Asset\PackageInterface */?><!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->insert('partials/meta') ?>

    <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="well logo">
                <div style="font-size: 65px; font-weight: bold; font-family: 'Aref Ruqaa', serif; margin-bottom: 44px;">WebQuest</div>
                <div style="font-size: 33px; font-weight: bold; font-family: 'Aref Ruqaa', serif;">
                    <span>Choosing a career</span>
                </div>
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