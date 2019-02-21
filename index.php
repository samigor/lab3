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
                    <div class="item item-pink item-2 col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_puzzle_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Components</h3>
                            <p class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                            <a class="link" href="components.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-blue col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_datareport_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Charts</h3>
                            <p class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                            <a class="link" href="charts.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-purple col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_lifesaver"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">FAQs</h3>
                            <p class="intro">Layout for FAQ page. Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                            <a class="link" href="faqs.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-primary col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_genius"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Showcase</h3>
                            <p class="intro">Layout for showcase page. Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
                            <a class="link" href="showcase.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-orange col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_gift"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">License &amp; Credits</h3>
                            <p class="intro">Layout for license &amp; credits page. Consectetuer adipiscing elit.</p>
                            <a class="link" href="license.html"><span></span></a>
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
?>
<li><a href ='<?= $secondMenu[0]['href']?>'><?= $secondMenu [0]['link']?></a></li>
<li><a href ='<?= $secondMenu[1]['href']?>'><?= $secondMenu [1]['link']?></a></li>
<li><a href ='<?= $secondMenu[2]['href']?>'><?= $secondMenu [2]['link']?></a></li>
<li><a href ='<?= $secondMenu[3]['href']?>'><?= $secondMenu [3]['link']?></a></li>
<li><a href ='<?= $secondMenu[4]['href']?>'><?= $secondMenu [4]['link']?></a></li>

















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

