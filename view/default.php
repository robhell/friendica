<!DOCTYPE html >
<html>
<head>
  <title><?php echo $page['title'] ?></title>
  <?php echo $page['htmlhead'] ?>
</head>
<body>
	<header><?php echo $page['header']; ?></header>
	<nav><div id="top-margin"></div><?php echo $page['nav']; ?></nav>
	<aside><?php echo $page['aside']; ?></aside>
	<section><?php echo $page['content']; ?>
		<div id="page-footer"></div>
	</section>
	<footer><?php echo $page['footer']; ?></footer>
</body>
</html>

