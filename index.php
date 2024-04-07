<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");


  session_start(); 

//   if (!isset($_SESSION['username'])) {
//   	$_SESSION['msg'] = "You must log in first";
//   	header('location: login.php');
  
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  	
  }
?>
<!DOCTYPE html>
<html>
<head>
<style>.button-89 {
  --b: 3px;   /* border thickness */
  --s: .45em; /* size of the corner */
  --color: white;
  
  padding: calc(.5em + var(--s)) calc(.9em + var(--s));
  color: var(--color);
  --_p: var(--s);
  background:
    conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--color) 0)
    var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
  transition: .3s linear, color 0s, background-color 0s;
  outline: var(--b) solid #0000;
  outline-offset: .6em;
  font-size: 16px;

  border: 0;

  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-89:hover,
.button-89:focus-visible{
  --_p: 0px;
  outline-color: var(--color);
  outline-offset: .05em;
}

.button-89:active {
  background: var(--color);
  color: #fff;
}


/* CSS styles for search bar */
		.search-container {
			display: inline-block;
			position: relative;
			width: 250px;
			margin-top: 20px;
		}
		.search-input {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
		}
		.search-dropdown {
			display: none;
			position: absolute;
			top: 100%;
			left: 0;
			z-index: 1;
			min-width: 100%;
			background-color: #f1f1f1;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
			padding: 5px 0;
		}
		.search-dropdown a {
			display: block;
			color: black;
			padding: 5px;
			text-decoration: none;
		}
		.search-dropdown a:hover {
			background-color: #ddd;
		}
		/* CSS styles for animations */
		@keyframes fadeInDown {
			0% {
				opacity: 0;
				transform: translateY(-10px);
			}
			100% {
				opacity: 1;
				transform: translateY(0);
			}
		}
		.search-dropdown.show {
			animation: fadeInDown 0.2s ease-in-out;
			display: block;
		}
		
		

</style>
</head>
<body>

<div class="header">
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Learn With Fun</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/magnific-popup.css">

        <link href="css/aos.css" rel="stylesheet">

        <link href="css/templatemo-nomad-force.css" rel="stylesheet">
</div>

