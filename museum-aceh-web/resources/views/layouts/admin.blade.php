<?php  

use Illuminate\Support\Facades\Auth;
$user = Auth::user();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="base-url" content="{{ URL::to('/') }}">
        <title>Museum Aceh 2 - Admin</title>
        <!-- Custom fonts for this template-->
        <link href="{{asset('sb-admin-2/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="{{asset('sb-admin-2/css/custom/sb-admin-2.css')}}" rel="stylesheet">
        <link href="{{asset('select2/dist/css/select2.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/admin.css')}}" rel="stylesheet">
        <link href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" rel="stylesheet">

        <script src="{{asset('sb-admin-2/vendor/jquery/jquery.min.js')}}"></script>

        

        <style>
            .bg-gradient-primary {
                background-color: #724edf;
                background-image: linear-gradient(180deg, #864edf 10%, #224abe 100%);
                background-size: cover;
            }
        </style>
        
    </head>
    <body id="page-top">

        <div class="loader" style="display: none;">
            <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>
        
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard.index')}}">
                    {{-- <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div> --}}
                    <div class="sidebar-brand-text mx-3">Museum Aceh <sup>Admin</sup></div>
                </a>
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                <!-- Nav Item - Dashboard -->

                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.dashboard.index')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <hr class="sidebar-divider">

                <div class="sidebar-heading">
                    Content Management
                </div>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.category.index')}}">
                        <i class="fas fa-fw fa-th-large"></i>
                        <span>Categories</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.post.index')}}">
                        <i class="fas fa-fw fa-newspaper"></i>
                        <span>Posts</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.page.index')}}">
                        <i class="fas fa-fw fa-file"></i>
                        <span>Pages</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.event.index')}}">
                        <i class="fas fa-fw fa-calendar"></i>
                        <span>Event</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.contact_message.index')}}">
                        <i class="fas fa-fw fa-calendar"></i>
                        <span>Contact Message</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.user.index')}}">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Users</span>
                    </a>
                </li>

                

                

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                        </button>
                        <!-- Topbar Search -->
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">{{$user->unreadNotifications->count()}}</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                        Alerts Center
                                    </h6>

                                    {{-- @forelse($user->unreadNotifications as $notification)

                                       

                                        <a class="dropdown-item d-flex align-items-center" href="{{route('admin.notification.read', $notification->id)}}">
                                            
                                            <div>
                                                <div >{{$notification->data['message']}}</div>
                                                <div class="small text-gray-500">{{$notification->created_at->diffForHumans()}}</div>
                                            </div>
                                        </a>

                                    @empty

                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            
                                            <div>
                                                <div class="text-center text-muted">No Unread Notification</div>
                                            </div>
                                        </a>
                                    @endforelse --}}
                                    
                                    {{-- <a class="dropdown-item text-center small text-gray-500" href="{{route('admin.notification.index')}}">Show All Notifications</a> --}}
                                </div>
                            </li>

                            
                            
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ucwords($user->name)}} ({{$user->email}})</span>
                                {{-- <img class="img-profile rounded-circle" src="{{$user->avatar ? asset($user->avatar) : asset('img/dummy-avatar')}}"> --}}
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                    {{-- <a class="dropdown-item" href="{{route('admin.dashboard.profile')}}">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                    </a>
                                    <a class="dropdown-item" href="{{route('admin.dashboard.edit_password')}}">
                                        <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i> Change Password
                                    </a>
                                    
                                    <div class="dropdown-divider"></div>
                                    --}}
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                    </a> 
                                    
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->
                    <!-- Begin Page Content -->
                    @yield('content')
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Museum Aceh {{date('Y')}}</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        {{-- <a class="btn btn-primary" href="login.html">Logout</a> --}}

                        <a class="btn btn-primary" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        
       

        <script src="{{asset('js/admin.js')}}"></script>

        <script src="{{asset('sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{asset('sb-admin-2/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <!-- Custom scripts for all pages-->
        <script src="{{asset('sb-admin-2/js/sb-admin-2.js')}}"></script>
        <script src="{{asset('select2/dist/js/select2.full.min.js')}}"></script>
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

        <script>
            const base_url = '<?php echo URL::to('/'); ?>/';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.select2').select2();
        </script>

        @yield('scripts')
        

        
    </body>
</html>