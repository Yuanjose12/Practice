<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arjen Safety Gears & Devices Trading</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <style>
        :root {
            --primary-color: #e5691c; 
            --primary-dark: #c85e17; 
            --primary-light: #f6a94d; 
            --secondary-color: #1f2937;
            --accent-color: #f59e0b;
            --background-light: #f8fafc;
            --text-dark: #0f172a;
            --text-light: #f8fafc;
        }

        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            animation: fadeInBody 1s ease-out;
        }

        /* Animation for body load */
        @keyframes fadeInBody {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Enhanced Navbar */
        .navbar {
            background-color: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
            padding: 1rem 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .navbar.scrolled {
            padding: 0.5rem 0;
            background-color: rgba(255, 255, 255, 0.98);
            box-shadow: 0 2px 25px rgba(0,0,0,0.1);
        }

        .nav-link {
            color: var(--text-dark) !important;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, rgba(229, 105, 28, 0.9), rgba(200, 94, 23, 0.85)); 
            overflow: hidden;
            animation: fadeInHero 2s ease-out;
        }

        @keyframes fadeInHero {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('peakpx.jpg') center/cover no-repeat;
            z-index: -1;
            opacity: 100px; 
            animation: slowZoom 20s infinite alternate;
        }

        @keyframes slowZoom {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }

        .hero-content {
            color: var(--text-light);
            text-align: center;
            animation: fadeInUp 1.5s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Category Card Hover Effect with rotation */
        .category-card {
            background: var(--secondary-color);
            border-radius: 1rem;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            height: 100%;
            position: relative;
            cursor: pointer;
            transform: rotate(0deg);
        }

        .category-card:hover {
            transform: translateY(-10px) rotate(5deg);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
                       0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .category-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 1;
        }

        .category-card:hover::before {
            opacity: 1;
        }

        .category-card > * {
            position: relative;
            z-index: 2;
        }

        .icon-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--primary-color);
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .category-card:hover .icon-circle {
            transform: translateY(-5px) scale(1.1);
            background: var(--text-light);
        }

        .category-card:hover .icon-circle svg {
            fill: var(--primary-color);
        }

        /* Section Animation */
        .section-content {
            display: none;
            background-color: var(--background-light);
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            border-left: 4px solid var(--primary-color);
            padding: 2rem;
            margin-top: 2rem;
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .section-content.active {
            transform: translateY(0);
            opacity: 1;
        }

        /* Footer Style */
        .footer {
            background-color: rgba(26, 31, 37, 0.85);
            color: white;
            padding: 60px 0;
            margin-top: 80px;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(
                45deg,
                rgba(229, 105, 28, 0.1),
                rgba(26, 31, 37, 0.2)
            );
            pointer-events: none;
        }

        .footer-content {
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            padding: 40px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            position: relative;
            z-index: 1;
        }

        .footer h2 {
            color: #fff;
            font-size: 2.5rem;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .contact-info {
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }

        .contact-item {
            display: flex;
            align-items: start;
            margin-bottom: 20px;
            color: #fff;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        .contact-item:hover {
            background-color: rgba(255, 255, 255, 0.15);
        }

        .contact-icon {
            background-color: var(--primary-color);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .contact-text {
            line-height: 1.6;
        }

        .contact-text h3 {
            color: var(--primary-color);
            margin-bottom: 5px;
            font-size: 1.2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .contact-text p {
            margin: 0;
            color: rgba(255, 255, 255, 0.9);
        }

        .divider {
            height: 1px;
            background: linear-gradient(
                to right,
                rgba(255, 255, 255, 0),
                rgba(255, 255, 255, 0.2),
                rgba(255, 255, 255, 0)
            );
            margin: 20px 0;
        }

        @supports (backdrop-filter: blur(10px)) {
            .footer-content {
                background-color: rgba(255, 255, 255, 0.1);
            }
            
            .contact-item {
                backdrop-filter: blur(5px);
                -webkit-backdrop-filter: blur(5px);
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.PNG" alt="Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link scroll-link" href="#medical" data-aos="fade-down" data-aos-delay="100">Medical</a></li>
                    <li class="nav-item"><a class="nav-link scroll-link" href="#rescue" data-aos="fade-down" data-aos-delay="200">Rescue</a></li>
                    <li class="nav-item"><a class="nav-link scroll-link" href="#fire" data-aos="fade-down" data-aos-delay="300">Fire</a></li>
                    <li class="nav-item"><a class="nav-link scroll-link" href="#tactical" data-aos="fade-down" data-aos-delay="400">Tactical</a></li>
                    <li class="nav-item"><a class="nav-link scroll-link" href="#safety" data-aos="fade-down" data-aos-delay="500">Safety</a></li>
                    <li class="nav-item"><a class="nav-link scroll-link" href="#industrial" data-aos="fade-down" data-aos-delay="600">Industrial</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <div class="hero-content" data-aos="fade-up">
                <img src="logo.PNG" alt="Logo" class="hero-logo">
                <h1 class="display-4 fw-bold mb-4">Arjen Safety Gears & Devices Trading</h1>
                <p class="lead mb-4">Your trusted partner in safety and emergency equipment</p>
            </div>
        </div>
    </div>

    <!-- Categories -->
    <div class="container mt-5">
        <div class="row g-4">
            <!-- Medical -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="category-card p-4 text-center scroll-btn" data-target="#medical">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                        </svg>
                    </div>
                    <h3 class="text-light">Medical</h3>
                    <p class="text-light-50">Professional medical supplies and equipment</p>
                </div>
            </div>

            <!-- Rescue -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="category-card p-4 text-center scroll-btn" data-target="#rescue">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-heart-pulse" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01zM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5"/>
                        </svg>
                    </div>
                    <h3 class="text-light">Rescue & Emergency</h3>
                    <p class="text-light-50">Emergency response and rescue equipment</p>
                </div>
            </div>

            <!-- Fire -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="category-card p-4 text-center scroll-btn" data-target="#fire">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-fire" viewBox="0 0 16 16">
                            <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15"/>
                        </svg>
                    </div>
                    <h3 class="text-light">Fire Fighting</h3>
                    <p class="text-light-50">Professional fire fighting equipment</p>
                </div>
            </div>

            <!-- Tactical -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="category-card p-4 text-center scroll-btn" data-target="#tactical">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-shield" viewBox="0 0 16 16">
                            <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                        </svg>
                    </div>
                    <h3 class="text-light">Tactical</h3>
                    <p class="text-light-50">Professional tactical equipment</p>
                </div>
            </div>

            <!-- Safety -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                <div class="category-card p-4 text-center scroll-btn" data-target="#safety">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-light">Safety</h3>
                    <p class="text-light-50">Professional safety equipment</p>
                </div>
            </div>

            <!-- Industrial -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                <div class="category-card p-4 text-center scroll-btn" data-target="#industrial">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-gear" viewBox="0 0 16 16">
                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                        </svg>
                    </div>
                    <h3 class="text-light">Industrial</h3>
                    <p class="text-light-50">Professional industrial safety equipment</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Information Sections -->
    <div class="container mt-5">
        <div id="medical" class="section-content">
            <h2 class="mb-4">Medical Equipment</h2>
            <p>Our comprehensive range of medical equipment includes:</p>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h4>Emergency Medical Equipment</h4>
                    <ul>
                        <li>Advanced Life Support Equipment</li>
                        <li>Defibrillators and AED Devices</li>
                        <li>Emergency Response Kits</li>
                        <li>First Aid Supplies</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Medical Monitoring Devices</h4>
                    <ul>
                        <li>Patient Monitoring Systems</li>
                        <li>Vital Signs Monitors</li>
                        <li>Portable Diagnostic Equipment</li>
                        <li>Medical Grade PPE</li>
                    </ul>
                </div>
            </div>
        </div>

    <!-- Information Sections -->
    <div class="container mt-5">
        <!-- Rescue & Emergency Section -->
        <div id="rescue" class="section-content">
            <h2 class="mb-4">Rescue & Emergency Equipment</h2>
            <p>Our rescue and emergency equipment ensures safety and efficiency in crisis situations.</p>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h4>Rescue Tools</h4>
                    <ul>
                        <li>Hydraulic Rescue Tools</li>
                        <li>Ropes and Harnesses</li>
                        <li>Rescue Stretchers</li>
                        <li>Extrication Equipment</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Emergency Response Gear</h4>
                    <ul>
                        <li>Emergency Shelters</li>
                        <li>Search and Rescue Kits</li>
                        <li>Survival Equipment</li>
                        <li>Portable Oxygen Systems</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Fire Fighting Section -->
        <div id="fire" class="section-content mt-5">
            <h2 class="mb-4">Fire Fighting Equipment</h2>
            <p>Our fire-fighting solutions provide top-tier protection against fires.</p>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h4>Fire Suppression Systems</h4>
                    <ul>
                        <li>Fire Extinguishers</li>
                        <li>Automatic Fire Sprinklers</li>
                        <li>Fire Suppression Foam</li>
                        <li>Smoke Detectors</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Protective Gear</h4>
                    <ul>
                        <li>Firefighter Suits</li>
                        <li>Fire-Resistant Helmets</li>
                        <li>Breathing Apparatus</li>
                        <li>Thermal Imaging Cameras</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Tactical Section -->
        <div id="tactical" class="section-content mt-5">
            <h2 class="mb-4">Tactical Equipment</h2>
            <p>Our tactical gear ensures preparedness for law enforcement and security personnel.</p>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h4>Personal Protection</h4>
                    <ul>
                        <li>Ballistic Vests</li>
                        <li>Tactical Helmets</li>
                        <li>Protective Gloves</li>
                        <li>Body Armor</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Operational Gear</h4>
                    <ul>
                        <li>Night Vision Goggles</li>
                        <li>Two-Way Radios</li>
                        <li>Expandable Batons</li>
                        <li>Multi-Tool Kits</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Safety Section -->
        <div id="safety" class="section-content mt-5">
            <h2 class="mb-4">Safety Equipment</h2>
            <p>Comprehensive safety gear for workplace and environmental protection.</p>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h4>Personal Protective Equipment</h4>
                    <ul>
                        <li>Safety Helmets</li>
                        <li>High-Visibility Vests</li>
                        <li>Eye and Ear Protection</li>
                        <li>Respiratory Masks</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Workplace Safety</h4>
                    <ul>
                        <li>Emergency Exit Signs</li>
                        <li>First Aid Kits</li>
                        <li>Fall Protection Systems</li>
                        <li>Hazardous Spill Kits</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Industrial Section -->
        <div id="industrial" class="section-content mt-5">
            <h2 class="mb-4">Industrial Safety Equipment</h2>
            <p>Protecting workers in high-risk industrial environments.</p>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h4>Heavy-Duty Safety Gear</h4>
                    <ul>
                        <li>Industrial Work Gloves</li>
                        <li>Flame-Resistant Clothing</li>
                        <li>Anti-Slip Footwear</li>
                        <li>Hearing Protection</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Machinery & Workplace Safety</h4>
                    <ul>
                        <li>Machine Guards</li>
                        <li>Emergency Stop Systems</li>
                        <li>Gas Detection Monitors</li>
                        <li>Protective Barriers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    </div>

  
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <h2>Contact Us</h2>
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="contact-text">
                            <h3>Quezon City Office:</h3>
                            <p>Tandang Sora Extension</p>
                            <p>Quirino Highway Quezon City</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="contact-text">
                            <h3>Bulacan Office:</h3>
                            <p>Cruz St. corner. Bantayan St.</p>
                            <p>Matungao Bulakan Bulacan</p>
                        </div>
                    </div>

                    <div class="divider"></div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>
                        </div>
                        <div class="contact-text">
                            <p>Landline: (044) 7959923</p>
                            <p>Globe: +63 967 056 6695</p>
                            <p>Smart: +63 962 196 1957</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                        </div>
                        <div class="contact-text">
                            <p>arjensafety@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
       $(document).ready(function() {
    AOS.init({
        duration: 1200,  
        once: true,
        offset: 100,
        easing: 'ease-in-out-sine'  
    });

    $(window).scroll(function() {
        if ($(window).scrollTop() > 50) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    });

    $('.scroll-btn, .scroll-link').click(function(e) {
        e.preventDefault();
        const targetID = $(this).data('target') || $(this).attr('href');
        const targetSection = $(targetID);

        if (targetSection.length) {
            if (!targetSection.hasClass('active')) {
                // Slide up any active sections and slide down the target section
                $('.section-content').removeClass('active').slideUp(400); // Slide up the others
                targetSection.stop(true, true).slideDown(600).addClass('active'); // Slide down the selected one
            }
        }
    });

    // Initially hide all sections
    $('.section-content').hide();
});

    </script>

</body>
</html>
