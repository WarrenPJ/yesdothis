<?php
//Check admin permissions
include 'functions/admin_check_permissions.php';
 
// include header, menu and top navigation
include 'views/admin/header.php';
include 'views/admin/menu.php';
include 'views/admin/navigation.php';
?>

	<style>
		.icon {
			margin-top: 15px !important;
		}
	</style>

	<!-- page content -->
	<div class="right_col" role="main">
		<div class="">
			<div class="page-title">
				<div class="title_left">
					<h3>Project Payout Overview <small></small></h3>
				</div>


			</div>

			<div class="clearfix"></div>

			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2>Confirm the users you have paid already <small></small></h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								</li>
								<li><a class="close-link"><i class="fa fa-close"></i></a>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<table id="datatable" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>User</th>
										<th>PayPal</th>
										<th>Amount</th>
										<th>Project end date</th>
										<th>Confirm payout</th>
									</tr>
								</thead>


								<tbody>

									<?php
						//Loop all users
						include 'functions/admin/finance_payout.php';
					   ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- /page content -->


	<?php 
	// include footer
	include 'views/admin/footer.php';
	?>


	</body>

	</html>