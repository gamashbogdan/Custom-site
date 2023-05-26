<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .big{transform: scale(2);}
    </style>
</head>
<body>
    <h1 align="center">Фотогалерея</h1>
    <?php
    function excess ($files){
        $result = array();
        for($i = 0; $i<count($files); $i++){
            if($files[$i] !="." && $files[$i] !="..") $result[]=$files[$i];
        }
        return $result;
    }
    $dir ="images";
    $files = scandir($dit);
    $files = excess($files);
    ?>
    <?php for ($i = 0; $i < count($files); $i++){?>
        <img src="<?=$dir."/".$files[$i]?>" alt="" width="350"
        height="250" hspace="5" vspace="7" border="5" onclick="this.classList.toggle('big')"/>
        <?php if (($i + 1) % 4 == 0) { ?><br /><?php } ?>
    <?php }?>
</body>
</html>