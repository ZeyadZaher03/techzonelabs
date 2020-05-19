<nav class="top-navigation">
    <a href="index.php" class="logo">
        <img src="./assets/images/techzone.png" alt="Techzonelabs" />
    </a>
    <ul class="top-navigation_container">
        <li class="top-navogation_item">
            <a href="index.php" class="top-navigation_link">Home</a>
        </li>
        </li>
        <li class="top-navogation_item">
            <a id="dropdown-about-btn" class="top-navigation_link">
                About 
                <i class="icon-dropdown fas fa-chevron-down"></i>
            </a>
            <ul id="dropdown-about">
                <li><a href="ourteam.php">Our team</a></li>
                <li><a href="ourwork.php">our WORK</a></li>
                <li><a href="joinus.php">Join us</a></li>
            </ul>
        </li>

        <li class="top-navogation_item">
            <a href="blogs.php" class="top-navigation_link">Blog</a>
        </li>
    </ul>
    <a
        href="#"
        class="contactus-button button button-main button-rounded"
    >
        CONTACT US
    </a>
</nav>

<nav class="hamburger-menu">
    <a class="hamburger-menu_logo" href="index.php">TECHZONELABS</a>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li id="hamburger-menu_about" >About <i class="icon-dropdown fas fa-chevron-down"></i> </li> <!-- on click display this drop downlist -->
            <ul class="hamburger-menu_about-menu">
                <li><a href="ourteam.php">Our Team</a></li>
                <li><a href="joinus.php">Our Work</a></li>
                <li><a href="joinus.php">Join us</a></li>
            </ul>
        <li><a href="blogs.php">Blog</a></li>

    </ul>
</nav>
<div id="hamburger-btn-nav">
    <button class="menu button button-main button-rounded">
        <div class="menu-bar"></div>
    </button>
</div>