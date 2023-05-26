<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Сайт Web-студії "Web-DECO"</title>
    <!-- =================== JAVASCRIPT ==================-->
    <script src="js/clock1.js"></script>
    <script type="text/javascript">
        function send()
    { 	var valid = true;
	var elems = document.forms[0].elements;
	for(var i=0; i<document.forms[0].length; i++){
		if( elems[i].getAttribute('type') == 'text' ||
			elems[i].getAttribute('type') == 'password' ||
			elems[i].getAttribute('type') == 'email' ) {
			if(elems[i].value == '') {
				elems[i].style.border = '2px solid red';
				valid = false;
			}
		}
	}	
	if(!valid) {
		alert('Заповніть всі поля !!!');
		return false;
	} else 
	{ var r = /^\w+@\w+\.\w{2,4}$/i;
		if (!r.test(elems[2].value)) {
			alert('Заповніть вірно E-Mail !!');
			return false;
	    } else return true;
	}
    }	


window.onload = function() {
setInterval(clockPainting, 1000);	
document.forms[0].onmousemove = function() {	var elems = document.forms[0].elements;

	for(var i=0; i<elems.length; i++)
		if(elems[i].style.border == '2px solid red')
			elems[i].style.border='';
		} 

}	

    </script>
    <!--=====================================================================================-->
</head>
<body>
        <?php
<style>
    .shadowtext{
        text-shadow: 1px 3px 2px white, 0 0 1em red;
        color: #410380;
        font-size: 4em;
    }

</style>
<script>
    window.onload=function()
    {
        setInterval(clockPainting, 1000);   
    }
</script>
<body background="images/bg.jpg">
    <table border="1" align="center" width="100%" cellpadding="10">
        <tr>
            <td background="images/bg-3.jpg"colspan="2" height="150" align="right" hspace="5">      
                  <img src="images/logo.png" height="180" width="180" align="left">
                <font size="6" color="Maroon" valign="top" class="shadowtext"><b>Сайт web-студії "Web-Deco"</b></font>
            </td>

        </tr>
        <tr>
            <tr>
                <td colspan="2">
                <font size="5"><b><a href="index.php">Головна</a>&nbsp;&nbsp;<a href="foto.php">Фотогалерея</a>&nbsp;&nbsp;<a href="log.php">Статистика</a>&nbsp; &nbsp;<a href="#">Телефони</a>&nbsp; &nbsp;<a href="zwit.php">Зареєстровані</a>&nbsp; &nbsp;</b></font></td>
            </td>
        </tr>
        <tr>
            <td width="30%" valign="top">
                <center>
                    <canvas id="canvas" height="120" width="120"></canvas>
                </center>
                <hr>
                <font size="5" color="navy">
                    <h2>Новини</h2>
                </font>
                <font size="5">
                <ul>
                    <li><a href="#">Сайт будівельної компанії</a></li>
                    <li><a href="#">Сайт ТМ "Новашкола"</a></li>
                    <li><a href="#">Редизайн сайту classno.com.ua</a></li>
                    <li><a href="#">Розробка CMS для Metro Cash&Carry</a></li>
                    <li><a href="#">Сайт-візитка дизайнера інтерфейсів</a></li>
                    <p align="right"><a href="#">інші...</a></p>
                </ul>
                </font>
                <hr>
                <h1 align="center"><font color="green">Реєстрація</font></h1>
                <form action="forma.php" method="post" onsubmit="return send();">
                <table align="center" bgcolor="#ccc">
                    <tr>
                        <td><font color="green">Прізвище</font>: </td>
                        <td><input type="text" size="10" maxlength="20" name="name1"> </td>
                    </tr>
                    <tr>
                        <td><font color="green">Ім'я</font> : </td>
                        <td><input type="text" size="10" maxlength="20" name="name1"> </td>
                    </tr>
                    <tr>
                        <td><font color="green">E-Mail</font> : </td>
                        <td><input type="email" size="10" maxlength="40" name="email"></td>
                    </tr>
                    <tr>
                        <td><font color="green">Пароль</font> : </td>
                        <td><input type="password" size="10" maxlength="20" name="password"></td>
                    </tr>
                </table>
                <p align="center">
                    <input type="submit" value="Зареєструватись">
                    <input type="reset" value="Очистити">
                </p>
                <hr>
            </form>
            </hr>
            </td>
            <hr>
            <?php
        $st = $_POST['name2'].";".$_POST['name1'].";".$_POST['email'].";".$_POST['password']."\n";
        $fp = fopen("baza.txt", "a");
        $test = fwrite($fp,$st);
        echo "<h1 align = 'center'>Ви ввели :".$_POST['name2'].";".$_POST['name1']."<br>Дякуємо за реєстрацію !</h1>";
        echo "<h2 align = 'center'> на Ваш E-mail : ".$_POST['email'].";".$_POST['password']."<br> відправлено повідомлення.</br>"; 
        ?>
        </tr>
        <tr>
            <td background="images/bg-3.jpg" colspan="2" valign="middle" height="90">
                <font size="5">Сайт розробив "Гамаш Богдан"</font>
            </td>
        </tr>
    </table>
</body>
</html>
</html>