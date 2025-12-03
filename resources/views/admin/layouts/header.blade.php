<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex align-items-center">
                <form class="navbar-search form-inline" id="navbar-search-main">
                    <div class="input-group input-group-merge search-bar">
                        <span class="input-group-text" id="topbar-addon">
                            <svg class="icon icon-xs" fill="none" stroke="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 4a4 4 0 014 4 4 4 0 01-1.41 3.414l4.416 4.416a1 1 0 01-1.414 1.414l-4.416-4.416A4 4 0 118 4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <input type="text" class="form-control" id="topbarInputIconLeft"
                            placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                    </div>
                </form>
            </div>

            <!-- // Search form -->

            <!-- // Navbar links -->
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="media d-flex align-items-center">

                            <img class="avatar rounded-circle" alt="Image placeholder"
                                style="object-fit: cover;"
                                src="{{ Auth::user()->avatar
                                        ? asset('storage/' . Auth::user()->avatar)
                                        : asset('assets-admin/img/team/profile-picture-3.jpg') }}">

                            <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                <span class="mb-0 font-small fw-bold text-gray-900">
                                    {{ Auth::user()->name }}
                                </span>
                            </div>
                        </div>
                    </a>

                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">

                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2"
                                fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16 10a8 8 0 11-16 0 8 8 0 0116 0zm-6 3a2 2 0 11-4 0 2 2 0 014 0zm2-5a5 5 0 11-10 0 5 5 0 0110 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            My Profile
                        </a>

                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2"
                                fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M11.49 3.17c-.38 1.52-.26 3.08.91 5.32 1.53 2.01 2.26 2.98 
                                      4.36 3.24.52-.1 1.14-.02 1.54-.98.37-1.56-1.96-2.54-1.53-3.24.92-1.56 1.97-.43 
                                      2.98-1.53-.43-2.87-3.24-3.98-.33-1.53-.98 1.14-.98.33 1.14 2.98-.43 1.53 
                                      1.53-2.01 0-.33 1.14-.98.33 1.14 2.98-1.53 1.97-.33 0 1.14z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Settings
                        </a>

                        <div role="separator" class="dropdown-divider my-1"></div>

                        <a class="dropdown-item d-flex align-items-center" href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                            <svg class="dropdown-icon text-danger me-2" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24"
                                stroke-linejoin="round" stroke-width="2"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 
                                      3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            Logout

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>