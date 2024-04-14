<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="projectsStyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <title>Olivia Biancucci</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <section class="main">
        <div>
            <h2 style="color:#fff" class="center">My projects</h2>
        </div>

        <div class="w-layout-grid grid-thirds">
            <div id="projects-container" class="container">
                
            </div>
        </div>
        
        <script src="scripts.js"></script>

    </section>

    <script>
        function toggleDescription(element) {
            var details = element.querySelector('.details');
            details.classList.toggle('show');
        }
    </script>
    
</body>
</html>
