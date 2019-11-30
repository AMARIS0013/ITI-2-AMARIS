<!DOCTYPE php>
<php lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="assets/js/app.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.php" class="d-inline-block">
				<img src="global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Git updates</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Git updates</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Drop the IE <a href="#">specific hacks</a> for temporal inputs
										<div class="text-muted font-size-sm">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
									</div>
									
									<div class="media-body">
										Add full font overrides for popovers and tooltips
										<div class="text-muted font-size-sm">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
										<div class="text-muted font-size-sm">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
										<div class="text-muted font-size-sm">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>
									
									<div class="media-body">
										Have Carousel ignore keyboard events
										<div class="text-muted font-size-sm">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All updates</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">James Alexander</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Margo Baker</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Jeremy Victorino</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Beatrix Diaz</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Richard Vango</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>
										
										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>AMARIS</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				MENÚ
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">AMARIS</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;CIUDAD VICTORIA
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">CONTENIDO</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.php" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									INICIO
								</span>
							</a>
						</li>
						
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-people"></i> <span>EMPLEADOS</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Basic tables">
								<li class="nav-item"><a href="table_basic.php" class="nav-link">TABLA DE EMPLEADOS</a></li>
								<li class="nav-item"><a href="table_sizing.php" class="nav-link">SOLICITUD DE REGISTRO</a></li>
								<li class="nav-item"><a href="table_borders.php" class="nav-link">EDITAR EMPLEADOS</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link"><i class="icon-airplane2"></i> <span>VACACIONES</span></a>
									<ul class="nav nav-group-sub">
								<li class="nav-item"><a href="datatable_responsive.php" class="nav-link">lista</a></li>
								<li class="nav-item"><a href="datatable_extension_buttons_flash.php" class="nav-link">Solicitar</a></li>
								<li class="nav-item"><a href="table_styling.php" class="nav-link">Editar</a></li>
							</ul>
						</li>
					</ul>
				</li>
							<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid7"></i> <span>DEPARTAMENTOS</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables">
								<li class="nav-item"><a href="datatable_basic.php" class="nav-link">AGREGAR</a></li>
								<li class="nav-item"><a href="datatable_styling.php" class="nav-link">EDITAR</a></li>
								<li class="nav-item"><a href="datatable_advanced.php" class="nav-link">ENLISTAR</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-home4"></i> <span>EMPRESA</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables">
								<li class="nav-item"><a href="datatable_extension_select.php" class="nav-link">LISTA</a></li>
								<li class="nav-item"><a href="datatable_extension_row_reorder.php" class="nav-link">AGREGAR</a></li>
								<li class="nav-item"><a href="datatable_data_sources.php" class="nav-link">MODIFICAR</a></li>
                            </ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-users4"></i> <span>ALUMNOS</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic tables">
								<li class="nav-item"><a href="datatable_api.php" class="nav-link">ENLISTAR</a></li>
								<li class="nav-item"><a href="content_cards_draggable.php" class="nav-link">EDITAR</a></li>
								<li class="nav-item"><a href="form_input_groups.php" class="nav-link">AGREGAR</a></li>
								<li class="nav-item nav-item-submenu">
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-brain"></i> <span>TUTORIAS</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic tables">
								<li class="nav-item"><a href="handsontable_types.php" class="nav-link">LISTADO</a></li>
								<li class="nav-item"><a href="fullcalendar_advanced.php" class="nav-link">AGENDAR</a></li>
								<li class="nav-item nav-item-submenu">
							</ul>
						</li>
                    	<li class="nav-item nav-item-submenu">
							<a href="form_inputs_grid.php"class="nav-link"><i class="icon-grid7"></i> <span>PAGOS DE TRANSPORTE</span></a>
							</ul>
						</li>
								<!--
								<li class="nav-item"><a href="layout_4/LTR/default/full/index.php" class="nav-link">Layout 4</a></li>
								<li class="nav-item"><a href="layout_5/LTR/default/full/index.php" class="nav-link">Layout 5</a></li>
								<li class="nav-item"><a href="layout_6/LTR/default/full/index.php" class="nav-link disabled">Layout 6 <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
					
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid7"></i> <span>DEPARTAMENTOS</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables">
								<li class="nav-item"><a href="datatable_basic.php" class="nav-link">AGREGAR</a></li>
								<li class="nav-item"><a href="datatable_styling.php" class="nav-link">EDITAR</a></li>
								<li class="nav-item"><a href="datatable_advanced.php" class="nav-link">ENLISTAR</a></li>
							</ul>
						</li>
						
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-home4"></i> <span>EMPRESA</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables">
								<li class="nav-item"><a href="datatable_extension_select.php" class="nav-link">LISTA</a></li>
								<li class="nav-item"><a href="datatable_extension_row_reorder.php" class="nav-link">AGREGAR</a></li>
								<li class="nav-item"><a href="datatable_data_sources.php" class="nav-link">MODIFICAR</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_content_left.php" class="nav-link">Left sidebar</a></li>
										<li class="nav-item"><a href="../seed/sidebar_content_right.php" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="../seed/layout_boxed.php" class="nav-link">Boxed layout</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_main.php" class="nav-link">Fixed main navbar</a></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_secondary.php" class="nav-link">Fixed secondary navbar</a></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_both.php" class="nav-link">Both navbars fixed</a></li>
								<li class="nav-item"><a href="../seed/layout_fixed.php" class="nav-link">Fixed layout</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="changelog.php" class="nav-link">
								<i class="icon-list-unordered"></i>
								<span>Changelog</span>
								<span class="badge bg-blue-400 align-self-center ml-auto">2.2</span>
							</a>
						</li>
						<li class="nav-item"><a href="../../../RTL/default/full/index.php" class="nav-link"><i class="icon-width"></i> <span>RTL version</span></a></li>
					-->
						<!-- /main -->

						<!-- Forms -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Forms</div> <i class="icon-menu" title="Forms"></i></li>
						<li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
							<a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Form components</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form components">
								<li class="nav-item"><a href="form_inputs.php" class="nav-link">Basic inputs</a></li>
								<li class="nav-item"><a href="form_checkboxes_radios.php" class="nav-link">Checkboxes &amp; radios</a></li>
								<li class="nav-item"><a href="form_select2.php" class="nav-link">Select2 selects</a></li>
								<li class="nav-item"><a href="form_multiselect.php" class="nav-link">Bootstrap multiselect</a></li>
								<li class="nav-item"><a href="form_input_groups.php" class="nav-link">Input groups</a></li>
								<li class="nav-item"><a href="form_controls_extended.php" class="nav-link">Extended controls</a></li>
								<li class="nav-item"><a href="form_floating_labels.php" class="nav-link">Floating labels</a></li>
								<li class="nav-item"><a href="form_tag_inputs.php" class="nav-link">Tag inputs</a></li>
								<li class="nav-item"><a href="form_dual_listboxes.php" class="nav-link">Dual Listboxes</a></li>
								<li class="nav-item"><a href="form_validation.php" class="nav-link">Validation</a></li>
								<li class="nav-item"><a href="form_wizard.php" class="nav-link">Form wizard</a></li>
								<li class="nav-item"><a href="form_actions.php" class="nav-link">Form actions</a></li>
								<li class="nav-item"><a href="form_inputs_grid.php" class="nav-link active">Inputs grid</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-file-css"></i> <span>JSON forms</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="JSON forms">
								<li class="nav-item"><a href="alpaca_basic.php" class="nav-link">Basic inputs</a></li>
								<li class="nav-item"><a href="alpaca_advanced.php" class="nav-link">Advanced inputs</a></li>
								<li class="nav-item"><a href="alpaca_controls.php" class="nav-link">Controls</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-spell-check"></i> <span>Text editors</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Text editors">
								<li class="nav-item"><a href="editor_summernote.php" class="nav-link">Summernote editor</a></li>
								<li class="nav-item"><a href="editor_ckeditor.php" class="nav-link">CKEditor</a></li>
								<li class="nav-item"><a href="editor_trumbowyg.php" class="nav-link">Trumbowyg editor</a></li>
								<li class="nav-item"><a href="editor_code.php" class="nav-link">Code editor</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-select2"></i> <span>Pickers</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Pickers">
								<li class="nav-item"><a href="picker_date.php" class="nav-link">Date &amp; time pickers</a></li>
								<li class="nav-item"><a href="picker_color.php" class="nav-link">Color pickers</a></li>
								<li class="nav-item"><a href="picker_location.php" class="nav-link">Location pickers</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Form layouts</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form layouts">
								<li class="nav-item"><a href="form_layout_vertical.php" class="nav-link">Vertical form</a></li>
								<li class="nav-item"><a href="form_layout_vertical_styled.php" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="form_layout_horizontal.php" class="nav-link">Horizontal form</a></li>
								<li class="nav-item"><a href="form_layout_horizontal_styled.php" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
					-->
						<!-- /forms -->

						<!-- Components -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Components</div> <i class="icon-menu" title="Components"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid"></i> <span>Basic components</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic components">
								<li class="nav-item"><a href="components_modals.php" class="nav-link">Modals</a></li>
								<li class="nav-item"><a href="components_dropdowns.php" class="nav-link">Dropdown menus</a></li>
								<li class="nav-item"><a href="components_tabs.php" class="nav-link">Tabs component</a></li>
								<li class="nav-item"><a href="components_pills.php" class="nav-link">Pills component</a></li>
								<li class="nav-item"><a href="components_collapsible.php" class="nav-link">Collapsible</a></li>
								<li class="nav-item"><a href="components_navs.php" class="nav-link">Navs</a></li>
								<li class="nav-item"><a href="components_buttons.php" class="nav-link">Buttons</a></li>
								<li class="nav-item"><a href="components_popups.php" class="nav-link">Tooltips and popovers</a></li>
								<li class="nav-item"><a href="components_alerts.php" class="nav-link">Alerts</a></li>
								<li class="nav-item"><a href="components_pagination.php" class="nav-link">Pagination</a></li>
								<li class="nav-item"><a href="components_badges.php" class="nav-link">Badges</a></li>
								<li class="nav-item"><a href="components_progress.php" class="nav-link">Progress</a></li>
								<li class="nav-item"><a href="components_breadcrumbs.php" class="nav-link">Breadcrumbs</a></li>
								<li class="nav-item"><a href="components_media.php" class="nav-link">Media objects</a></li>
								<li class="nav-item"><a href="components_scrollspy.php" class="nav-link">Scrollspy</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-puzzle2"></i> <span>Content styling</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Content styling">
								<li class="nav-item"><a href="content_page_header.php" class="nav-link">Page header</a></li>
								<li class="nav-item"><a href="content_page_footer.php" class="nav-link disabled">Page footer <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="content_cards.php" class="nav-link">Cards</a></li>
								<li class="nav-item"><a href="content_cards_content.php" class="nav-link">Card content</a></li>
								<li class="nav-item"><a href="content_cards_layouts.php" class="nav-link">Card layouts</a></li>
								<li class="nav-item"><a href="content_cards_header.php" class="nav-link">Card header elements</a></li>
								<li class="nav-item"><a href="content_cards_footer.php" class="nav-link">Card footer elements</a></li>
								<li class="nav-item"><a href="content_cards_draggable.php" class="nav-link">Draggable cards</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="content_text_styling.php" class="nav-link">Text styling</a></li>
								<li class="nav-item"><a href="content_typography.php" class="nav-link">Typography</a></li>
								<li class="nav-item"><a href="content_helpers.php" class="nav-link">Helper classes</a></li>
								<li class="nav-item"><a href="content_helpers_flex.php" class="nav-link">Flex utilities</a></li>
								<li class="nav-item"><a href="content_syntax_highlighter.php" class="nav-link">Syntax highlighter</a></li>
								<li class="nav-item"><a href="content_grid.php" class="nav-link">Grid system</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-gift"></i> <span>Extra components</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Extra components">
								<li class="nav-item"><a href="extra_pnotify.php" class="nav-link">PNotify notifications</a></li>
								<li class="nav-item"><a href="extra_jgrowl_noty.php" class="nav-link">jGrowl and Noty notifications</a></li>
								<li class="nav-item"><a href="extra_sweetalert.php" class="nav-link">SweetAlert notifications</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="extra_sliders_noui.php" class="nav-link">NoUI sliders</a></li>
								<li class="nav-item"><a href="extra_sliders_ion.php" class="nav-link">Ion range sliders</a></li>
								<li class="nav-item"><a href="extra_trees.php" class="nav-link">Dynamic tree views</a></li>
								<li class="nav-item"><a href="extra_context_menu.php" class="nav-link">Context menu</a></li>
								<li class="nav-item"><a href="extra_fab.php" class="nav-link">Floating action buttons</a></li>
								<li class="nav-item"><a href="extra_session_timeout.php" class="nav-link">Session timeout</a></li>
								<li class="nav-item"><a href="extra_idle_timeout.php" class="nav-link">Idle timeout</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-droplet2"></i> <span>Color system</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Color system">
								<li class="nav-item"><a href="colors_primary.php" class="nav-link">Primary palette</a></li>
								<li class="nav-item"><a href="colors_danger.php" class="nav-link">Danger palette</a></li>
								<li class="nav-item"><a href="colors_success.php" class="nav-link">Success palette</a></li>
								<li class="nav-item"><a href="colors_warning.php" class="nav-link">Warning palette</a></li>
								<li class="nav-item"><a href="colors_info.php" class="nav-link">Info palette</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="colors_pink.php" class="nav-link">Pink palette</a></li>
								<li class="nav-item"><a href="colors_violet.php" class="nav-link">Violet palette</a></li>
								<li class="nav-item"><a href="colors_purple.php" class="nav-link">Purple palette</a></li>
								<li class="nav-item"><a href="colors_indigo.php" class="nav-link">Indigo palette</a></li>
								<li class="nav-item"><a href="colors_blue.php" class="nav-link">Blue palette</a></li>
								<li class="nav-item"><a href="colors_teal.php" class="nav-link">Teal palette</a></li>
								<li class="nav-item"><a href="colors_green.php" class="nav-link">Green palette</a></li>
								<li class="nav-item"><a href="colors_orange.php" class="nav-link">Orange palette</a></li>
								<li class="nav-item"><a href="colors_brown.php" class="nav-link">Brown palette</a></li>
								<li class="nav-item"><a href="colors_grey.php" class="nav-link">Grey palette</a></li>
								<li class="nav-item"><a href="colors_slate.php" class="nav-link">Slate palette</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-spinner2 spinner"></i> <span>Animations</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Animations">
								<li class="nav-item"><a href="animations_css3.php" class="nav-link">CSS3 animations</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Velocity animations</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="animations_velocity_basic.php" class="nav-link">Basic usage</a></li>
										<li class="nav-item"><a href="animations_velocity_ui.php" class="nav-link">UI pack effects</a></li>
										<li class="nav-item"><a href="animations_velocity_examples.php" class="nav-link">Advanced examples</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-thumbs-up2"></i> <span>Icons</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Icons">
								<li class="nav-item"><a href="icons_icomoon.php" class="nav-link">Icomoon</a></li>
								<li class="nav-item"><a href="icons_material.php" class="nav-link">Material</a></li>
								<li class="nav-item"><a href="icons_fontawesome.php" class="nav-link">Font awesome</a></li>
							</ul>
						</li>
					-->
						<!-- /components -->

						<!-- Layout -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Layout</div> <i class="icon-menu" title="Layout options"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Page layouts</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Page layouts">
								<li class="nav-item"><a href="layout_fixed_navbar.php" class="nav-link">Fixed navbar</a></li>
								<li class="nav-item"><a href="layout_fixed_sidebar_custom.php" class="nav-link">Fixed sidebar - custom scroll</a></li>
								<li class="nav-item"><a href="layout_fixed_sidebar_native.php" class="nav-link">Fixed sidebar - native scroll</a></li>
								<li class="nav-item"><a href="layout_fixed_hideable_navbar.php" class="nav-link">Hideable navbar</a></li>
								<li class="nav-item"><a href="layout_fixed_footer.php" class="nav-link">Fixed footer</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="layout_boxed_default.php" class="nav-link">Boxed with default sidebar</a></li>
								<li class="nav-item"><a href="layout_boxed_mini.php" class="nav-link">Boxed with mini sidebar</a></li>
								<li class="nav-item"><a href="layout_boxed_full.php" class="nav-link">Boxed full width</a></li>
								<li class="nav-item"><a href="layout_boxed_content.php" class="nav-link">Boxed content</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-indent-decrease2"></i> <span>Sidebars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Sidebars">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Main sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_default_collapse.php" class="nav-link">Default collapsible</a></li>
										<li class="nav-item"><a href="sidebar_default_hide.php" class="nav-link">Default hideable</a></li>
										<li class="nav-item"><a href="sidebar_default_hidden.php" class="nav-link">Default hidden</a></li>
										<li class="nav-item"><a href="sidebar_mini_collapse.php" class="nav-link">Mini collapsible</a></li>
										<li class="nav-item"><a href="sidebar_mini_hide.php" class="nav-link">Mini hideable</a></li>
										<li class="nav-item"><a href="sidebar_mini_hidden.php" class="nav-link">Mini hidden</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_default_color_light.php" class="nav-link">Light color</a></li>
										<li class="nav-item"><a href="sidebar_default_color_custom.php" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Secondary sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_secondary_after.php" class="nav-link">After default</a></li>
										<li class="nav-item"><a href="sidebar_secondary_before.php" class="nav-link">Before default</a></li>
										<li class="nav-item"><a href="sidebar_secondary_hidden.php" class="nav-link">Hidden by default</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_secondary_color_dark.php" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_secondary_color_custom.php" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Right sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_right_default_collapse.php" class="nav-link">Show - collapse main</a></li>
										<li class="nav-item"><a href="sidebar_right_default_hide.php" class="nav-link">Show - hide main</a></li>
										<li class="nav-item"><a href="sidebar_right_default_toggle.php" class="nav-link">Show - fix default width</a></li>
										<li class="nav-item"><a href="sidebar_right_mini_toggle.php" class="nav-link">Show - fix mini width</a></li>
										<li class="nav-item"><a href="sidebar_right_secondary_hide.php" class="nav-link">Show - hide secondary</a></li>
										<li class="nav-item"><a href="sidebar_right_visible.php" class="nav-link">Visible by default</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_right_color_dark.php" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_right_color_custom.php" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_content_left.php" class="nav-link">Left position</a></li>
										<li class="nav-item"><a href="sidebar_content_left_stretch.php" class="nav-link">Left stretched</a></li>
										<li class="nav-item"><a href="sidebar_content_left_hidden.php" class="nav-link">Left hidden</a></li>
										<li class="nav-item"><a href="sidebar_content_right.php" class="nav-link">Right position</a></li>
										<li class="nav-item"><a href="sidebar_content_right_stretch.php" class="nav-link">Right stretched</a></li>
										<li class="nav-item"><a href="sidebar_content_right_hidden.php" class="nav-link">Right hidden</a></li>
										<li class="nav-item"><a href="sidebar_content_sections.php" class="nav-link">Sectioned sidebar</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_content_color_dark.php" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_content_color_custom.php" class="nav-link">Custom color</a></li>
										<li class="nav-item"><a href="sidebar_content_color_sections_custom.php" class="nav-link">Custom sections color</a></li>
									</ul>
								</li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="sidebar_components.php" class="nav-link">Sidebar components</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-menu3"></i> <span>Navbars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Navbars">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Single navbar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_single_top_static.php" class="nav-link">Single top static</a></li>
										<li class="nav-item"><a href="navbar_single_top_fixed.php" class="nav-link">Single top fixed</a></li>
										<li class="nav-item"><a href="navbar_single_bottom_static.php" class="nav-link">Single bottom static</a></li>
										<li class="nav-item"><a href="navbar_single_bottom_fixed.php" class="nav-link">Single bottom fixed</a></li>
										<li class="nav-item"><a href="navbar_single_header_before.php" class="nav-link">Before page header</a></li>
										<li class="nav-item"><a href="navbar_single_header_after.php" class="nav-link">After page header</a></li>
										<li class="nav-item"><a href="navbar_single_content_after.php" class="nav-link">After page content</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Multiple navbars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_multiple_top_static.php" class="nav-link">Multiple top static</a></li>
										<li class="nav-item"><a href="navbar_multiple_top_fixed.php" class="nav-link">Multiple top fixed</a></li>
										<li class="nav-item"><a href="navbar_multiple_bottom_static.php" class="nav-link">Multiple bottom static</a></li>
										<li class="nav-item"><a href="navbar_multiple_bottom_fixed.php" class="nav-link">Multiple bottom fixed</a></li>
										<li class="nav-item"><a href="navbar_multiple_top_bottom.php" class="nav-link">Multiple - top and bottom</a></li>
										<li class="nav-item"><a href="navbar_multiple_secondary_sticky.php" class="nav-link">Multiple - secondary sticky</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content navbar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_component_single.php" class="nav-link">Single navbar</a></li>
										<li class="nav-item"><a href="navbar_component_multiple.php" class="nav-link">Multiple navbars</a></li>
									</ul>
								</li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="navbar_colors.php" class="nav-link">Color options</a></li>
								<li class="nav-item"><a href="navbar_sizes.php" class="nav-link">Sizing options</a></li>
								<li class="nav-item"><a href="navbar_hideable.php" class="nav-link">Hide on scroll</a></li>
								<li class="nav-item"><a href="navbar_components.php" class="nav-link">Navbar components</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-sort"></i> <span>Vertical navigation</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Vertical navigation">
								<li class="nav-item"><a href="navigation_vertical_collapsible.php" class="nav-link">Collapsible menu</a></li>
								<li class="nav-item"><a href="navigation_vertical_accordion.php" class="nav-link">Accordion menu</a></li>
								<li class="nav-item"><a href="navigation_vertical_bordered.php" class="nav-link">Bordered navigation</a></li>
								<li class="nav-item"><a href="navigation_vertical_right_icons.php" class="nav-link">Right icons</a></li>
								<li class="nav-item"><a href="navigation_vertical_badges.php" class="nav-link">Badges</a></li>
								<li class="nav-item"><a href="navigation_vertical_disabled.php" class="nav-link">Disabled items</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-transmission"></i> <span>Horizontal navigation</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Horizontal navigation">
								<li class="nav-item"><a href="navigation_horizontal_click.php" class="nav-link">Submenu on click</a></li>
								<li class="nav-item"><a href="navigation_horizontal_hover.php" class="nav-link">Submenu on hover</a></li>
								<li class="nav-item"><a href="navigation_horizontal_elements.php" class="nav-link">With custom elements</a></li>
								<li class="nav-item"><a href="navigation_horizontal_tabs.php" class="nav-link">Tabbed navigation</a></li>
								<li class="nav-item"><a href="navigation_horizontal_disabled.php" class="nav-link">Disabled navigation links</a></li>
								<li class="nav-item"><a href="navigation_horizontal_mega.php" class="nav-link">Horizontal mega menu</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Menu levels</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> Second level</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link"><i class="icon-firefox"></i> Second level with child</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-android"></i> Third level</a></li>
										<li class="nav-item nav-item-submenu">
											<a href="#" class="nav-link"><i class="icon-apple2"></i> Third level with child</a>
											<ul class="nav nav-group-sub">
												<li class="nav-item"><a href="#" class="nav-link"><i class="icon-php5"></i> Fourth level</a></li>
												<li class="nav-item"><a href="#" class="nav-link"><i class="icon-css3"></i> Fourth level</a></li>
											</ul>
										</li>
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-windows"></i> Third level</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Second level</a></li>
							</ul>
						</li>
					-->
						<!-- /layout -->

						<!-- Data visualization -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Data visualization</div> <i class="icon-menu" title="Data visualization"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-graph"></i> <span>Echarts library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="ECharts library">
								<li class="nav-item"><a href="echarts_lines.php" class="nav-link">Line charts</a></li>
								<li class="nav-item"><a href="echarts_areas.php" class="nav-link">Area charts</a></li>
								<li class="nav-item"><a href="echarts_columns_waterfalls.php" class="nav-link">Columns and waterfalls</a></li>
								<li class="nav-item"><a href="echarts_bars_tornados.php" class="nav-link">Bars and tornados</a></li>
								<li class="nav-item"><a href="echarts_scatter.php" class="nav-link">Scatter charts</a></li>
								<li class="nav-item"><a href="echarts_pies_donuts.php" class="nav-link">Pies and donuts</a></li>
								<li class="nav-item"><a href="echarts_funnels_calendars.php" class="nav-link">Funnels and calendars</a></li>
								<li class="nav-item"><a href="echarts_candlesticks_others.php" class="nav-link">Candlesticks and others</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-statistics"></i> <span>D3 library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="D3 library">
								<li class="nav-item"><a href="d3_lines_basic.php" class="nav-link">Simple lines</a></li>
								<li class="nav-item"><a href="d3_lines_advanced.php" class="nav-link">Advanced lines</a></li>
								<li class="nav-item"><a href="d3_bars_basic.php" class="nav-link">Simple bars</a></li>
								<li class="nav-item"><a href="d3_bars_advanced.php" class="nav-link">Advanced bars</a></li>
								<li class="nav-item"><a href="d3_pies.php" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="d3_circle_diagrams.php" class="nav-link">Circle diagrams</a></li>
								<li class="nav-item"><a href="d3_tree.php" class="nav-link">Tree layout</a></li>
								<li class="nav-item"><a href="d3_other.php" class="nav-link">Other charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stats-dots"></i> <span>Dimple library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Dimple library">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Line charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_lines_horizontal.php" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_lines_vertical.php" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Bar charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_bars_horizontal.php" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_bars_vertical.php" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Area charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_area_horizontal.php" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_area_vertical.php" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Step charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_step_horizontal.php" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_step_vertical.php" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="dimple_pies.php" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="dimple_rings.php" class="nav-link">Ring charts</a></li>
								<li class="nav-item"><a href="dimple_scatter.php" class="nav-link">Scatter charts</a></li>
								<li class="nav-item"><a href="dimple_bubble.php" class="nav-link">Bubble charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stats-bars"></i> <span>C3 library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="C3 library">
								<li class="nav-item"><a href="c3_lines_areas.php" class="nav-link">Lines and areas</a></li>
								<li class="nav-item"><a href="c3_bars_pies.php" class="nav-link">Bars and pies</a></li>
								<li class="nav-item"><a href="c3_advanced.php" class="nav-link">Advanced examples</a></li>
								<li class="nav-item"><a href="c3_axis.php" class="nav-link">Chart axis</a></li>
								<li class="nav-item"><a href="c3_grid.php" class="nav-link">Grid options</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-google"></i> <span>Google charts</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Google charts">
								<li class="nav-item"><a href="google_lines.php" class="nav-link">Line charts</a></li>
								<li class="nav-item"><a href="google_bars.php" class="nav-link">Bar charts</a></li>
								<li class="nav-item"><a href="google_pies.php" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="google_scatter_bubble.php" class="nav-link">Bubble &amp; scatter charts</a></li>
								<li class="nav-item"><a href="google_other.php" class="nav-link">Other charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-map5"></i> <span>Maps integration</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Maps integration">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Google maps</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="maps_google_basic.php" class="nav-link">Basics</a></li>
										<li class="nav-item"><a href="maps_google_controls.php" class="nav-link">Controls</a></li>
										<li class="nav-item"><a href="maps_google_markers.php" class="nav-link">Markers</a></li>
										<li class="nav-item"><a href="maps_google_drawings.php" class="nav-link">Map drawings</a></li>
										<li class="nav-item"><a href="maps_google_layers.php" class="nav-link ">Layers</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="maps_vector.php" class="nav-link">Vector maps</a></li>
								<li class="nav-item"><a href="maps_echarts.php" class="nav-link disabled">ECharts maps <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
					-->
						<!-- /data visualization -->

						<!-- Extensions -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Extensions</div> <i class="icon-menu" title="Extensions"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-puzzle4"></i> <span>Extensions</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Extensions">
								<li class="nav-item"><a href="extension_image_cropper.php" class="nav-link">Image cropper</a></li>
								<li class="nav-item"><a href="extension_blockui.php" class="nav-link">Block UI</a></li>
								<li class="nav-item"><a href="extension_dnd.php" class="nav-link">Drag and drop</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-popout"></i> <span>JQuery UI</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="jQuery UI">
								<li class="nav-item"><a href="jqueryui_interactions.php" class="nav-link">Interactions</a></li>
								<li class="nav-item"><a href="jqueryui_forms.php" class="nav-link">Forms</a></li>
								<li class="nav-item"><a href="jqueryui_components.php" class="nav-link">Components</a></li>
								<li class="nav-item"><a href="jqueryui_sliders.php" class="nav-link">Sliders</a></li>
								<li class="nav-item"><a href="jqueryui_navigation.php" class="nav-link">Navigation</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-upload"></i> <span>File uploaders</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="File uploaders">
								<li class="nav-item"><a href="uploader_plupload.php" class="nav-link">Plupload</a></li>
								<li class="nav-item"><a href="uploader_bootstrap.php" class="nav-link">Bootstrap file uploader</a></li>
								<li class="nav-item"><a href="uploader_dropzone.php" class="nav-link">Dropzone</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-calendar3"></i> <span>Event calendars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Event calendars">
								<li class="nav-item"><a href="fullcalendar_views.php" class="nav-link">Basic views</a></li>
								<li class="nav-item"><a href="fullcalendar_styling.php" class="nav-link">Event styling</a></li>
								<li class="nav-item"><a href="fullcalendar_formats.php" class="nav-link">Language and time</a></li>
								<li class="nav-item"><a href="fullcalendar_advanced.php" class="nav-link">Advanced usage</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-sphere"></i> <span>Internationalization</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Internationalization">
								<li class="nav-item"><a href="internationalization_switch_direct.php" class="nav-link">Direct translation</a></li>
								<li class="nav-item"><a href="internationalization_switch_query.php" class="nav-link">Querystring parameter</a></li>
								<li class="nav-item"><a href="internationalization_fallback.php" class="nav-link">Language fallback</a></li>
								<li class="nav-item"><a href="internationalization_callbacks.php" class="nav-link">Callbacks</a></li>
							</ul>
						</li>
					-->
						<!-- /extensions -->

						<!-- Tables -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Tables</div> <i class="icon-menu" title="Tables"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-table2"></i> <span>Basic tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic tables">
								<li class="nav-item"><a href="table_basic.php" class="nav-link">Basic examples</a></li>
								<li class="nav-item"><a href="table_sizing.php" class="nav-link">Table sizing</a></li>
								<li class="nav-item"><a href="table_borders.php" class="nav-link">Table borders</a></li>
								<li class="nav-item"><a href="table_styling.php" class="nav-link">Table styling</a></li>
								<li class="nav-item"><a href="table_elements.php" class="nav-link">Table elements</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid7"></i> <span>Data tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables">
								<li class="nav-item"><a href="datatable_basic.php" class="nav-link">Basic initialization</a></li>
								<li class="nav-item"><a href="datatable_styling.php" class="nav-link">Basic styling</a></li>
								<li class="nav-item"><a href="datatable_advanced.php" class="nav-link">Advanced examples</a></li>
								<li class="nav-item"><a href="datatable_sorting.php" class="nav-link">Sorting options</a></li>
								<li class="nav-item"><a href="datatable_api.php" class="nav-link">Using API</a></li>
								<li class="nav-item"><a href="datatable_data_sources.php" class="nav-link">Data sources</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-alignment-unalign"></i> <span>Data tables extensions</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables extensions">
								<li class="nav-item"><a href="datatable_extension_reorder.php" class="nav-link">Columns reorder</a></li>
								<li class="nav-item"><a href="datatable_extension_row_reorder.php" class="nav-link">Row reorder</a></li>
								<li class="nav-item"><a href="datatable_extension_fixed_columns.php" class="nav-link">Fixed columns</a></li>
								<li class="nav-item"><a href="datatable_extension_fixed_header.php" class="nav-link">Fixed header</a></li>
								<li class="nav-item"><a href="datatable_extension_autofill.php" class="nav-link">Auto fill</a></li>
								<li class="nav-item"><a href="datatable_extension_key_table.php" class="nav-link">Key table</a></li>
								<li class="nav-item"><a href="datatable_extension_scroller.php" class="nav-link">Scroller</a></li>
								<li class="nav-item"><a href="datatable_extension_select.php" class="nav-link">Select</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Buttons</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="datatable_extension_buttons_init.php" class="nav-link">Initialization</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_flash.php" class="nav-link">Flash buttons</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_print.php" class="nav-link">Print buttons</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_php5.php" class="nav-link">php5 buttons</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="datatable_extension_colvis.php" class="nav-link">Columns visibility</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-file-spreadsheet"></i> <span>Handsontable</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Handsontable">
								<li class="nav-item"><a href="handsontable_basic.php" class="nav-link">Basic configuration</a></li>
								<li class="nav-item"><a href="handsontable_advanced.php" class="nav-link">Advanced setup</a></li>
								<li class="nav-item"><a href="handsontable_cols.php" class="nav-link">Column features</a></li>
								<li class="nav-item"><a href="handsontable_cells.php" class="nav-link">Cell features</a></li>
								<li class="nav-item"><a href="handsontable_types.php" class="nav-link">Basic cell types</a></li>
								<li class="nav-item"><a href="handsontable_custom_checks.php" class="nav-link">Custom &amp; checkboxes</a></li>
								<li class="nav-item"><a href="handsontable_ac_password.php" class="nav-link">Autocomplete &amp; password</a></li>
								<li class="nav-item"><a href="handsontable_search.php" class="nav-link">Search</a></li>
								<li class="nav-item"><a href="handsontable_context.php" class="nav-link">Context menu</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-versions"></i> <span>Responsive tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Responsive tables">
								<li class="nav-item"><a href="table_responsive.php" class="nav-link">Responsive basic tables</a></li>
								<li class="nav-item"><a href="datatable_responsive.php" class="nav-link">Responsive data tables</a></li>
							</ul>
						</li>
					-->
						<!-- /tables -->

						<!-- Page kits -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Page kits</div> <i class="icon-menu" title="Page kits"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid6"></i> <span>General pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="General pages">
								<li class="nav-item"><a href="general_feed.php" class="nav-link">Feed</a></li>
								<li class="nav-item"><a href="general_embeds.php" class="nav-link">Embeds</a></li>
								<li class="nav-item"><a href="general_faq.php" class="nav-link">FAQ page</a></li>
								<li class="nav-item"><a href="general_knowledgebase.php" class="nav-link">Knowledgebase</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Blog</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="blog_classic_v.php" class="nav-link">Classic vertical</a></li>
										<li class="nav-item"><a href="blog_classic_h.php" class="nav-link">Classic horizontal</a></li>
										<li class="nav-item"><a href="blog_grid.php" class="nav-link">Grid</a></li>
										<li class="nav-item"><a href="blog_single.php" class="nav-link">Single post</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="blog_sidebar_left.php" class="nav-link">Left sidebar</a></li>
										<li class="nav-item"><a href="blog_sidebar_right.php" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Timelines</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="timelines_left.php" class="nav-link">Left timeline</a></li>
										<li class="nav-item"><a href="timelines_right.php" class="nav-link">Right timeline</a></li>
										<li class="nav-item"><a href="timelines_center.php" class="nav-link">Centered timeline</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Gallery</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="gallery_grid.php" class="nav-link">Media grid</a></li>
										<li class="nav-item"><a href="gallery_titles.php" class="nav-link">Media with titles</a></li>
										<li class="nav-item"><a href="gallery_description.php" class="nav-link">Media with description</a></li>
										<li class="nav-item"><a href="gallery_library.php" class="nav-link">Media library</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-wrench3"></i> <span>Service pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Service pages">
								<li class="nav-item"><a href="service_sitemap.php" class="nav-link">Sitemap</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Invoicing</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="invoice_template.php" class="nav-link">Invoice template</a></li>
										<li class="nav-item"><a href="invoice_grid.php" class="nav-link">Invoice grid</a></li>
										<li class="nav-item"><a href="invoice_archive.php" class="nav-link">Invoice archive</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Authentication</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="login_simple.php" class="nav-link">Simple login</a></li>
										<li class="nav-item"><a href="login_advanced.php" class="nav-link">More login info</a></li>
										<li class="nav-item"><a href="login_registration.php" class="nav-link">Simple registration</a></li>
										<li class="nav-item"><a href="login_registration_advanced.php" class="nav-link">More registration info</a></li>
										<li class="nav-item"><a href="login_unlock.php" class="nav-link">Unlock user</a></li>
										<li class="nav-item"><a href="login_password_recover.php" class="nav-link">Reset password</a></li>
										<li class="nav-item"><a href="login_hide_navbar.php" class="nav-link">Hide navbar</a></li>
										<li class="nav-item"><a href="login_transparent.php" class="nav-link">Transparent box</a></li>
										<li class="nav-item"><a href="login_background.php" class="nav-link">Background option</a></li>
										<li class="nav-item"><a href="login_validation.php" class="nav-link">With validation</a></li>
										<li class="nav-item"><a href="login_tabbed.php" class="nav-link">Tabbed form</a></li>
										<li class="nav-item"><a href="login_modals.php" class="nav-link">Inside modals</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Error pages</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="error_403.php" class="nav-link">Error 403</a></li>
										<li class="nav-item"><a href="error_404.php" class="nav-link">Error 404</a></li>
										<li class="nav-item"><a href="error_405.php" class="nav-link">Error 405</a></li>
										<li class="nav-item"><a href="error_500.php" class="nav-link">Error 500</a></li>
										<li class="nav-item"><a href="error_503.php" class="nav-link">Error 503</a></li>
										<li class="nav-item"><a href="error_offline.php" class="nav-link">Offline page</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-people"></i> <span>User pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="User pages">
								<li class="nav-item"><a href="user_pages_list.php" class="nav-link">User list</a></li>
								<li class="nav-item"><a href="user_pages_cards.php" class="nav-link">User cards</a></li>
								<li class="nav-item"><a href="user_pages_profile.php" class="nav-link">Simple profile</a></li>
								<li class="nav-item"><a href="user_pages_profile_tabbed.php" class="nav-link">Tabbed profile</a></li>
								<li class="nav-item"><a href="user_pages_profile_cover.php" class="nav-link">Profile with cover</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-cube3"></i> <span>Application pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Application pages">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Task manager</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="task_manager_grid.php" class="nav-link">Task grid</a></li>
										<li class="nav-item"><a href="task_manager_list.php" class="nav-link">Task list</a></li>
										<li class="nav-item"><a href="task_manager_detailed.php" class="nav-link">Task detailed</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Inbox</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="mail_list.php" class="nav-link">Mail list</a></li>
										<li class="nav-item"><a href="mail_list_detached.php" class="nav-link">Mail list (detached)</a></li>
										<li class="nav-item"><a href="mail_read.php" class="nav-link">Read mail</a></li>
										<li class="nav-item"><a href="mail_write.php" class="nav-link">Write mail</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="chat_layouts.php" class="nav-link">Chat layouts</a></li>
										<li class="nav-item"><a href="chat_options.php" class="nav-link">Chat options</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Search</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="search_basic.php" class="nav-link">Basic search results</a></li>
										<li class="nav-item"><a href="search_users.php" class="nav-link">User search results</a></li>
										<li class="nav-item"><a href="search_images.php" class="nav-link">Image search results</a></li>
										<li class="nav-item"><a href="search_videos.php" class="nav-link">Video search results</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Job search</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="job_list_cards.php" class="nav-link">Cards view</a></li>
										<li class="nav-item"><a href="job_list_list.php" class="nav-link">List view</a></li>
										<li class="nav-item"><a href="job_detailed.php" class="nav-link">Job detailed</a></li>
										<li class="nav-item"><a href="job_apply.php" class="nav-link">Apply</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Learning</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="learning_list.php" class="nav-link">List view</a></li>
										<li class="nav-item"><a href="learning_grid.php" class="nav-link">Grid view</a></li>
										<li class="nav-item"><a href="learning_detailed.php" class="nav-link">Detailed course</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Ecommerce set</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="ecommerce_product_list.php" class="nav-link">Product list</a></li>
										<li class="nav-item"><a href="ecommerce_product_grid.php" class="nav-link">Product grid</a></li>
										<li class="nav-item"><a href="ecommerce_orders_history.php" class="nav-link">Orders history</a></li>
										<li class="nav-item"><a href="ecommerce_customers.php" class="nav-link">Customers</a></li>
										<li class="nav-item"><a href="ecommerce_pricing.php" class="nav-link">Pricing tables</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-atom2"></i> <span>Widgets</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Widgets">
								<li class="nav-item"><a href="widgets_content.php" class="nav-link">Content widgets</a></li>
								<li class="nav-item"><a href="widgets_stats.php" class="nav-link">Statistics widgets</a></li>
								<li class="nav-item"><a href="widgets_menu.php" class="nav-link disabled">Menu widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item"><a href="widgets_form.php" class="nav-link disabled">Form widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
					-->
						<!-- /page kits -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<!--
		<div class="content-wrapper">
		-->

			<!-- Page header -->
			<!--
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">FORMULARIO</span> - Inputs Grid</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="form_inputs_grid.php" class="breadcrumb-item">FORMULARIO</a>
							<span class="breadcrumb-item active">Inputs drid</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		-->
			<!-- /page header -->


			<!-- Content area -->
			<!--
			<div class="content">
