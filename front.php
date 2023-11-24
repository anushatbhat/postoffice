<!DOCTYPE html>
<html lang="en">

<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="front.css">
</head>
<style>
    .b {
        height: 40px;
        width: 120px;
        font-size: 40;
        border: none;
        background: none;
        padding: 0;

    }

    wrapper.icon:tooltip {
        opacity: 0;
        pointer-events: none;
    }

    wrapper.icon:hovertooltip {
        opacity: 1;
        pointer-events: auto;
    }
</style>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"></h2>
            </div>

            <div class="menu">
                <ul>

                    <li>
                        <form action="front.php">
                            <button class="b" style="color:white">
                                <h2> HOME</h2>
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="about.php">
                            <button class="b" style="color:white">
                                <h2>ABOUT</h2>
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="service.php">
                            <button class="b" style="color:white">
                                <h2> SERVICE</h2>
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="guide.php">
                            <button class="b" style="color:white">
                                <h2> GUIDELINES</h2>
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="contact.php">
                            <button class="b" style="color:white">
                                <h2> CONTACT</h2>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>



        </div>
        <div class="content">
            <h1> <br><span>Welcome User</span> </h1>
            <p class="par">A sophisticated solution designed to elevate your cultural exploration. Our automatic audio
                guide <br>seamlessly blends technology and culture to enhance your visit.Simply plug in your earphones,
                and <br>let SmartSonic Guide be your personal storyteller, offering<br> fascinating insights into each
                exhibit.
            </p>

            <button class="cn"><a href="#">hello user!!!</a></button>

            <div class="form">
                <h2>Welcome</h2>
                <form action="guide1.php">
                    <button class="btnn"><a href="#">sign up</a></button>
                </form>
                <form action="guide1.php">
                    <button class="btnn"><a href="#">Guide id</a></button>
                </form>
                <form action="user.php">
                    <button class="btnn"><a href="#">sign in</a></button>
                </form>
                <p class="link"><br>
                    <a href="#"></a> </a>
                </p>
                <p class="liw">Log in with</p>

                <div class="icons">
                    <div class="wrapper">
                        <a href="#"><ion-icon name="logo-facebook">
                                <div class="tooltip">facebook</div>
                            </ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>