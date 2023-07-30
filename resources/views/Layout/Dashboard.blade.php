@extends('Layout.layout')
@section('LAYOUT')
<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
<!--end::Theme mode setup on page load-->
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
	<!--begin::Page-->
	<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
		<!--begin::Header-->
		<div id="kt_app_header" class="app-header d-flex flex-column flex-stack">
			<!--begin::Header main-->
			<div class="d-flex align-items-center flex-stack flex-grow-1">
				<div class="app-header-logo d-flex align-items-center flex-stack px-lg-11 mb-2" id="kt_app_header_logo">
					<!--begin::Sidebar mobile toggle-->
					<div class="btn btn-icon btn-active-color-primary w-35px h-35px ms-3 me-2 d-flex d-lg-none" id="kt_app_sidebar_mobile_toggle">
						<i class="ki-duotone ki-abstract-14 fs-2">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
					</div>
					<!--end::Sidebar mobile toggle-->
					<!--begin::Logo-->
					<a href="../dist/index.html" class="app-sidebar-logo">
						<img alt="Logo" src="assets/media/logos/default.svg" class="h-30px theme-light-show" />
						<img alt="Logo" src="assets/media/logos/default-dark.svg" class="h-30px theme-dark-show" />
					</a>
					<!--end::Logo-->
					<!--begin::Sidebar toggle-->
					<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-sm btn-icon btn-color-warning me-n2 d-none d-lg-flex" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
						<i class="ki-duotone ki-exit-left fs-2x rotate-180">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
					</div>
					<!--end::Sidebar toggle-->
				</div>
				<!--begin::Navbar-->
				<div class="app-navbar flex-grow-1 justify-content-end" id="kt_app_header_navbar">
					<div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1 me-2 me-lg-0">
						<!--begin::Search-->
						<div id="kt_header_search" class="header-search d-flex align-items-center w-lg-350px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="true" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
							<!--begin::Tablet and mobile search toggle-->
							<div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
								<div class="d-flex">
									<i class="ki-duotone ki-magnifier fs-1 fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
							</div>
							<!--end::Tablet and mobile search toggle-->
							<!--begin::Form(use d-none d-lg-block classes for responsive search)-->
							<form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
								<!--begin::Hidden input(Added to disable form autocomplete)-->
								<input type="hidden" />
								<!--end::Hidden input-->
								<!--begin::Icon-->
								<i class="ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
								<!--end::Icon-->
								<!--begin::Input-->
								<input type="text" class="search-input form-control form-control border-0 h-lg-40px ps-13" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
								<!--end::Input-->
								<!--begin::Spinner-->
								<span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
								</span>
								<!--end::Spinner-->
								<!--begin::Reset-->
								<span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
									<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<!--end::Reset-->
							</form>
							<!--end::Form-->
							<!--begin::Menu-->
							<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
								<!--begin::Wrapper-->
								<div data-kt-search-element="wrapper">
									<!--begin::Recently viewed-->
									<div data-kt-search-element="results" class="d-none">
										<!--begin::Items-->
										<div class="scroll-y mh-200px mh-lg-350px">
											<!--begin::Category title-->
											<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
											<!--end::Category title-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<img src="assets/media/avatars/300-6.jpg" alt="" />
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-semibold">
													<span class="fs-6 fw-semibold">Karina Clark</span>
													<span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<img src="assets/media/avatars/300-2.jpg" alt="" />
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-semibold">
													<span class="fs-6 fw-semibold">Olivia Bold</span>
													<span class="fs-7 fw-semibold text-muted">Software Engineer</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<img src="assets/media/avatars/300-9.jpg" alt="" />
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-semibold">
													<span class="fs-6 fw-semibold">Ana Clark</span>
													<span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<img src="assets/media/avatars/300-14.jpg" alt="" />
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-semibold">
													<span class="fs-6 fw-semibold">Nick Pitola</span>
													<span class="fs-7 fw-semibold text-muted">Art Director</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<img src="assets/media/avatars/300-11.jpg" alt="" />
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-semibold">
													<span class="fs-6 fw-semibold">Edward Kulnic</span>
													<span class="fs-7 fw-semibold text-muted">System Administrator</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Category title-->
											<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
											<!--end::Category title-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-semibold">
													<span class="fs-6 fw-semibold">Company Rbranding</span>
													<span class="fs-7 fw-semibold text-muted">UI Design</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-semibold">
													<span class="fs-6 fw-semibold">Company Re-branding</span>
													<span class="fs-7 fw-semibold text-muted">Web Development</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-semibold">
													<span class="fs-6 fw-semibold">Business Analytics App</span>
													<span class="fs-7 fw-semibold text-muted">Administration</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-semibold">
													<span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
													<span class="fs-7 fw-semibold text-muted">Marketing</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-semibold">
													<span class="fs-6 fw-semibold">Tower Group Website</span>
													<span class="fs-7 fw-semibold text-muted">Google Adwords</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Category title-->
											<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
											<!--end::Category title-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<i class="ki-duotone ki-notepad fs-2 text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
														</i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
													<span class="fs-7 fw-semibold text-muted">#45670</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<i class="ki-duotone ki-frame fs-2 text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
													<span class="fs-7 fw-semibold text-muted">#45690</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<i class="ki-duotone ki-message-text-2 fs-2 text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
													<span class="fs-7 fw-semibold text-muted">#21090</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<i class="ki-duotone ki-profile-circle fs-2 text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
													<span class="fs-7 fw-semibold text-muted">#34560</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
										</div>
										<!--end::Items-->
									</div>
									<!--end::Recently viewed-->
									<!--begin::Recently viewed-->
									<div class="" data-kt-search-element="main">
										<!--begin::Heading-->
										<div class="d-flex flex-stack fw-semibold mb-4">
											<!--begin::Label-->
											<span class="text-muted fs-6 me-2">Recently Searched:</span>
											<!--end::Label-->
											<!--begin::Toolbar-->
											<div class="d-flex" data-kt-search-element="toolbar">
												<!--begin::Preferences toggle-->
												<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
													<i class="ki-duotone ki-setting-2 fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Preferences toggle-->
												<!--begin::Advanced search toggle-->
												<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
													<i class="ki-duotone ki-down fs-2"></i>
												</div>
												<!--end::Advanced search toggle-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Heading-->
										<!--begin::Items-->
										<div class="scroll-y mh-200px mh-lg-325px">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<i class="ki-duotone ki-laptop fs-2 text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
													<span class="fs-7 text-muted fw-semibold">#45789</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<i class="ki-duotone ki-chart-simple fs-2 text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
													<span class="fs-7 text-muted fw-semibold">#84050</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<i class="ki-duotone ki-chart fs-2 text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
													<span class="fs-7 text-muted fw-semibold">#84250</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
													<span class="fs-7 text-muted fw-semibold">#67945</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<i class="ki-duotone ki-sms fs-2 text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
													<span class="fs-7 text-muted fw-semibold">#84250</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<i class="ki-duotone ki-bank fs-2 text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
													<span class="fs-7 text-muted fw-semibold">#45690</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
													<span class="fs-7 text-muted fw-semibold">#24005</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Items-->
									</div>
									<!--end::Recently viewed-->
									<!--begin::Empty-->
									<div data-kt-search-element="empty" class="text-center d-none">
										<!--begin::Icon-->
										<div class="pt-10 pb-10">
											<i class="ki-duotone ki-search-list fs-4x opacity-50">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</div>
										<!--end::Icon-->
										<!--begin::Message-->
										<div class="pb-15 fw-semibold">
											<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
											<div class="text-muted fs-7">Please try again with a different query</div>
										</div>
										<!--end::Message-->
									</div>
									<!--end::Empty-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Preferences-->
								<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
									<!--begin::Heading-->
									<h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="mb-5">
										<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-5">
										<!--begin::Radio group-->
										<div class="nav-group nav-group-fluid">
											<!--begin::Option-->
											<label>
												<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
												<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label>
												<input type="radio" class="btn-check" name="type" value="users" />
												<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label>
												<input type="radio" class="btn-check" name="type" value="orders" />
												<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label>
												<input type="radio" class="btn-check" name="type" value="projects" />
												<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
											</label>
											<!--end::Option-->
										</div>
										<!--end::Radio group-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-5">
										<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-5">
										<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-5">
										<!--begin::Radio group-->
										<div class="nav-group nav-group-fluid">
											<!--begin::Option-->
											<label>
												<input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
												<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label>
												<input type="radio" class="btn-check" name="attachment" value="any" />
												<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
											</label>
											<!--end::Option-->
										</div>
										<!--end::Radio group-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-5">
										<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
											<option value="next">Within the next</option>
											<option value="last">Within the last</option>
											<option value="between">Between</option>
											<option value="on">On</option>
										</select>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-8">
										<!--begin::Col-->
										<div class="col-6">
											<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-6">
											<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
												<option value="days">Days</option>
												<option value="weeks">Weeks</option>
												<option value="months">Months</option>
												<option value="years">Years</option>
											</select>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="d-flex justify-content-end">
										<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
										<a href="../dist/pages/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
									</div>
									<!--end::Actions-->
								</form>
								<!--end::Preferences-->
								<!--begin::Preferences-->
								<form data-kt-search-element="preferences" class="pt-1 d-none">
									<!--begin::Heading-->
									<h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="pb-4 border-bottom">
										<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
											<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
											<input class="form-check-input" type="checkbox" value="1" checked="checked" />
										</label>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="py-4 border-bottom">
										<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
											<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
											<input class="form-check-input" type="checkbox" value="1" checked="checked" />
										</label>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="py-4 border-bottom">
										<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
											<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
											<input class="form-check-input" type="checkbox" value="1" />
										</label>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="py-4 border-bottom">
										<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
											<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
											<input class="form-check-input" type="checkbox" value="1" checked="checked" />
										</label>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="py-4 border-bottom">
										<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
											<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
											<input class="form-check-input" type="checkbox" value="1" />
										</label>
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="d-flex justify-content-end pt-7">
										<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
										<button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
									</div>
									<!--end::Actions-->
								</form>
								<!--end::Preferences-->
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Search-->
					</div>
					<!--begin::Notifications-->
					<div class="app-navbar-item me-lg-1">
						<!--begin::Menu- wrapper-->
						<div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
							<i class="ki-duotone ki-graph-3 fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
							<!--begin::Heading-->
							<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
								<!--begin::Title-->
								<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
								<span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
								<!--end::Title-->
								<!--begin::Tabs-->
								<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
									<li class="nav-item">
										<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
									</li>
								</ul>
								<!--end::Tabs-->
							</div>
							<!--end::Heading-->
							<!--begin::Tab content-->
							<div class="tab-content">
								<!--begin::Tab panel-->
								<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
									<!--begin::Items-->
									<div class="scroll-y mh-325px my-5 px-8">
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-35px me-4">
													<span class="symbol-label bg-light-primary">
														<i class="ki-duotone ki-abstract-28 fs-2 text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="mb-0 me-2">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
													<div class="text-gray-400 fs-7">Phase 1 development</div>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">1 hr</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-35px me-4">
													<span class="symbol-label bg-light-danger">
														<i class="ki-duotone ki-information fs-2 text-danger">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="mb-0 me-2">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
													<div class="text-gray-400 fs-7">Confidential staff documents</div>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">2 hrs</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-35px me-4">
													<span class="symbol-label bg-light-warning">
														<i class="ki-duotone ki-briefcase fs-2 text-warning">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="mb-0 me-2">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
													<div class="text-gray-400 fs-7">Corporeate staff profiles</div>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">5 hrs</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-35px me-4">
													<span class="symbol-label bg-light-success">
														<i class="ki-duotone ki-abstract-12 fs-2 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="mb-0 me-2">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
													<div class="text-gray-400 fs-7">New frontend admin theme</div>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">2 days</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-35px me-4">
													<span class="symbol-label bg-light-primary">
														<i class="ki-duotone ki-colors-square fs-2 text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="mb-0 me-2">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
													<div class="text-gray-400 fs-7">Product launch status update</div>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">21 Jan</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-35px me-4">
													<span class="symbol-label bg-light-info">
														<i class="ki-duotone ki-picture fs-2 text-info"></i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="mb-0 me-2">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
													<div class="text-gray-400 fs-7">Collection of banner images</div>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">21 Jan</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-35px me-4">
													<span class="symbol-label bg-light-warning">
														<i class="ki-duotone ki-color-swatch fs-2 text-warning">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
															<span class="path6"></span>
															<span class="path7"></span>
															<span class="path8"></span>
															<span class="path9"></span>
															<span class="path10"></span>
															<span class="path11"></span>
															<span class="path12"></span>
															<span class="path13"></span>
															<span class="path14"></span>
															<span class="path15"></span>
															<span class="path16"></span>
															<span class="path17"></span>
															<span class="path18"></span>
															<span class="path19"></span>
															<span class="path20"></span>
															<span class="path21"></span>
														</i>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="mb-0 me-2">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
													<div class="text-gray-400 fs-7">Collection of SVG icons</div>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">20 March</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Items-->
									<!--begin::View more-->
									<div class="py-3 text-center border-top">
										<a href="#" class="btn btn-color-gray-600 btn-active-color-primary">View All
										<i class="ki-duotone ki-arrow-right fs-5">
											<span class="path1"></span>
											<span class="path2"></span>
										</i></a>
									</div>
									<!--end::View more-->
								</div>
								<!--end::Tab panel-->
								<!--begin::Tab panel-->
								<div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
									<!--begin::Wrapper-->
									<div class="d-flex flex-column px-9">
										<!--begin::Section-->
										<div class="pt-10 pb-0">
											<!--begin::Title-->
											<h3 class="text-dark text-center fw-bold">Get Pro Access</h3>
											<!--end::Title-->
											<!--begin::Text-->
											<div class="text-center text-gray-600 fw-semibold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
											<!--end::Text-->
											<!--begin::Action-->
											<div class="text-center mt-5 mb-9">
												<a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
											</div>
											<!--end::Action-->
										</div>
										<!--end::Section-->
										<!--begin::Illustration-->
										<div class="text-center px-4">
											<img class="mw-100 mh-200px" alt="image" src="assets/media/illustrations/sketchy-1/1.png" />
										</div>
										<!--end::Illustration-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Tab panel-->
								<!--begin::Tab panel-->
								<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
									<!--begin::Items-->
									<div class="scroll-y mh-325px my-5 px-8">
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Code-->
												<span class="w-70px badge badge-light-success me-4">200 OK</span>
												<!--end::Code-->
												<!--begin::Title-->
												<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">Just now</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Code-->
												<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
												<!--end::Code-->
												<!--begin::Title-->
												<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">2 hrs</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Code-->
												<span class="w-70px badge badge-light-success me-4">200 OK</span>
												<!--end::Code-->
												<!--begin::Title-->
												<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">5 hrs</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Code-->
												<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
												<!--end::Code-->
												<!--begin::Title-->
												<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">2 days</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Code-->
												<span class="w-70px badge badge-light-success me-4">200 OK</span>
												<!--end::Code-->
												<!--begin::Title-->
												<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">1 week</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Code-->
												<span class="w-70px badge badge-light-success me-4">200 OK</span>
												<!--end::Code-->
												<!--begin::Title-->
												<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">Mar 5</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Code-->
												<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
												<!--end::Code-->
												<!--begin::Title-->
												<a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">May 15</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Code-->
												<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
												<!--end::Code-->
												<!--begin::Title-->
												<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">Apr 3</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Code-->
												<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
												<!--end::Code-->
												<!--begin::Title-->
												<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">Jun 30</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Code-->
												<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
												<!--end::Code-->
												<!--begin::Title-->
												<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">Jul 10</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Code-->
												<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
												<!--end::Code-->
												<!--begin::Title-->
												<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">Sep 10</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack py-4">
											<!--begin::Section-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Code-->
												<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
												<!--end::Code-->
												<!--begin::Title-->
												<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
												<!--end::Title-->
											</div>
											<!--end::Section-->
											<!--begin::Label-->
											<span class="badge badge-light fs-8">Dec 10</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Items-->
									<!--begin::View more-->
									<div class="py-3 text-center border-top">
										<a href="#" class="btn btn-color-gray-600 btn-active-color-primary">View All
										<i class="ki-duotone ki-arrow-right fs-5">
											<span class="path1"></span>
											<span class="path2"></span>
										</i></a>
									</div>
									<!--end::View more-->
								</div>
								<!--end::Tab panel-->
							</div>
							<!--end::Tab content-->
						</div>
						<!--end::Menu-->
						<!--end::Menu wrapper-->
					</div>
					<!--end::Notifications-->
					<!--begin::Quick links-->
					<div class="app-navbar-item">
						<!--begin::Menu- wrapper-->
						<div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
							<i class="ki-duotone ki-notification-status fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
								<span class="path4"></span>
							</i>
						</div>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
							<!--begin::Heading-->
							<div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
								<!--begin::Title-->
								<h3 class="text-white fw-semibold mb-3">Quick Links</h3>
								<!--end::Title-->
								<!--begin::Status-->
								<span class="badge bg-primary text-inverse-primary py-2 px-3">25 pending tasks</span>
								<!--end::Status-->
							</div>
							<!--end::Heading-->
							<!--begin:Nav-->
							<div class="row g-0">
								<!--begin:Item-->
								<div class="col-6">
									<a href="#" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
										<i class="ki-duotone ki-dollar fs-3x text-primary mb-2">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
										<span class="fs-5 fw-semibold text-gray-800 mb-0">Accounting</span>
										<span class="fs-7 text-gray-400">eCommerce</span>
									</a>
								</div>
								<!--end:Item-->
								<!--begin:Item-->
								<div class="col-6">
									<a href="#" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
										<i class="ki-duotone ki-sms fs-3x text-primary mb-2">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
										<span class="fs-5 fw-semibold text-gray-800 mb-0">Administration</span>
										<span class="fs-7 text-gray-400">Console</span>
									</a>
								</div>
								<!--end:Item-->
								<!--begin:Item-->
								<div class="col-6">
									<a href="../dist/apps/projects/list.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
										<i class="ki-duotone ki-abstract-41 fs-3x text-primary mb-2">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
										<span class="fs-5 fw-semibold text-gray-800 mb-0">Projects</span>
										<span class="fs-7 text-gray-400">Pending Tasks</span>
									</a>
								</div>
								<!--end:Item-->
								<!--begin:Item-->
								<div class="col-6">
									<a href="#" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
										<i class="ki-duotone ki-briefcase fs-3x text-primary mb-2">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
										<span class="fs-5 fw-semibold text-gray-800 mb-0">Customers</span>
										<span class="fs-7 text-gray-400">Latest cases</span>
									</a>
								</div>
								<!--end:Item-->
							</div>
							<!--end:Nav-->
							<!--begin::View more-->
							<div class="py-2 text-center border-top">
								<a href="#" class="btn btn-color-gray-600 btn-active-color-primary">View All
								<i class="ki-duotone ki-arrow-right fs-5">
									<span class="path1"></span>
									<span class="path2"></span>
								</i></a>
							</div>
							<!--end::View more-->
						</div>
						<!--end::Menu-->
						<!--end::Menu wrapper-->
					</div>
					<!--end::Quick links-->
					<!--begin::User menu-->
					<div class="app-navbar-item ms-3 ms-lg-4 me-lg-2" id="kt_header_user_menu_toggle">
						<!--begin::Menu wrapper-->
						<div class="cursor-pointer symbol symbol-30px symbol-lg-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
							<img src="assets/media/avatars/300-2.jpg" alt="user" />
						</div>
						<!--begin::User account menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content d-flex align-items-center px-3">
									<!--begin::Avatar-->
									<div class="symbol symbol-50px me-5">
										<img alt="Logo" src="assets/media/avatars/300-2.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Username-->
									<div class="d-flex flex-column">
										<div class="fw-bold d-flex align-items-center fs-5">Jane Cooper
										<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
										<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">jane@kt.com</a>
									</div>
									<!--end::Username-->
								</div>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator my-2"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-5">
								<a href="../dist/account/overview.html" class="menu-link px-5">My Profile</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5">
								<a href="../dist/apps/projects/list.html" class="menu-link px-5">
									<span class="menu-text">My Projects</span>
									<span class="menu-badge">
										<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
									</span>
								</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
								<a href="#" class="menu-link px-5">
									<span class="menu-title">My Subscription</span>
									<span class="menu-arrow"></span>
								</a>
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-5">Referrals</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-5">Billing</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-5">Payments</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link d-flex flex-stack px-5">Statements
										<span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
											<i class="ki-duotone ki-information-5 fs-5">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span></a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content px-3">
											<label class="form-check form-switch form-check-custom form-check-solid">
												<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
												<span class="form-check-label text-muted fs-7">Notifications</span>
											</label>
										</div>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5">
								<a href="#" class="menu-link px-5">My Statements</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator my-2"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
								<a href="#" class="menu-link px-5">
									<span class="menu-title position-relative">Mode
									<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
										<i class="ki-duotone ki-night-day theme-light-show fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
											<span class="path5"></span>
											<span class="path6"></span>
											<span class="path7"></span>
											<span class="path8"></span>
											<span class="path9"></span>
											<span class="path10"></span>
										</i>
										<i class="ki-duotone ki-moon theme-dark-show fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span></span>
								</a>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
											<span class="menu-icon" data-kt-element="icon">
												<i class="ki-duotone ki-night-day fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
													<span class="path6"></span>
													<span class="path7"></span>
													<span class="path8"></span>
													<span class="path9"></span>
													<span class="path10"></span>
												</i>
											</span>
											<span class="menu-title">Light</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
											<span class="menu-icon" data-kt-element="icon">
												<i class="ki-duotone ki-moon fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Dark</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
											<span class="menu-icon" data-kt-element="icon">
												<i class="ki-duotone ki-screen fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">System</span>
										</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
								<a href="#" class="menu-link px-5">
									<span class="menu-title position-relative">Language
									<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
									<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
								</a>
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../dist/account/settings.html" class="menu-link d-flex px-5 active">
										<span class="symbol symbol-20px me-4">
											<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
										</span>English</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../dist/account/settings.html" class="menu-link d-flex px-5">
										<span class="symbol symbol-20px me-4">
											<img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
										</span>Spanish</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../dist/account/settings.html" class="menu-link d-flex px-5">
										<span class="symbol symbol-20px me-4">
											<img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
										</span>German</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../dist/account/settings.html" class="menu-link d-flex px-5">
										<span class="symbol symbol-20px me-4">
											<img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
										</span>Japanese</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../dist/account/settings.html" class="menu-link d-flex px-5">
										<span class="symbol symbol-20px me-4">
											<img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
										</span>French</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5 my-1">
								<a href="../dist/account/settings.html" class="menu-link px-5">Account Settings</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5">
								<a href="../dist/authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::User account menu-->
						<!--end::Menu wrapper-->
					</div>
					<!--end::User menu-->
					<!--begin::Action-->
					<div class="app-navbar-item ms-3 ms-lg-4 me-lg-6">
						<!--begin::Link-->
						<a href="../dist/authentication/sign-in/basic.html" class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px">
							<i class="ki-duotone ki-setting-3 fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
								<span class="path4"></span>
								<span class="path5"></span>
							</i>
						</a>
						<!--end::Link-->
					</div>
					<!--end::Action-->
					<!--begin::Header menu toggle-->
					<div class="app-navbar-item ms-3 ms-lg-4 ms-n2 me-3 d-flex d-lg-none">
						<div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" id="kt_app_aside_mobile_toggle">
							<i class="ki-duotone ki-burger-menu-2 fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
								<span class="path4"></span>
								<span class="path5"></span>
								<span class="path6"></span>
								<span class="path7"></span>
								<span class="path8"></span>
								<span class="path9"></span>
								<span class="path10"></span>
							</i>
						</div>
					</div>
					<!--end::Header menu toggle-->
				</div>
				<!--end::Navbar-->
			</div>
			<!--end::Header main-->
			<!--begin::Separator-->
			<div class="app-header-separator"></div>
			<!--end::Separator-->
		</div>
		<!--end::Header-->
		<!--begin::Wrapper-->
		<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
			<!--begin::Sidebar-->
			<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
				<!--begin::Main-->
				<div class="d-flex flex-column justify-content-between h-100 hover-scroll-overlay-y my-2 d-flex flex-column" id="kt_app_sidebar_main" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_main" data-kt-scroll-offset="5px">
					<!--begin::Sidebar menu-->
					<div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="flex-column-fluid menu menu-sub-indention menu-column menu-rounded menu-active-bg mb-7">
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-element-11 fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
										<span class="path4"></span>
									</i>
								</span>
								<span class="menu-title">Dashboards</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link active" href="../dist/index.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Default</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="#" data-kt-page="pro">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">eCommerce
										<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="#" data-kt-page="pro">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Projects
										<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="#" data-kt-page="pro">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Online Courses
										<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="#" data-kt-page="pro">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Marketing
										<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-some-files fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<span class="menu-title">Pages</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">User Profile</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/pages/user-profile/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Projects
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Campaigns
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Documents
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Followers
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Activity
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Account</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/account/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/account/settings.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Settings</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Security
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Activity
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Billing
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Statements
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Referrals
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">API Keys
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Logs
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Authentication</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Sign In</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../dist/authentication/sign-in/basic.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Basic</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../dist/authentication/sign-in/password-reset.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Password Reset</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../dist/authentication/sign-in/new-password.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">New Password</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Sign Up</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../dist/authentication/sign-up/basic.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Basic</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Multi-steps
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Free Trial
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Coming Soon
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Welcome Message
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Verify Email
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Password Confirmation
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Account Deactivation
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Error 404
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Error 500
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Email Templates</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" target="_blank" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Verify Email
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" target="_blank" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Account Invitation
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" target="_blank" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Password Reset
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" target="_blank" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Password Changed
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Corporate</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/pages/about.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">About</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/pages/team.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Our Team</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/pages/contact.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Contact Us</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/pages/licenses.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Licenses</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/pages/sitemap.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Sitemap</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Social</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/pages/social/feeds.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Feeds</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Activty
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Followers
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Settings
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Blog</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/pages/blog/home.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Blog Home</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/pages/blog/post.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Blog Post</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">FAQ</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/pages/faq/classic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">FAQ Classic</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/pages/faq/extended.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">FAQ Extended</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Pricing</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/pages/pricing/column.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Column Pricing</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/pages/pricing/table.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Table Pricing</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Careers</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/pages/careers/list.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Careers List</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/pages/careers/apply.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Careers Apply</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-chart-line-star fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>
								</span>
								<span class="menu-title">Apps</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Projects</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/apps/projects/list.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">My Projects</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View Project
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Targets
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Budget
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Users
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Files
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Activity
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Settings
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">eCommerce</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Catalog</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../dist/apps/ecommerce/catalog/products.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Products</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Categories
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Add Product
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Edit Product
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Add Category
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Edit Category
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Sales</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Orders Listing
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Order Details
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Add Order
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Edit Order
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Customers</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../dist/apps/ecommerce/customers/listing.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Customer Listing</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Customer Details
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Reports</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Products Viewed
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Sales
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Returns
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Customer Orders
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Shipping
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Settings
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Contacts</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/apps/contacts/getting-started.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Getting Started</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Add Contact
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Edit Contact
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View Contact
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Support Center</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/apps/support-center/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Tickets</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../dist/apps/support-center/tickets/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Tickets List</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View Ticket
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Tutorials</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Tutorials List
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Tutorial Post
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">FAQ
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Licenses
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Contact Us
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">User Management</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Users</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../dist/apps/user-management/users/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Users List</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View User
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Roles</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Roles List
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View Role
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Permissions
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Customers</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/apps/customers/getting-started.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Getting Started</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/apps/customers/list.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Customer Listing</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Customer Details
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Subscription</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/apps/subscriptions/getting-started.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Getting Started</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../dist/apps/subscriptions/list.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Subscription List</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Add Subscription
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View Subscription
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Invoice Manager</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View Invoices</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../dist/apps/invoices/view/invoice-1.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Invoice 1</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Invoice 2
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="#" data-kt-page="pro">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Invoice 3
														<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Create Invoice
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">File Manager</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Folders
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Files
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Blank Directory
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Settings
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Inbox</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Messages
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
												<span class="menu-badge">
													<span class="badge badge-success">3</span>
												</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Compose
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View & Reply
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Chat</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Private Chat
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Group Chat
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="#" data-kt-page="pro">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Drawer Chat
												<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-rescue fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<span class="menu-title">Help</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="https://preview.keenthemes.com/html/saul-html-pro/docs/base/utilities" target="_blank" title="Check out over 200 in-house components" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Components</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="https://preview.keenthemes.com/html/saul-html-pro/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Documentation</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="https://preview.keenthemes.com/saul-html-free/layout-builder.html" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Layout Builder</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="https://preview.keenthemes.com/html/saul-html-pro/docs/getting-started/changelog" target="_blank">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Changelog v1.0.0</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
					</div>
					<!--end::Sidebar menu-->
					<!--begin::Footer-->
					<div class="app-sidebar-project-default app-sidebar-project-minimize text-center min-h-lg-400px flex-column-auto d-flex flex-column justify-content-end" id="kt_app_sidebar_footer">
						<!--begin::Title-->
						<h2 class="fw-bold text-gray-800">Welcome to Saul</h2>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="fw-semibold text-gray-700 fs-7 lh-2 px-7 mb-1">Join the movement make a difference.</div>
						<!--end::Description-->
						<!--begin::Illustration-->
						<img class="mx-auto h-150px h-lg-175px mb-4" src="assets/media/misc/saul-welcome.png" alt="" />
						<!--end::Illustration-->
						<div class="text-center mb-lg-5 pb-lg-3">
							<a href="#" class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#kt_modal_create_account">Get Started</a>
						</div>
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Main-->
			</div>
			<!--end::Sidebar-->
			@yield('DASHBOARD')
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Page-->
</div>
<!--end::App-->
<!--begin::Drawers-->
<!--begin::Activities drawer-->

