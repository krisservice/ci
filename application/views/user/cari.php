<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

	Design by Free CSS Templates
	http://www.freecsstemplates.org
	Released for free under a Creative Commons Attribution License

	Name       : Reverse Obscurity
	Version    : 1.0
	Released   : 20130222

-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Reverse Obscurity by FCT</title>
        <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet" type="text/css" />
        <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/style.css')?>" />
    </head>
    <body>
		<div id="bg">
			<div id="outer">
				<div id="header">
					<div id="logo">
						<h1>
							<a href="#">Reverse Obscurity</a>
						</h1>
					</div>
					<div id="nav">
						<ul>
							<li class="first active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Services</a>
							</li>
							<li>
								<a href="#">Portfolio</a>
							</li>
							<li>
								<a href="<?=base_url('user/about')?>">About</a>
							</li>
							<li>
								<a href="#">Links</a>
							</li>
							<li>
								<a href="#">Downloads</a>
							</li>
							<li>
								<a href="#">Blog</a>
							</li>
							<li class="last">
								<a href="#">Contact</a>
							</li>
						</ul>
						<br class="clear" />
					</div>
				</div>
				<div id="banner">
					<img src="<?= base_url('asset/images/pic1.jpg')?> " width="1124" height="212" alt="" />
				</div>
				<div id="main">
					<div id="sidebar1">
						<h3>
							Pharetra sodales egestas
						</h3>
						
						
						<ul class="linkedList">
							<li class="first">
								<a href="#">Varius nulla fusce suscipit</a>
							</li>
							<li>
								<a href="#">Rutrum orci amet et lorem</a>
							</li>
							<li>
								<a href="#">Convallis sodales malesuada</a>
							</li>
							<li>
								<a href="#">Faucibus imperdiet adipiscing</a>
							</li>
							<li>
								<a href="#">Diam porta at sed tortor</a>
							</li>
							<li>
								<a href="#">Rutrum orci amet et lorem</a>
							</li>
							<li>
								<a href="#">Convallis sodales malesuada</a>
							</li>
							<li>
								<a href="#">Faucibus imperdiet adipiscing</a>
							</li>
							<li class="last">
								<a href="#">Dictum in amet phasellus</a>
							</li>
						</ul>
					</div>
					<div id="sidebar2">
                    </div>
						
						
					<div id="content">
					
                     <a href="<?=base_url('user/show_input')?>">Add Data User</a>
                     
                     
                     <table >
	<tr>
		<th>Nama</th>
        <th>Username</th>
        <th>password</th>   
	</tr>
    <?php
   foreach ($s as $row) {
?>
    <tr>
    
    <td> <?php echo $row->nama; ?>  </td>
    <td><?php echo $row->username; ?></td>
    <td><?php echo $row->password; ?></td>
    <td> <a href="<?php echo base_url('user/update'); ?>/<?php echo $row->id;?>">Update </a></td> 
    <td> <a href="coba.html">hai</a></td>
    </tr>
 <?php } ?>
</table>

               
					</div>
					<br class="clear" />
				</div>
				<div id="footer">
					<div id="footerContent">
						
					</div>
					<div id="footerSidebar">
						
                        
					</div>
					<br class="clear" />
				</div>
			</div>
			<div id="copyright">
				&copy; Your Site Name | Design by <a href="http://www.freecsstemplates.org/">FCT</a>
			</div>
		</div>
    </body>
</html>