-->
				<!-- Default grid -->
				<!--
				<div class="row">
					<div class="col-lg-6">
			            <div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Default form</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

			                <div class="card-body">
			                	<form action="#">
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-2">
			                                </div>
										</div>

										<div class="col-md-10">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-10">
			                                </div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-3">
			                                </div>
										</div>

										<div class="col-md-9">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-9">
			                                </div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-4">
			                                </div>
										</div>

										<div class="col-md-8">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-8">
			                                </div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-5">
			                                </div>
										</div>

										<div class="col-md-7">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-7">
			                                </div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-6">
			                                </div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-6">
			                                </div>
										</div>
									</div>

			                        <div class="text-right">
			                        	<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
			                        </div>
		                        </form>
			                </div>
			            </div>
					</div>

					<div class="col-lg-6">
			            <div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Horizontal form</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

			                <div class="card-body">
								<form action="#">
									<div class="form-group row">
										<div class="col-md-2">
			                                <input type="text" class="form-control" placeholder="col-md-2">
										</div>

										<div class="col-md-10">
			                                <input type="text" class="form-control" placeholder="col-md-10">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-3">
			                                <input type="text" class="form-control" placeholder="col-md-3">
										</div>

										<div class="col-md-9">
			                                <input type="text" class="form-control" placeholder="col-md-9">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4">
			                                <input type="text" class="form-control" placeholder="col-md-4">
										</div>

										<div class="col-md-8">
			                                <input type="text" class="form-control" placeholder="col-md-8">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-5">
			                                <input type="text" class="form-control" placeholder="col-md-5">
										</div>

										<div class="col-md-7">
			                                <input type="text" class="form-control" placeholder="col-md-7">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-6">
			                                <input type="text" class="form-control" placeholder="col-md-6">
										</div>

										<div class="col-md-6">
			                                <input type="text" class="form-control" placeholder="col-md-6">
										</div>
									</div>

			                        <div class="text-right">
			                        	<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
			                        </div>
					            </form>
			                </div>
			            </div>
					</div>
				</div>
			-->
				<!-- /default grid -->