<!--end::Activities drawer-->
<!--begin::Chat drawer-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
	<i class="ki-duotone ki-arrow-up">
		<span class="path1"></span>
		<span class="path2"></span>
	</i>
</div>
<!--end::Scrolltop-->
<!--begin::Modals-->
<!--begin::Modal - Upgrade plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-xl">
		<!--begin::Modal content-->
		<div class="modal-content rounded">
			<!--begin::Modal header-->
			<div class="modal-header justify-content-end border-0 pb-0">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
				<!--begin::Heading-->
				<div class="mb-13 text-center">
					<h1 class="mb-3">Upgrade a Plan</h1>
					<div class="text-muted fw-semibold fs-5">If you need more info, please check
					<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.</div>
				</div>
				<!--end::Heading-->
				<!--begin::Plans-->
				<div class="d-flex flex-column">
					<!--begin::Nav group-->
					<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
						<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
						<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
					</div>
					<!--end::Nav group-->
					<!--begin::Row-->
					<div class="row mt-10">
						<!--begin::Col-->
						<div class="col-lg-6 mb-10 mb-lg-0">
							<!--begin::Tabs-->
							<div class="nav flex-column">
								<!--begin::Tab link-->
								<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
											<input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup</div>
											<div class="fw-semibold opacity-75">Best for startups</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<span class="mb-2">$</span>
										<span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
										<span class="fs-7 opacity-50">/
										<span data-kt-element="period">Mon</span></span>
									</div>
									<!--end::Price-->
								</label>
								<!--end::Tab link-->
								<!--begin::Tab link-->
								<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
											<input class="form-check-input" type="radio" name="plan" value="advanced" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced</div>
											<div class="fw-semibold opacity-75">Best for 100+ team size</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<span class="mb-2">$</span>
										<span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
										<span class="fs-7 opacity-50">/
										<span data-kt-element="period">Mon</span></span>
									</div>
									<!--end::Price-->
								</label>
								<!--end::Tab link-->
								<!--begin::Tab link-->
								<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
											<input class="form-check-input" type="radio" name="plan" value="enterprise" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
											<span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span></div>
											<div class="fw-semibold opacity-75">Best value for 1000+ team</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<span class="mb-2">$</span>
										<span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
										<span class="fs-7 opacity-50">/
										<span data-kt-element="period">Mon</span></span>
									</div>
									<!--end::Price-->
								</label>
								<!--end::Tab link-->
								<!--begin::Tab link-->
								<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
											<input class="form-check-input" type="radio" name="plan" value="custom" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom</div>
											<div class="fw-semibold opacity-75">Requet a custom license</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<a href="#" class="btn btn-sm btn-success">Contact Us</a>
									</div>
									<!--end::Price-->
								</label>
								<!--end::Tab link-->
							</div>
							<!--end::Tabs-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-lg-6">
							<!--begin::Tab content-->
							<div class="tab-content rounded h-100 bg-light p-10">
								<!--begin::Tab Pane-->
								<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
										<div class="text-muted fw-semibold">Optimal for 10+ team size and new startup</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Finance Module</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting Module</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
								<!--begin::Tab Pane-->
								<div class="tab-pane fade" id="kt_upgrade_plan_advanced">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
										<div class="text-muted fw-semibold">Optimal for 100+ team size and grown company</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
								<!--begin::Tab Pane-->
								<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
										<div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
								<!--begin::Tab Pane-->
								<div class="tab-pane fade" id="kt_upgrade_plan_custom">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
										<div class="text-muted fw-semibold">Optimal for corporations</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Users</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project Integrations</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
							</div>
							<!--end::Tab content-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Plans-->
				<!--begin::Actions-->
				<div class="d-flex flex-center flex-row-fluid pt-12">
					<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
						<!--begin::Indicator label-->
						<span class="indicator-label">Upgrade Plan</span>
						<!--end::Indicator label-->
						<!--begin::Indicator progress-->
						<span class="indicator-progress">Please wait...
						<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						<!--end::Indicator progress-->
					</button>
				</div>
				<!--end::Actions-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Upgrade plan-->
