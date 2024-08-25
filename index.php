
<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Counsellor & Health Care by MSEC </title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

    <body>
        <style>
           
           #s{
            animation-duration: 5s;
            animation-name: color;
            animation-iteration-count: infinite;
           }
           @keyframes color {
            0%{color: red;}
            20%{color: blue;}
            40%{color: yellow;}
            60%{color: green;}
            80%{color: orange;}
            100%{color:blueviolet}
           }
           span{
             font-size: 18px;
             font-weight: bold;
           }
           #chat-container {
            position: fixed;
            right: -350px; /* Initially off-screen */
            bottom: 20px;
            width: 350px;
            height: 500px;
            background: #fff;
            border: 1px solid #ccc;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            border-radius: 10px;
            transition: right 0.5s ease;
            z-index: 1000; /* Ensure it's on top */
        }
        #chat-container.show {
            right: 20px; /* Positioned on screen */
        }
        #messages {
            height: 400px;
            overflow-y: auto;
        }
        #messageInput {
            width: calc(100% - 70px);
            padding: 5px;
        }
        #sendButton {
            width: 60px;
            padding: 5px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        #sendButton:hover {
            background-color: #0056b3;
        }
        .message {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .message .avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #007bff;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }
        .message.user .avatar {
            background: #28a745;
        }
        .message.ai .avatar {
            background: #007bff;
        }
        .message .bubble {
            background: #f1f1f1;
            padding: 10px;
            border-radius: 10px;
            max-width: 220px;
            word-wrap: break-word;
            position: relative;
        }
        .message.user .bubble {
            background: #e1f5fe;
        }
        .message.ai .bubble {
            background: #e8f5e9;
        }
        #virtualBot {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: url('bot.jpeg') no-repeat center;
            background-size: cover;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            z-index: 1000; /* Ensure it's on top */
        }
        #virtualBot:hover {
            transform: scale(1.1);
        }
        </style>

    <!-- ################# Header Starts Here#######################--->
    
      <header id="menu-jk">
    
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3  col-sm-12" style="color:#000;font-weight:bold; font-size:42px; margin-top: 1% !important;">
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><span>DARK </span><span id="s">KNIGHTZ <i>&#x1F987;</i></span><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="http://localhost/chatbot/chatbot/bot.php">Chatbot</a></li>
                            <li><a href="/hospital/hms/audio/index.html">Feel Free</a></li>
                            <li><a href="/hospital/hms/social/index.html">Media</a></li>
                            <li><a href="/hospital/hms/live/index.html">Live call</a></li>
                            <li><a href="http://localhost/hospital/hms/test">dashboard</a></li>
                              
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                        <a class="btn btn-success" href="hms/user-login.php">LOGIN</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    
     <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>


   


            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img class="d-block w-100" src="assets/images/slider/slider_2.jpg" alt="Second slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">COUNSELLING & HEALTH CARE BY MSEC</h5>
            
                         
                    
                    </div>
                </div>
                
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/slider_3.jpg" alt="Third slide">
                      <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">COUNSELLING & HEALTH CARE BY MSEC</h5>
            
                         
                    
                    </div>
              
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    
  <!--  ************************* Logins ************************** -->
    
    
     <section id="logins" class="our-blog container-fluid">
        <div class="container">
        <div class="inner-title">

                <h2>Logins</h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/patient.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Student Login</h6>
                                <a href="hms/user-login.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/doctor.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Doctor login</h6>
                                <a href="hms/doctor" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/admin.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Counsellor Login</h6>
                    
                                <a href="hms/admin" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                    

                    
                    
                </div>
            </div>
            
        </div>
    </section>  







    <!-- ################# Our Departments Starts Here#######################--->


    <section id="services" class="key-features department">
        <div class="container">
            <div class="inner-title">

                <h2>Our Key Features</h2>
                <p>Take a look at some of our key features</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-heartbeat"></i>
                        <h5>24/7 Hour Care</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-ribbon"></i>
                        <h5>Live call</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                       <i class="fab fa-monero"></i>
                        <h5>User friendly</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-capsules"></i>
                        <h5>AI Chat Bot</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-prescription-bottle-alt"></i>
                        <h5>college network</h5>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="far fa-thumbs-up"></i>
                        <h5>Reduce Depression</h5>

                    </div>
                </div>
            </div>






        </div>

    </section>
    
    
  
    
    <!--  ************************* About Us Starts Here ************************** -->
        
    <section id="about_us" class="about-us">
        <div class="row no-margin">
            <div class="col-sm-6 image-bg no-padding">
                
            </div>
            <div class="col-sm-6 abut-yoiu">
                <h3>About Msec Counselling & Health Care</h3>
