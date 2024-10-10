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
.small-container { width: 90%; margin: auto; }

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
#copyright {
    text-align: center;
}

</style>

<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo01.png') }}" alt="logo" width="125px">
                </a>
                <span class="site-name" id="site-name">HelloFixer</span>
            </div>

            <nav>
            <ul id="MenuItems">
    <li><a href="{{ url('/') }}" class="menu-item" data-key="home">Home</a></li>
    <li><a href="{{ url('/about-us') }}" class="menu-item" data-key="about">About</a></li>
    <li><a href="{{ url('/contact') }}" class="menu-item" data-key="contact">Contact</a></li>
    <li>
        <a href="{{ url('/products') }}" class="dropdown-toggle" data-toggle="dropdown" data-key="services">Services <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="{{ url('/service1') }}" data-key="service1">Air Conditioner</a></li>
            <li><a href="{{ url('/service2') }}" data-key="service2">Television And LED</a></li>
            <li><a href="{{ url('/service3') }}" data-key="service3">Water Purifier</a></li>
            <li><a href="{{ url('/service4') }}" data-key="service4">Carpenter</a></li>
            <li><a href="{{ url('/service5') }}" data-key="service5">Electrician</a></li>
            <li><a href="{{ url('/service6') }}" data-key="service6">Plumber</a></li>
            <li><a href="{{ url('/service7') }}" data-key="service7">Inverter And Battery</a></li>
            <li><a href="{{ url('/service8') }}" data-key="service8">Car Repairing</a></li>
            <li><a href="{{ url('/service9') }}" data-key="service9">CCTV Camera</a></li>
            <li><a href="{{ url('/service10') }}" data-key="service10">Cleaning Services</a></li>
            <li><a href="{{ url('/service11') }}" data-key="service11">Interior Design</a></li>
            <li><a href="{{ url('/service12') }}" data-key="service12">Welding</a></li>
        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-key="languages">Languages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" onclick="changeLanguage('en')">English</a></li>
                            <li><a href="#" onclick="changeLanguage('bn')">বাংলা</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/account') }}" class="menu-item" data-key="account">Account</a></li>
                    <li><a href="{{ url('/faq') }}" class="menu-item" data-key="faq">FAQ's</a></li>
                </ul>
            </nav>
        </div>
 

<div class="row">
    <div class="col-2">
        <h1 id="welcome-message">Get your appliances fixed without hassle!</h1>
        <p id="intro-text">Success isn't always about greatness. It's about consistency. Consistent hard work gains success. Greatness will come.</p>
        <a href="" class="btn" id="explore-btn">Explore Now &#8594;</a>
    </div>
    <div class="col-2">
        <img src="{{ asset('images/image01.png') }}">
    </div>
</div>
</div>
</div>
<!-- Feadtued Categories -->


<!-- Featured Products -->