<!--begin::Modal - Create account-->
<div class="modal fade" id="kt_modal_create_account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-1000px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Title-->
				<h2>Create Business Account</h2>
				<!--end::Title-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y m-5">
				<!--begin::Stepper-->
				<div class="stepper stepper-links d-flex flex-column" id="kt_create_account_stepper">
					<!--begin::Nav-->
					<div class="stepper-nav py-5">
						<!--begin::Step 1-->
						<div class="stepper-item current" data-kt-stepper-element="nav">
							<h3 class="stepper-title">Account Type</h3>
						</div>
						<!--end::Step 1-->
						<!--begin::Step 2-->
						<div class="stepper-item" data-kt-stepper-element="nav">
							<h3 class="stepper-title">Account Info</h3>
						</div>
						<!--end::Step 2-->
						<!--begin::Step 3-->
						<div class="stepper-item" data-kt-stepper-element="nav">
							<h3 class="stepper-title">Business Details</h3>
						</div>
						<!--end::Step 3-->
						<!--begin::Step 4-->
						<div class="stepper-item" data-kt-stepper-element="nav">
							<h3 class="stepper-title">Billing Details</h3>
						</div>
						<!--end::Step 4-->
						<!--begin::Step 5-->
						<div class="stepper-item" data-kt-stepper-element="nav">
							<h3 class="stepper-title">Completed</h3>
						</div>
						<!--end::Step 5-->
					</div>
					<!--end::Nav-->
					<!--begin::Form-->
					<form class="mx-auto mw-600px w-100 py-10" novalidate="novalidate" id="kt_create_account_form">
						<!--begin::Step 1-->
						<div class="current" data-kt-stepper-element="content">
							<!--begin::Wrapper-->
							<div class="w-100">
								<!--begin::Heading-->
								<div class="pb-10 pb-lg-15">
									<!--begin::Title-->
									<h2 class="fw-bold d-flex align-items-center text-dark">Choose Account Type
									<span class="ms-1" data-bs-toggle="tooltip" title="Billing is issued based on your selected account typ">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span></h2>
									<!--end::Title-->
									<!--begin::Notice-->
									<div class="text-muted fw-semibold fs-6">If you need more info, please check out
									<a href="#" class="link-primary fw-bold">Help Page</a>.</div>
									<!--end::Notice-->
								</div>
								<!--end::Heading-->
								<!--begin::Input group-->
								<div class="fv-row">
									<!--begin::Row-->
									<div class="row">
										<!--begin::Col-->
										<div class="col-lg-6">
											<!--begin::Option-->
											<input type="radio" class="btn-check" name="account_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal" />
											<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
												<i class="ki-duotone ki-badge fs-3x me-5">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
												</i>
												<!--begin::Info-->
												<span class="d-block fw-semibold text-start">
													<span class="text-dark fw-bold d-block fs-4 mb-2">Personal Account</span>
													<span class="text-muted fw-semibold fs-6">If you need more info, please check it out</span>
												</span>
												<!--end::Info-->
											</label>
											<!--end::Option-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-lg-6">
											<!--begin::Option-->
											<input type="radio" class="btn-check" name="account_type" value="corporate" id="kt_create_account_form_account_type_corporate" />
											<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
												<i class="ki-duotone ki-briefcase fs-3x me-5">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
												<!--begin::Info-->
												<span class="d-block fw-semibold text-start">
													<span class="text-dark fw-bold d-block fs-4 mb-2">Corporate Account</span>
													<span class="text-muted fw-semibold fs-6">Create corporate account to mane users</span>
												</span>
												<!--end::Info-->
											</label>
											<!--end::Option-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Input group-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Step 1-->
						<!--begin::Step 2-->
						<div data-kt-stepper-element="content">
							<!--begin::Wrapper-->
							<div class="w-100">
								<!--begin::Heading-->
								<div class="pb-10 pb-lg-15">
									<!--begin::Title-->
									<h2 class="fw-bold text-dark">Account Info</h2>
									<!--end::Title-->
									<!--begin::Notice-->
									<div class="text-muted fw-semibold fs-6">If you need more info, please check out
									<a href="#" class="link-primary fw-bold">Help Page</a>.</div>
									<!--end::Notice-->
								</div>
								<!--end::Heading-->
								<!--begin::Input group-->
								<div class="mb-10 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center form-label mb-3">Specify Team Size
									<span class="ms-1" data-bs-toggle="tooltip" title="Provide your team size to help us setup your billing">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span></label>
									<!--end::Label-->
									<!--begin::Row-->
									<div class="row mb-2" data-kt-buttons="true">
										<!--begin::Col-->
										<div class="col">
											<!--begin::Option-->
											<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
												<input type="radio" class="btn-check" name="account_team_size" value="1-1" />
												<span class="fw-bold fs-3">1-1</span>
											</label>
											<!--end::Option-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col">
											<!--begin::Option-->
											<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4 active">
												<input type="radio" class="btn-check" name="account_team_size" checked="checked" value="2-10" />
												<span class="fw-bold fs-3">2-10</span>
											</label>
											<!--end::Option-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col">
											<!--begin::Option-->
											<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
												<input type="radio" class="btn-check" name="account_team_size" value="10-50" />
												<span class="fw-bold fs-3">10-50</span>
											</label>
											<!--end::Option-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col">
											<!--begin::Option-->
											<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
												<input type="radio" class="btn-check" name="account_team_size" value="50+" />
												<span class="fw-bold fs-3">50+</span>
											</label>
											<!--end::Option-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Hint-->
									<div class="form-text">Customers will see this shortened version of your statement descriptor</div>
									<!--end::Hint-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="mb-10 fv-row">
									<!--begin::Label-->
									<label class="form-label mb-3">Team Account Name</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-lg form-control-solid" name="account_name" placeholder="" value="" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="mb-0 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center form-label mb-5">Select Account Plan
									<span class="ms-1" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span></label>
									<!--end::Label-->
									<!--begin::Options-->
									<div class="mb-0">
										<!--begin:Option-->
										<label class="d-flex flex-stack mb-5 cursor-pointer">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin::Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label">
														<i class="ki-duotone ki-bank fs-1 text-gray-600">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</span>
												<!--end::Icon-->
												<!--begin::Description-->
												<span class="d-flex flex-column">
													<span class="fw-bold text-gray-800 text-hover-primary fs-5">Company Account</span>
													<span class="fs-6 fw-semibold text-muted">Use images to enhance your post flow</span>
												</span>
												<!--end:Description-->
											</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="account_plan" value="1" />
											</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack mb-5 cursor-pointer">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin::Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label">
														<i class="ki-duotone ki-chart fs-1 text-gray-600">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</span>
												<!--end::Icon-->
												<!--begin::Description-->
												<span class="d-flex flex-column">
													<span class="fw-bold text-gray-800 text-hover-primary fs-5">Developer Account</span>
													<span class="fs-6 fw-semibold text-muted">Use images to your post time</span>
												</span>
												<!--end:Description-->
											</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" checked="checked" name="account_plan" value="2" />
											</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack mb-0 cursor-pointer">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin::Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label">
														<i class="ki-duotone ki-chart-pie-4 fs-1 text-gray-600">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</span>
												<!--end::Icon-->
												<!--begin::Description-->
												<span class="d-flex flex-column">
													<span class="fw-bold text-gray-800 text-hover-primary fs-5">Testing Account</span>
													<span class="fs-6 fw-semibold text-muted">Use images to enhance time travel rivers</span>
												</span>
												<!--end:Description-->
											</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="account_plan" value="3" />
											</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
									</div>
									<!--end::Options-->
								</div>
								<!--end::Input group-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Step 2-->
						<!--begin::Step 3-->
						<div data-kt-stepper-element="content">
							<!--begin::Wrapper-->
							<div class="w-100">
								<!--begin::Heading-->
								<div class="pb-10 pb-lg-12">
									<!--begin::Title-->
									<h2 class="fw-bold text-dark">Business Details</h2>
									<!--end::Title-->
									<!--begin::Notice-->
									<div class="text-muted fw-semibold fs-6">If you need more info, please check out
									<a href="#" class="link-primary fw-bold">Help Page</a>.</div>
									<!--end::Notice-->
								</div>
								<!--end::Heading-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Label-->
									<label class="form-label required">Business Name</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input name="business_name" class="form-control form-control-lg form-control-solid" value="Keenthemes Inc." />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Label-->
									<label class="d-flex align-items-center form-label">
										<span class="required">Shortened Descriptor</span>
										<span class="ms-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&#039;p-4 rounded bg-light&#039;&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-4&#039;&gt; &lt;i class=&quot;ki-duotone ki-bank fs-3 me-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt; &lt;div class=&#039;fw-bold&#039;&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack fw-semibold text-gray-600&#039;&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;separator separator-dashed my-2&#039;&gt;&lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-dark fw-bold mb-2&#039;&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-2&#039;&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted&#039;&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input name="business_descriptor" class="form-control form-control-lg form-control-solid" value="KEENTHEMES" />
									<!--end::Input-->
									<!--begin::Hint-->
									<div class="form-text">Customers will see this shortened version of your statement descriptor</div>
									<!--end::Hint-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Label-->
									<label class="form-label required">Corporation Type</label>
									<!--end::Label-->
									<!--begin::Input-->
									<select name="business_type" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true">
										<option></option>
										<option value="1">S Corporation</option>
										<option value="1">C Corporation</option>
										<option value="2">Sole Proprietorship</option>
										<option value="3">Non-profit</option>
										<option value="4">Limited Liability</option>
										<option value="5">General Partnership</option>
									</select>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--end::Label-->
									<label class="form-label">Business Description</label>
									<!--end::Label-->
									<!--begin::Input-->
									<textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-0">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold form-label required">Contact Email</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input name="business_email" class="form-control form-control-lg form-control-solid" value="corp@support.com" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Step 3-->
						<!--begin::Step 4-->
						<div data-kt-stepper-element="content">
							<!--begin::Wrapper-->
							<div class="w-100">
								<!--begin::Heading-->
								<div class="pb-10 pb-lg-15">
									<!--begin::Title-->
									<h2 class="fw-bold text-dark">Billing Details</h2>
									<!--end::Title-->
									<!--begin::Notice-->
									<div class="text-muted fw-semibold fs-6">If you need more info, please check out
									<a href="#" class="text-primary fw-bold">Help Page</a>.</div>
									<!--end::Notice-->
								</div>
								<!--end::Heading-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-7 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
										<span class="required">Name On Card</span>
										<span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<!--end::Label-->
									<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-7 fv-row">
									<!--begin::Label-->
									<label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
									<!--end::Label-->
									<!--begin::Input wrapper-->
									<div class="position-relative">
										<!--begin::Input-->
										<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
										<!--end::Input-->
										<!--begin::Card logos-->
										<div class="position-absolute translate-middle-y top-50 end-0 me-5">
											<img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
											<img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
											<img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
										</div>
										<!--end::Card logos-->
									</div>
									<!--end::Input wrapper-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row mb-10">
									<!--begin::Col-->
									<div class="col-md-8 fv-row">
										<!--begin::Label-->
										<label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
										<!--end::Label-->
										<!--begin::Row-->
										<div class="row fv-row">
											<!--begin::Col-->
											<div class="col-6">
												<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
													<option></option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
												</select>
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-6">
												<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
													<option></option>
													<option value="2023">2023</option>
													<option value="2024">2024</option>
													<option value="2025">2025</option>
													<option value="2026">2026</option>
													<option value="2027">2027</option>
													<option value="2028">2028</option>
													<option value="2029">2029</option>
													<option value="2030">2030</option>
													<option value="2031">2031</option>
													<option value="2032">2032</option>
													<option value="2033">2033</option>
												</select>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-4 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
											<span class="required">CVV</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
										</label>
										<!--end::Label-->
										<!--begin::Input wrapper-->
										<div class="position-relative">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
											<!--end::Input-->
											<!--begin::CVV icon-->
											<div class="position-absolute translate-middle-y top-50 end-0 me-3">
												<i class="ki-duotone ki-credit-cart fs-2hx">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::CVV icon-->
										</div>
										<!--end::Input wrapper-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-stack">
									<!--begin::Label-->
									<div class="me-5">
										<label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
										<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
									</div>
									<!--end::Label-->
									<!--begin::Switch-->
									<label class="form-check form-switch form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" checked="checked" />
										<span class="form-check-label fw-semibold text-muted">Save Card</span>
									</label>
									<!--end::Switch-->
								</div>
								<!--end::Input group-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Step 4-->
						<!--begin::Step 5-->
						<div data-kt-stepper-element="content">
							<!--begin::Wrapper-->
							<div class="w-100">
								<!--begin::Heading-->
								<div class="pb-8 pb-lg-10">
									<!--begin::Title-->
									<h2 class="fw-bold text-dark">Your Are Done!</h2>
									<!--end::Title-->
									<!--begin::Notice-->
									<div class="text-muted fw-semibold fs-6">If you need more info, please
									<a href="&lt;br /&gt;&lt;b&gt;Warning&lt;/b&gt;: foreach() argument must be of type array|object, null given in &lt;b&gt;/Users/shuhratsaipov/www/keenthemes/products/core/html/dist/libs/Util.php&lt;/b&gt; on line &lt;b&gt;168&lt;/b&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Warning&lt;/b&gt;: foreach() argument must be of type array|object, null given in &lt;b&gt;/Users/shuhratsaipov/www/keenthemes/products/core/html/dist/libs/Util.php&lt;/b&gt; on line &lt;b&gt;168&lt;/b&gt;&lt;br /&gt;../dist/.html" class="link-primary fw-bold">Sign In</a>.</div>
									<!--end::Notice-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div class="mb-0">
									<!--begin::Text-->
									<div class="fs-6 text-gray-600 mb-5">Writing headlines for blog posts is as much an art as it is a science and probably warrants its own post, but for all advise is with what works for your great & amazing audience.</div>
									<!--end::Text-->
									<!--begin::Alert-->
									<!--begin::Notice-->
									<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
										<!--begin::Icon-->
										<i class="ki-duotone ki-information fs-2tx text-warning me-4">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
										<!--end::Icon-->
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack flex-grow-1">
											<!--begin::Content-->
											<div class="fw-semibold">
												<h4 class="text-gray-900 fw-bold">We need your attention!</h4>
												<div class="fs-6 text-gray-700">To start using great tools, please,
												<a href="../dist/utilities/wizards/vertical.html" class="fw-bold">Create Team Platform</a></div>
											</div>
											<!--end::Content-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Notice-->
									<!--end::Alert-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Step 5-->
						<!--begin::Actions-->
						<div class="d-flex flex-stack pt-15">
							<!--begin::Wrapper-->
							<div class="mr-2">
								<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
								<i class="ki-duotone ki-arrow-left fs-4 me-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>Back</button>
							</div>
							<!--end::Wrapper-->
							<!--begin::Wrapper-->
							<div>
								<button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
									<span class="indicator-label">Submit
									<i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0">
										<span class="path1"></span>
										<span class="path2"></span>
									</i></span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
								<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
								<i class="ki-duotone ki-arrow-right fs-4 ms-1 me-0">
									<span class="path1"></span>
									<span class="path2"></span>
								</i></button>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Actions-->
					</form>
					<!--end::Form-->
				</div>
				<!--end::Stepper-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Create project-->
