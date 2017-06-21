<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Licznik subskrypcji</title>
	<link rel="stylesheet" href="css/basic.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>
<body>
<?php include("inc/nav.inc.php"); ?>
	<section class="home">
		<div class="container text-center">
			<div class="alert alert-info" role="alert">
				<strong>Informacja!</strong> Strona w budowie
			</div>
<?php include("inc/panel_home.inc.php"); ?>
			</div>
		</div>
	</section>
	<section class="view-subs">
		<div class="container text-center">
	<?php
				set_time_limit(0);

				function retrieveContent($url){
					$salida = "";
				$file = @fopen($url,"rb") or die('<div class="alert alert-danger">Przykro nam ale wystąpił błąd</div>');
				if (!$file)
					return "";
				while (feof ($file)===false) {
					$line = fgets ($file, 1024);
					$salida .= $line;
				}
				fclose($file);
				return $salida;
				}

				if(!empty($_GET['username'])){
				if(empty($_GET['url'])){
				$content = retrieveContent('https://www.youtube.pl/c/'.$_GET['username'].'/about');
				
				$start = strpos($content,'<div class="about-stats">');
				$end = strpos($content,'</div>',$start+1);
				$output = substr($content,$start,$end-$start);
				$output = str_replace('<div class="about-stats row">', '<div class="stats">', $output);
				$output = str_replace('<span class="about-stat">', '<span class="badge badge-primary">', $output);
				$output = str_replace('&bull;', '', $output);
$url = 'https://youtube.pl/c/'.$_GET['username'].'/about';

$content = file_get_contents($url);
$content2 = file_get_contents($url);



$first_step = explode( '<span class="yt-uix-button-content">' , $content );
$second_step = explode("</span>" , $first_step[3]);

$first_step2 = explode( '<a ' , $content2 );
$second_step2 = explode("</a>" , $first_step2[3]);
$second_step2 = str_replace('<', '[', $second_step2);
$second_step2 = str_replace('>', ']', $second_step2);


$e = "[a ";
$e .= $second_step2[0];
$e .= "[/a]";

$e = str_replace('
', '', $e);
$e = str_replace('  ', '', $e);

$e = preg_replace("#\[img class=\"(.*?)\" src=\"(.*?)\" title=\"(.*?)\" alt=\"(.*?)\" height=\"(.*?)\" width=\"(.*?)\"]#si",'<img class="\\1" src="\\2" title="\\3" alt="\\4" width="200px" height="200px">',$e);
$e = preg_replace("#\[a href=\"(.*?)\"](.*?)\[/a]#si",'<a href="\\1">\\2</a>',$e);
$e = str_replace('s100', 's500', $e);
echo '<h2>'.$second_step[0].'</h2><br>';
echo $e;
				
				echo '<h1 class="display-5">'.$output.'</h1>';

				}
				}
			if(!empty($_GET['id'])){
			if(empty($_GET['username'])){
				$content = retrieveContent('https://www.youtube.pl/channel/'.$_GET['id'].'/about');
				
				$start = strpos($content,'<div class="about-stats">');
				$end = strpos($content,'</div>',$start+1);
				$output = substr($content,$start,$end-$start);
				$output = str_replace('<div class="about-stats">', '<div class="stats">', $output);
				$output = str_replace('<span class="about-stat">', '<div class="stat">', $output);

$url = 'https://youtube.pl/channel/'.$_GET['id'].'/about';


$content = file_get_contents($url);
$content2 = file_get_contents($url);


$first_step = explode( '<span class="yt-uix-button-content">' , $content );

$second_step = explode("</span>" , $first_step[3]);

$first_step2 = explode( '<a ' , $content2 );
$second_step2 = explode("</a>" , $first_step2[3]);
$second_step2 = str_replace('<', '[', $second_step2);
$second_step2 = str_replace('>', ']', $second_step2);


$e = "[a ";
$e .= $second_step2[0];
$e .= "[/a]";

$e = str_replace('
', '', $e);
$e = str_replace('  ', '', $e);

$e = preg_replace("#\[img class=\"(.*?)\" src=\"(.*?)\" title=\"(.*?)\" alt=\"(.*?)\" height=\"(.*?)\" width=\"(.*?)\"]#si",'<img class="\\1" src="\\2" title="\\3" alt="\\4" width="" height="">',$e);
$e = preg_replace("#\[a href=\"(.*?)\"](.*?)\[/a]#si",'<a href="\\1">\\2</a>',$e);
echo '<h2>'.$second_step[0].'</h2><br>';
echo $e;


$first_step = explode( '<span class="yt-uix-button-content">' , $content );

$second_step3 = explode("</span>" , $first_step[3]);

				echo '<h1 class="display-5">'.$output.'</h1>';
				
				}
				}
				

				?>
		</div>
	</section>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>