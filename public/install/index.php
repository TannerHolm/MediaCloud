<?php 

// post call 


?>


<!DOCTYPE html>
<html lang="en">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<link href="/assets/css/bootstrap.css" rel="stylesheet">
	<style>
		.weber-nav {
  			text-shadow: 0 -1px 0 rgba(0,0,0,.15);
  			background-color: #563d7c;
  			border-color: #463265;
  			box-shadow: 0 1px 0 rgba(255,255,255,.1);
		}

		.weber-nav .navbar-collapse {
  			border-color: #463265;
		}
		.weber-nav .navbar-brand {
		  	color: #fff;
		}
		.weber-nav .navbar-nav > li > a {
		  	color: #cdbfe3;
		}
		.weber-nav .navbar-nav > li > a:hover {
		  	color: #fff;
		}
		.weber-nav .navbar-nav > .active > a,
		.weber-nav .navbar-nav > .active > a:hover {
		  	color: #fff;
		  	background-color: #463265;
		}
		.weber-nav .navbar-toggle {
		  	border-color: #563d7c;
		}
		.weber-nav .navbar-toggle:hover {
		  	background-color: #463265;
		  	border-color: #463265;
		}
	</style>
	</head>
	<body>
		<div class="navbar navbar-inverse weber-nav navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MediaCloud Install</a>
        </div>
      </div>
    </div>
    <div class="container" style="margin-top:70px;">
		<div>
    			<button class="btn btn-success btn-lrg"><span class="glyphicon glyphicon-ok"></span></button> &nbsp;&nbsp;<strong>Clone</strong>
		</div><br/>
		<div>
			<button class="btn btn-success btn-lrg"><span class="glyphicon glyphicon-ok"></span></button> &nbsp;&nbsp;Composer install (<a href="http://getcomposer.org">Composer</a>)
		</div><br/>
		<div>
			<button class="btn btn-danger btn-lrg"><span class="glyphicon glyphicon-remove"></span></button> &nbsp;&nbsp;Database Setup
		</div><br/>
		<div>
			<button class="btn btn-danger btn-lrg"><span class="glyphicon glyphicon-remove"></span></button> &nbsp;&nbsp;Asset Path
		</div><br/>
		<div>
			<button class="btn btn-danger btn-lrg"><span class="glyphicon glyphicon-remove"></span></button> &nbsp;&nbsp;beanstalkd
		</div><br/>
		<div>
			<button class="btn btn-danger btn-lrg"><span class="glyphicon glyphicon-remove"></span></button> &nbsp;&nbsp;Authenticaiton Source
		</div>
    	<!--<ul>
    		<li><button class="btn btn-success btn-lrg"><span class="glyphicon glyphicon-ok"></span></button> Clone</li>
    		<li>Composer install (<a href="http://getcomposer.org">Composer</a>)</li>
    		<li>Database Setup</li>
    		<li>Path Assets</li>
    		<li>Beanstalkd (Linux Only)</li>
    		<li>ldap / localAuth / CAS / Saml</li>
    	</ul>-->


	</div>
	</body>
	 <script src="/assets/js/bootstrap.min.js"></script>
</html>

<!--  -->