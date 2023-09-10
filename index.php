<?php

session_start();
if(isset($_SESSION['view'])){
    $_SESSION['view'] = $_SESSION['view'] + 1;

}else{
    $_SESSION ['view'] = 1;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700&family=Russo+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700&family=Roboto+Serif:opsz,wght@8..144,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="end.css">
    <title>dawit tamen</title>
    <?php echo "You Are Number ".$_SESSION['view']." Visiter. Thank You For Visiting"
    
    

    ?>

</head>
<body>
    <section class="s1">
        <div class="main-container">
            <div class="greating-wrapper">
                <h1>Hi, I'm Dawit Tamene</h1>
            </div>

            <div class="intro-wrapper">
                <div class="nav-wrapper">
                    
                    
                    <div class="dots-wrapper">
                        <div id="dot-1" class="browser-dot"></div>
                        <div id="dot-2" class="browser-dot"></div>
                        <div id="dot-3" class="browser-dot"></div>


                    </div>

                    <ul id="navgation">
                        <li><a href="https://www.linkedin.com/in/dawit-tamene-531194273/">contact</a></li>
                        
                    </ul>

                </div>

                <div class="left-wrapper">
                    <img id="profile_pic" src="images/dawit.JPG" alt="doesn't exist">
                    

                </div>
                <div class="right-wrapper">
                    <div id="preview-shadow">
                        <div id="preview">
                            <div id="corner-tl" class="corner"></div>
                            <div id="corner-tr" class="corner"></div>
                        
                            <center><h3>What I Do</h3></center>
                            <strong><p>HI, I Am Full Stack Developer.</p></strong>
                            <div id="corner-br" class="corner"></div>
                            <div id="corner-bl" class="corner"></div>
                        </div>
                    </div>

                </div>

            </div>
            
        </div><br>
    </section>
    <br>

    <section class="s2">
        <div class="main-container">

           <div class="about-wrapper">
                <div class="about-me">
                    <strong><h4 style="font-size: 50;">More About Me </h4></strong>

                    <div class="par">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>
                            Welcome! I'm Dawit tamene, a passionate software developer dedicated to creating innovative solutions.Specializing<br> 
                            in python Django, php, and other front-end and back-end technologies. I strive to write clean,efficient code powers<br>
                            user-friendly applications. Driven by a love for problem-solving, I enjoy tacklingchallenges and finding creative solutions.<br>
                            I am a lifelong learner, constantly expanding my knowledge and staying up-to-date with the latest industry trends.<br>
                            Collaboration is at the heart of my approach.I thrive in dynamic teams, leveraging effective communication, teamwork,<br>
                            and attention to detail to deliver successful outcomes. I value open and transparent communication, where ideas are shared<br>
                            and refined. I am excited about the opportunity to work on exciting projects and contribute my skills to drive innovation.<br>
                            Let's connect and discuss how we can bring you ideas to life with technology.r<br>
                            <br>
                         </p>
                        <strong><p>Thank you for visiting my website, and I look forward to collaborating with you on meaningful projects.</p></strong>
                        </div>

                    </div>

                        



                   


                      

                </div>
                </div>
                <hr>
                <br>
                <h4 style="font-size: 50;">Top Expertise</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing <a target="_blank" href="#">learn more </a></p>

                <div id="skils">

                    <ul>
                        <br>
                        
                        <img class="thumnali" id="social"  src="images/pyt.png" alt="not exist"><br>
                        <li> Python</li><br>
                       
                        <img class="thumnali" id="social"  src="images/django.png" alt="not exist"><br>
                        <li>Django</li><br>
                        
                        <img class="thumnali" id="social"  src="images/java.png" alt="not exist"><br>
                        <li>Javascript</li><br>
                    </ul>


                    <ul>
                        <br>
                        
                        <img class="thumnali" id="social"  src="images/html.png" alt="not exist"><br>
                        <li>Html</li><br>
                        
                        <img class="thumnali" id="social"  src="images/css.png" alt="not exist"><br>
                        <li>Css</li><br>
                        
                        <img class="thumnali" id="social"  src="images/php1.png" alt="not exist"><br>
                        <li>Php</li><br>
                    </ul>
                </div>
           </div>
        </div>
    </section>


    <section class="s1">
        <div class="main-container">
            <h3 style="text-align: center; font-size: 50;"> Some Of My Past Projects </h3><br>
           <div class="post-wrapper">


            <div>
                <div class="post">
                    <img class="thumnali" src="images/second.png" alt="not exist">
                    <div class="post-preview">
                        <h6 class="post-title">Zumbara Travel</h6>
                        <p class="post-intro">this is my website in Tour Travel visit.</p>
                        <a href="https://zumbara.000webhostapp.com/">Read More</a>
                    </div>

                </div>
            </div>



            <div>
                <div class="post">
                    <img class="thumnali" src="images/second.png" alt="not exist">
                    <div class="post-preview">
                        <h6 class="post-title">Tour Travel</h6>
                        <p class="post-intro">this is my website in Tour Travel visit.</p>
                        <a href="https://zumbara.000webhostapp.com/" target="_blank">Read More</a>
                    </div>

                </div>
            </div>




            <div>
                <div class="post">
                    <img class="thumnali" src="images/first.png" alt="not exist">
                    <div class="post-preview">
                        <h6 class="post-title">Tour Travel</h6>
                        <p class="post-intro">this is my website in Tour Travel visit.</p>
                        <a href="#">Read More</a>
                    </div>

                </div>
            </div>



            <div>
                <div class="post">
                    <img class="thumnali" src="images/first.png" alt="not exist">
                    <div class="post-preview">
                        <h6 class="post-title">Books Store</h6>
                        <p class="post-intro">this is my website in Books Store visit.</p>
                        <a href="#">Read More</a>
                    </div>

                </div>
            </div>
         

           </div>
        </div>
    </section>

    <section class="s2">
        <div class="main-container">
            <h3 style="text-align: center;"> Get In Touch </h3>

            <form action="process.php" class="contact-form" method="POST">
                <label for="">Name</label>
                <input type="text" name="name" class="input-filed">

                <label for="">Subject</label>
                <input type="text" name="subject" class="input-filed">

                <label for="">Email</label>
                <input type="text" name="email" class="input-filed">


                <label for="">Messages</label>
                <textarea name="massage" class="input-filed" cols="" rows=""></textarea>



                <a href="index.php"><input id="submit-btn" type="submit" value="Send"></a>
            </form>
        </div>
    </section>




    <section class="footer">
    <div class="box-container">


       


       

    


        <div class="box">
            <h3>Follow us</h3>
            <a href="https://www.facebook.com/dawit.tcool">facebook</a>
            <a href="https://www.instagram.com/dawit_1313/">instagram</a>
            <a href="https://github.com/dawittamene">Github</a>
            <a href="https://twitter.com/dawittamene559">twitter</a>
            <a href="https://www.linkedin.com/in/dawit-tamene-531194273/">linledin</a>
        </div>


        <div class="box">
            <h3>Some of my Projects Link Visit </h3>
            <a href="https://zumbara.000webhostapp.com/">Tour Travel</a>
            <a href="#">Books Store</a>
            
            <a href="#">E-commerce</a>
            <a href="#">Hospital System</a>
        </div>


    </div>
    <h1 class="credit"> Created by <span> Dawit Tamene </span> | all rights reserved! </h1>
</section>






</body>
</html>