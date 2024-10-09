<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelloFixer|Service Provider</title>
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>





<style>/* Basic styles for MenuItems */
#MenuItems {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
}

#MenuItems li {
    position: relative;
    padding: 10px;
}

/* Dropdown styling */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 100px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
    z-index: 1;
    list-style: none;
    padding: 10px 0;
    margin: 0;
    opacity: 0;
    transform: translateY(10px);
    transition: opacity 0.3s ease, transform 0.3s ease;
}

/* Dropdown item styling */
.dropdown-content li {
    padding: 8px 16px;
}

.dropdown-content li a {
    text-decoration: none;
    color: #333;
    display: block;
}

.dropdown-content li a:hover {
    background-color: #f0f0f0;
}

/* Show dropdown on hover */
.dropdown:hover .dropdown-content {
    display: block;
    opacity: 1;
    transform: translateY(0);
}

/* Ensuring the parent li maintains proper spacing */
.dropdown {
    cursor: pointer;
    padding-right: 20px;
}
/* Adjusting the positioning of the navigation */
.navbar nav {
    position: relative;
    top: 6px; /* Move upward by 10px */
    right: -250px; /* Move to the right by 20px */
}

/* Basic styles for MenuItems */
#MenuItems {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    align-items: center; /* Center vertically */
}

/* Adjust the dropdown positioning */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 100px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
    z-index: 1;
    list-style: none;
    padding: 10px 0;
    margin: 0;
    opacity: 0;
    transform: translateY(10px);
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.dropdown-content li {
    padding: 8px 16px;
}

.dropdown-content li a {
    text-decoration: none;
    color: #333;
    display: block;
}

.dropdown-content li a:hover {
    background-color: #f0f0f0;
}

/* Show dropdown on hover */
.dropdown:hover .dropdown-content {
    display: block;
    opacity: 1;
    transform: translateY(0);
}

/* Ensuring the parent li maintains proper spacing */
.dropdown {
    cursor: pointer;
    padding-right: 20px;
}
.logo {
    display: flex; /* Aligns the logo and site name horizontally */
    align-items: center; /* Center the items vertically */
}

.site-name {
    font-size: 24px; /* Adjust the font size as needed */
    font-weight: 600; /* Bold font for the name */
    color: #333; /* Color for the text */
    margin-left: 15px; /* Space between the logo and the name */
    animation: fadeIn 1s ease-in-out; /* Apply the animation */
}
/* Navigation menu styles */
nav {
    margin-top: -20px; /* Reduced space between logo and nav */
}

#MenuItems {
    list-style: none; /* Remove bullet points */
    padding: 0; /* Remove default padding */
    margin-left: 10px; /* Space between the menu and the logo/text */
}

#MenuItems li {
    display: inline; /* Display items inline */
    margin-right: 15px; /* Space between menu items */
}

#MenuItems a {
    text-decoration: none; /* Remove underline from links */
    color: #050505; /* Text color */
    font-weight: bold; /* Make the text bold */
    font-size: 18px; /* Increase text size */
}


/* Animation keyframes */
@keyframes fadeIn {
    0% {
        opacity: 0; /* Start completely transparent */
        transform: translateY(-20px); /* Start slightly above */
    }
    100% {
        opacity: 1; /* End fully visible */
        transform: translateY(0); /* End at the original position */
    }
}
.nav {
    list-style: none; /* Remove default list styling */
    padding: 0; /* Remove default padding */
    margin: 0; /* Remove default margin */
}

.nav > li {
    position: relative; /* Position relative for dropdown positioning */
}

.dropdown-menu {
    display: none; /* Hide dropdown by default */
    position: absolute; /* Position absolutely for dropdown */
    top: 100%; /* Position it below the parent element */
    left: 0; /* Align left */
    z-index: 1000; /* Ensure it appears above other content */
}

.dropdown:hover .dropdown-menu {
    display: block; /* Show dropdown on hover */
}

.dropdown-menu li {
    white-space: nowrap; /* Prevent wrapping of menu items */
}

.dropdown-menu a {
    display: block; /* Make the links block level for better click area */
    padding: 8px 16px; /* Add padding for clickable area */
    text-decoration: none; /* Remove underline from links */
}

.dropdown-menu a:hover {
    background-color: #f1f1f1; /* Change background on hover */
}

</style>

<div class="header">
    <div class="container">
        <div class="navbar">
        <div class="logo">
    <a href="{{ url('/') }}">
        <img src="{{ asset('images/logo01.png') }}" alt="logo" width="125px">
    </a>
    <span class="site-name">HelloFixer</span>
