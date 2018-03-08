<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello</title>
	<link rel="stylesheet" href="/views/main.css">
</head>
<body>
	<header>
		<div class="logo"><div class="logo_line fl_l">Line</div><div class="logo_thin fl_l">Thin <div class="cl_b"></div></div></div>
		<div class="r_menu fl_r">
			<nav class="nav">
				<a target="_blank" href="https://github.com/yasunovlad">GitHub</a>
				<a target="_blank" href="https://t.me/yasunov">Author</a>
				<a target="_blank" href="https://vk.com/linethin">Blog</a>
				<a target="_blank" href="https://t.me/linethin">Forum</a>
			</nav>
		</div>
	</header>
	<main>
		<h1><?php echo $class__mainModel->helloWorld();?></h1>
		<div class="content"><button><a href="#" style="text-decoration: none; color:#fff;">Documentation</a></button></div>
	</main>
</body>
</html>