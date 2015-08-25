<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create Forex :  IPAY ADMIN</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="robots" content="noindex" />
        
	<link rel="stylesheet" type="text/css" href="http://localhost/ipay/public/themes/admin/css/bootstrap.css" media="screen" />
<link rel="stylesheet" type="text/css" href="http://localhost/ipay/public/themes/admin/css/bootstrap-responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="http://localhost/ipay/public/themes/admin/screen.css" media="screen" />
                
        <link href="http://localhost/ipay/public/themes/admin/css/admin_custom.css" type="text/css" rel="stylesheet" />
        
        
        
        <script src="http://localhost/ipay/public/themes/admin/js/modernizr-2.5.3.js"></script>
        <script src="http://localhost/ipay/public/themes/admin/js/jquery-1.7.2.js"></script>
        <script src="http://localhost/ipay/public/themes/admin/tiny_mce/tiny_mce.js"></script>
        <script type="text/javascript" src="http://localhost/ipay/public/themes/admin/js/admin_custom.js"></script> 
        
        
        <!-- Date Picker-->
        <link href="http://localhost/ipay/public/themes/admin/css/datepicker.css" rel="stylesheet" type="text/css"/>
        <script src="http://localhost/ipay/public/themes/admin/js/bootstrap-datepicker.js" type="text/javascript"></script>
        
        
</head>

<body class="desktop">
    <input type="hidden" id="base_url" value="http://localhost/ipay/public/" />
<!--[if lt IE 7]>
		<p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or
		<a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
<![endif]-->


	

		<div class="navbar navbar-fixed-top navbar-inverse" id="topbar" >
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>                                   
					<a href="http://localhost/ipay/public/index.php/admin" class="brand">IPAY ADMIN</a>

										<!-- Shortcut Menu -->
					<div class="nav pull-right" id="shortcuts">
					<div class="btn-group">
						<a class="dropdown-toggle light btn" data-toggle="dropdown" href="#"><img src="http://localhost/ipay/public/themes/admin/images/keyboard-icon.png" id="shortkeys_show" title="Keyboard Shortcuts" alt="Keyboard Shortcuts"/></a>
						<ul class="dropdown-menu pull-right toolbar-keys">
								<li>
										<div class="inner keys">
																						<h4>Available keyboard shortcuts:</h4>
											<ul>
																							<li><span>ctrl+s/⌘+s</span> : Save any form in the admin area.</li>
																							<li><span>alt+c</span> : Jump to the Content context.</li>
																						</ul>
																						<a href="http://localhost/ipay/public/index.php/admin/settings/ui">Update the keyboard shortcuts</a>
										</div>
								</li>
						</ul>
					</div>
					</div>
					
					<div class="nav-collapse in collapse">
						<!-- User Menu -->
						<div class="nav pull-right" id="user-menu">
							<div class="btn-group">
								<a href="http://localhost/ipay/public/index.php/admin/settings/users/edit" id="tb_email" class="btn dark" title="My Profile">
									admin								</a>
								<!-- Change **light** to **dark** to match colors -->
								<a class="btn dropdown-toggle light" data-toggle="dropdown" href="#"><span class="caret"></span></a>
								<ul class="dropdown-menu pull-right toolbar-profile">
									<li>
										<div class="inner">
											<div class="toolbar-profile-img">
												<img src="http://www.gravatar.com/avatar/636f5f4fc62af88ef1b4e78d700bf151?s=96&amp;r=pg&amp;d=identicon" width="96" height="96" alt="" title="admin"    />											</div>

											<div class="toolbar-profile-info">
												<p><b>admin</b><br/>
													admin@ipay.com													<br/>
												</p>
												<a href="http://localhost/ipay/public/index.php/admin/settings/users/edit">My Profile</a>
												<a href="http://localhost/ipay/public/index.php/logout">Sign Out</a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<ul class="nav"  ><li class='dropdown active'><a href='http://localhost/ipay/public/index.php/admin/content' id='tb_content' class='dropdown-toggle' title='Content' data-toggle='dropdown' data-id='content_menu'>Content<b class='caret'></b></a><ul class='dropdown-menu'>
