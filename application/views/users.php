<?php include('layout/header.php')?>
				<!--begin::Main-->
				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<!--begin::Content wrapper-->
					<div class="d-flex flex-column flex-column-fluid py-4">
						<!--begin::Content-->
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-xxl">
								<!--begin::Card-->
								<div class="card">
									<!--begin::Card header-->
									<div class="card-header border-1">
										<!--begin::Card title-->
										<div class="card-title">
											<h3>USERS</h3>
										</div>
										<!--begin::Card title-->
										<!--begin::Card toolbar-->
										<div class="card-toolbar">
											<!--begin::Toolbar-->
											<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative px-2">
													<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<input type="text" data-kt-user-table-filter="search"
														class="form-control form-control-solid w-200px ps-13"
														placeholder="Search" />
												</div>
												<!--end::Search-->
												<!--begin::Add user-->
												<button type="button" class="btn btn-primary btn-sm"
													data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
													<i class="ki-duotone ki-plus fs-2"></i>Add</button>
												<!--end::Add user-->
											</div>
											<!--end::Toolbar-->
											<!--begin::Group actions-->
											<div class="d-flex justify-content-end align-items-center d-none"
												data-kt-user-table-toolbar="selected">
												<div class="fw-bold me-5">
													<span class="me-2"
														data-kt-user-table-select="selected_count"></span>Selected
												</div>
												<button type="button" class="btn btn-danger"
													data-kt-user-table-select="delete_selected">Delete Selected</button>
											</div>
											<!--end::Group actions-->
											<!--begin::Modal - Adjust Balance-->
											<div class="modal fade" id="kt_modal_export_users" tabindex="-1"
												aria-hidden="true">
												<!--begin::Modal dialog-->
												<div class="modal-dialog modal-dialog-centered mw-650px">
													<!--begin::Modal content-->
													<div class="modal-content">
														<!--begin::Modal header-->
														<div class="modal-header">
															<!--begin::Modal title-->
															<h2 class="fw-bold">Export Users</h2>
															<!--end::Modal title-->
															<!--begin::Close-->
															<div class="btn btn-icon btn-sm btn-active-icon-primary"
																data-kt-users-modal-action="close">
																<i class="ki-duotone ki-cross fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</div>
															<!--end::Close-->
														</div>
														<!--end::Modal header-->
														<!--begin::Modal body-->
														<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
															<!--begin::Form-->
															<form id="kt_modal_export_users_form" class="form"
																action="#">
																<!--begin::Input group-->
																<div class="fv-row mb-10">
																	<!--begin::Label-->
																	<label
																		class="fs-6 fw-semibold form-label mb-2">Select
																		Roles:</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select name="role" data-control="select2"
																		data-placeholder="Select a role"
																		data-hide-search="true"
																		class="form-select form-select-solid fw-bold">
																		<option></option>
																		<option value="Administrator">Administrator
																		</option>
																		<option value="Analyst">Analyst</option>
																		<option value="Developer">Developer</option>
																		<option value="Support">Support</option>
																		<option value="Trial">Trial</option>
																	</select>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-10">
																	<!--begin::Label-->
																	<label
																		class="required fs-6 fw-semibold form-label mb-2">Select
																		Export Format:</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select name="format" data-control="select2"
																		data-placeholder="Select a format"
																		data-hide-search="true"
																		class="form-select form-select-solid fw-bold">
																		<option></option>
																		<option value="excel">Excel</option>
																		<option value="pdf">PDF</option>
																		<option value="cvs">CVS</option>
																		<option value="zip">ZIP</option>
																	</select>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="text-center">
																	<button type="reset" class="btn btn-light me-3"
																		data-kt-users-modal-action="cancel">Discard</button>
																	<button type="submit" class="btn btn-primary"
																		data-kt-users-modal-action="submit">
																		<span class="indicator-label">Submit</span>
																		<span class="indicator-progress">Please wait...
																			<span
																				class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																</div>
																<!--end::Actions-->
															</form>
															<!--end::Form-->
														</div>
														<!--end::Modal body-->
													</div>
													<!--end::Modal content-->
												</div>
												<!--end::Modal dialog-->
											</div>
											<!--end::Modal - New Card-->
											<!--begin::Modal - Add task-->
											<div class="modal fade" id="kt_modal_add_user" tabindex="-1"
												aria-hidden="true">
												<!--begin::Modal dialog-->
												<div class="modal-dialog modal-dialog-centered mw-650px">
													<!--begin::Modal content-->
													<div class="modal-content">
														<!--begin::Modal header-->
														<div class="modal-header" id="kt_modal_add_user_header">
															<!--begin::Modal title-->
															<h2 class="fw-bold">Add User</h2>
															<!--end::Modal title-->
															<!--begin::Close-->
															<div class="btn btn-icon btn-sm btn-active-icon-primary"
																data-kt-users-modal-action="close">
																<i class="ki-duotone ki-cross fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</div>
															<!--end::Close-->
														</div>
														<!--end::Modal header-->
														<!--begin::Modal body-->
														<div class="modal-body px-5 my-7">
															<!--begin::Form-->
															<form id="kt_modal_add_user_form" class="form" action="#">
																<!--begin::Scroll-->
																<div class="d-flex flex-column scroll-y px-5 px-lg-10"
																	id="kt_modal_add_user_scroll" data-kt-scroll="true"
																	data-kt-scroll-activate="true"
																	data-kt-scroll-max-height="auto"
																	data-kt-scroll-dependencies="#kt_modal_add_user_header"
																	data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
																	data-kt-scroll-offset="300px">
																	<!--begin::Input group-->
																	<div class="fv-row mb-7">
																		<!--begin::Label-->
																		<label
																			class="d-block fw-semibold fs-6 mb-5">Profile Picture</label>
																		<!--end::Label-->
																		<!--begin::Image placeholder-->
																		<style>
																			.image-input-placeholder {
																				background-image: url('assets/media/svg/files/blank-image.svg');
																			}

																			[data-bs-theme="dark"] .image-input-placeholder {
																				background-image: url('assets/media/svg/files/blank-image-dark.svg');
																			}
																		</style>
																		<!--end::Image placeholder-->
																		<!--begin::Image input-->
																		<div class="image-input image-input-outline image-input-placeholder"
																			data-kt-image-input="true">
																			<!--begin::Preview existing avatar-->
																			<div class="image-input-wrapper w-125px h-125px"
																				style="background-image: url(assets/media/avatars/300-6.jpg);">
																			</div>
																			<!--end::Preview existing avatar-->
																			<!--begin::Label-->
																			<label
																				class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
																				data-kt-image-input-action="change"
																				data-bs-toggle="tooltip"
																				title="Change avatar">
																				<i class="ki-duotone ki-pencil fs-7">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																				<!--begin::Inputs-->
																				<input type="file" name="avatar"
																					accept=".png, .jpg, .jpeg" />
																				<input type="hidden"
																					name="avatar_remove" />
																				<!--end::Inputs-->
																			</label>
																			<!--end::Label-->
																			<!--begin::Cancel-->
																			<span
																				class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
																				data-kt-image-input-action="cancel"
																				data-bs-toggle="tooltip"
																				title="Cancel avatar">
																				<i class="ki-duotone ki-cross fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
																			<!--end::Cancel-->
																			<!--begin::Remove-->
																			<span
																				class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
																				data-kt-image-input-action="remove"
																				data-bs-toggle="tooltip"
																				title="Remove avatar">
																				<i class="ki-duotone ki-cross fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
																			<!--end::Remove-->
																		</div>
																		<!--end::Image input-->
																		<!--begin::Hint-->
																		<div class="form-text">Allowed file types: png,
																			jpg, jpeg.</div>
																		<!--end::Hint-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="fv-row mb-7">
																		<!--begin::Label-->
																		<label
																			class="required fw-semibold fs-6 mb-2">Full
																			Name</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input type="text" name="user_name"
																			class="form-control form-control-solid mb-3 mb-lg-0"
																			placeholder="" />
																		<!--end::Input-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="fv-row mb-7">
																		<!--begin::Label-->
																		<label
																			class="required fw-semibold fs-6 mb-2">Email</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input type="email" name="user_email"
																			class="form-control form-control-solid mb-3 mb-lg-0"
																			placeholder=""/>
																		<!--end::Input-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="mb-5">
																		<!--begin::Label-->
																		<label
																			class="required fw-semibold fs-6 mb-5">Role</label>
																		<!--end::Label-->
																		<!--begin::Roles-->
																		<!--begin::Input row-->
																		<div class="d-flex fv-row">
																			<!--begin::Radio-->
																			<div
																				class="form-check form-check-custom form-check-solid">
																				<!--begin::Input-->
																				<input class="form-check-input me-3"
																					name="user_role" type="radio"
																					value="0"
																					id="kt_modal_update_role_option_0"
																					checked='checked' />
																				<!--end::Input-->
																				<!--begin::Label-->
																				<label class="form-check-label"
																					for="kt_modal_update_role_option_0">
																					<div class="fw-bold text-gray-800">
																						Administrator</div>
																					<div class="text-gray-600">Best for
																						business owners and company
																						administrators</div>
																				</label>
																				<!--end::Label-->
																			</div>
																			<!--end::Radio-->
																		</div>
																		<!--end::Input row-->
																		<div class='separator separator-dashed my-5'>
																		</div>
																		<!--begin::Input row-->
																		<div class="d-flex fv-row">
																			<!--begin::Radio-->
																			<div
																				class="form-check form-check-custom form-check-solid">
																				<!--begin::Input-->
																				<input class="form-check-input me-3"
																					name="user_role" type="radio"
																					value="1"
																					id="kt_modal_update_role_option_1" />
																				<!--end::Input-->
																				<!--begin::Label-->
																				<label class="form-check-label"
																					for="kt_modal_update_role_option_1">
																					<div class="fw-bold text-gray-800">
																						Developer</div>
																					<div class="text-gray-600">Best for
																						developers or people primarily
																						using the API</div>
																				</label>
																				<!--end::Label-->
																			</div>
																			<!--end::Radio-->
																		</div>
																		<!--end::Input row-->
																		<div class='separator separator-dashed my-5'>
																		</div>
																		<!--begin::Input row-->
																		<div class="d-flex fv-row">
																			<!--begin::Radio-->
																			<div
																				class="form-check form-check-custom form-check-solid">
																				<!--begin::Input-->
																				<input class="form-check-input me-3"
																					name="user_role" type="radio"
																					value="2"
																					id="kt_modal_update_role_option_2" />
																				<!--end::Input-->
																				<!--begin::Label-->
																				<label class="form-check-label"
																					for="kt_modal_update_role_option_2">
																					<div class="fw-bold text-gray-800">
																						Analyst</div>
																					<div class="text-gray-600">Best for
																						people who need full access to
																						analytics data, but don't need
																						to update business settings
																					</div>
																				</label>
																				<!--end::Label-->
																			</div>
																			<!--end::Radio-->
																		</div>
																		<!--end::Input row-->
																		<div class='separator separator-dashed my-5'>
																		</div>
																		<!--begin::Input row-->
																		<div class="d-flex fv-row">
																			<!--begin::Radio-->
																			<div
																				class="form-check form-check-custom form-check-solid">
																				<!--begin::Input-->
																				<input class="form-check-input me-3"
																					name="user_role" type="radio"
																					value="3"
																					id="kt_modal_update_role_option_3" />
																				<!--end::Input-->
																				<!--begin::Label-->
																				<label class="form-check-label"
																					for="kt_modal_update_role_option_3">
																					<div class="fw-bold text-gray-800">
																						Support</div>
																					<div class="text-gray-600">Best for
																						employees who regularly refund
																						payments and respond to disputes
																					</div>
																				</label>
																				<!--end::Label-->
																			</div>
																			<!--end::Radio-->
																		</div>
																		<!--end::Input row-->
																		<div class='separator separator-dashed my-5'>
																		</div>
																		<!--begin::Input row-->
																		<div class="d-flex fv-row">
																			<!--begin::Radio-->
																			<div
																				class="form-check form-check-custom form-check-solid">
																				<!--begin::Input-->
																				<input class="form-check-input me-3"
																					name="user_role" type="radio"
																					value="4"
																					id="kt_modal_update_role_option_4" />
																				<!--end::Input-->
																				<!--begin::Label-->
																				<label class="form-check-label"
																					for="kt_modal_update_role_option_4">
																					<div class="fw-bold text-gray-800">
																						Trial</div>
																					<div class="text-gray-600">Best for
																						people who need to preview
																						content data, but don't need to
																						make any updates</div>
																				</label>
																				<!--end::Label-->
																			</div>
																			<!--end::Radio-->
																		</div>
																		<!--end::Input row-->
																		<!--end::Roles-->
																	</div>
																	<!--end::Input group-->
																</div>
																<!--end::Scroll-->
																<!--begin::Actions-->
																<div class="text-center pt-10">
																	<button type="reset" class="btn btn-light me-3"
																		data-kt-users-modal-action="cancel">Discard</button>
																	<button type="submit" class="btn btn-primary"
																		data-kt-users-modal-action="submit">
																		<span class="indicator-label">Submit</span>
																		<span class="indicator-progress">Please wait...
																			<span
																				class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																</div>
																<!--end::Actions-->
															</form>
															<!--end::Form-->
														</div>
														<!--end::Modal body-->
													</div>
													<!--end::Modal content-->
												</div>
												<!--end::Modal dialog-->
											</div>
											<!--end::Modal - Add task-->
										</div>
										<!--end::Card toolbar-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body py-4">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed fs-6 gy-5"
											id="kt_table_users">
											<thead>
												<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
													<th class="w-10px pe-2">
														<div
															class="form-check form-check-sm form-check-custom form-check-solid me-3">
															<input class="form-check-input" type="checkbox"
																data-kt-check="true"
																data-kt-check-target="#kt_table_users .form-check-input"
																value="1" />
														</div>
													</th>
													<th class="min-w-125px">User</th>
													<th class="min-w-125px">Role</th>
													<th class="min-w-125px">Last login</th>
													<th class="min-w-125px">Two-step</th>
													<th class="min-w-125px">Joined Date</th>
													<th class="text-end min-w-100px">Actions</th>
												</tr>
											</thead>
											<tbody class="text-gray-600 fw-semibold">
												<tr>
													<td>
														<div
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td class="d-flex align-items-center">
														<!--begin:: Avatar -->
														<div
															class="symbol symbol-circle symbol-50px overflow-hidden me-3">
															<a
																href="../../demo1/dist/apps/user-management/users/view.html">
																<div
																	class="symbol-label fs-3 bg-light-danger text-danger">
																	M</div>
															</a>
														</div>
														<!--end::Avatar-->
														<!--begin::User details-->
														<div class="d-flex flex-column">
															<a href="../../demo1/dist/apps/user-management/users/view.html"
																class="text-gray-800 text-hover-primary mb-1">Melody
																Macy</a>
															<span>melody@altbox.com</span>
														</div>
														<!--begin::User details-->
													</td>
													<td>Analyst</td>
													<td>
														<div class="badge badge-light fw-bold">20 mins ago</div>
													</td>
													<td>
														<div class="badge badge-light-success fw-bold">Enabled</div>
													</td>
													<td>25 Jul 2023, 9:23 pm</td>
													<td class="text-end">
														<a href="#"
															class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
															data-kt-menu-trigger="click"
															data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
															data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="../../demo1/dist/apps/user-management/users/view.html"
																	class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3"
																	data-kt-users-table-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
											</tbody>
										</table>
										<!--end::Table-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
							</div>
							<!--end::Content container-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Content wrapper-->
					
					<?php include('layout/footer.php')?>