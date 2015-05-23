<!--<?php session_start() ?>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Kevin Cullen Design</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:200,600,300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" href="images/logo_small.png">

</head>
<body>
    <div class="wrapper">

        <!-- Header
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <div id="header" class="animated fadeInDown">
            <div class="container">
                <div class="row">
                    <div class="two columns">
                        <div class="logo">
                            <a href="index.html"><img src="images/kevin_weblogo.png"/></a>
                        </div>
                    </div>
                    <div class="five columns">
                        <a href="index.html"><h1>KEVIN<span id="head-styling">CULLEN</span>DESIGN</h1></a>
                    </div>
                    <div class="five columns">
                        <nav>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html" class="selected">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>            
            </div>
        </div>

         <!-- Contact
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <div class="main-content">
            <div class="container animated fadeInUpBig">
                <div class="row">
                    <div class="four columns" id="contact-info">
                        <p>email: <a href="mailto:kevin@kevincullen.com">kevin@kevincullen.me</a></p>
                        <p>phone: <a href="callto:575-6353891">575.635.3891</a></p>
                        <p>twitter: <a href="https://twitter.com/KevinMCullen">@kevinmcullen</a></p>
                               
                    </div>
                    
                    <div class="eight columns">
                    <h3>Feel free to drop me a line.</h3>
                     <p><strong>I am available for freelance work.</strong><br>Please don't hesitate to contact me to discuss a project and how I can help. I'd love to hear from you.</p>
                        <div >
                            <?php
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $message = $_POST['message'];
                                $from = 'From: Kevin Cullen Design'; 
                                $to = 'kevin@kevincullen.mem'; 
                                $subject = 'Hello';
                                $human = $_POST['human'];

                                $body = "From: $name\n E-Mail: $email\n Message:\n $message";

                                if ($_POST['submit'] && $human == '4') {				 
                                    if (mail ($to, $subject, $body, $from)) { 
                                    echo '<p>Your message has been sent!</p>';
                                } else { 
                                    echo '<p>Something went wrong, go back and try again!</p>'; 
                                } 
                                } else if ($_POST['submit'] && $human != '4') {
                                echo '<p>You answered the anti-spam question incorrectly!</p>';
                                }
                            ?>
                            <form method="post" action="contact.php" enctype="text/plain">
                                <div class="row">                                    
                                    <div class="six columns">
                                        <label for="exampleNameInput">Your name</label>
                                        <input name="name" class="u-full-width" type="text" placeholder="Your name" id="exampleNameInput">
                                    </div>
                                    
                                    <div class="six columns">
                                            <label for="exampleEmailInput">Your email</label>
                                            <input name="email" class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
                                    </div>
                                </div>
                                
                                <label for="exampleMessage">Message</label>
                                  <textarea name="message" class="u-full-width" placeholder="Hi Kevin …" id="exampleMessage"></textarea>
                                <input name="submit" type="submit" value="Submit">
                                <input name="reset" type="reset" value="Reset">
                            </form> 
                        </div>    
                    </div>
                    <!--<div class="eight columns">
                        <h3>Feel free to say hello!</h3>
                        <form action="MAILTO:kevin@kevincullen.me" method="post" enctype="text/plain">
                                
                            <input type="text" name="name" placeholder="your name"><br>
                            E-mail:<br>
                            <input type="text" name="mail" placeholder="your email"><br>
                            Comment:<br>
                            <div class="row">
                                <div class="row">
                                    <div class="six columns">
                                        <label for="exampleNameInput">Your name</label>
                                        <input class="u-full-width" type="text" placeholder="Your name" id="exampleTextInput">
                                    </div>
                                    <div class="six columns">
                                        <label for="exampleEmailInput">Your email</label>
                                        <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
                                    </div>
                                </div>    
                            </div>        
                            <label for="exampleMessage">Message</label>
                              <textarea class="u-full-width" placeholder="Hi Kevin …" id="exampleMessage"></textarea>
                            <input type="submit" value="Send">
                            <input type="reset" value="Reset">
                        </form> 
                    </div>-->
                    
                    

                    <div class="row" id="work-nav">
                        <div class="twelve columns animated fadeUpBottomBig">
                            <nav>
                                <ul>
                                    <label>My Work</label>
                                    <li ><a href="newspaper.html" class="button">Newspaper Design</a></li>
                                    <li ><a href="logo.html" class="button">Logo Design</a></li>
                                    <li><a href="promo.html" class="button">Promotional/Misc Design</a></li>
                                </ul>
                            </nav>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

         <!-- Footer
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="six columns">
                        <nav>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html" class="selected">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="six columns" id="icons">
                        <a href="https://twitter.com/KevinMCullen"><img src="images/twitter.png"></a>
                        <a href="https://www.linkedin.com/in/kevincullen4"><img src="images/linkedin.png"></a>
                        <a href="https://www.github.com/kevinmcullen"><img src="images/github.png"></a>
                        <a href="https://www.facebook.com/kcullen1"><img src="images/facebook.png"></a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="twelve columns">
                        <p>&copy; 2015. Kevin Cullen. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>