<div class="small-container">
    <h2 class="title" id="service-title">Appliance Repair Services Provided By HelloFixer</h2>
    <div class="row">
        <div class="col-4">
            <a href="{{ url('/product_details') }}"><img src="{{ asset('images/AC.jpg') }}"></a>
            <h4 id="air-conditioner">Air Conditioner</h4>
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
            <h4 id="television">Television And LED</h4>
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
            <h4 id="waterpurifier">Water purifier</h4>
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
            <h4 id="carpenter1">Carpenter</h4>
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
            <h4 id="electrician">Electrician</h4>
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
            <h4 id="plumber">Plumber</h4>
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
            <h4 id="invverter_and_battery">Inverter And Battery</h4>
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
            <h4 id="car_repairing">Car Repairing</h4>
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
            <h4 id="cctv_camera">CCTV Camera</h4>
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
            <h4 id="cleaning_services">Cleaning Services</h4>
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
            <h4 id="interior_design">Interior Design</h4>
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
            <h4 id="welding">Welding</h4>
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
                <h1 id="how">HOW IT WORKS</h1>
                <h3 id="choose"> 1. Choose a Tasker by price, skills, and reviews.<br>
                2.Schedule a Tasker as early as today.<br>
                3.Chat, pay, tip, and review all in one place. <br></h3>
                <a href="" class="btn" id="explore-btn">Explore Now &#8594;</a>


                
                
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
                <p id="HelloFixer2">HelloFixer’s unique bidding system empowers users and offers great service options. Love it!</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <a href="https://www.facebook.com/profile.php?id=100007188139041&mibextid=ZbWKwL" target="_blank">
                    <img src="{{ asset('images/Dipu1.jpg')}}" alt="Salim Rahaman Dipu">
                </a>
                <h3 id="salim">Salim Rahaman Dipu</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p id="The_bilingual">The bilingual support makes it accessible for everyone. Fantastic approach for diverse users!</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <a href="https://www.facebook.com/kazi.junaid.69?mibextid=ZbWKwL" target="_blank">
                    <img src="{{ asset('images/juniad.jpg')}}" alt="Kazi Junaid">
                </a>
                <h3 id="Kazi">Kazi Junaid</h3>
            </div>
            <div class="col-3">
    <i class="fa fa-quote-left"></i>
    <p id="Having" data-key="Having">Having both consumers and technicians on one platform is brilliant. It fosters community and efficiency!</p>
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
    </div>
    <a href="https://www.facebook.com/profile.php?id=61550774097865&mibextid=ZbWKwL" target="_blank">
        <img src="{{ asset('images/Tanha.jpg')}}" alt="Tanha Ahmed Nijhum">
    </a>
    <h3 id="Tanha" data-key="Tanha">Tanha Ahmed Nijhum</h3>
</div>
</div>
    </div>
</div>
<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3 id="app1" data-key="app1">Download Our App</h3>
                <p id="app2" data-key="app2">Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="{{ asset('images/play-store.png')}}">
                    <img src="{{ asset('images/app-store.png')}}">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="{{ asset('images/footerlogo.png')}}">
                <p id="Purpose" data-key="Purpose">Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
            </div>
            <div class="footer-col-3">
                <h3 id="Useful" data-key="Useful">Useful Links</h3>
                <ul>
                    <li id="Coupons" data-key="Coupons">Coupons</li>
                    <li id="Blog_Post" data-key="Blog_Post">Blog Post</li>
                    <li id="Return_Policy" data-key="Return_Policy">Return Policy</li>
                    <li id="Join_Affiliate" data-key="Join_Affiliate">Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3 id="Follow_Us" data-key="Follow_Us">Follow Us</h3>
                <ul>
                    <li id="Facebook" data-key="Facebook">Facebook</li>
                    <li id="Twitter" data-key="Twitter">Twitter</li>
                    <li id="Instagram" data-key="Instagram">Instagram</li>
                    <li id="Youtube" data-key="Youtube">Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p id="copyright" data-key="copyright">Copyright 2024 - NorthSouth University</p>
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

