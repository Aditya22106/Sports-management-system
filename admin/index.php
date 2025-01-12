
<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VP Verve</title>
    <link rel="icon" href="../images/verve.jpg" type="image/x-icon">
    <link rel="stylesheet" media="screen" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="header">
        <header>
            <div class="verve_image">
                <div class="asd">
                    <div class="row2">
                        <div class="column1">
                            <img src="../images/verve.jpg" width="10%" id="co1">
                            <img src="../images/game1.png" width="20%" id="co2">
                            <img src="../images/vp_logo.png" width="10%" id="co3">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <nav class="adi">
            <div class="nav-links2" id="navlinks">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="create_event.php">Events</a>
                    </li>
                    <li>
                        <a href="result.php">Result</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        <table>
            <tr>
                <th>Event Name</th>
                <th>Event details</th>
                <th>Date</th>
                <th>Time</th>
                <th>Venue</th>

            </tr>
            <?php
            $mysqli = new mysqli("localhost","root","","login");
            $sql = "SELECT * FROM `events`";
            $stmt = $mysqli->query($sql);
            $i = 0;
            while ($row = $stmt->fetch_assoc()) {
                $i++;
            ?>
                
            <tr>
                <th><?= $row['title'] ?></th>
                <th><?= $row['description'] ?></th>
                <th><?= $row['date'] ?></th>
                <th><?= $row['time'] ?></th>
                <th><?= $row['venue'] ?></th>
            </tr>
            <?php } ?>
        </table>
        
    </section>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 70%;
            margin: 5%;
            margin-left: 15%;
        }
        
        tab tr,
        th {
            border: 1px solid #000;
            text-align: left;
            padding: 5px;
            font-size: 20px;
        }

        tr:nth-child(even) {
            background-color: #2c2b2bb2;
        }
        button.btn1{
            background-color: #09ff00;
            border: 1px solid rgb(0, 0, 0);
            color: rgb(0, 0, 0);
            padding: 5px 5px;
            position: relative;
            cursor: pointer;
        }
        button.btn2{
            background-color: #ff0000;
            border: 1px solid rgb(0, 0, 0);
            color: rgb(0, 0, 0);
            padding: 5px 5px;
            position: relative;
            cursor: pointer;
            posi
        }
    </style>
    </head>



        <footer>
            <div class="container">
                <div class="footer">
                    <div class="asq">
                        <img src="../images/vp_logo.png">
                        <div class="as">
                            <p>Vidyalankar Polytechnic is an Engineering &amp; Management Institute approved by AICTE, New Delhi
                                and Government of Maharashtra.</p>
                            <p>The Institute is affiliated to University of Mumbai.</p>
                        </div>
                        <ul>
                            <li class="ab">
                                <a href="https://www.facebook.com/Vidyalankar.VIT/" target="_blank">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="ab">
                                <a href="https://www.instagram.com/vit_vidyalankar/" target="_blank">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="ab">
                                <a href="https://www.youtube.com/channel/UCxRGJGcQw869LJ-btMhPOMA" target="_blank">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="ab">
                                <a href="https://www.linkedin.com/school/vidyalankar-institute-of-technology-mumbai" target="_blank">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="ab">
                                <a href="https://twitter.com/VIT_Vidyalankar" target="_blank">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="foot2">
                        <div class="footer_row2">
                            <h5>Contact Us</h5>
                            <div class="row6">
                                <ul>
                                    <div class="foot-col">
                                        <i class="fa fa-university" aria-hidden="true"></i>
                                    </div>
                                    <div class="foot-col2">
                                        <p>Vidyalankar Polytechnic, vidyalankar College Marg, Wadala(E), Mumbai-400 037</p>
                                    </div>
                                    <br>
                                    <div class="foot-col">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                    <div class="foot-col2">
                                        <p>+91 22 2416 11 26</p>
                                        <p> 10 am. to 4 pm.(Mon to Sat)</p>
                                        <p>Please Write to Us</p>
                                    </div>
                                    <div class="foot-col">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="foot-col2">
                                        <a href="" target="blank">Write to Us</a>
                                    </div>
                                    <div class="foot-col">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <div class="foot-col2">
                                        <a href="" target="_blank">Get Directions</a>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer_row_last">
                        <h5>Website</h5>
                        <a href="index.html">Home</a>
                        <a href="about.html">Vision-Mission
                            <br>Who We are</a>
                        <a href="form.html">Admissions</a>
                        <a href="contact.html">Contact Us</a>
                    </div>
                </div>
            </div>
            </div>
        </footer>










    </body>

</html>