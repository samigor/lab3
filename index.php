<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Responsive website template for documentations</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body class="landing-page">   
     
     
    <div class="page-wrapper">
        
        <!-- ******Header****** -->
        <header class="header text-center">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <span aria-hidden="true" class="icon_documents_alt icon"></span>
                        <span class="text-highlight">SAM</span><span class="text-bold">IGOR</span>
                    </h1>
                </div><!--//branding-->
                <div class="tagline">
                    <p>Тема для свободного творчества в лабораторных и домашних заданиях</p>
                    <p>Designed with <i class="fa fa-heart"></i> for developers</p>
                </div><!--//tagline-->
              
            </div><!--//container-->
        </header><!--//header-->
        
        <section class="cards-section text-center">
            <div class="container">
                <h2 class="title">Курсы PHP с WEZOM</h2>
                <div class="intro">
                    <p>Лабораторная работа №3</p>
 <p>Задача 1</p>
<?php

$morning = "Доброе утро!";
$day = "Добрый день!";
$evening = "Добрый вечер!";
$night = "Доброй ночи!";
 
$minyt = date("i");
$chasov = date("H");
 
if($chasov >= 07) {$hello = $morning;}
if($chasov >= 12) {$hello = $day;}
if($chasov >= 15) {$hello = $evening;}
if($chasov >= 23 or $chasov < 04) {$hello = $night;}
 
echo "Время: $chasov:$minyt, $hello <br>";
 
?>
					<?PHP
					// Получаем текущий час в виде строки от 00 до 23 и приводим строку к целому числу от 0 до 23
					$hour = (int) strftime ('%H');
					$welcome = ''; //инициализируем переменную для приветствия
					 
					if ( 0 < $hour and $hour < 6){$welcome = "<b>Доброй ночи</b>";}
					elseif ( 7 < $hour and $hour < 13)  {$welcome = "<b>Доброй утро</b>";}
					elseif ( 12 < $hour and $hour < 16)  {$welcome = "<b>Добрый день</b>";}
					elseif ( 15 < $hour and $hour < 23) {$welcome = "<b>Доброй вечер</b>";	}
					else {$welcome = "Иди спать";	}				
					
					echo "$welcome , Гость";
					?>
					<p>Задача 2</p>
					<?
					$s = ini_get ('upload_max_filesize');
					echo "Максимальный размер загружаемого файла равен $s <br> или ";
			$dsize=$s;
			settype($dsize, "integer");
			//echo $dsize;
$size= $s{strlen($s)-1};
//echo $size;
switch ($size) {
	case G:
	echo "$dsize * 1024 * 1024 * 1024 байт";
	break;
	case M:
	echo $dsize * 1024 * 1024 ." байт";
	break;
	case k:
	echo $dsize * 1024;
	break;
	default: 
echo"много";	
}

					
?>
<p> Задача про массивы </p>
<?PHP
$arr = array ("Igor","root","3966");

$arr [] = 25;
$arr [] = true;
$arr [8] = 88;
$arr [] = 99;
echo $arr [0];
$result = count ($arr);
echo "<br> $result ";
?>
<pre><?php print_r ($arr);?> </pre>
<pre><?php var_dump ($arr);?> </pre>
<?
$arr2 = array (
"kurort" => "Стрелковое",
"length" => "50км",
"sea" => "Азовское",
"wc" => "true",
true
				);
				echo $arr2 ["kurort"]. " <br>";
				echo $arr2[0];
?>
<pre><?php var_dump ($arr2);?> </pre>
<p>Упражнение с динамическим меню и массивом</p>

<?
$leftMenu = array (
'home' => 'index.php',
'about' => 'about.php',
'contact' => 'contact.php',
'table' => 'table.php',
'calc' => 'calc.php',
);

?>

  </div><!--//intro-->
                <div id="cards-wrapper" class="cards-wrapper row">
                    <div class="item item-green col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-paper-plane"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Упражнение с динамическим меню и массивом</h3>
                            	<li><a href= '<?= $leftMenu['home']?>'> Домой </a> </li>
								<li><a href= '<?= $leftMenu['about']?>'> about </a> </li>
								<li><a href= '<?= $leftMenu['contact']?>'> contact </a> </li>
								<li><a href= '<?= $leftMenu['table']?>'> table </a> </li>
								<li><a href= '<?= $leftMenu['calc']?>'> calc </a> </li>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                   
                        </div><!--//item-inner-->
                    </div><!--//item-->
                </div><!--//cards-->
                <p>Многомерный массив</p>