<!-- Add content in different languages -->
<script>
    const translations = {
    en: {
        sitename : "HelloFixer",
        home: "Home",
        about: "About",
        contact: "Contact",
        services: "Services▼",
        languages: "Languages▼",
        account: "Account",
        faq: "FAQ's",
        welcome: "Get your appliances fixed without hassle!",
        intro: "Success isn't always about greatness. It's about consistency. Consistent hard work gains success. Greatness will come.",
        explore: "Explore Now",
        title: "Appliance Repair Services Provided By HelloFixer",
        airConditioner: "Air Conditioner",
        television: "Television And LED",
        waterpurifier: "Water Purifier",
        carpenter: "Carpenter",
        electrician: "Electrician",
        plumber: "Plumber",
        invverter_and_battery: "Inverter And Battery",
        car_repairing: "Car Repairing",
        cctv_camera: "CCTV Camera",
        cleaning_services: "Cleaning Services",
        interior_design: "Interior Design",
        welding: "Welding",
        how: "HOW IT WORKS",
        choose: "1. Choose a Tasker by price, skills, and reviews.2. Schedule a Tasker as early as today.3. Chat, pay, tip, and review all in one place.",
        explore1: "Explore Now",
        HelloFixer2: "HelloFixer’s unique bidding system empowers users and offers great service options. Love it!",
        salim: "Salim Rahaman Dipu",
        The_bilingual: "The bilingual support makes it accessible for everyone. Fantastic approach for diverse users!",
        Kazi: "Kazi Junaid",
        Having: "Having both consumers and technicians on one platform is brilliant. It fosters community and efficiency!",
        Tanha: "Tanha Ahmed Nijhum",
        app1: "Download Our App",
        app2: "Download App for Android and ios mobile phone.",
        Purpose: "Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.",
        Useful: "Useful Links",
        Coupons: "Coupons",
        Blog_Post: "Blog Post",
        Return_Policy: "Return Policy",
        Join_Affiliate: "Join Affiliate",
        Follow_Us: "Follow Us",
        Facebook: "Facebook",
        Twitter: "Twitter",
        Instagram: "Instagram",
        Youtube: "Youtube",
        copyright: "Copyright 2024 - NorthSouth University"
    },
    bn: {
        sitename: "হ্যালোফিক্সার",
        home: "হোম",
        about: "সম্পর্কে",
        contact: "যোগাযোগ",
        services: "সেবা▼",
        languages: "ভাষাসমূহ▼",
        account: "অ্যাকাউন্ট",
        faq: "প্রশ্নোত্তর",
        welcome: "আপনার যন্ত্রপাতি ঝামেলা ছাড়া মেরামত করুন!",
        intro: "সাফল্য সর্বদা মহত্ত্বের ব্যাপারে নয়। এটি ধারাবাহিকতার বিষয়ে। ধারাবাহিক কঠোর পরিশ্রম সাফল্য অর্জন করে। মহত্ত্ব আসবে।",
        explore: "এখনই অন্বেষণ করুন",
        title: "হ্যালোফিক্সারের দ্বারা প্রদত্ত অ্যাপ্লায়েন্স মেরামত সেবা",
        airConditioner: "এয়ার কন্ডিশনার",
        television: "টেলিভিশন এবং এলইডি",
        waterpurifier: "জল শোধক",
        carpenter: "কার্পেন্টার",
        electrician: "ইলেকট্রিশিয়ান",
        plumber: "প্লাম্বার",
        invverter_and_battery: "ইনভার্টার এবং ব্যাটারি",
        car_repairing: "গাড়ি মেরামত",
        cctv_camera: "সিসিটিভি ক্যামেরা",
        cleaning_services: "পরিষ্কার সেবা",
        interior_design: "অন্দর নকশা",
        welding: "ওয়েল্ডিং",
        how: "কিভাবে কাজ করে",
        choose: "1. মূল্য, দক্ষতা এবং পর্যালোচনা দ্বারা একটি টাস্কার চয়ন করুন। 2. আজকের মতো একটি টাস্কার নির্ধারণ করুন। 3. চ্যাট করুন, অর্থ প্রদান করুন, টিপ দিন এবং পর্যালোচনা করুন।",
        explore1: "এখনই অন্বেষণ করুন",
        HelloFixer2: "হ্যালোফিক্সারের অনন্য বিডিং সিস্টেম ব্যবহারকারীদের ক্ষমতায়িত করে এবং চমৎকার পরিষেবা বিকল্প দেয়। এটি খুবই ভালো!",
        salim: "সেলিম রহমান দিপু",
        The_bilingual: "দ্বিভাষিক সমর্থন এটিকে সবার জন্য সহজলভ্য করে তোলে। বৈচিত্র্যময় ব্যবহারকারীদের জন্য দুর্দান্ত পদ্ধতি!",
        Kazi: "কাজী জুনায়েদ",
        Having: "হ্যালোফিক্সারের গ্রাহক এবং প্রযুক্তিবিদ উভয়কেই একটি প্ল্যাটফর্মে নিয়ে আসা চমৎকার! এটি সম্প্রদায় এবং দক্ষতা উন্নত করে!",
        Tanha: "তানহা আহমেদ নিঝুম",
        app1: "আমাদের অ্যাপ ডাউনলোড করুন",
        app2: "অ্যান্ড্রয়েড এবং আইওএস মোবাইল ফোনের জন্য অ্যাপ ডাউনলোড করুন",
        Purpose: "আমাদের উদ্দেশ্য হল খেলাধুলার আনন্দ এবং উপকারিতা অনেকের জন্য টেকসইভাবে অ্যাক্সেসযোগ্য করা।",
        Useful: "দরকারী লিঙ্ক",
        Coupons: "কুপন",
        Blog_Post: "ব্লগ পোস্ট",
        Return_Policy: "ফেরত নীতি",
        Join_Affiliate: "অংশীদারিত্বে যোগ দিন",
        Follow_Us: "আমাদের অনুসরণ করুন",
        Facebook: "ফেসবুক",
        Twitter: "টুইটার",
        Instagram: "ইনস্টাগ্রাম",
        Youtube: "ইউটিউব",
        copyright: "কপিরাইট ২০২৪ - নর্থ সাউথ ইউনিভার্সিটি"
    }
};

