<!DOCTYPE html>
<html>

<head>
    <link rel ="stylesheet" href="style.css">
    <link rel="stylesheet" href="contactStyle.css">
    <meta charset="utf-8" />
    <title>Olivia Biancucci</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/e0568908a2.js" crossorigin="anonymous"></script>
    <script
        type="text/javascript">WebFont.load({ google: { families: ["Inter:100,200,300,regular,500,600,700,800,900", "Fira Code:300,regular,500,600,700"] } });</script>

    <style>
        body {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
        }
    </style>
</head>

<body class="body">
    <?php include 'navbar.php'; ?>
    <div class="section hero-section">
        <div class="container">
            <div class="w-layout-grid hero-1-grid">
                <div>
                    <h1 class="display-heading-2">Hello, I'm Olivia.</h1>
                    <h5 class="panel-subheading"><span class="main-text-gradient">A soon to be Computer Science graduate seeking new opportunities.</span></h5>
                </div>
                <img
                src="olivia.jpg"
                sizes="(max-width: 991px) 90vw, (max-width: 1919px) 94vw, 88vw"
                class="rounded-image"/>
                
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div>
                <div class="hero-content">
                    <h2 class="display-heading-4">My Projects<span class="text-span-11"></span></h2>
                    <h3 class="display-inline text-gray-4 smaller">Check out my completed and in-progress projects.</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="w-layout-grid grid-thirds">
                <div class="panel">
                    <div class="panel-body">
                        <h5 class="display-inline">Molecule SVG Parser.</h5>
                        <div class="text-lead display-inline"> C, Python, JavaScript, SQLite, HTML/CSS
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <h5 class="display-inline">Virtual Machines on the Cloud.</h5>
                        <div class="text-lead display-inline"> Python
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <h5 class="display-inline">TextHub Webscraper.</h5>
                        <div class="text-lead display-inline"> Python, JavaScript, HTML/CSS
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="hero-content">
                <h2 class="display-heading-4">Courses<span class="text-span-11"></span></h2>
                <div class="space-bottom">
                    <h3 class="display-inline text-gray-4 smaller">See the courses I have taken at the University of Guelph.</h3>
                </div>
                
                <a href="/projects.php" class="clickHereButton space-bottom">Click here</a>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div>
                <div class="hero-content">
                    <h2 class="display-heading-4">Work Experience<span class="text-span-11"></span></h2>
                    <div class="space-bottom">
                        <h3 class="display-inline text-gray-4 smaller">See my work experiences.</h3>
                    </div>
                    
                    <a href="/projects.php" class="clickHereButton space-bottom">Click here</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="hero-content">
                <h2 class="display-heading-4">Contact</h2>
                    <h3 class="display-inline text-gray-4 smaller">Click on a link to contact me.</h3>

                <div class="icon-links">
                    <a href="https://www.linkedin.com/in/olivia-biancucci/" class="icon-link"><i class="fab fa-linkedin fa-2x"></i></a>
                    <a href="https://github.com/oliviabiancucci" class="icon-link"><i class="fab fa-github fa-2x"></i></a>
                    <a href="mailto:olivia.b_32@hotmail.ca" class="icon-link"><i class="fas fa-envelope fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>