<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r126/three.min.js" integrity="sha512-n8IpKWzDnBOcBhRlHirMZOUvEq2bLRMuJGjuVqbzUJwtTsgwOgK5aS0c1JA647XWYfqvXve8k3PtZdzpipFjgg==" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/three@0.126.0/examples/js/loaders/OBJLoader.js"></script> 
    <script src="https://unpkg.com/three@0.126.0/examples/js/controls/OrbitControls.js"></script> 
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.37/dist/lenis.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Micro+5&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>XSValley - Fulfill your full potential!</title>
    <?php echo wp_head(); ?>
</head>
<body>
    <?php require get_template_directory() . '/patterns/header.php'; ?>
    <main>
        <div class="main-loading">
            <div class="loading-elements">
                <div class="loading-logo"></div>
                <div class="loadbar"></div>
            </div>
        </div>
        <section id="top">
            <div class="main-txt inter"><h1><span>Fulfill </span></h1>
                    <h1><span>your </span></h1>
                    <h1><span>full </span></h1>
                    <h1><span>potential</h1></div>
            <h3 class="sub-txt inter">– by applying to the hottest startups in silicon valley</h3>
            <div class="tile">
                <div>
                    <p class="top-info">
                        <?php echo get_post_meta($post->ID, 'top_field_outer', true); ?>  
                    </p>
                    <div class="inner-tile status hover-effect">
                        <p><span>
                                <?php echo get_post_meta($post->ID, 'top_field_inner', true); ?> 
                            </span>
                            <a href="<?php echo get_post_meta($post->ID, 'top_field_call-to-action_url', true); ?>" class="main-cta hover-effect">
                                <?php echo get_post_meta($post->ID, 'top_field_call-to-action_text', true); ?>
                                <svg class="svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </section>
        <section id="basic-info">
            <h2 class="section-title info-title inter hover-effect"><span>What is</span>
                <span>XSValley?</span></h2>
            <img class="main-tile-img hover-effect" src="<?php echo get_template_directory_uri(); ?>/assets/images/sf-view.jpg" alt="Skyline of San Francisco">
            <div class="tile hover-effect">
                <p>
                    XSValley is an exclusive program designed to connect the brightest minds in Finland to the vibrant 
                    startup ecosystem of Silicon Valley. In partnership with 
                    Aalto University and LUT University, known for their leadership in science, business, design, 
                    and sustainable innovation, we offer Finnish students the opportunity to kickstart 
                    their careers in top-tier startups.
                    <br/><br/>Participants not only gain direct employment opportunities 
                    but also enjoy comprehensive support, including visa grants, flight arrangements, and 
                    accommodation assistance.
                </p>
                <div class="divider">
                    <div class="col what">
                        <h3>What?</h3>
                        <p>
                            Program for the best interdisciplinary talent of Aalto and LUT University.
                        </p>
                    </div>
                    <div class="col how">
                        <h3>How?</h3>
                        <p>
                            The participants will receive a grant for their visa & flights, alongside help with an accommodation.
                        </p>
                    </div>
                </div>
            </div>
            <a id="more-info-btn" class="outer-cta hover-effect" href="/info"><b>More Info</b>
                <svg class="svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </section>
        <section id="alumni">
            <div class="inner">
                <h2 class="section-title inter hover-effect"><span>Our</span>
                    <span>Alumni</span></h2>
                <div class="tile hover-effect">
                    <p>
                        Alumni of the program have gone on to work at companies such as:
                    </p>
                    <div class="companies">
                        <div class="companies-fade">
                            <div class="companies-inner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="bottom-section">
            <div class="inner">
                <h2 class="section-title inter hover-effect">
                    <span>What are you</span>
                    <span>waiting for?</span></h2>
                <img class="side-img hover-effect" src="<?php echo get_template_directory_uri(); ?>/assets/images/airplane.jpg" alt="Airplane landing in Silicon Valley">
                <div class="tile hover-effect">
                    <p>
                        <b>Why Silicon Valley?</b>
                        <br>
                        Silicon Valley isn't just a place; it's a global symbol of endless possibilities. It's where ideas transform into technology that changes the world. Home to tech giants and groundbreaking startups, it offers an unparalleled ecosystem for innovation, growth, and networking.
                        Don't Just Dream About Changing the World - Be Part of the Change
                        <br><br>
                        Silicon Valley awaits your ideas, your energy, and your vision. Join us in this program and take the first step towards an extraordinary career in the tech industry.
                        <br><br><br>
                        <span class="cta-cont">
                            <a href="<?php echo get_post_meta($post->ID, 'top_field_call-to-action_url', true); ?>" class="main-cta hover-effect">Apply Now and Shape Your Future!
                                <svg class="svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </span>
                    </p>
                </div>
            </div>
        </section>
        <section id="footer">
            <div class="tile">
                <p class="xsv">
                    <span class="main-logo"></span>
                    © 2024 XSValley</p>
                <p class="madeby">
                    <a href="https://albertdomotor.ninja" target="_blank">
                    Made by Albert Dömötör
                    <img class="ad-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/ad-logo.png" alt="AD logo">
                    </a>
                </p>
            </div>
        </section>
    </main>
    <canvas id="bg"></canvas>
    <div id="main-filter"></div>
    <style>
        .main-loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #B3405C;
            z-index: 100000;
        }
        .main-loading.transition {
            transition: .8s;
        }
        .main-loading.fadeout {
            opacity: 0;
        }
        .main-loading.inactive {
            display: none !important;
        }
        .loading-elements {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .loading-logo {
            width: 100px;
            height: 50px;
            background: url(<?php echo get_template_directory_uri(); ?>/assets/images/xsv-logo.png);
            background-size: contain;
            background-repeat: no-repeat;
            background-position: 50%;
            margin: 0 auto;
        }
        .loadbar {
            width: 0px;
            height: 4px;
            background-color: rgba(0,0,0,0.1);
            animation: loading .8s ease-in-out 0s infinite;
        }
        @keyframes loading {
            0% {
                border-left: solid 0px black;
                border-right: solid 200px rgba(0,0,0,0.1);
            }
            40% {
                border-left: solid 200px black;
                border-right: solid 0 rgba(0,0,0,0.1);
            }
            40.001% {
                border-left: solid 0 rgba(0,0,0,0.1);
                border-right: solid 200px black;
            }
            80% {
                border-left: solid 200px rgba(0,0,0,0.1);
                border-right: solid 0 black;
            }
            80.001% {
                border-left: solid 0px black;
                border-right: solid 200px rgba(0,0,0,0.1);
            }
            100% {
                border-left: solid 0px black;
                border-right: solid 200px rgba(0,0,0,0.1);
            }
        }
        .subtitle {
            color: rgba(255, 255, 255, .85);
            text-transform: uppercase;
            font-weight: bolder;
        }
        .top-info {
            text-align: left;
        }
        .ad-logo {
            width: 32px;
            height: auto;
            display: inline-block;
            margin-left: 10px;
            margin-bottom: -4px;
        }
        #footer .main-logo {
            display: inline-block;
            margin: 4px 0 0 0;
        }
        #footer {
            grid-column: 2/12;
            position: absolute;
            top: 7000px;
            width: 100%;
            padding-bottom: 24px;
        }
        #footer .tile {
            padding: 25px 40px 25px 40px;
        }
        .madeby {
            float: right;
            text-align: right;
            width: 40%;
            display: inline-block;
        }
        a {
            color: #e1adba;
        }
        #footer .xsv {
            width: 40%;
            display: inline-block;
        }
        #bottom-section .inner {
            position: sticky;
            top: calc(50vh - 230px);
        }
        #bottom-section {
            grid-column: 6/11;
            position: absolute;
            top: 5800px;
            height: 1000px;
        }
        #bottom-section .section-title {
            width: 150px;
            position: relative;
            top: 14px;
            left: -32px;
            z-index: 11;
            transition: .3s;
        }
        #bottom-section .tile {
            padding-left: 30px;
        }
        #bottom-section .tile p {
            width: 32vw;
            display: inline-block;
        }
        .side-img {
            position: absolute;
            width: 340px;
            left: -320px;
            display: inline-block;
            margin-top: -80px;
            border: solid 1px rgba(255,255,255,.3);
            z-index: 10;
            transition: .3s;
        }
        .company-img {
            height: 40px;
            width: auto;
            padding: 40px 15px;
            margin: 10px;
            object-fit: contain;
        }
        .companies {
            border: solid 2px rgba(179, 64, 92, .3);
            background-color: rgba(179, 64, 92, 0.1);
        }
        .companies-inner {
            width: 100%;
            height: 145px;
            background-image: url(<?php echo get_template_directory_uri(); ?>/assets/companies.png);
            background-size: auto 34%;
            background-repeat: repeat-x;
            background-position: 50% 50%;
        }
        .companies-wrapper {
            width: fit-content;
        }
        .companies-fade {
            mask-image: linear-gradient(90deg, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 19%, rgba(0,0,0,1) 86%, rgba(0,0,0,0) 100%);
            overflow: hidden;
        }
        #alumni {
            grid-column: 1/9;
            width: 100%;
            position: absolute;
            top: 3300px;
            left: 17.5vw;
            height: 1800px;
        }
        #alumni .section-title {
            width: 100px;
            position: relative;
            top: 14px;
            left: -12px;
        }
        #alumni .inner {
            position: sticky;
            top: calc(50vh - 170px);
        }
        .hover-effect:hover {
            transform: scale(1.03) !important;
        }
        a:hover {
            filter: saturate(1.2);
        }
        .svg {
            width: 18px;
            height: 18px;
            position: relative;
            top: 2px;
            stroke: rgba(255, 255, 255, .95);
            stroke-width: 2.4px;
            text-shadow: 0 0 6px rgba(0,0,0,0.2);
        }
        .status p span {
            float: left;
            line-height: 24px;
        }
        .inner-tile {
            padding: 10px 25px;
            border: solid 2px rgba(179, 64, 92, .3);
            background-color: rgba(179, 64, 92, 0.1);
            margin: 10px;
            transition: .3s;
        }
        .outer-cta {
            float: right;
            padding: 12px 15px 15px 15px;
            background: rgba(255, 255, 255, .15);
            border: solid 2px rgba(255,255,255,.15);
            -webkit-backdrop-filter: blur(12px);
            backdrop-filter: blur(12px);
            color: white;
            text-decoration: none;
            margin-top: 10px;
            margin-right: -45px;
            transition: .3s;
        }
        .outer-cta:hover {
            background: rgba(255, 255, 255, .25);
            filter: saturate(1.2);
        }
        .outer-cta svg {
            margin-bottom: -2px;
        }
        .section-title {
            text-transform: uppercase;
            color: rgb(21, 9, 12);
            margin: 0;
            font-size: 52px;
            font-weight: 800;
            -webkit-text-stroke: 5.5px transparent;
            z-index: 10;
            line-height: 68px;
            transition: .3s;
        }
        .info-title {
            max-width: 400px;
            width: fit-content;
            position: relative;
            top: 28vw;
            left: 26vw;
            text-align: right;
        }
        .section-title span {
            background: url(<?php echo get_template_directory_uri(); ?>/assets/background.png);
            background-size: 200% 200%;
            margin: 0;
            line-height: 0;
            padding: 0 8px;
            text-wrap: nowrap;
        }
        .main-tile-img {
            width: 42vw;
            height: auto;
            margin: 0;
            border: solid 1px rgba(255,255,255,.1);
            position: relative;
            top: 6vw;
            right: 2vw;
            transition: .3s;
        }
        .col{
            max-width: 50%;
            padding: 10px;
            border: solid 2px rgba(179, 64, 92, .3);
            background-color: rgba(179, 64, 92, 0.1);
            margin: 10px;
        }
        .col h3, .col p {
            margin: 4px;
        }
        .divider {
            display: flex;
        }
        #basic-info {
            grid-column: 4/10;
            position: absolute;
            top: 1600px;
        }

        .main-cta {
            color: rgba(255, 255, 255, .95);
            font-size: 20px;
            font-family: 'Formular', sans-serif;
            background: rgba(179, 64, 92, 0.5);
            background-position: 50%;
            padding: 8px 16px;
            text-decoration: none;
            border: solid 2px rgba(179, 64, 92, 0.8);
            text-wrap: nowrap;
        }
        .tile {
            width: 100%;
            background-color: rgba(0, 0, 0, .4);
            border: solid 2px rgba(179, 64, 92, .6);
            -webkit-backdrop-filter: blur(42px) saturate(140%);
            backdrop-filter: blur(42px) saturate(140%);
            padding: 10px 20px 25px 20px;
            transition: .3s;
        }
        #top {
            grid-column: 6/12;
            text-align: right;
            margin-top: calc(50vh - 230px);
        }
        #top .main-txt {
            background: url(<?php echo get_template_directory_uri(); ?>/assets/background.png);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            -webkit-text-stroke: 4px transparent;
            margin: 30px -20px 10px 0;
            text-align: right;
        }
        #top .main-txt h1 {
            font-weight: 800;
            font-size: 78px;
            text-transform: uppercase;
            color: black;
            margin: 0;
            text-align: right;
            display: inline;
            width: fit-content;
        }
        .sub-txt {
            font-weight: 700;
            font-size: 24px;
            color: transparent;
            text-transform: uppercase;
            background: url(<?php echo get_template_directory_uri(); ?>/assets/background.png);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            margin: 0 -20px 20px 0;
        }
        main {
            width: 100vw;
            color: white;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            margin: 0px auto;
            display: grid;
            grid-template-columns: repeat(12, 1fr);
        }

        /* header & texture */
        #main-filter {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(0deg, rgba(178,61,93,0.3) 0%, rgba(0,0,0,0) 34%);
        }
        .main-logo {
            margin: 22px 25px;
            height: 16px;
            width: 84px;
            mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/xsv-logo.png);
            mask-repeat: no-repeat;
            mask-size: contain;
            background: #B3405C;
        }
        body {
            font-family: "Formular", sans-serif;
            color: rgba(255, 255, 255, .9);
            background: black;
            width: 100vw;
            overflow-x: hidden;
            transition: .3s;
        }
        #apply {
            color: rgba(255, 255, 255, .9);
            background: #B3405C;
            background-position: 50%;
            padding: 6px;
            transition: .3s;
        }
        #apply:hover {
            background: #B3405C;
            filter: scale(1.1);
        }
        .main-footer {
            position: absolute;
            top: 7080px;
            left:0;
        }
        #bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            background: black !important;
        }
        .inter {
            font-family: 'Inter', sans-serif;
        }
        
        /* mobile view */
        @media only screen and (max-width: 900px) {
            #top .main-txt {
                font-weight: 800;
                font-size: 52px;
                text-transform: uppercase;
                color: transparent;
                -webkit-text-stroke: 0px transparent;
                background: none;
                margin: 0;
                text-align: left;
            }
            span::first-line {
                opacity: 1;
                -webkit-backdrop-filter: blur(42px) brightness(40%);
                backdrop-filter: blur(42px) brightness(40%);
                background-clip: border-box;
            }
            #top .main-txt h1 span {
                background: url(<?php echo get_template_directory_uri(); ?>/assets/background.png);
                background-size: 200% 200%;
                background-clip: text;
                margin: 30px 0 10px 0;
                padding: 0 8px;
                z-index: 100;
                color: transparent;
            }
            #top .main-txt h1 {
                width: fit-content;
                margin: 3px 0;
                font-size: 52px;
                -webkit-backdrop-filter: blur(42px) brightness(40%);
                backdrop-filter: blur(42px) brightness(40%);
                display: block;
            }
            #top {
                grid-column: 2 / 12;
                text-align: left;
                margin-top: calc(100vh - 400px);
            }
            .sub-txt {
                font-weight: 700;
                font-size: 22px;
                color: rgba(255, 255, 255, .9);
                margin: 0 0 26px 0;
                max-width: 347px;
            }
            .tile {
                width: auto;
            }
            .main-cta {
                line-height: 54px;
            }
            #basic-info {
                grid-column: 2 / 12;
            }
            .section-title {
                text-transform: uppercase;
                color: rgb(21, 9, 12);
                margin: 0;
                font-size: 36px;
                font-weight: 800;
                -webkit-text-stroke: 4px transparent;
                z-index: 10;
                line-height: 48px;
                transition: .3s;
            }
            #basic-info .section-title {
                position: relative;
                top: 86px;
                left: 10px;
            }
            .info-title {
                max-width: 100%;
                width: fit-content;
                position: relative;
                top: 0;
                left: 0;
                text-align: right;
            }
            .main-tile-img {
                width: 100%;
                margin: 0;
                position: relative;
                top: 0vw;
                right: 0vw;
                transition: .3s;
            }
            .outer-cta {
                margin-right: 0;
            }
            #basic-info .tile {
                width: auto;
                overflow: hidden;
            }
            .divider {
                display: flex;
                flex-direction: column;
            }
            .col {
                max-width: initial;
                width: auto;
            }
            #alumni {
                grid-column: 2 / 12;
                position: absolute;
                left: 0;
            }

            #footer {
                grid-column: 1 / 13;
                position: absolute;
                top: 7000px;
                width: 100%;
                padding-bottom: 0;
            }
            #footer .tile {
                height: 68px;
                text-align: center;
            }
            #footer .xsv, #footer .madeby {
                width: initial;
                display: initial;
                text-wrap: nowrap;
                text-align: left;
                float: left;
                margin: 4px;
            }
            #bottom-section {
                grid-column: 2 / 12;
                
            }
            .side-img {
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
            }
            #bottom-section .section-title {
                width: 150px;
                position: relative;
                top: 66vw;
                left: -12px;
            }
            #bottom-section .tile p {
                width: 100%;
            }
            #bottom-section .main-cta {
                text-wrap: wrap;
                background: none;
                border: none;
                line-height: initial;
                padding: 0;
            }
            #bottom-section .cta-cont {
                text-align: center;
                padding: 8px 16px;
                border: solid 2px rgba(179, 64, 92, 0.8);
                background: rgba(179, 64, 92, 0.5);
                display: block;
            }
        }

        /* scrollbar */
        /* width */
        ::-webkit-scrollbar {
        width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
        border: none;
        background-color: black;
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
        background: rgba(255,255,255,0.3);
        }
    </style>
    <script>
        // companies slider
        const companiesElem = document.querySelector('.companies-inner');
        function moveCompanies() {
            const t = document.body.getBoundingClientRect().top;
            companiesElem.style.backgroundPosition = `${t/2}px 50%`;
        }

        // loading screen
        document.addEventListener('DOMContentLoaded', function() {
            domLoaded = true
            refreshLoading()
        });
        let domLoaded = false
        let modelLoaded = false
        function refreshLoading() {
            document.querySelector('.main-loading').classList.add('transition');
            if (domLoaded && modelLoaded) {
                document.querySelector('.main-loading').classList.add('fadeout');
                setTimeout(() => {
                    document.querySelector('.main-loading').classList.add('inactive');
                }, )
            }
        }

        // smooth scrolling
        const lenis = new Lenis()


        function raf(time) {
        lenis.raf(time)
        requestAnimationFrame(raf)
        }

        requestAnimationFrame(raf)

        // THREE.js

        const scene = new THREE.Scene();
        let camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

        const renderer = new THREE.WebGLRenderer({
            canvas: document.querySelector('#bg'),
            alpha: true
        });

        window.onresize = function() {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        }


        renderer.setPixelRatio(window.devicePixelRatio);
        renderer.setSize(window.innerWidth, window.innerHeight);
        camera.position.setZ(30);

        renderer.render(scene, camera);

        // checkpoints
        /*
                    {
                x: 60,
                y: 125,
                z: 130,
                rx: 0,
                ry: 0.4,
                rz: 0,
                t: 0
            }
        */
        // oldaliranyi tavolsag
        // magassag
        // hosszaban (minel nagyobb annal tavolabb)
        let checkpoints = [
            (screen.width > 900 ? ({
                x: 60,
                y: 125,
                z: 130,
                rx: 0,
                ry: 0.4,
                rz: 0,
                t: 0
            }) : ({
                x: 40,
                y: 127,
                z: 125,
                rx: 0,
                ry: 0.86,
                rz: 0,
                t: 0
            })),
            {
                x: 0,
                y: 118,
                z: 95,
                rx: 0,
                ry: 0,
                rz: 0,
                t: 1200
            },
            {
                x: 0,
                y: 70,
                z: -60,
                rx: 0,
                ry: 0,
                rz: 0,
                t: 2400
            },
            {
                x: 0,
                y: 75,
                z: -190,
                rx: 0,
                ry: 0,
                rz: 0,
                t: 3200
            },
            {
                x: 60,
                y: 140,
                z: -300,
                rx: -0.7,
                ry: 0.8,
                rz: 0.7,
                t: 4400
            },
            {
                x: 260,
                y: 300,
                z: -300,
                rx: -1.6,
                ry: 1.1,
                rz: 1.6,
                t: 6000
            },
            {
                x: 260,
                y: 300,
                z: -300,
                rx: -1.6,
                ry: 1.1,
                rz: 1.6,
                t: 10000
            }
        ];

        // adding stars
        function addStar() {
            const geometry = new THREE.SphereGeometry(0.4, 24, 24);
            const colors = [0xe79f4f, 0xC05F59, 0xC86A55];
            const material = new THREE.MeshStandardMaterial({ color:  colors[Math.floor(Math.random() * colors.length)] });
            const star = new THREE.Mesh(geometry, material);

            const [x, y, z] = Array(3).fill().map(() => THREE.MathUtils.randFloatSpread(1000));

            star.position.set(x, y, z);
            scene.add(star);
        }
        Array(2500).fill().forEach(addStar);

        // adding model
        let goldengate;
        const loader = new THREE.OBJLoader();

        const video = document.createElement("video");
        video.src = "<?php echo get_template_directory_uri(); ?>/assets/texture-video.mp4";
        video.setAttribute('loop', true);
        video.setAttribute('muted', true);
        video.muted = true;
        video.setAttribute('playsinline', true);
        video.setAttribute('crosssorigin', 'anonymous');
        video.play();

        loader.load(
            '<?php echo get_template_directory_uri(); ?>/assets/models/goldengate.obj',
            function ( object ) {
                goldengate = object;

                const videoTexture = new THREE.VideoTexture( video );
                videoTexture.minFilter = THREE.LinearFilter;
                videoTexture.magFilter = THREE.LinearFilter;
                videoTexture.format = THREE.RGBFormat;
                videoTexture.needsUpdate = true;
                videoTexture.toneMappingExposure = true;
                videoTexture.toneMapping = true;

                const material = new THREE.MeshBasicMaterial({ map: videoTexture });
                goldengate.traverse((child) => {
                    if (child.isMesh) {
                        child.material = material;
                    }
                });


                scene.add( goldengate );

                goldengate.position.z = -300;
                camera.position.x = checkpoints[0].x; // oldaliranyi tavolsag
                camera.position.y = checkpoints[0].y; // magassag
                camera.position.z = checkpoints[0].z; // hosszaban (minel nagyobb annal tavolabb)

                camera.rotation.x = checkpoints[0].rx; // fel-le
                camera.rotation.y = checkpoints[0].ry; // jobbra-balra (balra no)
                camera.rotation.z = checkpoints[0].rz; //

                renderer.render(scene, camera);
            },
            function ( xhr ) {
                if (xhr.loaded / xhr.total == 1) {
                    modelLoaded = true
                    refreshLoading()
                }
            },
            function ( error ) {
                console.log( 'An error happened' );
            }
        );

        // adding light
        const light = new THREE.AmbientLight( 0xffffff ); // soft white light
        scene.add( light );

        scene.fog = new THREE.Fog(0x000000, 10, 400);

        currentcheckpoint = 0;
        function moveCamera() {
            const t = -document.body.getBoundingClientRect().top;
            if (currentcheckpoint != checkpoints.length-1 && t > checkpoints[currentcheckpoint + 1].t) {
                currentcheckpoint++;
            }
            if (currentcheckpoint != 0 && t < checkpoints[currentcheckpoint].t) {
                currentcheckpoint--;
            }

            currentbase = checkpoints[currentcheckpoint];
            nextbase = currentcheckpoint >= checkpoints.length - 1 ? currentbase : checkpoints[currentcheckpoint + 1];
            progress = (t - currentbase.t) / (nextbase.t - currentbase.t);

            camera.position.x = currentbase.x + (nextbase.x - currentbase.x) * progress;
            camera.position.y = currentbase.y + (nextbase.y - currentbase.y) * progress;
            camera.position.z = currentbase.z + (nextbase.z - currentbase.z) * progress;
            camera.rotation.x = currentbase.rx + (nextbase.rx - currentbase.rx) * progress;
            camera.rotation.y = currentbase.ry + (nextbase.ry - currentbase.ry) * progress;
            camera.rotation.z = currentbase.rz + (nextbase.rz - currentbase.rz) * progress;
            
        }
        document.body.onscroll = () => {moveCamera(); moveCompanies();};

        function animate() {
            requestAnimationFrame(animate);
            renderer.render(scene, camera);
        }

        animate();
        
        renderer.render(scene, camera);
    </script>
</body>
</html>