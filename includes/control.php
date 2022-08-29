<div class="controlcss">
    <!--<div class="loaderblack"></div>
    <div class="loader"></div>-->
    <form method="POST" name="control">
        <button name="canal" value="1">1</button>
        <button name="canal" value="2">2</button>
        <button name="canal" value="3">3</button>
        <button name="canal" value="4">4</button>
        <button name="canal" value="5">5</button>
        <button name="canal" value="6">6</button>
        <button name="canal" value="7">7</button>
        <button name="canal" value="8">8</button>
        <button name="canal" value="9">9</button>
        <?php if (isset($videourl0) || isset($urlsilenciar) || empty($_POST)){ ?>
            <button name="canal" value="<?php $value=rand(1,7); echo $value; ?>" class="power" title="Encender la TV" alt="Encender la televisión"><img src="img/power_off.png" class="imgon"></button>
        <?php }else{ ?>
            <button name="apagar" value="0" class="off" title="Apagar la TV" alt="Apagar la televisión"><img src="img/power_off.png" class="imgon"></button>
            <audio src="audios/ambiente.mp3" autoplay loop>
                Tu navegador no soporta el elemento <code>audio</code>.
            </audio>
        <?php } ?>
        
        <?php if(isset($videourl0) && empty($urlsilenciar)){?>
        <button name="silenciar" value="s" class="off" title="El botón para silenciar está habilitado" alt="El botón para silenciar está habilitado"><img src="img/silenciar.png" class="imgs"></button>
        <?php }elseif(isset($urlsilenciar)){?>
        <button name="silenciar" class="power" title="El botón para silenciar está apagado" alt="El botón para silenciar está apagado" disabled><img src="img/silenciar.png" class="imgs"></button>
        <?php }else{?>
        <button name="silenciar" class="power" title="El botón para silenciar es habilitado con la tv apagada" alt="El botón para silenciar es habilitado con la televisión apagada" disabled><img src="img/silenciar.png" class="imgs"></button>
        <?php } ?>
    </form>
</div>