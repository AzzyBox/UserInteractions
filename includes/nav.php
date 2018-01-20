</head>
<body>

<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">User Interactions</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?php if ($page_title == 'Home page') echo "active" ?>"><a href="index.php">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <div>
                <?php if ($_SESSION['role'] == 'Admin') {
                    ?>
                    <li class="<?php if ($page_title == 'Admin Panel') echo "active" ?>"><a href="Admin.php">Admin Panel</a></li>
                    <li class="<?php if ($page_title == 'Profile page') echo "active" ?>"><a href="Profile.php">Profile Page</a></li>
                    <?php
                } else if ($_SESSION['role'] == 'User') {
                    ?>
                    <li class="<?php if ($page_title == 'Profile page') echo "active" ?>"><a href="Profile.php">Profile Page</a></li>
                    <?php
                } else {
                    ?>
                    <li class="<?php if ($page_title == 'Login') echo "active" ?>"><a href="Login.php">Login/Register</a></li>
                    <li class="<?php if ($page_title == 'Admin Panel') echo "active" ?>"><a href="Admin.php">Admin Panel</a></li>
                    <li class="<?php if ($page_title == 'Profile page') echo "active" ?>"><a href="Profile.php">Profile Page</a></li>
                    <?php
                }
                ?>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav>