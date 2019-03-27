<?php
$min = "minimalistica"; // title
// Поле Head
$head = "
<head>
	<meta http-equiv='content-type' content='text/html;charset=utf-8' />
	<meta name='author' content='Luka Cvrk (www.solucija.com)' />
	<link rel='stylesheet' href='css/main.css' type='text/css' />
	<title>minimalistica</title>
</head>
";
// Формируем динамическое меню из массива
$menu = array('0' => 'home', '1' => 'archive', '2' => 'contact');
// Контент
$bodyP = "<p>Nunc eget nunc libero. Nunc commodo euismod massa quis vestibulum. Proin mi nibh, dignissim a pellentesque at, ultricies sit amet sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lorem eu libero laoreet facilisis. Aenean placerat, ligula quis placerat iaculis, mi magna luctus nibh, adipiscing pretium erat neque vitae augue. Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>";


$detailsH2 = "<h2><a href='#'>Nunc commodo euismod massa quis vestibulum</a></h2><p class='info'>posted 3 hours ago in <a href='#'>general</a></p>";

$col1 = "<h3><a href='#'>Ut enim risus rhoncus</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href='#'>read more</a></p>";
			
			
$col2 = "<h3><a href='#'>Maecenas iaculis leo</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href='#'>read more</a></p>";
			
			
$col3 = "<h3><a href='#'>Quisque consectetur odio</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href='#'>read more</a></p>";
$date = date('Y');			
$footer = "<p>Copyright &copy; <em>minimalistica</em> &middot; created at " . $date . " year. Design: Luka Cvrk, <a href='http://www.solucija.com/' title='Free CSS Templates'>Solucija</a></p>";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?= $head ?>
<body>
	<div id="content">
		<h1><?= $min ?></h1>
		
		<ul id="menu">
		<?php
		foreach($menu as $row)
		{
			echo "<li><a href='#'>$row</a></li>";
		}
		?>
		</ul>
	
		<div class="post">
			<div class="details">
				<?= $detailsH2 ?>
				
			
			</div>
			<div class="body">
				<?= $bodyP ?>
			</div>
			<div class="x"></div>
		</div>
		
		<div class="col">
			<?= $col1 ?>
		</div>
		<div class="col">
			<?= $col2 ?>
		</div>
		<div class="col last">
			<?= $col3 ?>
		</div>
		
		<div id="footer">
			<?= $footer ?>
		</div>	
	</div>
</body>
</html>