<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">formulario</span>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="datatable_extension_row_reorder.php" class="breadcrumb-item">NUEVAS EMPRESAS</a>
							
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<!--
			<div class="content">
-->
				<!-- Basic datatable -->
				<!--
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">AGREGA LA EMPRESA</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Llenar los campos correspondientes
					</div>

					<form action="#">
							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">DATOS BASICOS</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">NOMBRE DE LA EMPRESA</label>
									<div class="col-lg-10">
											</span>
											<input type="text" class="form-control" placeholder="NOMBRE DE LA EMPRESA">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">FECHA DE INICIO</label>
									<div class="col-lg-10">
											</span>
											<input type="text" class="form-control" placeholder="ejemplo:año-0000">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">CORREO</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="CORREO">
											<span class="input-group-append">
												<span class="input-group-text">@</span>
											</span>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">ID</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="ejemplo: 123">
											<span class="input-group-append">
												
											</span>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">N° DEPARTAMENTO</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="N° DEPARTAMENTO">
											<span class="input-group-append">
												
											</span>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">TELEFONO</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">📞</span>
											</span>
											<input type="text" class="form-control" placeholder="TELEFONO">
											
											</span>
										</div>
									</div>
								</div>

							    <div class="form-group row">
									<label class="col-form-label col-lg-2">DIRECCIÓN</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="TELEFONO">
											<span class="input-group-append">
											</span>
										</div>
									</div>
								</div>

							    <div class="form-group row">
									<label class="col-form-label col-lg-2">SALARIO MAXIMO</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="EN PESOS $">
											<span class="input-group-append">
											</span>
										</div>
									</div>
								</div>

							    <div class="form-group row">
									<label class="col-form-label col-lg-2">SALARIO MINIMO</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="EN PESOS $">
											<span class="input-group-append">
		
			                        </div>
		                        </form>
						    </div>
						</div>
					</div>
				</div>
			-->
				<!-- /row and input labels (default form) -->


				<!-- Row label (horizontal form) -->
				<!--
	            <div class="card">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Horizontal row labels</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

	                <div class="card-body">
	                	<form action="#">
							<div class="form-group row">
								<label class="col-lg-2 col-form-label">Label</label>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-md-1">
			                                <input type="text" class="form-control" placeholder="col-md-1">
										</div>

										<div class="col-md-11">
			                                <input type="text" class="form-control" placeholder="col-md-11">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label">Label</label>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-md-2">
			                                <input type="text" class="form-control" placeholder="col-md-2">
										</div>

										<div class="col-md-10">
			                                <input type="text" class="form-control" placeholder="col-md-10">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label">Label</label>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-md-3">
			                                <input type="text" class="form-control" placeholder="col-md-3">
										</div>

										<div class="col-md-9">
			                                <input type="text" class="form-control" placeholder="col-md-9">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label">Label</label>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-md-4">
			                                <input type="text" class="form-control" placeholder="col-md-4">
										</div>

										<div class="col-md-8">
			                                <input type="text" class="form-control" placeholder="col-md-8">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label">Label</label>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-md-5">
			                                <input type="text" class="form-control" placeholder="col-md-5">
										</div>

										<div class="col-md-7">
			                                <input type="text" class="form-control" placeholder="col-md-7">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label">Label</label>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-md-6">
			                                <input type="text" class="form-control" placeholder="col-md-6">
										</div>

										<div class="col-md-6">
			                                <input type="text" class="form-control" placeholder="col-md-6">
										</div>
									</div>
								</div>
							</div>

	                        <div class="text-right">
	                        	<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
	                        </div>
                        </form>
				    </div>
				</div>
			-->
				<!-- /row label (horizontal form) -->


				<!-- Input label (horizontal form) -->
				<!--
	            <div class="card">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Horizontal input labels</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

	                <div class="card-body">
	                	<form action="#">
							<div class="form-group row">
								<div class="col-lg-2">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-2">
										</div>
									</div>
								</div>

								<div class="col-lg-10">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-10">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-lg-3">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-3">
										</div>
									</div>
								</div>

								<div class="col-lg-9">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-9">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-lg-4">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-4">
										</div>
									</div>
								</div>

								<div class="col-lg-8">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-8">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-lg-5">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-5">
										</div>
									</div>
								</div>

								<div class="col-lg-7">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-7">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-lg-6">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-6">
										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-6">
										</div>
									</div>
								</div>
							</div>

	                        <div class="text-right">
	                        	<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
	                        </div>
                        </form>
				    </div>
				</div>
			-->
				<!-- /input label (horizontal form) -->


				<!-- Multiple row inputs (vertical) -->
				<!--
	            <div class="card">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Multiple vertical inputs</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

	                <div class="card-body">
	                	<form action="#">
							<label>First form group</label>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
		                                <input type="text" class="form-control" placeholder="First row, first input">
	                                </div>

	                                <div class="form-group">
		                                <input type="text" class="form-control" placeholder="Second row, first input">
	                                </div>
								</div>

								<div class="col-md-8">
									<div class="form-group">
		                                <input type="text" class="form-control" placeholder="First row, second input">
	                                </div>

	                                <div class="form-group">
		                                <input type="text" class="form-control" placeholder="Second row, second input">
	                                </div>
								</div>
							</div>

							<label>Second form group</label>
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
		                                <input type="text" class="form-control" placeholder="First row, first input">
	                                </div>

	                                <div class="form-group">
		                                <input type="text" class="form-control" placeholder="Second row, first input">
	                                </div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
		                                <input type="text" class="form-control" placeholder="First row, second input">
	                                </div>

	                                <div class="form-group">
		                                <input type="text" class="form-control" placeholder="Second row, second input">
	                                </div>
								</div>
							</div>

	                        <div class="text-right">
	                        	<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
	                        </div>
                        </form>
				    </div>
				</div>
			-->
				<!-- /multiple row inputs (vertical) -->


				<!-- Multiple row inputs (horizontal) -->
	            <div class="card">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">TRANSPAIS</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

	                <div class="card-body">
	                	<form action="#">
							<div class="form-group row">
								<label class="col-lg-2 col-form-label">MATRICULA</label>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="Matricula institucional">
			                               </div>
			                             </div>
			                            </div>  