function changeLanguage(lang) {
    const elementsToTranslate = document.querySelectorAll('[data-key]');
    elementsToTranslate.forEach(el => {
        const key = el.getAttribute('data-key');
        if (translations[lang][key]) {
            el.innerText = translations[lang][key];
        }
    });



        // Update static text for various elements
        document.getElementById("site-name").innerText = translations[lang]["sitename"];
        document.getElementById("welcome-message").innerText = translations[lang]["welcome"];
        document.getElementById("intro-text").innerText = translations[lang]["intro"];
        document.getElementById("explore-btn").innerText = translations[lang]["explore"];
        document.getElementById("service-title").textContent = translations[lang]["title"];
        document.getElementById("air-conditioner").textContent = translations[lang]["airConditioner"];
        document.getElementById("television").textContent = translations[lang]["television"];
        document.getElementById("waterpurifier").textContent = translations[lang]["waterpurifier"];
        document.getElementById("carpenter1").textContent = translations[lang]["carpenter"];
        document.getElementById("electrician").textContent = translations[lang]["electrician"];
        document.getElementById("plumber").textContent = translations[lang]["plumber"];
        document.getElementById("invverter_and_battery").textContent = translations[lang]["invverter_and_battery"];
        document.getElementById("car_repairing").textContent = translations[lang]["car_repairing"];
        document.getElementById("cctv_camera").textContent = translations[lang]["cctv_camera"];
        document.getElementById("cleaning_services").textContent = translations[lang]["cleaning_services"];
        document.getElementById("interior_design").textContent = translations[lang]["interior_design"];
        document.getElementById("welding").textContent = translations[lang]["welding"];
        document.getElementById("how").textContent = translations[lang]["how"];
        document.getElementById("choose").textContent = translations[lang]["choose"];
        document.getElementById("explore-btn").innerText = translations[lang]["explore1"];
        document.getElementById("HelloFixer2").textContent = translations[lang]["HelloFixer2"];
        document.getElementById("salim").textContent = translations[lang]["salim"];
        document.getElementById("The_bilingual").textContent = translations[lang]["The_bilingual"];
        document.getElementById("Kazi").textContent = translations[lang]["Kazi"];
        document.getElementById("Having").textContent = translations[lang]["Having"];
        document.getElementById("Tanha").textContent = translations[lang]["Tanha"];
        document.getElementById("app1").textContent = translations[lang]["app1"];
        document.getElementById("app2").textContent = translations[lang]["app2"];
        document.getElementById("Purpose").textContent = translations[lang]["Purpose"];
        document.getElementById("Useful").textContent = translations[lang]["Useful"];
        document.getElementById("Coupons").textContent = translations[lang]["Coupons"];
        document.getElementById("Blog_Post").textContent = translations[lang]["Blog_Post"];
        document.getElementById("Return_Policy").textContent = translations[lang]["Return_Policy"];
        document.getElementById("Join_Affiliate").textContent = translations[lang]["Join_Affiliate"];
        document.getElementById("Follow_Us").textContent = translations[lang]["Follow_Us"];
        document.getElementById("Facebook").textContent = translations[lang]["Facebook"];
        document.getElementById("Twitter").textContent = translations[lang]["Twitter"];
        document.getElementById("Instagram").textContent = translations[lang]["Instagram"];
        document.getElementById("Youtube").textContent = translations[lang]["Youtube"];
        document.getElementById("copyright").textContent = translations[lang]["copyright"];


     
    }
</script>


</body>

</html>
