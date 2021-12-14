<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Catalog</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-video-catalog.css">
<!--

TemplateMo 552 Video Catalog

https://templatemo.com/tm-552-video-catalog

-->
</head>

<body>
    <?php
session_start();
include("connect.php"); ?>


    <div class="tm-page-wrap mx-auto">
        <div class="position-relative">
            <div class="position-absolute tm-site-header">
                <div class="container-fluid position-relative">
                    <div class="row">
                        <!-- <div class="col-7 col-md-4">
                            <a href="index.html" class="tm-bg-black text-center tm-logo-container">
                                <i class="fas fa-video tm-site-logo mb-3"></i>
                            </a>
                        </div> -->
                        <div class="col-5 col-md-8 ml-auto mr-0">
                            <div class="tm-site-nav">
                                <nav class="navbar navbar-expand-lg mr-0 ml-auto" id="tm-main-nav">
                                    <button class="navbar-toggler tm-bg-black py-2 px-3 mr-0 ml-auto collapsed" type="button"
                                        data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span>
                                            <i class="fas fa-bars tm-menu-closed-icon"></i>
                                            <i class="fas fa-times tm-menu-opened-icon"></i>
                                        </span>
                                    </button>
                                    <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                                        <ul class="navbar-nav text-uppercase">
                                            <li class="nav-item active">
                                                <a class="nav-link tm-nav-link" href="index.php">Videos <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="projects.php">Projects</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="blogs.php">Blogs</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="logout.php">Log Out</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-welcome-container text-center text-white">
                <div class="tm-welcome-container-inner">
                    <br><br>
                    <a href="#content" class="btn tm-btn-animate tm-btn-cta tm-icon-down">
                        <span>Discover</span>
                    </a>
                </div>
            </div>

            <div id="tm-video-container">
                <video autoplay muted loop id="tm-video">
                    <!-- <source src="video/sunset-timelapse-video.mp4" type="video/mp4"> -->
                        <source src="video/Lit-Hub group.mp4" type="video/mp4">
                </video>    
            </div>
            
            <i id="tm-video-control-button" class="fas fa-pause"></i>
        </div>

        <div class="container-fluid">
            <div id="content" class="mx-auto tm-content-container">
                <main>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-page-title mb-4">Our Video Catalog</h2>
                            <div class="tm-categories-container mb-5">
                                <h3 class="tm-text-primary tm-categories-text">Categories:</h3>
                                <ul class="nav tm-category-list">
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link active">All</a></li>
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Data Structure</a></li>
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Machine Learning</a></li>
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">AI</a></li>
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Web Development</a></li>
                                </ul>
                            </div>        
                        </div>
                    </div>
                    
                    <div class="row tm-catalog-item-list">
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="https://s3.us-east-1.amazonaws.com/contents.newzenler.com/4902/library/creenshot-2021-03-25-at-6-04-58605c8465818bd_lg.png" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="https://www.youtube.com/watch?v=0IAPZzGSbME&list=PLAXnLdrLnQpRcveZTtD644gM9uzYqJCwr" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>    
                            <div class="p-4 tm-bg-index tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">DATA STRUCTURE by Abdul Bari - YOUTUBE</h3>
                                <p class="tm-catalog-item-text">Lecture Series on Data Structures by Abdul Bari.
                                    Data structure is a particular way of organizing data in a computer so that it can be used effectively.<br> We bring you the playlist of one of the finest educators.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="https://dataintelliage.com/wp-content/uploads/2021/06/392227-what-is-data-science-dataquest-500x300.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="https://www.coursera.org/specializations/jhu-data-science?utm_source=gg&utm_medium=sem&utm_campaign=03-DataScience-JHU-IN&utm_content=03-DataScience-JHU-IN&campaignid=12034932697&adgroupid=121414562332&device=c&keyword=coursera%20data%20science%20courses&matchtype=p&network=g&devicemodel=&adpostion=&creativeid=490621287355&hide_mobile_promo&gclid=Cj0KCQiA2NaNBhDvARIsAEw55hh8skW38t-H-wxT3mDB9p36NdnBEBOZw_LIUiyH8XxHl_cpmtwhckQaAh-tEALw_wcB" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>
                            <div class="p-4 tm-bg-index tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">DATA SCIENCE by DR. Jeff Leek - COURSERA</h3>
                                <p class="tm-catalog-item-text">Data science continues to evolve as one of the most promising and in-demand career paths for skilled professionals.
                                     Today, successful data professionals understand that they must advance past the traditional skills of analyzing large amounts of data.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="https://i.pinimg.com/564x/6e/00/0b/6e000b3d65c1904e5171fd77ccf72d86.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="https://www.youtube.com/watch?v=LHBE6Q9XlzI" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>                            
                            <div class="p-4 tm-bg-index tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">PYTHON by freeCodeCamp.org - YOUTUBE</h3>
                                <p class="tm-catalog-item-text">This Python data science course will take you from knowing nothing about Python to coding and analyzing data with Python using tools like Pandas, NumPy, and Matplotlib..</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="https://media.awslagi.com/wp-content/uploads/2021/09/03160350/AZURE140-500x300.jpeg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="https://docs.microsoft.com/en-us/learn/azure/" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>    
                            <div class="p-4 tm-bg-index tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Microsoft Azure Learning. </h3>
                                <p class="tm-catalog-item-text">The Microsoft Azure Training Library is the database for learning paths, courses, quizzes, and labs, with training provided by field experts to educate IT professionals and give them the confidence they need to learn Microsoft Azure and improve their skills.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="https://www.uncodemy.com/wp-content/uploads/2021/07/Object-oriented-Data-Structure-Algorithms-Training-500x300.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="https://www.youtube.com/watch?v=7WhnYwoBY24&list=PLlhM4lkb2sEhf5NlWeYh_gdcN49pHjVP0" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>
                            <div class="p-4 tm-bg-index tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">OOPS in JAVA by Smart Programming - Youtube.</h3>
                                <p class="tm-catalog-item-text">Object-Oriented Programming or OOPs refers to languages that uses objects in programming. Object-oriented programming aims to implement real-world entities like inheritance, hiding, polymorphism etc in programming.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/harry.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="https://www.youtube.com/watch?v=6mbwJ2xhgzM&list=PLu0W_9lII9agiCUZYRsvtGTXdxkzPyItg" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>                            
                            <div class="p-4 tm-bg-index tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">WEB DEVELOPMENT by Code With Harry - YOUTUBE</h3>
                                <p class="tm-catalog-item-text">I started this course as an attempt to teach you web development in a fun, easy way! The aim of this course is to teach you how to build a high-quality, responsive, and modern website using HTML, CSS, and JavaScript.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="https://trainingsinvelachery.in/wp-content/uploads/2020/01/android.png" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="https://www.udemy.com/course/complete-android-n-developer-course/?LSNPUBID=JVFxdTr9V80&ranEAID=JVFxdTr9V80&ranMID=39197&ranSiteID=JVFxdTr9V80-3.BixvLc6r_9ACJwkpnyyg&utm_medium=udemyads&utm_source=aff-campaign" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>    
                            <div class="p-4 tm-bg-index tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">ANDROID DEVELOPMENT - UDEMY.</h3>
                                <p class="tm-catalog-item-text">Android software development is the process by which applications are created for devices running the Android operating system. Google states that "Android apps can be written using Kotlin, Java, and C++ languages"</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="https://assets.thehansindia.com/h-upload/2021/01/29/500x300_1027846-blockchain-technology.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="https://www.youtube.com/watch?v=SSo_EIwHSd4" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>
                            <div class="p-4 tm-bg-index tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">BLOCKCHAIN TECHNOLOGY by Simply Explained - YOUTUBE</h3>
                                <p class="tm-catalog-item-text">Blockchain technology is most simply defined as a decentralized, distributed ledger that records the provenance of a digital asset.Blockchain is most simply defined as a decentralized, distributed ledger technology that records the provenance of a digital asset. </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="https://excelsior.fun/wp-content/uploads/2021/05/flutter.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="https://www.educative.io/courses/learn-dart-first-step-to-flutter" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>                            
                            <div class="p-4 tm-bg-index tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">FLUTTER - EDUCATIVE</h3>
                                <p class="tm-catalog-item-text">Flutter Google's UI toolkit for building beautiful, natively compiled applications for mobile (Android, iOS ) desktop (Linux, Mac, Windows, Google Fuchsia) and the web from a single codebase.It is offered as an open-source technology and available for developers and designers free of charge</p>
                            </div>
                        </div>
                    </div>

                    <!-- Catalog Paging Buttons -->
                    <div>
                        <ul class="nav tm-paging-links">
                            <li class="nav-item active"><a href="#" class="nav-link tm-paging-link">1</a></li>
                            <li class="nav-item"><a href="#" class="nav-link tm-paging-link">2</a></li>
                            <li class="nav-item"><a href="#" class="nav-link tm-paging-link">3</a></li>
                            <li class="nav-item"><a href="#" class="nav-link tm-paging-link">4</a></li>
                            <li class="nav-item"><a href="#" class="nav-link tm-paging-link">></a></li>
                        </ul>
                    </div>
                </main>
            </div> <!-- tm-content-container -->
        </div>

    </div> <!-- .tm-page-wrap -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function setVideoSize() {
            const vidWidth = 1920;
            const vidHeight = 1080;
            let windowWidth = window.innerWidth;
            let newVidWidth = windowWidth;
            let newVidHeight = windowWidth * vidHeight / vidWidth;
            let marginLeft = 0;
            let marginTop = 0;

            if (newVidHeight < 500) {
                newVidHeight = 500;
                newVidWidth = newVidHeight * vidWidth / vidHeight;
            }

            if(newVidWidth > windowWidth) {
                marginLeft = -((newVidWidth - windowWidth) / 2);
            }

            if(newVidHeight > 720) {
                marginTop = -((newVidHeight - $('#tm-video-container').height()) / 2);
            }

            const tmVideo = $('#tm-video');

            tmVideo.css('width', newVidWidth);
            tmVideo.css('height', newVidHeight);
            tmVideo.css('margin-left', marginLeft);
            tmVideo.css('margin-top', marginTop);
        }

        $(document).ready(function () {
            /************** Video background *********/

            setVideoSize();

            // Set video background size based on window size
            let timeout;
            window.onresize = function () {
                clearTimeout(timeout);
                timeout = setTimeout(setVideoSize, 100);
            };

            // Play/Pause button for video background      
            const btn = $("#tm-video-control-button");

            btn.on("click", function (e) {
                const video = document.getElementById("tm-video");
                $(this).removeClass();

                if (video.paused) {
                    video.play();
                    $(this).addClass("fas fa-pause");
                } else {
                    video.pause();
                    $(this).addClass("fas fa-play");
                }
            });
        })
    </script>
</body>

</html>