<main>

            <section class="hero" id="hero">
                <div class="heroText">
                    <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                      Learn With Fun
                    </h1>

                    <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                        <?php  if (isset($_SESSION['username'])) : ?>
    	<text color="White"><p style="color: white;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></text>
    	<!--<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>-->
    <?php endif ?>
    
    <ul>
    <?php
    // session_start(); // start the session
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  	
    if (isset($_SESSION['username'])) {
      // user is logged in, show logout button
      echo '<li><a href="index.php?logout=1" style="color: white;"><button onclick="clearLocalStorage()" class="button-89" role="button">Logout</button></a></li>';
    } else {
        
      // user is not logged in, show login button
      echo '<li><a href="login.php" style="color: white;"><button class="button-89" role="button">Login</button></a></li>';
      


/* CSS */

    }
    ?>
  </ul>
  
  
	<script>
	
	function clearLocalStorage() {
     // clear app cache
    if (typeof window.applicationCache !== 'undefined') {
        window.applicationCache.update();
        window.applicationCache.swapCache();
        window.applicationCache.addEventListener('updateready', function() {
            window.applicationCache.swapCache();
            location.reload();
        }, false);
    }

    // clear cache
    if (caches) {
        caches.keys().then(function(names) {
            for (let name of names)
                caches.delete(name);
        });
    }

    // clear cookies
    document.cookie.split(";").forEach(function(c) {
        document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/");
    });

    // clear local storage
    localStorage.clear();

    // clear session storage
    sessionStorage.clear();
    
    
    
const dbName = '/idbfs';
const dbVersion = 1;

// Delete the existing database
const deleteRequest = indexedDB.deleteDatabase(dbName);
const deleteRequest1 = indexedDB.deleteDatabase('myDatabase');

deleteRequest.onerror = function(event) {
  console.error('Error deleting database');
}
    
}

		// JavaScript function for search bar functionality
		function searchFunction() {
			let input = document.querySelector('.search-input');
			let dropdown = document.querySelector('.search-dropdown');
			let results = document.querySelectorAll('.search-dropdown a');

			for (let i = 0; i < results.length; i++) {
				if (results[i].innerHTML.toLowerCase().includes(input.value.toLowerCase())) {
					results[i].style.display = 'block';
				} else {
					results[i].style.display = 'none';
				}
			}

			if (input.value === '') {
				dropdown.classList.remove('show');
			} else {
				dropdown.classList.add('show');
			}
		}
	</script>
  
  
                    </p>
                </div>

                <div class="videoWrapper">
                    <img src="images/portfolio/thought-catalog-gv-T-OjLe4c-unsplash.jpeg" autoplay="" loop="" class="custom-video" >


                </div>

                <div class="overlay"></div>
            </section>

            <nav class="navbar navbar-expand-lg bg-light shadow-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <strong>Learn With Fun</strong>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 100px;">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                
                                <div style="position: relative; top: -18px;" class="search-container">
		<input type="text" class="search-input" placeholder="Search..." onkeyup="searchFunction()">
		<div class="search-dropdown" id="searchDropdown">
			<a href="#math_game">Math Game</a>
			<a href="#english_game">Jumble Words Game</a>

		</div>
	</div>
                                
                                </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#hero">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#about">Motive</a>
                            </li>



                            <li class="nav-item">
                                <a class="nav-link" href="#math_game">Games</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <section class="section-padding pb-0" id="about">
                <div class="container mb-5 pb-lg-5">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-3" data-aos="fade-up">Learning Through Games...</h2>
                        </div>

                        <div class="col-lg-6 col-12 mt-3 mb-lg-5">
                            <p class="me-4" data-aos="fade-up" data-aos-delay="300">Learning through games is an innovative approach to education that involves using games as a tool for teaching and learning. The idea is to use games to engage students in a way that is both fun and educational. Games have the ability to make learning more enjoyable and engaging, which can lead to increased motivation and better learning outcomes.

There are many different types of games that can be used for learning, including board games, card games, video games, and mobile games. Games can be designed to teach a wide range of subjects, from language and math to history and science.

One of the key benefits of learning through games is that it can help students to develop a range of important skills. Games can help to improve critical thinking, problem-solving, decision-making, and collaboration skills. They can also help to improve memory, attention, and focus.</p>
                        </div>

                        <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">
                            <p data-aos="fade-up" data-aos-delay="500">Another benefit of learning through games is that it can make learning more accessible and inclusive. Games can be designed to accommodate different learning styles, and they can be adapted to suit the needs of different learners, including those with disabilities.

Learning through games can be used in a wide range of educational settings, from classrooms to after-school programs and online learning platforms. Games can be used to supplement traditional teaching methods or as a standalone tool for learning.

In conclusion, learning through games is a fun and effective way to engage students in the learning process. By using games to teach, educators can create a more engaging and inclusive learning environment that promotes active participation and better learning outcomes.





</p>
                        </div>

                    </div>
                </div>


                            <div id="math_game" class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up" id="news">
                               
                                      
                                <div class="news-top w-100" data-aos="fade-up">
 <br>   
                                <br>
                                   <br>
                                      <br>
                                    <a href="/math_game/index.php" class="news-image-hover news-image-hover-success">
                                        <img src="images/games/Screenshot_6.png" size="10000"class="img-fluid news-image" alt="" width="4400px" height="200px" onclick="sendData('<?php echo $_SESSION['email']; ?>', '<?php echo $_SESSION['password']; ?>')">
                                    </a>

                                    <div class="news-category bg-success text-white">New</div>
                                </div>

                                <div class="news-bottom w-100" >
                                    <div class="news-text-info">
                                        <h5 class="news-title">

                                            <a href="/math_game/index.php" class="news-title-link" onclick="sendData('<?php echo $_SESSION['username']; ?>', '<?php echo $_SESSION['email']; ?>')">Math Game</a>
                                        </h5>

                                        <span class="text-muted" >Math Game is a multiple-choice question (MCQ) game that is based on mathematics. In this game, players will be presented with a series of questions related to various mathematical concepts such as addition,substraction,multiplication and division. The game will have different difficulty levels, ranging from easy to advanced, allowing players of all skill levels to participate.

