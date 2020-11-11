<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Poppins&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;600&family=Poppins&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/portfolio.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="../css/lightslider.css">
    <script type="text/javascript" src="../javascripts/JQuery3.3.1.js"></script>
    <script type="text/javascript" src="../javascripts/lightslider.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   



</head>

<body onload="loaders()">


    

    <div onclick="toggleSA()" class="reviewRate">Rate
        <div class="add"> <img src="../images/add.png" alt=""></div>
    </div>

    <div id="loader"></div>
    <div class="breaker"></div>
    <a href="#" class="backtop">
        <img src="../images/screw.png" class="screw" alt="">
        <img src="../images/up.png" class="upload" alt="">
    </a>

    <button onclick="toggle()" class="hamb">
        <span class="fas fa-hamburger"></span>
    </button>

    <div class="hamnavi">
        <div class="navel">
            <a href="#">Home</a>



            <!-- --------------------------redirecting to my details page---------------------------------- -->

            <a href="mydetail.php">My Details</a>


            <!-- ------------------------------------------------------------------------------------------- -->
            <a href="#about">About</a>
            <a href="#skill">Skills</a>
            <a href="#project">Projects</a>
            <a href="#edu">Education</a>
            <a href="#contact">Contact</a>
        </div>


        <a href="../index.php"> <button>Intro</button></a>

    </div>


    <header>
        <div class="containerN ">
            <!-- /* -------------------------------Navigation bar----------------------------- */ -->

            <nav id="navi" class="flex items-center justify-between">
                <div class="left flex items-center">
                    <div class="branding flex items-center"><img src="../images/hashtag.png" alt=""></div>
                    <div>
                        <a href="#">Home</a>

                        <!-- --------------------------redirecting to my details page---------------------------------- -->

                        <a href="mydetail.php">My Details</a>


                        <!-- ------------------------------------------------------------------------------------------- -->
                        <a href="#about">Career Ob.</a>
                        <a href="#skill">Skills</a>
                        <a href="#project">Projects</a>
                        <a href="#edu">Education</a>
                        <a href="#contact">Contact</a>
                    </div>

                </div>
                <div class="right">
                    <a href="../index.php"> <button>Intro</button></a>
                </div>
            </nav>


            <!-- 
        /* -------------------------------End Navigation bar----------------------------- */


        /* ===================================================================================================== */
        
        /* -------------------------------Hero Section----------------------------- */ -->

            <div class="hero flex items-center justify-between">

                <div class="lef flex-1 flex justify-center"><img src="../images/IronMan.png" alt=""></div>

                <div class="righ flex-1 ">

                    <h1>No matter what<br><span> i will succeed</span></h1>
                    <p>Success is not final; failure is not fatal it is the courage to continue that counts
                    </p>
                    <div>


                        <!-- -----------------------------------------------------download sample cv pdf----------------------------------- -->

                        <a  onclick="cv()"> <button>Download CV</button></a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- 
  

/* -------------------------------End Hero Section----------------------------- */


/* ===================================================================================================== */

/* -------------------------------Career Objective----------------------------- */

