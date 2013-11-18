<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
	<head>
		<title><?php echo htmlspecialchars( $title, ENT_COMPAT, 'UTF-8', FALSE ); ?></title>
		<!-- Latest compiled and minified CSS -->
		<link href="<?php echo static::$conf['base_url']; ?>templates/default/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo static::$conf['base_url']; ?>templates/default/css/style.css" rel="stylesheet">
	</head>
	<body>
		<div class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo static::$conf['base_url']; ?>"><?php echo htmlspecialchars( $title, ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="<?php echo static::$conf['base_url']; ?>">Home</a>
						</li>
						<li>
							<a href="<?php echo static::$conf['base_url']; ?>#about">About</a>
						</li>
						<li>
							<a href="<?php echo static::$conf['base_url']; ?>#contact">Contact</a>
						</li>
						<li class="dropdown">
							<a href="<?php echo static::$conf['base_url']; ?>#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo static::$conf['base_url']; ?>#">Action</a>
								</li>
								<li>
									<a href="<?php echo static::$conf['base_url']; ?>#">Another action</a>
								</li>
								<li>
									<a href="<?php echo static::$conf['base_url']; ?>#">Something else here</a>
								</li>
								<li class="divider"></li>
								<li class="dropdown-header">
									Nav header
								</li>
								<li>
									<a href="<?php echo static::$conf['base_url']; ?>#">Separated link</a>
								</li>
								<li>
									<a href="<?php echo static::$conf['base_url']; ?>#">One more separated link</a>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="<?php echo static::$conf['base_url']; ?>" >Login</a>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
		<div class="contenitore">
			
		</div>
		<div class="footer">
			<div class="pull-left">
				Copyleft &copy; <?php echo date('Y'); ?> - <?php echo htmlspecialchars( $title, ENT_COMPAT, 'UTF-8', FALSE ); ?>

			</div>
		</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo static::$conf['base_url']; ?>templates/default/js/bootstrap.min.js"></script>


	</body>
</html>