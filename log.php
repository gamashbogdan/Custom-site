<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <?php
                echo '<h1 align="center"Хто до нас на сайт заходив !</h1>';
                echo '<TABLE align="center" border="1" width="800">';
                        echo '<tr>';
                echo '<td align="center">IP Address</td>';
                echo '<td align="center">Браузер</td>';
                echo '<td align="center">Дата</td>';
                        echo '<tr>';
                $data = file("log.txt");
                foreach ($data as $line){
                    $trs = explode ("|", $line);

                            echo '<tr>';
                            echo '<td>'.$trs[0].'</td>';
                    echo '<td>'.$trs[1].'</td>';
                    echo '<td>'.$trs[2].'</td>';
                            echo '<tr>';
                }
                echo '</table>';
                ?>
</body>
</html>