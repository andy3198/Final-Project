<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ url('css/style.css')}}">
    <script src="{{ url('js/jquery.min.js')}}"></script>
    <script src="{{ url('js/popper,min.js')}}"></script>
    <script src="{{ url('js/bootstrap.min.js')}}"></script>
    
    <title>Blade</title>
</head>
<body>
<header>
	
	<nav class="navbar fixed-top navbar navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand text-white" href="https://www.facebook.com/profile.php?id=100009303482365"><i class="fa fa-graduation-cap fa-lg mr-2"></i>D'Invi.AndyJee</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="nvbCollapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item pl-1">
						<a class="nav-link" href="{{url('/')}}"><i class="fa fa-home fa-fw mr-1"></i>Home</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="{{url('/users')}}"><i class="fa fa-user fa-fw mr-1"></i>User</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="{{url('/instructors')}}"><i class="fa fa-instructor fa-fw mr-1"></i>Instructor</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="{{url('/learners')}}"><i class="fa fa-learn fa-fw fa-rotate-180 mr-1"></i>Learner</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="{{url('/courses')}}"><i class="fa fa-course-plus fa-fw mr-1"></i>Course</a>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
	</header>

    

    <div class="container">
        @yield('content')
    </div>

   <div>
        @yield('create')
   </div>

   <div>
        @yield('edite')
   </div>

   <div>
        @yield('home')
   </div>

   <div class="">
        <section style="height:80px;"></section>
        <div class="jumbroton" style="text-align:center;">
            <h2></h2>
        </div>
        
        <footer class="footer-bs">
            <div class="row">
                <div class="col-md-3 footer-brand animated fadeInLeft">
                    <h2>Logo</h2>
                    <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
                    <p>© 2014 BS3 UI Kit, All rights reserved</p>
                </div>
                <div class="col-md-4 footer-nav animated fadeInUp">
                    <h4>Menu —</h4>
                    <div class="col-md-6">
                        <ul class="pages">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="#{{url('/users')}}">User</a></li>
                            <li><a href="{{url('/instructors')}}">Instructor</a></li>
                            <li><a href="{{url('/learners')}}">Learner</a></li>
                            <li><a href="{{url('/courses')}}">Course</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contacts</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 footer-social animated fadeInDown">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">RSS</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-ns animated fadeInRight">
                    <h4>Newsletter</h4>
                    <p>A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>
                    <p>
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                        </span>
                        </div>
                    </p>
                </div>
            </div>
        </footer>
        <section style="text-align:center; margin:10px auto;"><p>Designed by <a href="https://www.facebook.com/profile.php?id=100009303482365">Danne Andy Jee G. Polinar</a></p></section>

    </div>
</body>
</html>