@extends('Layout.layout')
@section('LAYOUT')
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
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
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px ms-3 me-2 d-flex d-lg-none"
                            id="kt_app_sidebar_mobile_toggle">
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
                        <div id="kt_app_sidebar_toggle"
                            class="app-sidebar-toggle btn btn-sm btn-icon btn-color-warning me-n2 d-none d-lg-flex"
                            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                            data-kt-toggle-name="app-sidebar-minimize">
                            <i class="ki-duotone ki-exit-left fs-2x rotate-180">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                        <!--end::Sidebar toggle-->
                    </div>
                    <!--begin::Navbar-->
                    <div class="app-navbar flex-grow-1 justify-content-end" id="kt_app_header_navbar">
                        <!--begin::User menu-->
                        <div class="app-navbar-item ms-3 ms-lg-4 me-lg-2" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="cursor-pointer symbol symbol-30px symbol-lg-40px"
                                data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                data-kt-menu-placement="bottom-end">
                                <img src="assets/media/avatars/300-2.jpg" alt="user" />
                            </div>
                            <!--begin::User account menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                data-kt-menu="true">
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
                                                <span
                                                    class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                            </div>
                                            <a href="#"
                                                class="fw-semibold text-muted text-hover-primary fs-7">jane@kt.com</a>
                                        </div>
                                        <!--end::Username-->

                                    </div>
                                </div>
                                <!--end::Menu item-->
                                
                               
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->                              
                            </div>
                            <div class="cursor-pointer symbol symbol-30px symbol-md-40px" style="margin-left: 5%">
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-icon-warning btn-outline-danger btn-active-light-danger"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Keluar"><span
                                            class="indicator-label">
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-box-arrow-right"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                                    <path fill-rule="evenodd"
                                                        d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                                </svg>
                                            </span>
                                        </span>
                                    </button>
                                </form>
                            </div>

                        </div>
                        <!--end::User menu-->
                        
                        
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
                <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
                    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                    <!--begin::Main-->
                    <div class="d-flex flex-column justify-content-between h-100 hover-scroll-overlay-y my-2 d-flex flex-column"
                        id="kt_app_sidebar_main" data-kt-scroll="true" data-kt-scroll-activate="true"
                        data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header"
                        data-kt-scroll-wrappers="#kt_app_main" data-kt-scroll-offset="5px">
                        <!--begin::Sidebar menu-->
                        <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
                            class="flex-column-fluid menu menu-sub-indention menu-column menu-rounded menu-active-bg mb-7">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
                                            <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
                                          </svg>
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
                                        <a class="menu-link active" href="/">
                                            <span class="menu-bullet">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-exclamation" viewBox="0 0 16 16">
                                                    <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                                                    <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1.5a.5.5 0 0 0 1 0V11a.5.5 0 0 0-.5-.5Zm0 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Z"/>
                                                  </svg>
                                            </span>
                                            <span class="menu-title">Pasien</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../dist/index.html">
                                            <span class="menu-bullet">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-bar-graph" viewBox="0 0 16 16">
                                                    <path d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v6zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1z"/>
                                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                                  </svg>
                                            </span>
                                            <span class="menu-title">Kunjungan</span>
                                        </a>
                                        <!--end:Menu link-->
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
                                    <span class="menu-title">Pegawai</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                            href="https://preview.keenthemes.com/html/saul-html-pro/docs/base/utilities"
                                            target="_blank" title="Check out over 200 in-house components"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                            data-bs-placement="right">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Pegawai</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                            href="https://preview.keenthemes.com/html/saul-html-pro/docs"
                                            target="_blank" title="Check out the complete documentation"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                            data-bs-placement="right">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Pengguna</span>
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
                                        <i class="ki-duotone ki-rescue fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">Referensi</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                            href="https://preview.keenthemes.com/html/saul-html-pro/docs/base/utilities"
                                            target="_blank" title="Check out over 200 in-house components"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                            data-bs-placement="right">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Instansi</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                            href="https://preview.keenthemes.com/html/saul-html-pro/docs"
                                            target="_blank" title="Check out the complete documentation"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                            data-bs-placement="right">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Referensi</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                            href="https://preview.keenthemes.com/saul-html-free/layout-builder.html"
                                            title="Build your layout and export HTML for server side integration"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                            data-bs-placement="right">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Wilayah</span>
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
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->
@endsection