<!--begin::Modal - Create App-->
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-900px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Modal title-->
				<h2>Create App</h2>
				<!--end::Modal title-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body py-lg-10 px-lg-10">
				<!--begin::Stepper-->
				<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
					<!--begin::Aside-->
					<div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
						<!--begin::Nav-->
						<div class="stepper-nav ps-lg-10">
							<!--begin::Step 1-->
							<div class="stepper-item current" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="ki-duotone ki-check stepper-check fs-2"></i>
										<span class="stepper-number">1</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Details</h3>
										<div class="stepper-desc">Name your App</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Line-->
								<div class="stepper-line h-40px"></div>
								<!--end::Line-->
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="ki-duotone ki-check stepper-check fs-2"></i>
										<span class="stepper-number">2</span>
									</div>
									<!--begin::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Frameworks</h3>
										<div class="stepper-desc">Define your app framework</div>
									</div>
									<!--begin::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Line-->
								<div class="stepper-line h-40px"></div>
								<!--end::Line-->
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="ki-duotone ki-check stepper-check fs-2"></i>
										<span class="stepper-number">3</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Database</h3>
										<div class="stepper-desc">Select the app database type</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Line-->
								<div class="stepper-line h-40px"></div>
								<!--end::Line-->
							</div>
							<!--end::Step 3-->
							<!--begin::Step 4-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="ki-duotone ki-check stepper-check fs-2"></i>
										<span class="stepper-number">4</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Billing</h3>
										<div class="stepper-desc">Provide payment details</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Line-->
								<div class="stepper-line h-40px"></div>
								<!--end::Line-->
							</div>
							<!--end::Step 4-->
							<!--begin::Step 5-->
							<div class="stepper-item mark-completed" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="ki-duotone ki-check stepper-check fs-2"></i>
										<span class="stepper-number">5</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Completed</h3>
										<div class="stepper-desc">Review and Submit</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 5-->
						</div>
						<!--end::Nav-->
					</div>
					<!--begin::Aside-->
					<!--begin::Content-->
					<div class="flex-row-fluid py-lg-5 px-lg-15">
						<!--begin::Form-->
						<form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
							<!--begin::Step 1-->
							<div class="current" data-kt-stepper-element="content">
								<div class="w-100">
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
											<span class="required">App Name</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
										</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
											<span class="required">Category</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Select your app category">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
										</label>
										<!--end::Label-->
										<!--begin:Options-->
										<div class="fv-row">
											<!--begin:Option-->
											<label class="d-flex flex-stack mb-5 cursor-pointer">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-primary">
															<i class="ki-duotone ki-compass fs-1 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bold fs-6">Quick Online Courses</span>
														<span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="category" value="1" />
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack mb-5 cursor-pointer">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-danger">
															<i class="ki-duotone ki-element-11 fs-1 text-danger">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bold fs-6">Face to Face Discussions</span>
														<span class="fs-7 text-muted">Creating a clear text structure is just one aspect</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="category" value="2" />
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-success">
															<i class="ki-duotone ki-timer fs-1 text-success">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bold fs-6">Full Intro Training</span>
														<span class="fs-7 text-muted">Creating a clear text structure copywriting</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="category" value="3" />
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
										</div>
										<!--end:Options-->
									</div>
									<!--end::Input group-->
								</div>
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div data-kt-stepper-element="content">
								<div class="w-100">
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
											<span class="required">Select Framework</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Specify your apps framework">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
										</label>
										<!--end::Label-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin:Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-warning">
														<i class="ki-duotone ki-html fs-2x text-warning">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</span>
												<!--end:Icon-->
												<!--begin:Info-->
												<span class="d-flex flex-column">
													<span class="fw-bold fs-6">HTML5</span>
													<span class="fs-7 text-muted">Base Web Projec</span>
												</span>
												<!--end:Info-->
											</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" checked="checked" name="framework" value="1" />
											</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin:Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-success">
														<i class="ki-duotone ki-react fs-2x text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</span>
												<!--end:Icon-->
												<!--begin:Info-->
												<span class="d-flex flex-column">
													<span class="fw-bold fs-6">ReactJS</span>
													<span class="fs-7 text-muted">Robust and flexible app framework</span>
												</span>
												<!--end:Info-->
											</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="framework" value="2" />
											</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin:Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-danger">
														<i class="ki-duotone ki-angular fs-2x text-danger">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</span>
												<!--end:Icon-->
												<!--begin:Info-->
												<span class="d-flex flex-column">
													<span class="fw-bold fs-6">Angular</span>
													<span class="fs-7 text-muted">Powerful data mangement</span>
												</span>
												<!--end:Info-->
											</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="framework" value="3" />
											</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin:Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-primary">
														<i class="ki-duotone ki-vue fs-2x text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</span>
												<!--end:Icon-->
												<!--begin:Info-->
												<span class="d-flex flex-column">
													<span class="fw-bold fs-6">Vue</span>
													<span class="fs-7 text-muted">Lightweight and responsive framework</span>
												</span>
												<!--end:Info-->
											</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="framework" value="4" />
											</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
									</div>
									<!--end::Input group-->
								</div>
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div data-kt-stepper-element="content">
								<div class="w-100">
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="required fs-5 fw-semibold mb-2">Database Name</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
											<span class="required">Select Database Engine</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Select your app database engine">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
										</label>
										<!--end::Label-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin::Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin::Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-success">
														<i class="ki-duotone ki-note text-success fs-2x">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</span>
												<!--end::Icon-->
												<!--begin::Info-->
												<span class="d-flex flex-column">
													<span class="fw-bold fs-6">MySQL</span>
													<span class="fs-7 text-muted">Basic MySQL database</span>
												</span>
												<!--end::Info-->
											</span>
											<!--end::Label-->
											<!--begin::Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1" />
											</span>
											<!--end::Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin::Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin::Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-danger">
														<i class="ki-duotone ki-google text-danger fs-2x">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</span>
												<!--end::Icon-->
												<!--begin::Info-->
												<span class="d-flex flex-column">
													<span class="fw-bold fs-6">Firebase</span>
													<span class="fs-7 text-muted">Google based app data management</span>
												</span>
												<!--end::Info-->
											</span>
											<!--end::Label-->
											<!--begin::Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="dbengine" value="2" />
											</span>
											<!--end::Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer">
											<!--begin::Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin::Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-warning">
														<i class="ki-duotone ki-microsoft text-warning fs-2x">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
												</span>
												<!--end::Icon-->
												<!--begin::Info-->
												<span class="d-flex flex-column">
													<span class="fw-bold fs-6">DynamoDB</span>
													<span class="fs-7 text-muted">Microsoft Fast NoSQL Database</span>
												</span>
												<!--end::Info-->
											</span>
											<!--end::Label-->
											<!--begin::Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="dbengine" value="3" />
											</span>
											<!--end::Input-->
										</label>
										<!--end::Option-->
									</div>
									<!--end::Input group-->
								</div>
							</div>
							<!--end::Step 3-->
							<!--begin::Step 4-->
							<div data-kt-stepper-element="content">
								<div class="w-100">
									<!--begin::Input group-->
									<div class="d-flex flex-column mb-7 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
											<span class="required">Name On Card</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
										</label>
										<!--end::Label-->
										<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="d-flex flex-column mb-7 fv-row">
										<!--begin::Label-->
										<label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
										<!--end::Label-->
										<!--begin::Input wrapper-->
										<div class="position-relative">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
											<!--end::Input-->
											<!--begin::Card logos-->
											<div class="position-absolute translate-middle-y top-50 end-0 me-5">
												<img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
												<img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
												<img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
											</div>
											<!--end::Card logos-->
										</div>
										<!--end::Input wrapper-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-10">
										<!--begin::Col-->
										<div class="col-md-8 fv-row">
											<!--begin::Label-->
											<label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
											<!--end::Label-->
											<!--begin::Row-->
											<div class="row fv-row">
												<!--begin::Col-->
												<div class="col-6">
													<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
														<option></option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
													</select>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
														<option></option>
														<option value="2023">2023</option>
														<option value="2024">2024</option>
														<option value="2025">2025</option>
														<option value="2026">2026</option>
														<option value="2027">2027</option>
														<option value="2028">2028</option>
														<option value="2029">2029</option>
														<option value="2030">2030</option>
														<option value="2031">2031</option>
														<option value="2032">2032</option>
														<option value="2033">2033</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-4 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
												<span class="required">CVV</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
											<!--begin::Input wrapper-->
											<div class="position-relative">
												<!--begin::Input-->
												<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
												<!--end::Input-->
												<!--begin::CVV icon-->
												<div class="position-absolute translate-middle-y top-50 end-0 me-3">
													<i class="ki-duotone ki-credit-cart fs-2hx">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::CVV icon-->
											</div>
											<!--end::Input wrapper-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="d-flex flex-stack">
										<!--begin::Label-->
										<div class="me-5">
											<label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
											<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
										</div>
										<!--end::Label-->
										<!--begin::Switch-->
										<label class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" checked="checked" />
											<span class="form-check-label fw-semibold text-muted">Save Card</span>
										</label>
										<!--end::Switch-->
									</div>
									<!--end::Input group-->
								</div>
							</div>
							<!--end::Step 4-->
							<!--begin::Step 5-->
							<div data-kt-stepper-element="content">
								<div class="w-100 text-center">
									<!--begin::Heading-->
									<h1 class="fw-bold text-dark mb-3">Release!</h1>
									<!--end::Heading-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-3">Submit your app to kickstart your project.</div>
									<!--end::Description-->
									<!--begin::Illustration-->
									<div class="text-center px-4 py-15">
										<img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mw-100 mh-300px" />
									</div>
									<!--end::Illustration-->
								</div>
							</div>
							<!--end::Step 5-->
							<!--begin::Actions-->
							<div class="d-flex flex-stack pt-10">
								<!--begin::Wrapper-->
								<div class="me-2">
									<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
									<i class="ki-duotone ki-arrow-left fs-3 me-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>Back</button>
								</div>
								<!--end::Wrapper-->
								<!--begin::Wrapper-->
								<div>
									<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
										<span class="indicator-label">Submit
										<i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0">
											<span class="path1"></span>
											<span class="path2"></span>
										</i></span>
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
									<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
									<i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0">
										<span class="path1"></span>
										<span class="path2"></span>
									</i></button>
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Stepper-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Create App-->
<!--begin::Modal - View Users-->
<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
				<!--begin::Heading-->
				<div class="text-center mb-13">
					<!--begin::Title-->
					<h1 class="mb-3">Browse Users</h1>
					<!--end::Title-->
					<!--begin::Description-->
					<div class="text-muted fw-semibold fs-5">If you need more info, please check out our
					<a href="#" class="link-primary fw-bold">Users Directory</a>.</div>
					<!--end::Description-->
				</div>
				<!--end::Heading-->
				<!--begin::Users-->
				<div class="mb-15">
					<!--begin::List-->
					<div class="mh-375px scroll-y me-n7 pe-7">
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Smith
									<span class="badge badge-light fs-8 fw-semibold ms-2">Art Director</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">smith@kpmg.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$23,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Melody Macy
									<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">melody@altbox.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$50,500</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Max Smith
									<span class="badge badge-light fs-8 fw-semibold ms-2">Software Enginer</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">max@kt.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$75,900</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Sean Bean
									<span class="badge badge-light fs-8 fw-semibold ms-2">Web Developer</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">sean@dellito.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$10,500</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Brian Cox
									<span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX Designer</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">brian@exchange.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$20,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Mikaela Collins
									<span class="badge badge-light fs-8 fw-semibold ms-2">Head Of Marketing</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">mik@pex.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$9,300</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Francis Mitcham
									<span class="badge badge-light fs-8 fw-semibold ms-2">Software Arcitect</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$15,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Olivia Wild
									<span class="badge badge-light fs-8 fw-semibold ms-2">System Admin</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">olivia@corpmail.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$23,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Neil Owen
									<span class="badge badge-light fs-8 fw-semibold ms-2">Account Manager</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$45,800</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Dan Wilson
									<span class="badge badge-light fs-8 fw-semibold ms-2">Web Desinger</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">dam@consilting.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$90,500</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Bold
									<span class="badge badge-light fs-8 fw-semibold ms-2">Corporate Finance</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">emma@intenso.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$5,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Ana Crown
									<span class="badge badge-light fs-8 fw-semibold ms-2">Customer Relationship</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$70,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Robert Doe
									<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Executive</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">robert@benko.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$45,500</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
					</div>
					<!--end::List-->
				</div>
				<!--end::Users-->
				<!--begin::Notice-->
				<div class="d-flex justify-content-between">
					<!--begin::Label-->
					<div class="fw-semibold">
						<label class="fs-6">Adding Users by Team Members</label>
						<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
					</div>
					<!--end::Label-->
					<!--begin::Switch-->
					<label class="form-check form-switch form-check-custom form-check-solid">
						<input class="form-check-input" type="checkbox" value="" checked="checked" />
						<span class="form-check-label fw-semibold text-muted">Allowed</span>
					</label>
					<!--end::Switch-->
				</div>
				<!--end::Notice-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - View Users-->