<!--
			                                <div class="form-group">
				                                <input type="text" class="form-control" placeholder="Second row, first input">
			                                </div>
										</div>

										<div class="col-md-8">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="First row, second input">
			                                </div>

			                                <div class="form-group">
				                                <input type="text" class="form-control" placeholder="Second row, second input">
			                                </div>
										</div>
									</div>
								</div>
							</div>
-->
					  <div class="card-body">
	                	<form action="#">
							<div class="form-group row">
								<label class="col-lg-2 col-form-label">CARRERA</label>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="Siglas">
			                                </div>
			                             </div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-2 col-form-label">RUTA EXACTA</label>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-md-8">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="Ruta correspondientes">
				                            </div>
<!--
			                                <div class="form-group">
				                                <input type="text" class="form-control" placeholder="Second row, first input">
			                                </div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="First row, second input">
			                                </div>

			                                <div class="form-group">
				                                <input type="text" class="form-control" placeholder="Second row, second input">
			                                </div>
										</div>
									</div>
								</div>
							</div>
-->
	                        <div class="text-right">
	                        	<button type="submit" class="btn btn-primary">ENVIAR <i class="icon-paperplane ml-2"></i></button>
	                        </div>
                        </form>
				    </div>
				</div>
				<!-- /multiple row inputs (horizontal) -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /content wrapper -->

	</div>
	<!-- /page content -->

</body>
</php>
