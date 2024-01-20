<!DOCTYPE html>
<html>
<head>
    <title>International Music | Muziko</title>
    <link href="css/international.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    <div class="container">

        <!-- *******  HEADER  *******-->
        <div class="navbar">
            <img src="images/logo/white1.png" class="logo">
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="#">LOGOUT</a></li>
            </ul>
        </div> 

        <!-- ******  CAROUSEL / IMAGE SLIDER  ******-->
        
        <center>
        <div class="slider-content">
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <input type="radio" name="radio-btn" id="radio5">
                <input type="radio" name="radio-btn" id="radio6">
                <input type="radio" name="radio-btn" id="radio7">
                <input type="radio" name="radio-btn" id="radio8">


                <div  class="slide first">
                    <img src="images/1.png" alt="">
                </div>
                <div  class="slide">
                    <img src="images/4.png" alt="">
                </div>
                <div  class="slide">
                    <img src="images/5.png" alt="">
                </div>
                <div  class="slide">
                    <img src="images/6.png" alt="">
                </div>
                <div  class="slide">
                    <img src="images/7.png" alt="">
                </div>
                <div  class="slide">
                    <img src="images/9.png" alt="">
                </div>
                <div  class="slide">
                    <img src="images/10.png" alt="">
                </div>
                <div  class="slide">
                    <img src="images/2.png" alt="">
                </div>
                
                <div class="nav-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                    <div class="auto-btn5"></div>
                    <div class="auto-btn6"></div>
                    <div class="auto-btn7"></div>
                    <div class="auto-btn8"></div>
                </div>

                <div class="nav-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                    <label for="radio5" class="manual-btn"></label>
                    <label for="radio6" class="manual-btn"></label>
                    <label for="radio7" class="manual-btn"></label>
                    <label for="radio8" class="manual-btn"></label>
                </div>
            </div>
        </div>
        </div>
        </center>

        <!-- *******  JAVASCRIPT FOR IMAGE SLIDER  ******* -->
        <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 8){
                counter = 1;
            }
        }, 5000);

        </script>

        <!-- ******* MUSIC / MAIN SECTION ******** -->
        
            <h2>Artists Of The Month</h2>
            <div class="content">                
                <div class="artist">
                    <a href="#">
                    <img src="images/saleena.jpeg" class="artist-img" alt="Saleena Gomez">
                    <h4>Selena Gomez</h4>
                    </a>
                </div>
                <div class="artist">
                    <a href="#">
                    <img src="images/alanwalker.jpeg" class="artist-img" alt="Alan Walker">
                    <h4>Alan Walker</h4>
                    </a>
                </div>       
                <div class="artist">
                    <a href="#">
                    <img src="images/taylorswift.jpeg" class="artist-img" alt="Taylor Swift">
                    <h4>Taylor Swift</h4>
                    </a>
                </div>
                <div class="artist">
                    <a href="#">
                    <img src="images/justin.jpeg" class="artist-img" alt="Justin Bieber">
                    <h4>Justin Bieber</h4>
                    </a>
                </div>
            </div>
        

            <h2>Genres</h2>
            <div class="album">
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/kpop.png" class="genre-poster" alt="">
                    <h4>K-Pop</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/hiphop.png" class="genre-poster" alt="">
                    <h4>Hip Hop</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images\posters\folkrock.png" class="genre-poster" alt="">
                    <h4>Folk Rocks</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/rock.png" class="genre-poster" alt="">
                    <h4>Rock</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/jazzfunk.png" class="genre-poster" alt="">
                    <h4>Jazz & Funk</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/electropop.png" class="genre-poster" alt="Electropop">
                    <h4>Electropop</h4>
                    </a>
                </div>
            </div>

            <h2>Pick Your Mood</h2>
            <div class="album">
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/1.png" class="genre-poster" alt="Mood Boosters">
                    <h4>Mood Boosters</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/2.png" class="genre-poster" alt="Workout">
                    <h4>Workout</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/3.png" class="genre-poster" alt="Sad Songs">
                    <h4>Sad Songs</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/4.png" class="genre-poster" alt="Relaxing Love">
                    <h4>Relaxing Love</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/5.png" class="genre-poster" alt="Good Vibes">
                    <h4>Good Vibes</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/11.png" class="genre-poster" alt="Broken Heart">
                    <h4>Broken Heart</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/6.png" class="genre-poster" alt="Chill Out">
                    <h4>Chill Out</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/7.png" class="genre-poster" alt="Work From Home">
                    <h4>Work From Home</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/8.png" class="genre-poster" alt="BTS">
                    <h4>BTS</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/9.png" class="genre-poster" alt="Pop Rocks">
                    <h4>Pop Rocks</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/10.png" class="genre-poster" alt="90's Songs">
                    <h4>90's Songs</h4>
                    </a>
                </div>
            </div>

            <h2>Top Charts</h2>
            <div class="album">
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/12.png" class="genre-poster" alt="">
                    <h4>Top 100</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/13.png" class="genre-poster" alt="Top 50">
                    <h4>Top 50</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/16.png" class="genre-poster" alt="Top 10">
                    <h4>Top 10</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/14.png" class="genre-poster" alt="Top 10">
                    <h4>Top 10</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/15.png" class="genre-poster" alt="Top 20">
                    <h4>Top 20</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/17.png" class="genre-poster" alt="Top 20">
                    <h4>Top 20</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/18.png" class="genre-poster" alt="Top 10">
                    <h4>Top 10</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/19.png" class="genre-poster" alt="Top 10">
                    <h4>Top 10</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/20.png" class="genre-poster" alt="Top 20">
                    <h4>Top 20</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/21.png" class="genre-poster" alt="Top 20">
                    <h4>Top 20</h4>
                    </a>
                </div>
            </div>

            <h2>Weekly Jukebox</h2>
            <div class="album">
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/mon.png" class="genre-poster" alt="">
                    <h4>Monday Mix</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/tue.png" class="genre-poster" alt="">
                    <h4>Tuesday Taste</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/wed.png" class="genre-poster" alt="">
                    <h4>Wednesday Waves</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/thu.png" class="genre-poster" alt="Thursday Twist">
                    <h4>Thursday Twist</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/fri.png" class="genre-poster" alt="Friday Feel">
                    <h4>Friday Feel</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/sat.png" class="genre-poster" alt="Saturday Scene">
                    <h4>Saturday Scene</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/sun.png" class="genre-poster" alt="Sunday Scent">
                    <h4>Sunday Scent</h4>
                    </a>
                </div>
            </div>

            <h2>Podcasts</h2>
            <div class="album">
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/mon.png" class="genre-poster" alt="">
                    <h4>K-Pop</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/tue.png" class="genre-poster" alt="">
                    <h4>Hip Hop</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/wed.png" class="genre-poster" alt="">
                    <h4>Rock</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/thu.png" class="genre-poster" alt="">
                    <h4>Jazz & Funk</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/fri.png" class="genre-poster" alt="">
                    <h4>K-Pop</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/sat.png" class="genre-poster" alt="">
                    <h4>K-Pop</h4>
                    </a>
                </div>
                <div class="genre">
                    <a href="#">
                    <img src="images/posters/sun.png" class="genre-poster" alt="">
                    <h4>K-Pop</h4>
                    </a>
                </div>
            </div>

        
        <!-- *******  FOOTER  ******* -->
        <footer>
            <div class="footer">
                <div class="footer-logo">
                    <img src="images/logo/white1.png" alt="logo" class="logo">
                </div>
                <br>
                <div class="footer-links">
                    <table>
                        <tr>
                            <th>COMPANY</th>
                            <th>COMMUNITIES</th>
                            <th>USEFUL LINKS</th>                   
                        </tr>
                        <tr>
                            <td>About</td>    
                            <td>For Artists</td>
                            <td>Support</td>
                        </tr>
                        <tr>
                            <td>Jobs</td>
                            <td>Developers</td>
                            <td>Web Player</td>
                        </tr>
                        <tr>
                            <td>For the Record</td>
                            <td>Advertising</td>
                            <td>Free Mobile App</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Investors</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Vendors</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </footer>
    </div>    
</body>
</html>
