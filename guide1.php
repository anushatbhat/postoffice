<!DOCTYPE html>
<HTML>
<title>user form</title>
<style>
    .a {
        text-align: center;
        border: 3px solid red;
        font-family: "times new roman", serif;
        background-color: lightsalmon;
    }

    .menu {
        width: 400px;
        float: left;
        height: 700px;
    }

    .main {

        width: 100%;


        background-position: center;

        background-size: cover;

        height: 109vh;

    }

    .navbar {

        width: 1200px;

        height: 75px;

        margin: auto;
    }

    ul {
        float: left;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    ul li {
        list-style: none;
        margin-left: 52px;
        margin-top: 10px;
        font-size: 14px;
    }

    ul li a {
        text-decoration: none;
        color: #fff;
        font-family: Arial;
        font-weight: bold;
        transition: 0.4s ease-in-out;
    }

    ul li a:hover {
        color: #ff7200;
    }

    .b {
        height: 40px;
        width: 120px;
        font-size: 40;
        border: none;
        background: none;
        padding: 0;

    }

    body {}
</style>
<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">

<body>
    <div class="main">
        <div class="navbar">

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
                        <form action="home.php">
                            <button class="b" style="color:white">
                                <h2>ABOUT</h2>
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="home.php">
                            <button class="b" style="color:white">
                                <h2> SERVICE</h2>
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="home.php">
                            <button class="b" style="color:white">
                                <h2> DESIGN</h2>
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="home.php">
                            <button class="b" style="color:white">
                                <h2> CONTACT</h2>
                            </button>
                        </form>
                    </li>

                </ul>
            </div>
        </div>
    </div>


    <div class="Loginbox">
        <img src="https://tse1.mm.bing.net/th?id=OIP.7CbecGV3plNsXBSgvPfqbwHaHv&pid=Api&P=0" class="avatar">
        <br><br><br>
        <h1 class="a">Which user</h1>
        <div class="container">

            <form action="guide11.php">

                <input type="SUBMIT" class="b" value="Guide" action="">
                <t>
                    <t>
            </form><br><br><br>
            <form action="User1.php">

                <input type="SUBMIT" class="b" value="User" action="">
                <t>
                    <t>
            </form><br><br><br>

            <form action="postletter.php">
                <input type="submit" class="b" value="Post Letter">
            </form>






        </div>
</body>

</html>