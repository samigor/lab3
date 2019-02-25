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
                   
<br>
<br> <p><h1>Лабораторная работа №4</h1></p>
<p><b>Найти наибольшее и наименьшее значение функции y=3x^2+x-4, на заданном интервале(в виде массива) который необходимо сгенерировать случайным образом
 </b></p>
<?PHP
unset ($i);
unset ($n);
unset ($x);
unset ($y);
$x = rand (1,100);
//$x = 5;
for($i=0; $i<=$x; $i++) {
$arr2[$i] = rand(0,$x);
}

echo "В заданном интервале от 1 до $x будут следующие значения y =";
$resultarr = array ();
for ($i = 1; $i <=$x ; $i++)
{
	$n = $arr2 [$i];
	$y = (3 * $n * $n + $n) - 4;
	echo "$y, ";
	array_push($resultarr, $y);
	
	
}
$min = min ($resultarr);
$max = max ($resultarr);
echo "<br>Минимальное значение функции: $min <br> Максимальное  значение функции: $max";
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