The game will consist of a set of rounds, each round consisting of a specific number of questions. Each question will be displayed on the screen with a set of answer options, and the player will have a limited amount of time to select the correct answer. The game will provide instant feedback, informing the player whether the answer selected is correct or incorrect.

The scoring system in Math Game will be based on the number of questions answered correctly and the time taken to answer them. Players who answer more questions correctly in a shorter amount of time will score more points than those who take longer or answer fewer questions correctly.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                    <div class="news-top w-100" data-aos="fade-up">
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                    
                                <br>
                                   <br>
                                  
                      <br>
                        <a href="/english_game/index.php" class="news-image-hover news-image-hover-success">
                            <img src="images/games/Screenshot_7.png" size="10000"class="img-fluid news-image" alt="" width="4400px" height="200px">
                        </a>

                        <!-- <div class="news-category bg-success text-white">New</div> -->
                    </div>

                    <div class="news-bottom w-100" id="english_game">
                        <div class="news-text-info">
                            <h5 class="news-title">

                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                                <a href="/english_game/index.php" class="news-title-link">Jumble Words Game</a>
                            </h5>

                            <span class="text-muted"  >Jumble Words Game is an interactive multiple-choice question (MCQ) game that challenges players to test their knowledge of English language vocabulary, grammar, and syntax. The game consists of a series of questions that are presented in a jumbled format, where the words of the question are out of order.

Players are required to unscramble the jumbled words to form a correct sentence, phrase, or question that makes sense in English. Once the correct answer is selected, players can move on to the next question. The game features multiple levels of difficulty, with each level offering increasingly challenging questions.

Jumble words game is designed to improve players' understanding of English language rules and usage. It is an excellent tool for students learning English as a second language or for native English speakers looking to test and expand their knowledge of the language.</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
            </section>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
            <section class=" contact section-padding" id="contact">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-12 mx-auto">

                            <h2 class="mb-4 text-center" data-aos="fade-up">Dont' be shy, write to us</h2>

                            <form action="https://formspree.io/f/mjvdpvwv"
 method="POST" class="contact-form" role="form" data-aos="fade-up">

                                <div class="row">

                                    <div class="col-lg-6 col-6">
                                        <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>

                                        <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
                                    </div>

                                    <div class="col-lg-6 col-6">
                                        <label for="email" class="form-label">Email <sup class="text-danger">*</sup></label>

                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                    </div>

                                    <div class="col-12 my-4">
                                        <label for="message" class="form-label">How can we help?</label>

                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Tell us about the project" required></textarea>

                                    </div>

                                  
                                </div>

                                <div class="col-lg-5 col-12 mx-auto mt-5">
                                    <button type="submit" class="form-control">Send Message</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>



        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h5 class="text-white">
                            <i class="bi-geo-alt-fill me-2"></i>
                            State of
                        </h5>

                        <a href="mailto:info@company.com" class="custom-link mt-3 mb-5">
                            info@company.com
                        </a>
                    </div>

                    <div class="col-6">
                        <p class="copyright-text mb-0">Copyright © GamesOn 2023

                        <!-- <br><br>Design: <a href="https://templatemo.com/page/1" target="_parent">TemplateMo</a></p> -->

                    </div>

                    <div class="col-lg-3 col-5 ms-auto">
                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>

                </div>
            </section>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <script src="js/custom.js"></script>

</body>
</html>