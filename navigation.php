<?php

/**
 * navigation
 * Created by PhpStorm.
 * User: kylesmith
 * Date: 5/5/16
 * Time: 3:45 PM
 */



?>
<!-- Navigation section -->

<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Personal Finance</a>
	</div>

<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li class="active">
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="checking.php">Checking</a>
            </li>
            <li>
                <a href="Savings.php">Savings</a>
            </li>
            <li>
                <a href="Retirement.php">Retirement</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="register.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
	</div><!-- /.navbar-collapse -->
</nav>


