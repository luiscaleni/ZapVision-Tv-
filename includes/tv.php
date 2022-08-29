<?php include("action/action.php");?>
<div class="tv">
    <img src="img/tv.png">
    <?php if (isset($videourl0) || empty($_POST)) { ?>
        <div class="youtube">
            <video autoplay loop>
                <source src="videos/estatica.mp4">
            </video>
        </div>
    <?php }elseif(isset($urlsilenciar)){?>
        <div class="youtube"><img src="img/estatica.gif"></div>
    <?php }?>

    <?php if (isset($videourl)) { ?>
        <div class="youtube">
        <div class="loaderblack"><?php echo $videourl; ?></div>
            <video autoplay loop <?php if($videourl==4){echo "class='video1440'";}elseif($videourl==5){echo "class='video1440'";}?>>
                <source src="videos/<?php echo $videourl . ".mp4"; ?>">
                Tu navegador no admite el elemento <code>video</code>
            </video>
        </div>
    <?php } ?>
</div>