<!--begin::Modal - Users Search-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
				<!--begin::Content-->
				<div class="text-center mb-13">
					<h1 class="mb-3">Search Users</h1>
					<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
				</div>
				<!--end::Content-->
				<!--begin::Search-->
				<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
					<!--begin::Form-->
					<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
						<!--begin::Hidden input(Added to disable form autocomplete)-->
						<input type="hidden" />
						<!--end::Hidden input-->
						<!--begin::Icon-->
						<i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
						<!--end::Icon-->
						<!--begin::Input-->
						<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
						<!--end::Input-->
						<!--begin::Spinner-->
						<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
							<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
						</span>
						<!--end::Spinner-->
						<!--begin::Reset-->
						<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
							<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</span>
						<!--end::Reset-->
					</form>
					<!--end::Form-->
					<!--begin::Wrapper-->
					<div class="py-5">
						<!--begin::Suggestions-->
						<div data-kt-search-element="suggestions">
							<!--begin::Heading-->
							<h3 class="fw-semibold mb-5">Recently searched:</h3>
							<!--end::Heading-->
							<!--begin::Users-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-5">
										<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="fw-semibold">
										<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
										<span class="badge badge-light">Art Director</span>
									</div>
									<!--end::Info-->
								</a>
								<!--end::User-->
								<!--begin::User-->
								<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-5">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="fw-semibold">
										<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
										<span class="badge badge-light">Marketing Analytic</span>
									</div>
									<!--end::Info-->
								</a>
								<!--end::User-->
								<!--begin::User-->
								<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-5">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="fw-semibold">
										<span class="fs-6 text-gray-800 me-2">Max Smith</span>
										<span class="badge badge-light">Software Enginer</span>
									</div>
									<!--end::Info-->
								</a>
								<!--end::User-->
								<!--begin::User-->
								<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-5">
										<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="fw-semibold">
										<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
										<span class="badge badge-light">Web Developer</span>
									</div>
									<!--end::Info-->
								</a>
								<!--end::User-->
								<!--begin::User-->
								<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-5">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="fw-semibold">
										<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
										<span class="badge badge-light">UI/UX Designer</span>
									</div>
									<!--end::Info-->
								</a>
								<!--end::User-->
							</div>
							<!--end::Users-->
						</div>
						<!--end::Suggestions-->
						<!--begin::Results(add d-none to below element to hide the users list by default)-->
						<div data-kt-search-element="results" class="d-none">
							<!--begin::Users-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
											<div class="fw-semibold text-muted">melody@altbox.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
											<div class="fw-semibold text-muted">max@kt.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
											<div class="fw-semibold text-muted">sean@dellito.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
											<div class="fw-semibold text-muted">brian@exchange.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
											<div class="fw-semibold text-muted">mik@pex.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
											<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
											<div class="fw-semibold text-muted">olivia@corpmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
											<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
											<div class="fw-semibold text-muted">dam@consilting.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
											<div class="fw-semibold text-muted">emma@intenso.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
											<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
											<div class="fw-semibold text-muted">robert@benko.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
											<div class="fw-semibold text-muted">miller@mapple.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
											<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
											<div class="fw-semibold text-muted">ethan@loop.com.au</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
							</div>
							<!--end::Users-->
							<!--begin::Actions-->
							<div class="d-flex flex-center mt-15">
								<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
								<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Results-->
						<!--begin::Empty-->
						<div data-kt-search-element="empty" class="text-center d-none">
							<!--begin::Message-->
							<div class="fw-semibold py-10">
								<div class="text-gray-600 fs-3 mb-2">No users found</div>
								<div class="text-muted fs-6">Try to search by username, full name or email...</div>
							</div>
							<!--end::Message-->
							<!--begin::Illustration-->
							<div class="text-center px-5">
								<img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
							</div>
							<!--end::Illustration-->
						</div>
						<!--end::Empty-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Search-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search-->