</div>

            <nav>
                <ul id="MenuItems">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    

                    <li><a href="{{ url('/about-us') }}">About</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    
                    <li>
    <a href="{{ url('/products') }}" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="{{ url('/service1') }}">Air Conditioner</a></li>
        <li><a href="{{ url('/service2') }}">Television And LED</a></li>
        <li><a href="{{ url('/service3') }}">Water purifier</a></li>
        <li><a href="{{ url('/service4') }}">Carpenter</a></li>
        <li><a href="{{ url('/service5') }}">Electrician</a></li>
        <li><a href="{{ url('/service6') }}">Plumber</a></li>
        <li><a href="{{ url('/service7') }}">Inverter And Battery</a></li>
        <li><a href="{{ url('/service8') }}">Car Repairing</a></li>
        <li><a href="{{ url('/service9') }}">CCTV Camera</a></li>
        <li><a href="{{ url('/service10') }}">Cleaning Services</a></li>
        <li><a href="{{ url('/service11') }}">Interior Design</a></li>
        <li><a href="{{ url('/service12') }}">Welding</a></li>
       
    </ul>
</li>

    <<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Languages <span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="{{ url('/language/english') }}">English</a></li>
        <li><a href="{{ url('/language/bangla') }}">Bangla</a></li>
        
    </ul>
</li>

                    <li><a href="{{ url('/account') }}">Account</a></li>
                    <li><a href="{{ url('/faq') }}">FAQ's</a></li>


                </ul>
</nav>

</div>
        <div class="row">
            <div class="col-2">
                <h1>Get your appliances fixed without hassle! <br> </h1>
                <p>Success isn't always about greatness. It;s about consistency. Consistent <br> hard work gains
                    success. Greatness will come.</p>
                <a href="" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
                <img src= "{{ asset('images/image01.png') }}">
            </div>
        </div>
    </div>
</div>

<!-- Feadtued Categories -->


<!-- Featured Products -->

<div class="small-container">
    <h2 class="title">Appliance Repair Services Provided By HelloFixer</h2>
    <div class="row">
        <div class="col-4">
            <a href="{{ url('/product_details') }}"><img src="{{ asset('images/AC.jpg') }}"></a>
            <h4>Air Conditioner </h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p></p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/TV.jpg') }}">
            <h4>Television And LED</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p></p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/Water.jpg') }}">
            <h4>Water purifier </h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p></p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/Carpenter.jpg') }}">
            <h4>Carpenter</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p></p>
        </div>

        <div class="col-4">
            <img src="{{ asset('images/Electrician.jpg') }}">
            <h4>Electrician</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p></p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/Plumber.jpg') }}">
            <h4>Plumber</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p></p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/Inverter.jpg') }}">
            <h4>Inverter And Battery</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p></p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/Car.jpg') }}">
            <h4>Car Repairing</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p></p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/CCTV.jpg') }}">
            <h4>CCTV Camera</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p></p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/Cleaning.jpg') }}">
            <h4>Cleaning Services</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p></p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/Interior.jpg') }}">
            <h4>Interior Design</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p></p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/Welding.jpg') }}">
            <h4>Welding</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p></p>
        </div>
    </div>
    
</div>

<!-- Offer -->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="{{ asset('images/tasker.jpg') }}" class="offer-img">
            </div>
            <div class="col-2">
            
                <h1>HOW IT WORKS</h1>
                <h3> 1. Choose a Tasker by price, skills, and reviews<br>2.Schedule a Tasker as early as today.<br>3.Chat, pay, tip, and review all in one place <br></h3>
                <a href="{{ url('/products') }}" class="btn">Explore Now &#8594;</a>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial -->
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>HelloFixer’s unique bidding system empowers users and offers great service options. Love it!</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <!-- Wrapping image with a link -->
                <a href="https://www.facebook.com/profile.php?id=100007188139041&mibextid=ZbWKwL" target="_blank">
                    <img src="{{ asset('images/Dipu1.jpg')}}" alt="Salim Rahaman Dipu">
                </a>
                <h3>Salim Rahaman Dipu</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>The bilingual support makes it accessible for everyone. Fantastic approach for diverse users!</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    </div>
                <!-- Wrapping image with a link -->
                <a href="https://www.facebook.com/kazi.junaid.69?mibextid=ZbWKwL" target="_blank">
                    <img src="{{ asset('images/juniad.jpg')}}" alt="Kazi Junaid">
                </a>
                <h3>Kazi Junaid</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Having both consumers and technicians on one platform is brilliant. It fosters community and efficiency!</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <!-- Wrapping image with a link -->
                <a href="https://www.facebook.com/profile.php?id=61550774097865&mibextid=ZbWKwL" target="_blank">
                    <img src="{{ asset('images/Tanha.jpg')}}" alt="Tanha Ahmed Nijhum">
                </a>
                <h3>Tanha Ahmed Nijhum </h3>
            </div>

            
        </div>
    </div>
</div>



<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="{{ asset('images/play-store.png')}}">
                    <img src="{{ asset('images/app-store.png')}}">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="{{ asset('images/footerlogo.png')}}">
                <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.
                </p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2024 - NorthSouth University</p>
    </div>
</div>

<!-- javascript -->

<script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";
    function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px"
        }
        else {
            MenuItems.style.maxHeight = "0px"
        }
    }
</script>


</body>

</html>
