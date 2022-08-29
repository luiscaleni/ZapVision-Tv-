<?php
if (isset($_POST["canal"])) {
    $canal=$_POST["canal"];
}

if (isset($_POST["apagar"])) {
    $apagar=$_POST["apagar"];
}
if (isset($_POST["silenciar"])) {
    $silenciar=$_POST["silenciar"];
}


if(isset($canal)){
    $videourl=$canal;
}elseif(isset($apagar)){
    $videourl0="0";
}elseif(isset($silenciar)){
    $urlsilenciar="111";
} ?>