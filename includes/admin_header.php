<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="<?=_ASSET_URL?>css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?=_ASSET_URL?>css/admin_style.css" />
<link rel="stylesheet" type="text/css" href="<?=_ASSET_URL?>jquery.treeview/jquery.treeview.css" />
<script type="text/javascript" src="<?=_ASSET_URL?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?=_ASSET_URL?>js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-inverse" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="admin.php">ADMIN</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
                    <?php
					$r_menu = $menu[$_SESSION['_login']['grup_id']];
					foreach((array)$r_menu as $title=>$menu )
					{
						
						//adodb_pr($menu);	
						
					?>
                    	<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$title?>
                             <strong class="caret"></strong></a>
							<ul class="dropdown-menu">
                            <?php
							foreach((array)$menu as $links)
							{
								
							?>
								<li><a href="<?=_URL . $links['link']?>"><?=$links['title']?></a></li>
                            <?php
							}
							?>
							</ul>
						</li>
                    <?php 	
					}
                    ?>
						
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin menu
                             <strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Profil admin</a>
								</li>
								<li>
									<a href="#">Ubah password</a>
								</li>
								<li class="divider">
								</li>
								
							</ul>
						</li>
                        <li>
							<a href="<?=_URL?>admin.php?logout=1">LOGOUT</a>
						</li>
					</ul>
				</div>
				
			</nav>
			<div class="row clearfix">
            
				<div class="col-md-12 column">