<?php
$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
while ($row=mysqli_fetch_array($ret)) {
?>

    <p><?php  echo $row['PageDescription'];?>.</p><?php } ?>
            </div>
        </div>
    </section>    
    
    
            <!--  ************************* Gallery Starts Here ************************** -->
        <div id="gallery" class="gallery">    
           <div class="container">
              <div class="inner-title">

                <h2>Our Gallery</h2>
                <p>View Our Gallery</p>
            </div>
              <div class="row">
                

        <div class="gallery-filter d-none d-sm-block">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">live call</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Mental illness</button>
            <button class="btn btn-default filter-button" data-filter="spray">Depression relief</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">AI ChatBot</button>
        </div>
        <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="assets/images/gallery/gallery_02.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_03.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/gallery/gallery_04.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_05.jpg" class="img-responsive">
            </div>

          

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_06.jpg" class="img-responsive">
            </div>

        </div>
    </div>
       
       
       </div>
        <!-- ######## Gallery End ####### -->
    
    
     <!--  ************************* Contact Us Starts Here ************************** -->
    
    <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">

            <div  class="col-sm-12 cop-ck">
                <form method="post">
                <h2 >Contact Form</h2>
                    <div class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm"  required></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required ></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter  Message:</label></div>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                        </div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                         <a href="#"><button class="btn btn-success btn-sm" type="submit" name="submit">Send Message</button></a>
                        </div>
                </div>
            </form>
            </div>
     
        </div>
    </section>
    
    
    
    
    
    <!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">
       
                <div class="col-md-6 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#services">Services</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#logins">Logins</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">

