<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Poppins&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;600&family=Poppins&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/portfolio.css">

    <link rel="stylesheet" href="../css/lightslider.css">
    <script type="text/javascript" src="../javascripts/JQuery3.3.1.js"></script>
    <script type="text/javascript" src="../javascripts/lightslider.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


</head>

<body onload="loaders()">


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
            <a href="#contact">Contact Us</a>
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
                        <a href="#contact">Contact Us</a>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quis ab perferendis tempore aut
                        omnis
                    </p>
                    <div>
                        <button>Download CV</button>
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

    <!-- ------------------------------------dynamically accessing the skills from data base----------------- -->

    <?php
                $conn = mysqli_connect("localhost","root","","portfolio") or die("Connection Failed");
                $sql = "select * from skill";
                $result = mysqli_query($conn,$sql) or die("query failed");
                
                   
                ?>
    <!-- ---------------------------------------------------------------------------------------------------- -->



    <section id="skill" class="services">
        <div class="add"> <a href="skilladd.php"> <img src="../images/add.png" alt=""></a> </div>
        <div class="remove"> <a href="skilldelete.php"> <img src="../images/remove.png" alt=""></a></div>

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

        
        /* -------------------------------Free Lancer----------------------------- */
    
    
    -->

    <section class="freelancer">
        <h1>curious to learn and create</h1>
        <p>We provide high standard clean website for your bussiness solutions.</p>
        <button>Download CV</button>
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




    <section id="project" class="myprojectdetail">


        <div class="myproject"><span>MY </span>PROJECT</div>
        <div class="undermyprojectdetail">Think , Explore and Create </div>

        <div class="teamdetCon">
            <ul id="autoWidth" class="cs-hidden teamsdet">

                <!------------------------------------------------------ -->
                <li class="item-a">

                    <section id="project" class="myprojectdetail">
                        <div class="project">

                            <div class="container">
                                <div class="container1">
                                    <div class="wrapper">
                                        <a>
                                            <img onclick="imgt1()" class="1" src="../images/back1.png" alt="">
                                        </a>

                                        <div class="title">HBUB</div>
                                        <div class="place">( Helion Beast Unkown Battleground )</div>

                                    </div>
                                    <div class="content">
                                        <p>Developed in Unreal engine for fun and enjoyment. </p>
                                        <div class="button">
                                            <div class="btn">
                                                <button>Get Link</button>

                                            </div>
                                            <div class="btn">
                                                <button>Webpage</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </section>
                </li>

                <!------------------------------------------------------ -->
                <li class="item-b">

                    <section id="project" class="myprojectdetail">
                        <div class="project">

                            <div class="container">
                                <div class="container2">
                                    <div class="wrapper">
                                        <a>
                                            <img class="2" onclick="imgt2()" src="../images/mario.PNG" alt="">
                                        </a>

                                        <div class="title">DICE MARIO</div>
                                        <div class="place">( Pygame Module developed )</div>

                                    </div>
                                    <div class="content">
                                        <p>Something new creative from old , As Old is Gold.</p>
                                        <div class="button">
                                            <div class="btn">
                                                <button>Get Link</button>

                                            </div>
                                            <div class="btn">
                                                <button>Webpage</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </section>
                </li>

                <!------------------------------------------------------ -->
                <li class="item-c">

                    <section id="project" class="myprojectdetail">
                        <div class="project">



                            <div class="container">
                                <div class="container3">
                                    <div class="wrapper">
                                        <a>
                                            <img onclick="imgt3()" class="3" src="../images/tic.png" alt="">
                                        </a>

                                        <div class="title">Tic-Tac-Toe</div>
                                        <div class="place">( Simple Python Algorithm )</div>

                                    </div>
                                    <div class="content">
                                        <p>Every thing starts from scratch and any applicaton breaks to code.</p>
                                        <div class="button">
                                            <div class="btn">
                                                <button>Get Link</button>

                                            </div>
                                            <div class="btn">
                                                <button>Webpage</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </li>
                <!------------------------------------------------------ -->


            </ul>
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
                                        <button>Get Link</button>

                                    </div>
                                    <div class="btn">
                                        <button>Webpage</button>
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
                                        <button>Get Link</button>

                                    </div>
                                    <div class="btn">
                                        <button>Webpage</button>
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
                                        <button>Get Link</button>

                                    </div>
                                    <div class="btn">
                                        <button>Webpage</button>
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
        
        /* -------------------------------Problem-solving----------------------------- */
    
    
    -->




    <section class="counter-wrapper">
        <div>
            <div>

                <i class='fab fa-hackerrank'></i>
            </div>
        </div>
        <div></div>
        <div></div>
    </section>



    <!-- 
        /* -------------------------------End Problem-solving----------------------------- */


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
                            <a href="#">Get Link</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <img src="../images/apddehuroad.jpg" alt="">
                            <h2>12Th EXAM</h2>
                            <div class="place">Army Public School<br>Dehuroad</div>
                        </div>


                        <div class="more">
                            <a href="#">Get Link</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <img src="../images/AIT-army-institute-of-techn.jpg" alt="">
                            <h2>SE EXAM</h2>
                            <div class="place">Army Institute of Technology<br>Pune</div>
                        </div>

                        <div class="more">
                            <a href="#">Get Link</a>
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

        <form action="">
            <div class="input-wrap">
                <input type="text" placeholder="Your name *" required>
                <input type="email" placeholder="Your Email *" required>
            </div>
            <div class="input-wrap-2">
                <input type="text" placeholder="Your Subject..." required>
                <textarea name="" id="" cols="30" rows="10" placeholder="Your Message..." required></textarea>
            </div>
            <div>
                <button>Send Message</button>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus laboriosam repellendus suscipit
                        consequuntur veniam at dolorum asperiores eaque facilis.</p>
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
                        <div class="btn"><button type="submit">Send</button></div>
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
        function toggle() {
            const breaker = document.querySelector('.breaker');
            breaker.classList.toggle('active')
            const hamnavi = document.querySelector('.hamnavi');
            hamnavi.classList.toggle('active')

        };

        var preloader = document.getElementById("loader");

        setTimeout(function loaders() {
            preloader.style.display = "none";
        }, 4000
        )


    </script>

    <script>
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