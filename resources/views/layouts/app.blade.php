<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ritma Prestasi')</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('internet.png') }}" type="image/png">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    
    <!-- Custom Styles -->
    <style>
        :root {
            --primary-color: #2c7873;
            --secondary-color: #6fb98f;
            --accent-color: #f7b733;
            --light-color: #f4f4f4;
            --dark-color: #333;
            --max-width: 1200px;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            line-height: 1.6;
            color: var(--dark-color);
            background-color: #f9f9f9;
        }
        
        a {
            text-decoration: none;
            color: var(--primary-color);
        }
        
        ul {
            list-style: none;
        }
        
        .container {
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            animation: fadeIn 0.8s ease-in-out;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 50px;
            margin-right: 10px;
            transition: transform 0.3s ease;
        }
        
        .logo img:hover {
            transform: rotate(5deg);
        }
        
        .logo h1 {
            font-size: 1.5rem;
            color: var(--primary-color);
        }
        
        .nav-links {
            display: flex;
        }
        
        .nav-links li {
            margin-left: 30px;
        }
        
        .nav-links a {
            position: relative;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent-color);
            transition: width 0.3s ease;
        }
        
        .nav-links a:hover {
            color: var(--accent-color);
        }
        
        .nav-links a:hover:after {
            width: 100%;
        }
        
        /* Logout button styling to match nav links */
        .nav-links button {
            position: relative;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links button:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent-color);
            transition: width 0.3s ease;
        }
        
        .nav-links button:hover {
            color: var(--accent-color);
        }
        
        .nav-links button:hover:after {
            width: 100%;
        }
        
        .btn {
            position: relative;
            overflow: hidden;
            display: inline-block;
            padding: 10px 20px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.3s ease;
            z-index: 1;
            border: none;
            cursor: pointer;
        }
        
        .btn:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--secondary-color);
            transition: all 0.4s ease-out;
            z-index: -1;
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 14px rgba(0, 0, 0, 0.1);
            color: white;
        }
        
        .btn:hover:before {
            left: 0;
        }
        
        .btn:active {
            transform: translateY(1px);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        
        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        /* About Section */
        .about {
            padding: 80px 0;
            background-color: white;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-title h2 {
            font-size: 2rem;
            color: var(--primary-color);
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent-color);
        }
        
        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }
        
        .about-img {
            flex: 1;
        }
        
        .about-img img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }
        
        .about-img:hover img {
            transform: scale(1.02);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        
        .about-text {
            flex: 1;
        }
        
        .about-text h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--primary-color);
        }
        
        /* IT Systems Section */
        .it-systems {
            padding: 80px 0;
            background-color: var(--light-color);
        }
        
        .system-categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .system-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .system-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .system-img {
            height: 200px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(44, 120, 115, 0.1);
        }
        
        .system-img i {
            font-size: 5rem;
            color: var(--primary-color);
            transition: all 0.5s ease;
        }
        
        .system-card:hover .system-img i {
            transform: scale(1.2);
            color: var(--accent-color);
        }
        
        .system-info {
            padding: 20px;
        }
        
        .system-info h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--primary-color);
        }
        
        .system-info p {
            margin-bottom: 15px;
            color: #666;
        }
        
        /* Values Section */
        .values {
            padding: 80px 0;
            background-color: white;
        }
        
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .value-card {
            text-align: center;
            padding: 30px 20px;
            border-radius: 10px;
            background-color: var(--light-color);
            transition: all 0.4s ease;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }
        
        .value-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            opacity: 0;
            z-index: -1;
            transition: opacity 0.4s ease;
        }
        
        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            color: white;
        }
        
        .value-card:hover:before {
            opacity: 1;
        }
        
        .value-card:hover .value-icon,
        .value-card:hover h3 {
            color: white;
        }
        
        .value-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            transition: all 0.4s ease;
        }
        
        .value-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--primary-color);
            transition: color 0.4s ease;
        }
        
        /* IT Services Section */
        .it-services {
            padding: 80px 0;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://images.unsplash.com/photo-1581092921461-39b9d08a9b21?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
        }
        
        .it-services h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        
        .it-services p {
            max-width: 800px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
        }
        
        .services {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 40px;
        }
        
        .service {
            flex: 0 0 calc(25% - 30px);
            min-width: 200px;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
            overflow: hidden;
            position: relative;
        }
        
        .service:hover {
            transform: translateY(-10px);
            background-color: rgba(255, 255, 255, 0.2);
        }
        
        .service:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 3px;
            background: var(--accent-color);
            bottom: 0;
            left: 0;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.4s ease;
        }
        
        .service:hover:after {
            transform: scaleX(1);
            transform-origin: left;
        }
        
        .service-icon {
            font-size: 2rem;
            color: var(--accent-color);
            margin-bottom: 15px;
            transition: all 0.4s ease;
        }
        
        .service:hover .service-icon {
            animation: float 2s ease-in-out infinite;
        }
        
        /* Contact Section */
        .contact {
            padding: 80px 0;
            background-color: var(--light-color);
        }
        
        .contact-content {
            display: flex;
            gap: 50px;
        }
        
        .contact-info {
            flex: 1;
        }
        
        .contact-info h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--primary-color);
        }
        
        .contact-details {
            margin-bottom: 30px;
        }
        
        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            transition: transform 0.3s ease;
        }
        
        .contact-item:hover {
            transform: translateX(5px);
        }
        
        .contact-icon {
            font-size: 1.2rem;
            color: var(--primary-color);
            margin-right: 15px;
            margin-top: 5px;
            transition: all 0.3s ease;
        }
        
        .contact-item:hover .contact-icon {
            transform: scale(1.2);
            color: var(--accent-color);
        }
        
        .contact-text {
            flex: 1;
        }
        
        .contact-form {
            flex: 1;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .contact-form:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(44, 120, 115, 0.2);
            outline: none;
        }
        
        .form-group:focus-within label {
            color: var(--primary-color);
        }
        
        textarea.form-control {
            height: 120px;
            resize: vertical;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--accent-color);
            transition: width 0.3s ease;
        }
        
        .footer-column:hover h3::after {
            width: 80px;
        }
        
        .footer-links li {
            margin-bottom: 10px;
            transform: translateX(0);
            transition: transform 0.3s ease;
        }
        
        .footer-links li:hover {
            transform: translateX(5px);
        }
        
        .footer-links a {
            color: #ddd;
            transition: color 0.3s;
            position: relative;
            padding-left: 0;
        }
        
        .footer-links a:before {
            content: "›";
            position: absolute;
            left: -15px;
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--accent-color);
            padding-left: 15px;
        }
        
        .footer-links a:hover:before {
            opacity: 1;
            left: 0;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            transition: all 0.3s ease;
            overflow: hidden;
            position: relative;
        }
        
        .social-links a:before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: var(--accent-color);
            border-radius: 50%;
            transform: scale(0);
            transition: all 0.3s ease;
        }
        
        .social-links a:hover:before {
            transform: scale(1);
        }
        
        .social-links a i {
            position: relative;
            z-index: 1;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover i {
            transform: rotate(360deg);
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #aaa;
        }
        
        /* Animation Keyframes */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideInUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .about-content {
                flex-direction: column;
            }
            
            .contact-content {
                flex-direction: column;
            }
        }
        
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
            }
            
            .nav-links {
                margin-top: 20px;
            }
            
            .nav-links li {
                margin: 0 15px;
            }
            
            .hero h2 {
                font-size: 2rem;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
        }
    </style>
    
    @yield('styles')
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <img src="{{ asset('Ritma.png') }}" alt="Ritma Prestasi Logo">
                </div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About IT</a></li>
                    <li><a href="#it-systems">IT Systems</a></li>
                    <li><a href="#it-services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                    @auth
                    <li>
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <a href="javascript:void(0)" onclick="this.closest('form').submit();">Logout</a>
                        </form>
                    </li>
                    @endauth
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column" data-aos="fade-up" data-aos-duration="800">
                    <h3>Ritma Group</h3>
                    <p>Supporting the technology needs of Ritma Group to ensure efficient and secure business operations.</p>
                </div>
                <div class="footer-column" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About IT</a></li>
                        <li><a href="#it-systems">IT Systems</a></li>
                        <li><a href="#it-services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; {{ date('Y') }} Ritma Group. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    <!-- Custom Scripts -->
    <script>
        // Initialize AOS
        AOS.init({
            once: false,
            mirror: true,
            duration: 800,
            offset: 100
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80, // Offset for fixed header
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Navbar animation on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
                header.style.transition = 'box-shadow 0.3s ease';
            } else {
                header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
            }
        });
        
        // Add parallax effect to hero section
        window.addEventListener('scroll', function() {
            const hero = document.querySelector('.hero');
            const scrollPosition = window.scrollY;
            
            if (scrollPosition < 600) {
                hero.style.backgroundPosition = `center ${scrollPosition * 0.4}px`;
            }
        });
    </script>
    
    @yield('scripts')
</body>
</html> 