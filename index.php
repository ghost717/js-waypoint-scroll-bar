<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JS Waypoint Scroll Bar</title>

    <link href="css/style.css" media="all" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

</head>
<body>
    <section id="nav">
        <div class="wrap">
            
            <div class="list">
                <ul>
                    <?php for($i=0; $i<20; $i++): ?>

                        <li data-id="page<?php echo $i; ?>">
                            <a href="#page<?php echo $i; ?>">section <?php echo $i; ?></a>
                        </li>

                    <?php endfor; ?>
                </ul>
            </div>

        </div>
    </section>

    <?php for($i=0; $i<20; $i++): ?>

        <section id="page<?php echo $i; ?>">
            <div class="wrap content">
                <h2>section <?php echo $i; ?></h2>
            </div>
        </section>

    <?php endfor; ?>

    <script src="js/smoothScrolling.js"></script>
    <script src="js/waypoints.js"></script>
    <script src="js/main.js"></script>
</body>
</html>