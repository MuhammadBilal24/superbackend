<?php include('layout/header.php')?>
				<!--begin::Main-->
				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<!--begin::Content wrapper-->
					<div class="d-flex flex-column flex-column-fluid">
						<!--begin::Toolbar-->
						<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
							<!--begin::Toolbar container-->
							<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
									<!--begin::Title-->
									<h1
										class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
										Multipurpose</h1>
									<!--end::Title-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="index.html"
												class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-400 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Dashboards</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center gap-2 gap-lg-3">
									<!--begin::Secondary button-->
									<a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal"
										data-bs-target="#kt_modal_create_app">Rollover</a>
									<!--end::Secondary button-->
									<!--begin::Primary button-->
									<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
										data-bs-target="#kt_modal_new_target">Add Target</a>
									<!--end::Primary button-->
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Toolbar container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Content-->
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-fluid">
								<!--begin::Row-->
								<div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
									<!--begin::Col-->
									<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
										<!--begin::Card widget 20-->
										<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10"
											style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<div class="card-title d-flex flex-column">
													<!--begin::Amount-->
													<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
													<!--end::Amount-->
													<!--begin::Subtitle-->
													<span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active
														Projects</span>
													<!--end::Subtitle-->
												</div>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<!--begin::Card body-->
											<div class="card-body d-flex align-items-end pt-0">
												<!--begin::Progress-->
												<div class="d-flex align-items-center flex-column mt-3 w-100">
													<div
														class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
														<span>43 Pending</span>
														<span>72%</span>
													</div>
													<div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
														<div class="bg-white rounded h-8px" role="progressbar"
															style="width: 72%;" aria-valuenow="50" aria-valuemin="0"
															aria-valuemax="100"></div>
													</div>
												</div>
												<!--end::Progress-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card widget 20-->
										<!--begin::Card widget 7-->
										<div class="card card-flush h-md-50 mb-5 mb-xl-10">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<div class="card-title d-flex flex-column">
													<!--begin::Amount-->
													<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">357</span>
													<!--end::Amount-->
													<!--begin::Subtitle-->
													<span
														class="text-gray-400 pt-1 fw-semibold fs-6">Professionals</span>
													<!--end::Subtitle-->
												</div>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<!--begin::Card body-->
											<div class="card-body d-flex flex-column justify-content-end pe-0">
												<!--begin::Title-->
												<span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s
													Heroes</span>
												<!--end::Title-->
												<!--begin::Users group-->
												<div class="symbol-group symbol-hover flex-nowrap">
													<div class="symbol symbol-35px symbol-circle"
														data-bs-toggle="tooltip" title="Alan Warden">
														<span
															class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
													</div>
													<div class="symbol symbol-35px symbol-circle"
														data-bs-toggle="tooltip" title="Michael Eberon">
														<img alt="Pic" src="assets/media/avatars/300-11.jpg" />
													</div>
													<div class="symbol symbol-35px symbol-circle"
														data-bs-toggle="tooltip" title="Susan Redwood">
														<span
															class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
													</div>
													<div class="symbol symbol-35px symbol-circle"
														data-bs-toggle="tooltip" title="Melody Macy">
														<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
													</div>
													<div class="symbol symbol-35px symbol-circle"
														data-bs-toggle="tooltip" title="Perry Matthew">
														<span
															class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
													</div>
													<div class="symbol symbol-35px symbol-circle"
														data-bs-toggle="tooltip" title="Barry Walter">
														<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
													</div>
													<a href="#" class="symbol symbol-35px symbol-circle"
														data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
														<span
															class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
													</a>
												</div>
												<!--end::Users group-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card widget 7-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
										<!--begin::Card widget 17-->
										<div class="card card-flush h-md-50 mb-5 mb-xl-10">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<div class="card-title d-flex flex-column">
													<!--begin::Info-->
													<div class="d-flex align-items-center">
														<!--begin::Currency-->
														<span
															class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
														<!--end::Currency-->
														<!--begin::Amount-->
														<span
															class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
														<!--end::Amount-->
														<!--begin::Badge-->
														<span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>2.2%</span>
														<!--end::Badge-->
													</div>
													<!--end::Info-->
													<!--begin::Subtitle-->
													<span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings
														in April</span>
													<!--end::Subtitle-->
												</div>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<!--begin::Card body-->
											<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
												<!--begin::Chart-->
												<div class="d-flex flex-center me-5 pt-2">
													<div id="kt_card_widget_17_chart"
														style="min-width: 70px; min-height: 70px" data-kt-size="70"
														data-kt-line="11"></div>
												</div>
												<!--end::Chart-->
												<!--begin::Labels-->
												<div class="d-flex flex-column content-justify-center flex-row-fluid">
													<!--begin::Label-->
													<div class="d-flex fw-semibold align-items-center">
														<!--begin::Bullet-->
														<div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
														<!--end::Bullet-->
														<!--begin::Label-->
														<div class="text-gray-500 flex-grow-1 me-4">Leaf CRM</div>
														<!--end::Label-->
														<!--begin::Stats-->
														<div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
														<!--end::Stats-->
													</div>
													<!--end::Label-->
													<!--begin::Label-->
													<div class="d-flex fw-semibold align-items-center my-3">
														<!--begin::Bullet-->
														<div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
														<!--end::Bullet-->
														<!--begin::Label-->
														<div class="text-gray-500 flex-grow-1 me-4">Mivy App</div>
														<!--end::Label-->
														<!--begin::Stats-->
														<div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
														<!--end::Stats-->
													</div>
													<!--end::Label-->
													<!--begin::Label-->
													<div class="d-flex fw-semibold align-items-center">
														<!--begin::Bullet-->
														<div class="bullet w-8px h-3px rounded-2 me-3"
															style="background-color: #E4E6EF"></div>
														<!--end::Bullet-->
														<!--begin::Label-->
														<div class="text-gray-500 flex-grow-1 me-4">Others</div>
														<!--end::Label-->
														<!--begin::Stats-->
														<div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
														<!--end::Stats-->
													</div>
													<!--end::Label-->
												</div>
												<!--end::Labels-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card widget 17-->
										<!--begin::List widget 26-->
										<div class="card card-flush h-lg-50">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<h3 class="card-title text-gray-800 fw-bold">External Links</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button
														class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
														data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
														data-kt-menu-overflow="true">
														<i class="ki-duotone ki-dots-square fs-1 text-gray-400 me-n1">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</button>
													<!--begin::Menu 2-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
														data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
																Quick Actions</div>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu separator-->
														<div class="separator mb-3 opacity-75"></div>
														<!--end::Menu separator-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">New Ticket</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">New Customer</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3" data-kt-menu-trigger="hover"
															data-kt-menu-placement="right-start">
															<!--begin::Menu item-->
															<a href="#" class="menu-link px-3">
																<span class="menu-title">New Group</span>
																<span class="menu-arrow"></span>
															</a>
															<!--end::Menu item-->
															<!--begin::Menu sub-->
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Admin Group</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Staff Group</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Member Group</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu sub-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">New Contact</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu separator-->
														<div class="separator mt-3 opacity-75"></div>
														<!--end::Menu separator-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<div class="menu-content px-3 py-3">
																<a class="btn btn-primary btn-sm px-4" href="#">Generate
																	Reports</a>
															</div>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 2-->
													<!--end::Menu-->
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-5">
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<!--begin::Section-->
													<a href="#" class="text-primary fw-semibold fs-6 me-2">Avg. Client
														Rating</a>
													<!--end::Section-->
													<!--begin::Action-->
													<button type="button"
														class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
														<i class="ki-duotone ki-exit-right-corner fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</button>
													<!--end::Action-->
												</div>
												<!--end::Item-->
												<!--begin::Separator-->
												<div class="separator separator-dashed my-3"></div>
												<!--end::Separator-->
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<!--begin::Section-->
													<a href="#" class="text-primary fw-semibold fs-6 me-2">Instagram
														Followers</a>
													<!--end::Section-->
													<!--begin::Action-->
													<button type="button"
														class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
														<i class="ki-duotone ki-exit-right-corner fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</button>
													<!--end::Action-->
												</div>
												<!--end::Item-->
												<!--begin::Separator-->
												<div class="separator separator-dashed my-3"></div>
												<!--end::Separator-->
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<!--begin::Section-->
													<a href="#" class="text-primary fw-semibold fs-6 me-2">Google Ads
														CPC</a>
													<!--end::Section-->
													<!--begin::Action-->
													<button type="button"
														class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
														<i class="ki-duotone ki-exit-right-corner fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</button>
													<!--end::Action-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::LIst widget 26-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xxl-6">
										<!--begin::Engage widget 10-->
										<div class="card card-flush h-md-100">
											<!--begin::Body-->
											<div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0"
												style="background-position: 100% 50%; background-image:url('assets/media/stock/900x600/42.png')">
												<!--begin::Wrapper-->
												<div class="mb-10">
													<!--begin::Title-->
													<div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
														<span class="me-2">Try our all new Enviroment with
															<br />
															<span class="position-relative d-inline-block text-danger">
																<a href="../../demo1/dist/pages/user-profile/overview.html"
																	class="text-danger opacity-75-hover">Pro Plan</a>
																<!--begin::Separator-->
																<span
																	class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
																<!--end::Separator-->
															</span></span>for Free
													</div>
													<!--end::Title-->
													<!--begin::Action-->
													<div class="text-center">
														<a href='#' class="btn btn-sm btn-dark fw-bold"
															data-bs-toggle="modal"
															data-bs-target="#kt_modal_upgrade_plan">Upgrade Now</a>
													</div>
													<!--begin::Action-->
												</div>
												<!--begin::Wrapper-->
												<!--begin::Illustration-->
												<img class="mx-auto h-150px h-lg-200px theme-light-show"
													src="assets/media/illustrations/misc/upgrade.svg" alt="" />
												<img class="mx-auto h-150px h-lg-200px theme-dark-show"
													src="assets/media/illustrations/misc/upgrade-dark.svg" alt="" />
												<!--end::Illustration-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Engage widget 10-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row gx-5 gx-xl-10">
									<!--begin::Col-->
									<div class="col-xxl-6 mb-5 mb-xl-10">
										<!--begin::Chart widget 8-->
										<div class="card card-flush h-xl-100">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-dark">Performance
														Overview</span>
													<span class="text-gray-400 mt-1 fw-semibold fs-6">Users from all
														channels</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div class="card-toolbar">
													<ul class="nav" id="kt_chart_widget_8_tabs">
														<li class="nav-item">
															<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1"
																data-bs-toggle="tab" id="kt_chart_widget_8_week_toggle"
																href="#kt_chart_widget_8_week_tab">Month</a>
														</li>
														<li class="nav-item">
															<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active"
																data-bs-toggle="tab" id="kt_chart_widget_8_month_toggle"
																href="#kt_chart_widget_8_month_tab">Week</a>
														</li>
													</ul>
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-6">
												<!--begin::Tab content-->
												<div class="tab-content">
													<!--begin::Tab pane-->
													<div class="tab-pane fade" id="kt_chart_widget_8_week_tab"
														role="tabpanel">
														<!--begin::Statistics-->
														<div class="mb-5">
															<!--begin::Statistics-->
															<div class="d-flex align-items-center mb-2">
																<span
																	class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
																<span
																	class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">18,89</span>
																<span class="badge badge-light-success fs-base">
																	<i
																		class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>4,8%</span>
															</div>
															<!--end::Statistics-->
															<!--begin::Description-->
															<span class="fs-6 fw-semibold text-gray-400">Avarage cost
																per interaction</span>
															<!--end::Description-->
														</div>
														<!--end::Statistics-->
														<!--begin::Chart-->
														<div id="kt_chart_widget_8_week_chart" class="ms-n5 min-h-auto"
															style="height: 275px"></div>
														<!--end::Chart-->
														<!--begin::Items-->
														<div class="d-flex flex-wrap pt-5">
															<!--begin::Item-->
															<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
																<!--begin::Item-->
																<div class="d-flex align-items-center mb-3 mb-sm-6">
																	<!--begin::Bullet-->
																	<span
																		class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
																	<!--end::Bullet-->
																	<!--begin::Label-->
																	<span class="fw-bold text-gray-600 fs-6">Social
																		Campaigns</span>
																	<!--end::Label-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex align-items-center">
																	<!--begin::Bullet-->
																	<span
																		class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
																	<!--end::Bullet-->
																	<!--begin::Label-->
																	<span class="fw-bold text-&lt;gray-600 fs-6">Google
																		Ads</span>
																	<!--end::Label-->
																</div>
																<!--ed::Item-->
															</div>
															<!--ed::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
																<!--begin::Item-->
																<div class="d-flex align-items-center mb-3 mb-sm-6">
																	<!--begin::Bullet-->
																	<span
																		class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
																	<!--end::Bullet-->
																	<!--begin::Label-->
																	<span class="fw-bold text-gray-600 fs-6">Email
																		Newsletter</span>
																	<!--end::Label-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex align-items-center">
																	<!--begin::Bullet-->
																	<span
																		class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
																	<!--end::Bullet-->
																	<!--begin::Label-->
																	<span
																		class="fw-bold text-gray-600 fs-6">Courses</span>
																	<!--end::Label-->
																</div>
																<!--ed::Item-->
															</div>
															<!--ed::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-column pt-sm-3 pt-6">
																<!--begin::Item-->
																<div class="d-flex align-items-center mb-3 mb-sm-6">
																	<!--begin::Bullet-->
																	<span
																		class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
																	<!--end::Bullet-->
																	<!--begin::Label-->
																	<span class="fw-bold text-gray-600 fs-6">TV
																		Campaign</span>
																	<!--end::Label-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex align-items-center">
																	<!--begin::Bullet-->
																	<span
																		class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
																	<!--end::Bullet-->
																	<!--begin::Label-->
																	<span
																		class="fw-bold text-gray-600 fs-6">Radio</span>
																	<!--end::Label-->
																</div>
																<!--ed::Item-->
															</div>
															<!--ed::Item-->
														</div>
														<!--ed::Items-->
													</div>
													<!--end::Tab pane-->
													<!--begin::Tab pane-->
													<div class="tab-pane fade active show"
														id="kt_chart_widget_8_month_tab" role="tabpanel">
														<!--begin::Statistics-->
														<div class="mb-5">
															<!--begin::Statistics-->
															<div class="d-flex align-items-center mb-2">
																<span
																	class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
																<span
																	class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>
																<span class="badge badge-light-success fs-base">
																	<i
																		class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>2.2%</span>
															</div>
															<!--end::Statistics-->
															<!--begin::Description-->
															<span class="fs-6 fw-semibold text-gray-400">Avarage cost
																per interaction</span>
															<!--end::Description-->
														</div>
														<!--end::Statistics-->
														<!--begin::Chart-->
														<div id="kt_chart_widget_8_month_chart" class="ms-n5 min-h-auto"
															style="height: 275px"></div>
														<!--end::Chart-->
														<!--begin::Items-->
														<div class="d-flex flex-wrap pt-5">
															<!--begin::Item-->
															<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
																<!--begin::Item-->
																<div class="d-flex align-items-center mb-3 mb-sm-6">
																	<!--begin::Bullet-->
																	<span
																		class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
																	<!--end::Bullet-->
																	<!--begin::Label-->
																	<span class="fw-bold text-gray-600 fs-6">Social
																		Campaigns</span>
																	<!--end::Label-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex align-items-center">
																	<!--begin::Bullet-->
																	<span
																		class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
																	<!--end::Bullet-->
																	<!--begin::Label-->
																	<span class="fw-bold text-gray-600 fs-6">Google
																		Ads</span>
																	<!--end::Label-->
																</div>
																<!--ed::Item-->
															</div>
															<!--ed::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
																<!--begin::Item-->
																<div class="d-flex align-items-center mb-3 mb-sm-6">
																	<!--begin::Bullet-->
																	<span
																		class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
																	<!--end::Bullet-->
																	<!--begin::Label-->
																	<span class="fw-bold text-gray-600 fs-6">Email
																		Newsletter</span>
																	<!--end::Label-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex align-items-center">
																	<!--begin::Bullet-->
																	<span
																		class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
																	<!--end::Bullet-->
																	<!--begin::Label-->
																	<span
																		class="fw-bold text-gray-600 fs-6">Courses</span>
																	<!--end::Label-->
																</div>
																<!--ed::Item-->
															</div>
															<!--ed::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-column pt-sm-3 pt-6">
																<!--begin::Item-->
																<div class="d-flex align-items-center mb-3 mb-sm-6">
																	<!--begin::Bullet-->
																	<span
																		class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
																	<!--end::Bullet-->
																	<!--begin::Label-->
																	<span class="fw-bold text-gray-600 fs-6">TV
																		Campaign</span>
																	<!--end::Label-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex align-items-center">
																	<!--begin::Bullet-->
																	<span
																		class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
																	<!--end::Bullet-->
																	<!--begin::Label-->
																	<span
																		class="fw-bold text-gray-600 fs-6">Radio</span>
																	<!--end::Label-->
																</div>
																<!--ed::Item-->
															</div>
															<!--ed::Item-->
														</div>
														<!--ed::Items-->
													</div>
													<!--end::Tab pane-->
												</div>
												<!--end::Tab content-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Chart widget 8-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-6 mb-5 mb-xl-10">
										<!--begin::Tables widget 16-->
										<div class="card card-flush h-xl-100">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-gray-800">Authors
														Achievements</span>
													<span class="text-gray-400 mt-1 fw-semibold fs-6">Avg. 69.34% Conv.
														Rate</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button
														class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
														data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
														data-kt-menu-overflow="true">
														<i class="ki-duotone ki-dots-square fs-1 text-gray-400 me-n1">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</button>
													<!--begin::Menu 2-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
														data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
																Quick Actions</div>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu separator-->
														<div class="separator mb-3 opacity-75"></div>
														<!--end::Menu separator-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">New Ticket</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">New Customer</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3" data-kt-menu-trigger="hover"
															data-kt-menu-placement="right-start">
															<!--begin::Menu item-->
															<a href="#" class="menu-link px-3">
																<span class="menu-title">New Group</span>
																<span class="menu-arrow"></span>
															</a>
															<!--end::Menu item-->
															<!--begin::Menu sub-->
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Admin Group</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Staff Group</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Member Group</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu sub-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">New Contact</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu separator-->
														<div class="separator mt-3 opacity-75"></div>
														<!--end::Menu separator-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<div class="menu-content px-3 py-3">
																<a class="btn btn-primary btn-sm px-4" href="#">Generate
																	Reports</a>
															</div>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 2-->
													<!--end::Menu-->
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-6">
												<!--begin::Nav-->
												<ul class="nav nav-pills nav-pills-custom mb-3">
													<!--begin::Item-->
													<li class="nav-item mb-3 me-3 me-lg-6">
														<!--begin::Link-->
														<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active"
															id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill"
															href="#kt_stats_widget_16_tab_1">
															<!--begin::Icon-->
															<div class="nav-icon mb-3">
																<i class="ki-duotone ki-car fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																	<span class="path5"></span>
																</i>
															</div>
															<!--end::Icon-->
															<!--begin::Title-->
															<span
																class="nav-text text-gray-800 fw-bold fs-6 lh-1">SaaS</span>
															<!--end::Title-->
															<!--begin::Bullet-->
															<span
																class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
															<!--end::Bullet-->
														</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item mb-3 me-3 me-lg-6">
														<!--begin::Link-->
														<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
															id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill"
															href="#kt_stats_widget_16_tab_2">
															<!--begin::Icon-->
															<div class="nav-icon mb-3">
																<i class="ki-duotone ki-bitcoin fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</div>
															<!--end::Icon-->
															<!--begin::Title-->
															<span
																class="nav-text text-gray-800 fw-bold fs-6 lh-1">Crypto</span>
															<!--end::Title-->
															<!--begin::Bullet-->
															<span
																class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
															<!--end::Bullet-->
														</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item mb-3 me-3 me-lg-6">
														<!--begin::Link-->
														<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
															id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill"
															href="#kt_stats_widget_16_tab_3">
															<!--begin::Icon-->
															<div class="nav-icon mb-3">
																<i class="ki-duotone ki-like fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</div>
															<!--end::Icon-->
															<!--begin::Title-->
															<span
																class="nav-text text-gray-800 fw-bold fs-6 lh-1">Social</span>
															<!--end::Title-->
															<!--begin::Bullet-->
															<span
																class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
															<!--end::Bullet-->
														</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item mb-3 me-3 me-lg-6">
														<!--begin::Link-->
														<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
															id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill"
															href="#kt_stats_widget_16_tab_4">
															<!--begin::Icon-->
															<div class="nav-icon mb-3">
																<i class="ki-duotone ki-tablet fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</div>
															<!--end::Icon-->
															<!--begin::Title-->
															<span
																class="nav-text text-gray-800 fw-bold fs-6 lh-1">Mobile</span>
															<!--end::Title-->
															<!--begin::Bullet-->
															<span
																class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
															<!--end::Bullet-->
														</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item mb-3 me-3 me-lg-6">
														<!--begin::Link-->
														<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
															id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill"
															href="#kt_stats_widget_16_tab_5">
															<!--begin::Icon-->
															<div class="nav-icon mb-3">
																<i class="ki-duotone ki-send fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</div>
															<!--end::Icon-->
															<!--begin::Title-->
															<span
																class="nav-text text-gray-800 fw-bold fs-6 lh-1">Others</span>
															<!--end::Title-->
															<!--begin::Bullet-->
															<span
																class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
															<!--end::Bullet-->
														</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
												</ul>
												<!--end::Nav-->
												<!--begin::Tab Content-->
												<div class="tab-content">
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active"
														id="kt_stats_widget_16_tab_1">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed align-middle gs-0 gy-3 my-0">
																<!--begin::Table head-->
																<thead>
																	<tr
																		class="fs-7 fw-bold text-gray-400 border-bottom-0">
																		<th class="p-0 pb-3 min-w-150px text-start">
																			AUTHOR</th>
																		<th class="p-0 pb-3 min-w-100px text-end pe-13">
																			CONV.</th>
																		<th class="p-0 pb-3 w-125px text-end pe-7">CHART
																		</th>
																		<th class="p-0 pb-3 w-50px text-end">VIEW</th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-3.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy
																						Hawkins</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">78.34%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_1_1"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="success"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-2.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane
																						Cooper</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">63.83%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_1_2"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="danger"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-9.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
																						Jones</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">92.56%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_1_3"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="success"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-7.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Cody
																						Fishers</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">63.08%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_1_4"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="success"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->
														</div>
														<!--end::Table container-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_stats_widget_16_tab_2">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed align-middle gs-0 gy-3 my-0">
																<!--begin::Table head-->
																<thead>
																	<tr
																		class="fs-7 fw-bold text-gray-400 border-bottom-0">
																		<th class="p-0 pb-3 min-w-150px text-start">
																			AUTHOR</th>
																		<th class="p-0 pb-3 min-w-100px text-end pe-13">
																			CONV.</th>
																		<th class="p-0 pb-3 w-125px text-end pe-7">CHART
																		</th>
																		<th class="p-0 pb-3 w-50px text-end">VIEW</th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-25.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Brooklyn
																						Simmons</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">85.23%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_2_1"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="success"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-24.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther
																						Howard</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">74.83%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_2_2"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="danger"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-20.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Annette
																						Black</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">90.06%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_2_3"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="success"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-17.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin
																						McKinney</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">54.08%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_2_4"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="success"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->
														</div>
														<!--end::Table container-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_stats_widget_16_tab_3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed align-middle gs-0 gy-3 my-0">
																<!--begin::Table head-->
																<thead>
																	<tr
																		class="fs-7 fw-bold text-gray-400 border-bottom-0">
																		<th class="p-0 pb-3 min-w-150px text-start">
																			AUTHOR</th>
																		<th class="p-0 pb-3 min-w-100px text-end pe-13">
																			CONV.</th>
																		<th class="p-0 pb-3 w-125px text-end pe-7">CHART
																		</th>
																		<th class="p-0 pb-3 w-50px text-end">VIEW</th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-11.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
																						Jones</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">New
																						York</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">52.34%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_3_1"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="success"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-23.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ronald
																						Richards</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">Madrid</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">77.65%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_3_2"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="danger"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-4.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Leslie
																						Alexander</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">Pune</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">82.47%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_3_3"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="success"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-1.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Courtney
																						Henry</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">67.84%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_3_4"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="success"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->
														</div>
														<!--end::Table container-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_stats_widget_16_tab_4">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed align-middle gs-0 gy-3 my-0">
																<!--begin::Table head-->
																<thead>
																	<tr
																		class="fs-7 fw-bold text-gray-400 border-bottom-0">
																		<th class="p-0 pb-3 min-w-150px text-start">
																			AUTHOR</th>
																		<th class="p-0 pb-3 min-w-100px text-end pe-13">
																			CONV.</th>
																		<th class="p-0 pb-3 w-125px text-end pe-7">CHART
																		</th>
																		<th class="p-0 pb-3 w-50px text-end">VIEW</th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-12.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Arlene
																						McCoy</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">London</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">53.44%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_4_1"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="success"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-21.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin
																						McKinneyr</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">74.64%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_4_2"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="danger"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-30.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
																						Jones</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">PManila</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">88.56%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_4_3"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="success"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-14.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther
																						Howard</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">Iceland</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">63.16%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_4_4"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="success"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->
														</div>
														<!--end::Table container-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_stats_widget_16_tab_5">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed align-middle gs-0 gy-3 my-0">
																<!--begin::Table head-->
																<thead>
																	<tr
																		class="fs-7 fw-bold text-gray-400 border-bottom-0">
																		<th class="p-0 pb-3 min-w-150px text-start">
																			AUTHOR</th>
																		<th class="p-0 pb-3 min-w-100px text-end pe-13">
																			CONV.</th>
																		<th class="p-0 pb-3 w-125px text-end pe-7">CHART
																		</th>
																		<th class="p-0 pb-3 w-50px text-end">VIEW</th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-6.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane
																						Cooper</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">68.54%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_5_1"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="success"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-10.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther
																						Howard</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">Kiribati</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">55.83%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_5_2"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="danger"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-9.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
																						Jones</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">93.46%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_5_3"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="success"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex align-items-center">
																				<div class="symbol symbol-50px me-3">
																					<img src="assets/media/avatars/300-3.jpg"
																						class="" alt="" />
																				</div>
																				<div
																					class="d-flex justify-content-start flex-column">
																					<a href="../../demo1/dist/pages/user-profile/overview.html"
																						class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ralph
																						Edwards</a>
																					<span
																						class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-13">
																			<span
																				class="text-gray-600 fw-bold fs-6">64.48%</span>
																		</td>
																		<td class="text-end pe-0">
																			<div id="kt_table_widget_16_chart_5_4"
																				class="h-50px mt-n8 pe-7"
																				data-kt-chart-color="success"></div>
																		</td>
																		<td class="text-end">
																			<a href="#"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																				<i
																					class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																			</a>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->
														</div>
														<!--end::Table container-->
													</div>
													<!--end::Tap pane-->
													<!--end::Table container-->
												</div>
												<!--end::Tab Content-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Tables widget 16-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Content container-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Content wrapper-->
<?php include('layout/footer.php')?>