-->


    <!-- 
     -->

    <div id="about" class="containerA">

        <div class="containerC flex-1">
            <div class="box">
                <div class="imgBx">
                    <img src="../images/careerO1.jpg" alt="">
                </div>
                <div class="content">
                    <div>
                        <h2>OBJECTIVE</h2>
                        <p>Keen in thinking new idea and Developing it.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="abouttext flex-1">
            <h1>CAREER OBJECTIVE</h1>

            <p>A enthusiastic Computer Engineer with keen intrest in Web development,Game development,Vedio Editting and
                many more,Looking to work as a Software Developer in a firm where I can work on upcoming trends and
                technologies.</p>
            <div>
                <a href="../images/website.svg"></a>
                <a href="../images/facebook.svg"></a>
                <a href="../images/twitter.svg"></a>
                <a href="../images/pintrest.svg"></a>
                <a href="../images/instagram.svg"></a>

            </div>
        </div>
    </div>


    <!-- 
        /* -------------------------------End Career Objective----------------------------- */


        /* ===================================================================================================== */
        
        /* -------------------------------Skill Section----------------------------- */
    
    
    -->
    <?php
              $conn = mysqli_connect("remotemysql.com","MIgbqQ56pk","k4T02GvM0s","MIgbqQ56pk") or die("Connection failed");
                $sql = "select * from skill";
                $result = mysqli_query($conn,$sql) or die("query failed");
                
                   
                ?>

    <!-- ------------------------------------dynamically accessing the skills from data base----------------- -->


    <!-- ---------------------------------------------------------------------------------------------------- -->



    <section id="skill" class="services">



        <div class="container">

            <h1 class="section-heading"><span>Skills</span> Section</h1>
            <p>Keen in thinking new idea and Developing it</p>

            <div class="card-wrapper">

                <?php while($res = mysqli_fetch_assoc($result)){ ?>
                <div class="overcard">
                    <div class="card">
                        <img src="<?php echo $res['image'];?>" alt="">

                        <h2><?php echo $res['skills'];?></h2>
                        <p><?php echo $res['desci'];?></p>
                    </div>
                </div>
                <?php
                    }
                ?>




            </div>
        </div>

    </section>



    <!-- 
        /* -------------------------------End Skill Section----------------------------- */


        /* ===================================================================================================== */


           /* -------------------------------Problem-solving----------------------------- */
    
    
    -->




    <section class="counter-wrapper">
        <div>
            <div>

                <i class='fab fa-hackerrank'></i>
            </div>
            <div>
                <h3><span class="counter" data-count="2700">2700</span>+</h3>
                <h5>Hackerrank</h5>
            </div>
        </div>
        <div>
            <div>

                <i class='fab fa-cotton-bureau'></i>
            </div>
            <div>
                <h3><span class="counter" data-count="2200">2200</span>+</h3>
                <h5>Codeforces</h5>
            </div>
        </div>
        <div>
            <div>

                <i class='fab fa-docker'></i>
            </div>
            <div>
                <h3><span class="counter" data-count="500">500</span>K+</h3>
                <h5>Reviews</h5>
            </div>
        </div>
    </section>



    <!-- 
        /* -------------------------------End Problem-solving----------------------------- */


        
        /* -------------------------------Free Lancer----------------------------- */
    
    
    -->

    <section class="freelancer">
        <h1>curious to learn and create</h1>
        <p>We provide high standard clean website for your bussiness solutions.</p>




        <!-- -----------------------------------------down load sample cv pdf------------------------------------- -->





        <a href="cv()"> <button>Download CV</button></a>
    </section>

    <!-- 
        /* -------------------------------End Freelancer----------------------------- */


        /* ===================================================================================================== */

        
        /* -------------------------------Personal summary----------------------------- */
    
    
    -->


    <section class="personalsummmary">
        <div class="text">
            <div class="heading">PERSONAL <span>SUMMARY</span></div>
            <div class="subheading">I am a energetic, ambitious and a confindent person with an ability to work
                extremely well with deadlines.I am a team player and belive that team work helps to increase efficiency
                and productivity. My willingness to do better everyday helps me to strive hard and deliver the best
                results.</div>
        </div>
    </section>
    <section class="personalsummmary">
        <div class="text">
            <div class="heading">HOBBIES <span>AND</span> INTEREST</div>
            <div class="subheading">I enjoy playing games both outdoor as well as mobile games and also keen in
                developing them.I also enjoy reading books, trying out new cuisines and stay updated with therecents,
                upcoming and present technologies.</div>
        </div>
    </section>




    <!-- 
        /* -------------------------------End Personal summary----------------------------- */


        /* ===================================================================================================== */
        
        /* -------------------------------Projects----------------------------- */
    
    
    -->


    <!-- -----------------------------web pages that is being redirected in this section is random not made by me----------------------------- -->

    <section id="project" class="myprojectdetail">


        <div class="myproject"><span>MY </span>PROJECT</div>
        <div class="undermyprojectdetail">Think , Explore and Create </div>

        <div class="teamdetCon">
            <div class="crous" style="z-index: 10000;">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        
                        <section id="project" class="myprojectdetail">
                            <div class="project">
            
                                <div class="container">
                                    <div class="container1">
                                        <div class="wrapper">
                                            <a>
                                                <img onclick="imgt12()" class="4" src="../images/back1.png" alt="">
                                            </a>
            
                                            <div class="title">HBUB</div>
                                            <div class="place">( Helion Beast Unkown Battleground )</div>
            
                                        </div>
                                        <div class="content">
                                            <p>Developed in Unreal engine for fun and enjoyment. </p>
                                            <div class="button">
                                                <div class="btn">
                                                    <a onclick="hbubf()"> <button>Get Link</button></a>
            
                                                </div>
                                                <div class="btn">
                                                    <a href="https://www.jetphotos.com/registration/D-HBUB">
                                                        <button>Webpage</button> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                
                            </div>
                        </section>
            
            
                      </div>
                      <div class="carousel-item">
                        
                        <section id="project" class="myprojectdetail">
                            <div class="project">
            
                          
            
                                <div class="container">
                                    <div class="container2">
                                        <div class="wrapper">
                                            <a>
                                                <img class="5" onclick="imgt22()" src="../images/mario.PNG" alt="">
                                            </a>
            
                                            <div class="title">DICE MARIO</div>
                                            <div class="place">( Pygame Module developed )</div>
            
                                        </div>
                                        <div class="content">
                                            <p>Something new creative from old , As Old is Gold.</p>
                                            <div class="button">
                                                <div class="btn">
                                                    <a onclick="mariof()"> <button>Get Link</button></a>
            
                                                </div>
                                                <div class="btn">
                                                    <a href="http://www.mariodice.com/home"> <button>Webpage</button> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                             
                            </div>
                        </section>
            
                      </div>
                      <div class="carousel-item">
                        <section id="project" class="myprojectdetail">
                            <div class="project">
            
            
                              
                                <div class="container">
                                    <div class="container3">
                                        <div class="wrapper">
                                            <a>
                                                <img onclick="imgt32()" class="6" src="../images/tic.png" alt="">
                                            </a>
            
                                            <div class="title">Tic-Tac-Toe</div>
                                            <div class="place">( Simple Python Algorithm )</div>
            
                                        </div>
                                        <div class="content">
                                            <p>Every thing starts from scratch and any applicaton breaks to code.</p>
                                            <div class="button">
                                                <div class="btn">
                                                    <a onclick="ticf()"> <button>Get Link</button></a>
            
                                                </div>
                                                <div class="btn">
                                                    <a href="https://playtictactoe.org/"> <button>Webpage</button> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
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
        </div>

        <div class="gret900">

            <section id="project" class="myprojectdetail">
                <div class="project">

                    <div class="container">
                        <div class="container1">
                            <div class="wrapper">
                                <a>
                                    <img onclick="imgt12()" class="4" src="../images/back1.png" alt="">
                                </a>

                                <div class="title">HBUB</div>
                                <div class="place">( Helion Beast Unkown Battleground )</div>

                            </div>
                            <div class="content">
                                <p>Developed in Unreal engine for fun and enjoyment. </p>
                                <div class="button">
                                    <div class="btn">
                                        <a onclick="hbubf()"> <button>Get Link</button></a>

                                    </div>
                                    <div class="btn">
                                        <a href="https://www.jetphotos.com/registration/D-HBUB">
                                            <button>Webpage</button> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="container2">
                            <div class="wrapper">
                                <a>
                                    <img class="5" onclick="imgt22()" src="../images/mario.PNG" alt="">
                                </a>

                                <div class="title">DICE MARIO</div>
                                <div class="place">( Pygame Module developed )</div>

                            </div>
                            <div class="content">
                                <p>Something new creative from old , As Old is Gold.</p>
                                <div class="button">
                                    <div class="btn">
                                        <a onclick="mariof()"> <button>Get Link</button></a>

                                    </div>
                                    <div class="btn">
                                        <a href="http://www.mariodice.com/home"> <button>Webpage</button> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="container3">
                            <div class="wrapper">
                                <a>
                                    <img onclick="imgt32()" class="6" src="../images/tic.png" alt="">
                                </a>

                                <div class="title">Tic-Tac-Toe</div>
                                <div class="place">( Simple Python Algorithm )</div>

                            </div>
                            <div class="content">
                                <p>Every thing starts from scratch and any applicaton breaks to code.</p>
                                <div class="button">
                                    <div class="btn">
                                        <a onclick="ticf()"> <button>Get Link</button></a>

                                    </div>
                                    <div class="btn">
                                        <a href="https://playtictactoe.org/"> <button>Webpage</button> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>



    <!-- 
        /* -------------------------------End Project----------------------------- */


        /* ===================================================================================================== */
        
     

        /* ===================================================================================================== */
        
        /* -------------------------------Qualification----------------------------- */
    
    
    -->

    <section id="edu" class="education">
        <div class="image">
            <div class="quote">PEICE OF PAPER DOESN'T DECIDE <span>FUTURE</span></div>
        </div>

    </section>

    <div class="edu">
        <section class="review">
            <div class="container">
                <div class="teamscard">
                    <div class="card">
                        <div class="header">
                            <img src="../images/apsambala.jpg" alt="">
                            <h2>10Th EXAM</h2>
                            <div class="place">Army Public School<br>Ambala Cantt</div>
                        </div>

                        <div class="more">



                            <!-- ------------------------------------------------dwonload sample pdf through link given in here---------------------- -->


                            <a onclick="tenth()">Get Link</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <img src="../images/apddehuroad.jpg" alt="">
                            <h2>12Th EXAM</h2>
                            <div class="place">Army Public School<br>Dehuroad</div>
                        </div>


                        <div class="more">
                            <a href="twelth()">Get Link</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <img src="../images/AIT-army-institute-of-techn.jpg" alt="">
                            <h2>SE EXAM</h2>
                            <div class="place">Army Institute of Technology<br>Pune</div>
                        </div>

                        <div class="more">
                            <a onclick="coll()">Get Link</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>



    <!-- 

    /* -------------------------------End Education Qualification----------------------------- */

    /* ===================================================================================================== */

           
        /* -------------------------------Contact Us----------------------------- */
    
    
    -->

    <section id="contact" class="contact">
        <div class="container">
            <h1 class="section-heading">Contact <span>Detail</span></h1>
            <p>We provide high standard clean website for your company</p>

        </div>
        <div class="card-wrapper">
            <div class="card">
                <span class="fas fa-mobile-alt"></span>
                <h1>Call On</h1>
                <h6>+985 123 7856</h6>
            </div>
            <div class="card">
                <span class="fa fa-envelope"></span>
                <h1>Email Me At</h1>
                <h6>support@companyname.com</h6>
            </div>
            <div class="card">
                <span class="fas fa-map-marker-alt"></span>
                <h1>Visit Address</h1>
                <h6>#107/12 Od Complex,Mathura Cantt</h6>
            </div>



        </div>
        <div class="correctsend" >
            <embed src="../images/Check.gif"  ></embed>
            </div>
        <form action = 'savecontacts.php' method='POST'>
            <div class="input-wrap">
                <input type="text" placeholder="Your name *" name= 'name' id='name' required>
                <input type="email" placeholder="Your Email *" name= 'email' id='email' required>
            </div>
            <div class="input-wrap-2">
                <input type="text" placeholder="Your Subject..." name= 'desc' id='desc' required>
                <textarea cols="30" rows="10" placeholder="Your Message..." name= 'mess' id='mess' required></textarea>
            </div>
            <div>
                 <button class="send" onclick="contact()" >Send Message</button>
            </div>
        </form>

    </section>



    <!-- 

    /* -------------------------------End Contact Us----------------------------- */

    /* ===================================================================================================== */
    
    /* -------------------------------Footer----------------------------- */
 -->

    <footer>
        <div class="main-content">
            <div class="left box">
                <h2>About <spa>Me</spa>
                </h2>
                <div class="content">
                    <p>Neither train nor plane, neither GPS nor human caress can take you to the address of happiness</p>
                    <div class="social">
                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-linkedin-in"></span></a>
                        <a href="#"><span class="fab fa-github"></span></a>
                    </div>
                </div>
            </div>

            <div class="center box">
                <h2>Address</h2>
                <div class="content">
                    <div class="place text">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text"> #107/12 Od Complex,Mathura Cantt</span>
                    </div>
                    <div class="phone text">
                        <span class="fas fa-mobile-alt"></span>
                        <span class="text"> +91-8053675048</span>
                    </div>
                    <div class="email text">
                        <span class="fas fa-envelope-open"></span>
                        <span class="text"> ay701548@gmail.com</span>
                    </div>
                </div>
            </div>

            <div class="right box">
                <h2>
                    <spa>Contact</spa> Detail
                </h2>
                <div class="content">
                    <form action="#">
                        <div class="email">
                            <div class="text">Email *</div>
                            <input type="email" required>
                        </div>
                        <div class="msg">
                            <div class="text">Message *</div>
                            <textarea name="" id="" cols="25" rows="2" required></textarea>
                        </div>
                        <div class="btn1"><button type="submit">Send</button></div>
                    </form>
                </div>
            </div>

        </div>
        <div class="copyright">
            <spa>Copyright</spa>&copy; akashyadav | Computer Engineer
        </div>
    </footer>



    <!-- 
        