<?PHP
$arr3[0] = array(
			"login" => "Vasya",
			"pass" => "Vasya123",
				);
$arr3[1] = array(
			"login" => "Petya",
			"pass" => "Petya123",
				);
echo $arr3[1]["login"];
?>

   <p>Упражнение: Использование многомерного массива</p>
   <?PHP
$secondMenu = array (
				array ('link'=>'Домой2', 'href' => 'index.php'),
				array ('link'=>'О нас', 'href' => 'about.php'),
				array ('link'=>'Контакты', 'href' => 'contacts.php'),
				array ('link'=>'Таблица', 'href' => 'table.php'),
				array ('link'=>'Калькулятор', 'href' => 'calc.php'),
					);
					echo current($secondMenu[0]). "<br>";
						echo end($secondMenu[3]);
?>
<li><a href ='<?= $secondMenu[0]['href']?>'><?= $secondMenu [0]['link']?></a></li>
<li><a href ='<?= $secondMenu[1]['href']?>'><?= $secondMenu [1]['link']?></a></li>
<li><a href ='<?= $secondMenu[2]['href']?>'><?= $secondMenu [2]['link']?></a></li>
<li><a href ='<?= $secondMenu[3]['href']?>'><?= $secondMenu [3]['link']?></a></li>
<li><a href ='<?= $secondMenu[4]['href']?>'><?= $secondMenu [4]['link']?></a></li>


 <p><b>Упражнение: бактерии.</b></p>
<?
$x =  rand(1, 50);
$y =  rand(1, 50);
echo "Начальное количество бактерий - $x" . "<br>" ."Начальное количество минут - $y";
for ($i=1; $i<=$y; $i++) 
{
	$x = $x * 2;
	
	
}
echo "<br>В конце цикла количество бактерий равно <b> $x </b>";
unset($i);
?>

 <p><b>Упражнение: Доставка самолетом груза.</b></p>

<?
$dg = 30;
$nP = rand (1, 150);
$oVG = 0;
for ($i = 1; $i <= $nP; $i++)
{
	$vB = rand (1, 32);
	$sum = $vB * $dg;
	echo "Стоимость провоза багажа для пассажира № $i  = $sum USD. (Вес багажа - $vB кг.)<br>";
	$oVG = $oVG + $vB;
}
echo "<b>Общий вес груза равен $oVG кг.</b>";
unset($i);
?>

<br><br><br>
<p><b>Упражнение: Даны натуральные числа от 20 до 50.Напечатать те из них, которые делятся на 3, но не делятся на 5.
.</b></p>
<?PHP
for ($i = 20; $i <= 50; $i++)
{
	if ($i % 3 == 0 && $i % 5 != 0) 
	{
		echo "$i <br>";
	}
}
?>

<br>
<p><b>Упражнение: С помощью цикла while() напишите скрипт вывода всех четных чисел в диапазоне от 2 до 100 включительно.
</b></p>

<?PHP
	unset ($x);
	$x = 2;
	echo "<b>Четные числа в диапазоне от 2 до 100: <br></b>";
	while ($x <=100) 
	{
		echo "$x  ,";
		$x = $x+2;
	}
?>
<br>
<br>
<p><b>Упражнение: Сделать программу, выводящую факториал числа (произведение чисел от 1 одного до n), где n любое число больше 1.

</b></p>
<?PHP
unset ($n);
unset ($i);
$n = rand (1, 100);
//$n = 10;
$fact = 1;
for ($i = 1; $i <= $n ; $i++)
{
	$fact = $fact * ($i);
//	echo "$fact <br>";
}
echo " Факториал числа <b>$n<b/> равен <b>$fact</b>";
?>

            </div><!--//container-->
        </section><!--//cards-section-->
    </div><!--//page-wrapper-->
    
    <footer class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a> for developers</small>
            
        </div><!--//container-->
	
    </footer><!--//footer-->
    
     
    <!-- Main Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>                                                                     
    <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    
</body>
</html> 