<?php
$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
while ($row=mysqli_fetch_array($ret)) {
?>


                        <?php  echo $row['PageDescription'];?> <br>
                        Phone: <?php  echo $row['MobileNumber'];?> <br>
                        Email: <a href="mailto:<?php  echo $row['Email'];?>" class=""><?php  echo $row['Email'];?></a><br>
                        Timing: <?php  echo $row['OpenningTime'];?>
                    </address>

        <?php } ?>





                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
         Msec Mental Health Care
                
     
            </div>

        </div>
        <div id="chat-container">
        <div id="messages"></div>
        <input type="text" id="messageInput" placeholder="Type a message...">
        <button id="sendButton">Send</button>
    </div>
    <div id="virtualBot"></div>

    <script>
        // Function to get AI response based on user message
        function getAIResponse(message) {
            const lowerMessage = message.toLowerCase();
            const responses = {
                greetings: [
                    "Hello! How can I assist you today?",
                    "Hi there! How can I help you?",
                    "Greetings! What can I do for you?"
                ],
                wellBeing: [
                    "I'm just a bot, but I'm functioning well! How about you?",
                    "I'm here and ready to help. How are you feeling today?",
                    "Thanks for asking! How are you doing?"
                ],
                farewells: [
                    "Goodbye! Take care!",
                    "See you later! Have a great day!",
                    "Farewell! Don't hesitate to reach out if you need anything."
                ],
                identity: [
                    "I'm your friendly assistant bot!",
                    "I'm here to help with your questions and provide information.",
                    "My name is Assistant Bot. How can I assist you today?"
                ],
                capabilities: [
                    "I can help with various topics, including mental health support, general queries, and more.",
                    "I offer information, support, and a bit of humor. Just ask!",
                    "I’m here to assist with your questions and provide guidance on various topics."
                ],
                jokes: [
                    "Why don’t scientists trust atoms? Because they make up everything!",
                    "Why did the scarecrow win an award? Because he was outstanding in his field!",
                    "Why don’t skeletons fight each other? They don’t have the guts!"
                ],
                weather: [
                    "I can’t provide real-time weather updates, but you can check a weather app for the latest information.",
                    "Unfortunately, I don't have real-time weather capabilities. Try a weather website or app.",
                    "For current weather conditions, please use a dedicated weather service."
                ],
                help: [
                    "I'm here for you. If you need mental health support or someone to talk to, consider reaching out to a professional.",
                    "Need help? Feel free to ask anything or talk about what's on your mind.",
                    "I'm here to assist. Let me know how I can help or if you need support."
                ],
                mentalHealth: [
                    "It's important to take care of your mental health. Consider talking to a mental health professional for support.",
                    "Remember, it's okay to ask for help if you're feeling overwhelmed. Seeking support is a sign of strength.",
                    "If you're feeling down, try to reach out to friends, family, or a mental health professional for support.",
                    "Taking time for self-care is crucial. Engage in activities that bring you joy and relaxation.",
                    "Feeling stressed? Try some deep breathing exercises or meditation to help calm your mind."
                ],
                selfCare: [
                    "Taking time for self-care is important. Consider activities that help you relax and recharge.",
                    "Self-care can include hobbies, relaxation techniques, or spending time with loved ones. What do you enjoy?",
                    "Engage in activities that make you feel good and relaxed. Self-care is essential for mental well-being."
                ],
                motivation: [
                    "Keep going! Every step forward, no matter how small, is a step in the right direction.",
                    "Remember, progress takes time. Stay motivated and focused on your goals!",
                    "You’ve got this! Believe in yourself and keep pushing forward."
                ],
                encouragement: [
                    "You are stronger than you think. Keep believing in yourself!",
                    "Stay positive and keep striving for your goals. You're doing great!",
                    "Believe in your abilities and keep moving forward. You've got this!"
                ],
                resources: [
                    "For professional help, consider reaching out to a mental health professional or counselor.",
                    "There are many resources available online for mental health support. Reach out for help if needed.",
                    "You can find support through various mental health organizations and helplines."
                ],
                commands: [
                    "You can ask me about my name, what I can do, request a joke, seek support, or just chat.",
                    "Try asking about my capabilities, tell me a joke, or request some help if you need it.",
                    "Feel free to ask about anything, including mental health support, jokes, or general questions."
                ],
                default: [
                    "I'm not sure how to respond to that. If you need help with mental health, don't hesitate to reach out to a professional.",
                    "I’m not familiar with that topic. Can you ask something else or let me know if you need support?",
                    "I don't have an answer for that, but I'm here to help with other questions or concerns you might have."
                ]
            };

            // Determine the response category
            if (lowerMessage.includes('hello') || lowerMessage.includes('hi')) {
                return getRandomResponse(responses.greetings);
            } else if (lowerMessage.includes('how are you')) {
                return getRandomResponse(responses.wellBeing);
            } else if (lowerMessage.includes('bye')) {
                return getRandomResponse(responses.farewells);
            } else if (lowerMessage.includes('what is your name')) {
                return getRandomResponse(responses.identity);
            } else if (lowerMessage.includes('what can you do')) {
                return getRandomResponse(responses.capabilities);
            } else if (lowerMessage.includes('joke')) {
                return getRandomResponse(responses.jokes);
            } else if (lowerMessage.includes('weather')) {
                return getRandomResponse(responses.weather);
            } else if (lowerMessage.includes('help') || lowerMessage.includes('support')) {
                return getRandomResponse(responses.help);
            } else if (lowerMessage.includes('stress') || lowerMessage.includes('anxiety') || lowerMessage.includes('depressed') || lowerMessage.includes('sad')) {
                return getRandomResponse(responses.mentalHealth);
            } else if (lowerMessage.includes('self-care') || lowerMessage.includes('relax')) {
                return getRandomResponse(responses.selfCare);
            } else if (lowerMessage.includes('motivated') || lowerMessage.includes('encouragement')) {
                return getRandomResponse(responses.motivation.concat(responses.encouragement));
            } else if (lowerMessage.includes('resources') || lowerMessage.includes('help') || lowerMessage.includes('support')) {
                return getRandomResponse(responses.resources);
            } else if (lowerMessage.includes('commands')) {
                return getRandomResponse(responses.commands);
            } else {
                return getRandomResponse(responses.default);
            }
        }

        // Function to get a random response from an array
        function getRandomResponse(array) {
            return array[Math.floor(Math.random() * array.length)];
        }

        // Function to update bot's facial expression
        function updateBotFace(expression) {
            const botFace = document.getElementById('virtualBot');
            switch (expression) {
                case 'happy':
                    botFace.style.backgroundImage = "url('ff.jpeg')";
                    break;
                case 'neutral':
                    botFace.style.backgroundImage = "url('OIP(1).jpeg')";
                    break;
                case 'thinking':
                    botFace.style.backgroundImage = "url('OIP.jpeg')";
                    break;
                case 'surprised':
                    botFace.style.backgroundImage = "url('surprised.png')";
                    break;
                case 'smile':
                    botFace.style.backgroundImage = "url('R.png')";
                    break;
                default:
                    botFace.style.backgroundImage = "url('ok.jpeg')";
            }
        }

        // Function to make the bot speak
        function speak(text) {
            const utterance = new SpeechSynthesisUtterance(text);
            window.speechSynthesis.speak(utterance);
        }

        // Event listener for the send button
        document.getElementById('sendButton').addEventListener('click', () => {
            const messageInput = document.getElementById('messageInput');
            const message = messageInput.value.trim();
            if (message) {
                // Display user message
                displayMessage('user', message);
                updateBotFace('thinking'); // Set bot to thinking face
                
                // Generate AI response
                const aiResponse = getAIResponse(message);
                setTimeout(() => {
                    displayMessage('ai', aiResponse);
                    speak(aiResponse); // Make the bot speak
                    updateBotFace('happy'); // Set bot to happy face
                }, 500); // Simulate response delay
                messageInput.value = '';
            }
        });

        function displayMessage(sender, text) {
            const messagesDiv = document.getElementById('messages');
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${sender}`;
            messageDiv.innerHTML = `
                <div class="avatar">${sender === 'user' ? 'U' : 'A'}</div>
                <div class="bubble">${text}</div>
            `;
            messagesDiv.appendChild(messageDiv);
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
        }

        // Function to toggle the chat box visibility
        function toggleChat() {
            const chatContainer = document.getElementById('chat-container');
            chatContainer.classList.toggle('show');
        }

        // Event listener for the virtual bot
        document.getElementById('virtualBot').addEventListener('click', toggleChat);
    </script>
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>



</html>