/* -------------------------------End Footer----------------------------- */

/* ===================================================================================================== */
       
/* -------------------------------End----------------------------- */
    
    
    -->


    <script type="text/javascript" src="../javascripts/script.js"></script>
    <script>
        var preloader = document.getElementById("loader");

        setTimeout(function loaders() {
            preloader.style.display = "none";
        }, 3000)
    </script>
    <script>
        function toggle() {
            const breaker = document.querySelector('.breaker');
            breaker.classList.toggle('active')
            const hamnavi = document.querySelector('.hamnavi');
            hamnavi.classList.toggle('active')
        };

        function toggleSA() {
            const breaker = document.querySelector('.breaker');
            breaker.classList.toggle('active')
            setTimeout(() => {
                window.location.replace("reviewadd.php");

            }, 2000);

        };



    </script>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->



    <script>
        function cv(){
            window.open("cv.html")
        }
        function hbubf(){
            window.open("hbub.html")
        }
        function mariof(){
            window.open("mario.html")
        }
        function ticf(){
            window.open("tic.html")
        }
        function tenth(){
            window.open("10th.html")
        }
        function twelth(){
            window.open("12th.html")
        }
        function coll(){
            window.open("college.html")
        }
    </script>
    <script>
        const counters = document.querySelectorAll('.counter');
        function runCounter(){
            counters.forEach(counter => {
                counter.innerText = 0;
                let target = +counter.dataset.count;
                let step = target/100;
                let countIt = function () {
                    let displayedCount = +counter.innerText;
                    if(displayedCount < target){
                        counter.innerText =Math.ceil(displayedCount + step);
                        setTimeout(countIt,10);
                        
                    }
                    else{
                        counter.innerText = target;
                    }
                }
                countIt();

            });
        }
    
        let countersection = document.querySelector('.counter-wrapper');
        let options = {
            rootMargin:'0px 0px -100px 0px '
        }
        const sectionobserver = new IntersectionObserver(function(entries){
            if(entries[0].isIntersecting){
                runCounter();


            }

        }, options)
        sectionobserver.observe(countersection);
    </script>
    <script>


    </script>


    <script>
        const contacts = document.querySelector(".send");
        function contact() {
            contacts.classList.toggle("active")
            setTimeout(contacts.classList.toggle("active"),3700);
                
            }
      


        const img1 = document.querySelector(".teamdetCon .container1 .wrapper img");
        function imgt1() {
            img1.classList.toggle("active");
        }



    </script>
    <script>
        const img2 = document.querySelector(".teamdetCon .container2 .wrapper img");
        function imgt2() {
            img2.classList.toggle("active");
        }
    </script>
    <script>
        const img3 = document.querySelector(".teamdetCon .container3 .wrapper img");
        function imgt3() {
            img3.classList.toggle("active");
        }
    </script>
    <script>
        const img12 = document.querySelector(".gret900 .container1 .wrapper img");
        function imgt12() {
            img12.classList.toggle("active");
        }



    </script>
    <script>
        const img22 = document.querySelector(".gret900 .container2 .wrapper img");
        function imgt22() {
            img22.classList.toggle("active");
        }
    </script>
    <script>
        const img32 = document.querySelector(".gret900 .container3 .wrapper img");
        function imgt32() {
            img32.classList.toggle("active");
        }
    </script>
    



</body>

</html>