<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://www.cardiffmetsu.co.uk/organisation/7566">CompSoc</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="<?php if ($page_title == 'Home') echo 'active' ?>"><a href="index.php">Home</a></li>
                <li class="disabled"><a>Events</a></li>
                <li class="disabled"><a>Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (!isset($_SESSION['FirstName']))
                {
                    ?>
                    <li class="<?php if ($page_title == 'Login') echo 'active' ?>"><a href="login.php">Login</a></li>
                    <?php
                }
                else if (isset($_SESSION['FirstName']) && ($_SESSION['Role'] == "Member"))
                {
                    ?>
                    <p class="navbar-text"><?php echo "Welcome " . $_SESSION['FirstName'] . "!"; ?></p>
                    <li class="<?php if ($page_title == 'Profile') echo 'active' ?>"><a href="profile.php">Profile</a>
                    </li>
                    <li><a href="php/logout.php">Logout</a></li>
                    <?php
                }
                else if (isset($_SESSION['FirstName']) && ($_SESSION['Role'] == "Admin"))
                {
                    ?>
                    <p class="navbar-text"><?php echo "Welcome " . $_SESSION['FirstName'] . "! (Admin)"; ?></p>

                    <li class="<?php if ($page_title == 'Admin Panel') echo 'active' ?>"><a href="adminPanel.php">Admin
                            Panel</a></li>
                    <li class="<?php if ($page_title == 'Profile') echo 'active' ?>"><a href="profile.php">Profile</a>
                    </li>
                    <li><a href="php/logout.php">Logout</a></li>
                    <?php
                }
                ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>