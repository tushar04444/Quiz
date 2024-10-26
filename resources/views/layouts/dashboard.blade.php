
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Retouch Cloud - Admin Dashboard</title>
    <!-- Favicon icon -->
   
    <link rel="icon" href="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='32' height='32'><circle cx='16' cy='16' r='16' fill='%23000'/><text x='12' y='22' font-family='Arial' font-size='12' fill='%23fff'>3</text></svg>">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/dasboard/images/favicon.png')}}">
	<link rel="stylesheet" href="{{asset('/dasboard/vendor/chartist/css/chartist.min.css')}}">
    <link href="{{asset('/dashboard/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
	<link href="{{asset('/dashboard/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('/dashboard/css/style.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-r4H60JdCz1VX0g5F3f5zfA6n6wUG6eNr3P5zxsLhj5oB9t99Pm5LvMxgZ76nqDtX" crossorigin="anonymous">

</head>
<style>
    .nav-header .brand-title {
    margin-left: 10px;
    max-width: 235px;
    margin-top: 0px;
}
.card {
    margin-bottom: 1.875rem;
    background-color: #fff;
    transition: all .5s ease-in-out;
    position: relative;
    border: 0px solid transparent;
    border-radius: 1.25rem;
    box-shadow: 0px 12px 23px 0px rgba(160, 44, 250, 0.04);
    height: auto;
}
[data-sidebar-style="full"][data-layout="vertical"] .deznav .metismenu > li.mm-active > a {
    color: #0B2A97;
    background: none;
}
</style>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{route('home')}}" class="brand-logo">
                <img class="brand-title" width="100%" src="{{asset('/dashboard/images/logo-text.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
	
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								Admin Panel
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								<div class="input-group search-area d-xl-inline-flex d-none" style="width: 100%">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                                    </div>
                                    <form action="" method="GET">
                                        <input type="text" class="form-control" name="search" id="searchInput" placeholder="Search here..." value="">
                                        <ul id="searchSuggestions"></ul>
                                    </form>
                                </div>
                                
                                
							</li>
							<li class="nav-item dropdown notification_dropdown">
                               
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                   
									<div class="header-info">
										<span class="text-black"><strong>{{ Auth::user()->name }}</strong></span>
										
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                   
                                    </a>
                                    <a href="" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                
                <li><a href="{{route('user_list')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Users</span>
                </a>
                <li><a href="{{route('category')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Add Category</span>
                </a>
            </li>
                <li><a href="{{route('ques')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Add Question</span>
                </a>
            </li>
               
                   
                    
                    {{-- <li><a href="{{ route('customer.list') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-2"></i>
                        
                        @if (App\Models\CustomerRegister::where('status', 0)->exists())
                        <span class="nav-text text-danger">Customer List</span>
                        @else
                        <span class="nav-text">Customer List</span>
                        @endif
                        @if (App\Models\CustomerRegister::where('status', 0)->exists())
                        <small class="cart_counter">{{ App\Models\CustomerRegister::where('status',0)->count() }}</small>
                        @endif
                    
                    </a>
                    </li> --}}


                    {{-- <li><a href="{{ route('trial') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-2"></i>
                        <span class="nav-text">Free Trial</span>
                    </a>
                    </li>
                    
                    

                    <li><a href="{{ route('review') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-2"></i>
                        <span class="nav-text">Review</span>
                    </a>
                    </li>
                     <li><a href="{{ route('admin_contact') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-2"></i>
                        <span class="nav-text">Contact</span>
                    </a>
                    </li> --}}
                   
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
        <!-- Admin Dashboard Blade View -->



		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				@yield('content')
            </div>
        </div>

    

        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <footer>
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <a href="http://tushar044.github.io/myportfolio/#home" target="_blank">Tushar</a> 2024</p>
                </div>
            </div>
        </footer>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('/dashboard/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('/dashboard/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('/dashboard/vendor/chart.js/Chart.bundle.min.js')}}"></script>
	<script src="{{asset('/dashboard/vendor/bootstrap-datetimepicker/js/moment.js')}}"></script>
	<script src="{{asset('/dashboard/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('/dashboard/js/custom.min.js')}}"></script>
	<script src="{{asset('/dashboard/js/deznav-init.js')}}"></script>
	<script>
		$(function () {
			$('#datetimepicker1').datetimepicker({
				inline: true,
			});
		});
        



        function updateFavicon(notificationCount) {
    var favicon = document.querySelector('link[rel="icon"]');
    var canvas = document.createElement('canvas');
    canvas.width = 32;
    canvas.height = 32;
    var context = canvas.getContext('2d');

    // Draw favicon image
    var img = new Image();
    img.onload = function() {
        context.drawImage(img, 0, 0, 32, 32);

        // Draw notification badge
        if (notificationCount > 0) {
            context.beginPath();
            context.arc(25, 5, 5, 0, 2 * Math.PI);
            context.fillStyle = 'red';
            context.fill();
            context.fillStyle = 'white';
            context.fillText(notificationCount, 22, 9);
        }

        // Update favicon
        favicon.href = canvas.toDataURL('image/png');
    };
    img.src = 'path/to/your/dynamic/favicon.png';
}

// Call this function whenever the notification count changes
updateFavicon(3); // Example notification count







</script>


	</script>
    <!-- resources/views/admin/dashboard.blade.php -->

  @yield('footer_script')

</body>
</html>