<li><a href="http://localhost/ipay/public/index.php/admin/content/banner" class="" title="Your module description">Banner</a>
</li>
<li><a href="http://localhost/ipay/public/index.php/admin/content/department" class="" title="Your module description">Department</a>
</li>
<li><a href="http://localhost/ipay/public/index.php/admin/content/forex" class="active" title="Your module description">Forex</a>
</li>
<li><a href="http://localhost/ipay/public/index.php/admin/content/menu" class="" title="Your module description">Menu</a>
</li>
<li><a href="http://localhost/ipay/public/index.php/admin/content/pages" class="" title="Your module description">Pages</a>
</li>
<li><a href="http://localhost/ipay/public/index.php/admin/content/partner" class="" title="Your module description">Partner</a>
</li>
<li><a href="http://localhost/ipay/public/index.php/admin/content/steps" class="" title="Your module description">STEPS</a>
</li>
<li><a href="http://localhost/ipay/public/index.php/admin/content/social_link" class="" title="Your module description">Social Link</a>
</li>
<li><a href="http://localhost/ipay/public/index.php/admin/content/tab" class="" title="Your module description">TAB</a>
</li>
<li><a href="http://localhost/ipay/public/index.php/admin/content/media" class="" title="Your module description">Media</a>
</li>
</ul>
</li>
</ul>					</div> <!-- END OF nav-collapse -->

			</div><!-- /container -->
			<div style="clearfix"></div>
		</div><!-- /topbar-inner -->

	</div><!-- /topbar -->

 <div class="subnav navbar-fixed-top" >
	<div class="container-fluid">
            
		            <h1><a href="http://localhost/ipay/public/index.php/admin/content/media/general"> General Site Setting</a></h1>
		                        
            
		<div class="pull-right" id="sub-menu">
			<ul class="nav nav-pills">
	<li >
		<a href="http://localhost/ipay/public/index.php/admin/content/forex" id="list">List</a>
	</li>
		<li class="active" >
		<a href="http://localhost/ipay/public/index.php/admin/content/forex/create" id="create_new">New</a>
	</li>
	</ul>		</div>
	</div>
</div>

<div class="body">
	<div class="container-fluid">
	        	
	        <div class="admin-box">
	<h3>Forex</h3>
	<form action="http://localhost/ipay/public/index.php/admin/content/forex/create" class="form-horizontal" method="post" accept-charset="utf-8"><div style="display:none">
<input type="hidden" name="ci_csrf_token" value="c358b41c08054e5f03fb04d1000977a8" />
</div>		<fieldset>

			
    <div class="control-group ">
        <label class="control-label" for="forex_from_country">From Country<span class="required">*</span></label>
        <div class="controls">
            <select name="forex_from_country" id="forex_from_country"  >
                <option value="0">Select Country</option>
                <option value="Afghanistan">Afghanistan</option>

            </select>

        </div>
    </div>

			
    <div class="control-group ">
        <label class="control-label" for="forex_from_currency">From Currency<span class="required">*</span></label>
        <div class="controls">
            <select name="forex_from_currency" id="forex_from_currency"  >
                <option value="0">Select Currency</option>

            </select>

        </div>
    </div>

			
    <div class="control-group ">
        <label class="control-label" for="forex_to_country">To  Country<span class="required">*</span></label>
        <div class="controls">
            <select name="forex_to_country" id="forex_to_country"  >
                <option value="0">Select Country</option>

            </select>

        </div>
    </div>

			
    <div class="control-group ">
        <label class="control-label" for="forex_to_currency">To Currency<span class="required">*</span></label>
        <div class="controls">
            <select name="forex_to_currency" id="forex_to_currency"  >
                <option value="0">Select Currency</option>
                <option value="ALL">Albania Lek</option>

            </select>

        </div>
    </div>


			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="Create Forex"  />
				or				<a href="http://localhost/ipay/public/index.php/admin/content/forex" class="btn btn-warning">Cancel</a>				
			</div>
		</fieldset>
    </form></div>	</div>
</div>

	<footer class="container-fluid footer">
		
	</footer>

	<div id="debug"><!-- Stores the Profiler Results --></div>

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<!--  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
  <script>window.jQuery || document.write('<script src="http://localhost/ipay/public/assets/js/jquery-1.7.2.min.js"><\/script>')</script>

	<script type="text/javascript" src="http://localhost/ipay/public/themes/admin/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="http://localhost/ipay/public/themes/admin/js/jwerty.js" ></script>
<script type="text/javascript" src="http://localhost/ipay/public/themes/admin/js/global.js" ></script>
<script src="http://localhost/ipay/public/assets/cache/admin_forex_content_mod.js?_dt=1409112286" type="text/javascript" ></script>
<script type='text/javascript'>
$(document).ready(function(){


jwerty.key('ctrl+s\/⌘+s', function () { $("input[name=save]").click();return false; });
jwerty.key('alt+c', function () { window.location.href=$("#tb_content").attr("href") });


});

</script>
</body>
</html>