<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
				<!--begin::Heading-->
				<div class="text-center mb-13">
					<!--begin::Title-->
					<h1 class="mb-3">Invite a Friend</h1>
					<!--end::Title-->
					<!--begin::Description-->
					<div class="text-muted fw-semibold fs-5">If you need more info, please check out
					<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
					<!--end::Description-->
				</div>
				<!--end::Heading-->
				<!--begin::Google Contacts Invite-->
				<div class="btn btn-light-primary fw-bold w-100 mb-8">
				<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts</div>
				<!--end::Google Contacts Invite-->
				<!--begin::Separator-->
				<div class="separator d-flex flex-center mb-8">
					<span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
				</div>
				<!--end::Separator-->
				<!--begin::Textarea-->
				<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
				<!--end::Textarea-->
				<!--begin::Users-->
				<div class="mb-10">
					<!--begin::Heading-->
					<div class="fs-6 fw-semibold mb-2">Your Invitations</div>
					<!--end::Heading-->
					<!--begin::List-->
					<div class="mh-300px scroll-y me-n7 pe-7">
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
									<div class="fw-semibold text-muted">smith@kpmg.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
									<div class="fw-semibold text-muted">melody@altbox.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
									<div class="fw-semibold text-muted">max@kt.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
									<div class="fw-semibold text-muted">sean@dellito.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
									<div class="fw-semibold text-muted">brian@exchange.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
									<div class="fw-semibold text-muted">mik@pex.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
									<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
									<div class="fw-semibold text-muted">olivia@corpmail.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
									<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
									<div class="fw-semibold text-muted">dam@consilting.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
									<div class="fw-semibold text-muted">emma@intenso.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
									<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
									<div class="fw-semibold text-muted">robert@benko.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
									<div class="fw-semibold text-muted">miller@mapple.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
									<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
									<div class="fw-semibold text-muted">ethan@loop.com.au</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
									<div class="fw-semibold text-muted">emma@intenso.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
					</div>
					<!--end::List-->
				</div>
				<!--end::Users-->
				<!--begin::Notice-->
				<div class="d-flex flex-stack">
					<!--begin::Label-->
					<div class="me-5 fw-semibold">
						<label class="fs-6">Adding Users by Team Members</label>
						<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
					</div>
					<!--end::Label-->
					<!--begin::Switch-->
					<label class="form-check form-switch form-check-custom form-check-solid">
						<input class="form-check-input" type="checkbox" value="1" checked="checked" />
						<span class="form-check-label fw-semibold text-muted">Allowed</span>
					</label>
					<!--end::Switch-->
				</div>
				<!--end::Notice-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
@endsection