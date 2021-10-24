<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Welcome</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light navbar-expand-sm fixed-top" id="navbar">
            <div class="container-fluid" >
                        <a class="navbar-brand" href="./index.php">shyam sundar.</a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#Navbar" id="togglerIcon">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="Navbar">
                            <ul class="navbar-nav" id="navigation">
                                    <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#reviews">Reviews</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#pricing">Packages</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#contactForm">Contact</a></li>
                            </ul>
                            <div class="navbar-nav ms-auto">
                                <a href="#contactForm" role="button" class="btn text-white" id="bookNowBtn" style="background-color: #29323d;">Book now</a>
                            </div>
                        </div>
            </div>
        </nav>
    </header>


    <main>
<!--.............................Main heading Section..........................................-->
        <div class="container" id="masthead">
            <div class="row row-content">
                <div class="col-xs-4 col-md-5">
                    <h2>Capturing<br>Moments</h2>
                    <br>
                    <p class="text-muted">Freezing moments in time to create everlasting memories.</p>
                    <a href="#contactForm" role="button" class="btn btn-primary" id="mastheadBtn">Get in Touch!</a>
                </div>
                <div class="col-xs-4 col-md-7">
                    <img id="illustrationPhotographer" src="./images/photographer.jpg" alt="Photographers illustration">
                </div>
            </div>
        </div>
<!--.................................................................................................-->
<!--.............................Skiils description Section..........................................-->
        <div class="container" id="skillsContainer">
            <div class="row justify-content-center" id="mainSummaryContainer">
                <div class="col-xs-12 col-md-4" id="summary1">
                    <div class="container" id="subContainer1">
                        <div class="row justify-content-center">
                            <div class="col">
                                <img class="summaryIcon" src="./images/shutter.png" alt="Shutter icon"> 
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <h5>2 years of professional experience</h5>  
                                <p class="text-muted">Having successfully completed several shoots of different types, Shyam is confident in his abilities to provide you with the best pictures for any event!</p> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4" id="summary2">
                    <div class="container" id="subContainer1">
                        <div class="row justify-content-center">
                            <div class="col">
                                <img class="summaryIcon" src="./images/shutter.png" alt="Shutter icon"> 
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <h5>More than 20 Satisfied customers</h5> 
                                <p class="text-muted">Over the past 6 months, Shyam has taken up freelance photography through Carousell and has received over 20 <br><b>5-star reviews!</b></p>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4" id="summary3">
                    <div class="container" id="subContainer1">
                        <div class="row justify-content-center">
                            <div class="col">
                                <img class="summaryIcon" src="./images/shutter.png" alt="Shutter icon"> 
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <h5>Complimentary editing service</h5> 
                                <p class="text-muted">Raw pictures will be sent to you right after the shoot. Pictures will also be edited and returned to you between 3-7 days depending on the size of the shoot.</p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--........................................................................................-->

<!--.............................Gallery Section..........................................-->
        <div class="container" id="gallery">
            <div class="jumbotron">
                <h3 class="display-4" style="padding-top: 3rem; font-weight: 350;">Gallery</h3>
                <p class="lead" style="font-size: 110%;">Shyam specializes in landscape and portait photography and especially enjoys documenting stories through his images.</p>
                
            </div>
            
        
            <div class="row gx-3">
                <div class="col-lg-4 col-md-12 mb-lg-0">
                    <img src="./images/landscape1.jpg" class="w-100 shadow-1-strong rounded mb-2"  alt=""/>
                    <img src="./images/landscape10.jpg" class="w-100 shadow-1-strong rounded mb-2 h-70" alt="image of jurong lake gardens"/>
                </div>
                <div class="col-lg-4 col-md-12 mb-sm-0 mb-lg-0">
                    <img src="./images/person1.jpg" class="w-100 shadow-1-strong rounded mb-2" alt=""/>
                    <img src="./images/landscape9.jpg" class="w-100 shadow-1-strong rounded mb-2"  alt="image of marina bay sands"/>
                </div>
                <div class="col-lg-4 col-md-12 mb-lg-0">
                    <img src="./images/landscape8.jpg" class="w-100 shadow-1-strong rounded mb-2"  alt="image of the church of the good shepherd"/>
                    <img src="./images/landscape7.jpg" class="w-100 shadow-1-strong rounded mb-2" alt=""/>
                </div>
            </div>
        </div>
<!--.........................................................................................-->
<!--.............................Reviews Section..........................................-->
        <div class="container" id="reviews">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-md-9">
                </div>
                <div class="col-xs-12 col-md-3 text-center">
                    <h3 style="padding-top: 5rem; font-weight: 700; text-transform: uppercase; font-size: 180%; padding-bottom: 5rem;">Hear what others have to say</h3>
                </div>
            </div>
        </div>
<!--................................................................................................-->
<!--.......................................Pricing Section..........................................-->
        <div class="container" id="pricing">
            <div class="row justify-content-center" style="padding-top: 2rem;" >
                <div class="col-auto" style="text-align: center;">
                    <h3 style="font-weight: 700;">Photography Packages</h3>
                    <p class="text-muted">Choose the package that suits your needs best!</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <ul class="nav nav-tabs" style=" border-radius: 25px;  background-color: #414753;">
                        <li class="nav-item">
                            <a href="#tab1" class="nav-link active" role="tab" data-bs-toggle="tab" style="border-radius: 20px;  color:#29323d;">INDIVIDUAL</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab2" class="nav-link" role="tab" data-bs-toggle="tab" style="color: #29323d; border-radius: 20px; color:#29323d;">GROUP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane container fade show active" id="tab1"> 
                <div class="row justify-content-center">
                    <div class="package col-auto rounded text-center">
                        <h4 style="text-align: center; font-weight: 700; padding-top: 1rem; color: #3b4754;">BASIC</h4> <br>
                        <h6 class="text-muted" style="text-align: center;">
                            <p>1 location</p> <br>
                            <p>1 hour shoot</p> <br>
                            <p>Unlimited pictures</p> <br>
                            <p>Up to 50 pictures edited</p> 
                            <hr>
                        </h6>
                        <h3 style="font-weight: 700; text-align: center; padding-top: 0.25rem; padding-bottom: 0.5rem; color: #3b4754;">$95</h3>
                        <a href="#contactForm" role="button" class="getStarted btn text-white">Get Started</a>
                    </div>
                    <div class="package col-auto rounded text-center">
                        <h4 style="text-align: center; font-weight: 700; padding-top: 1rem; color: #3b4754;">CLASSIC</h4> <br>
                        <h6 class="text-muted" style="text-align: center;">
                            <p>Up to 2 locations</p> <br>
                            <p>2 hour shoot</p> <br>
                            <p>Unlimited pictures</p> <br>
                            <p>Up to 110 pictures edited</p>
                            <hr> 
                        </h6>
                        <h3 style="font-weight: 700; text-align: center; padding-top: 0.25rem; padding-bottom: 0.5rem; color: #3b4754;">$160</h3>
                        <a href="#contactForm" role="button" class="getStarted btn text-white">Get Started</a>
                    </div>
                    <div class="package col-auto rounded text-center">
                        <h4 style="text-align: center; font-weight: 700; padding-top: 1rem; color: #3b4754;">PREMIUM</h4> <br>
                        <h6 class="text-muted" style="text-align: center;">
                            <p>Up to 4 locations</p> <br>
                            <p>5 hour shoot</p> <br>
                            <p>Unlimited pictures</p> <br>
                            <p>Up to 300 pictures edited</p> 
                            <hr>
                        </h6>
                        <h3 style="font-weight: 700; text-align: center; padding-top: 0.25rem; padding-bottom: 0.5rem; color: #3b4754;">$360</h3>
                        <a href="#contactForm" role="button" class="getStarted btn text-white">Get Started</a>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane container fade" id="tab2">
                <div class="row justify-content-center">
                    <div class="package col-auto rounded text-center">
                        <h4 style="text-align: center; font-weight: 700; padding-top: 1rem; color: #3b4754;">BASIC</h4> <br>
                        <h6 class="text-muted" style="text-align: center;">
                            <p>1 location</p> <br>
                            <p>1 hour shoot</p> <br>
                            <p>Unlimited pictures</p> <br>
                            <p>Up to 50 pictures edited</p> 
                            <hr>
                        </h6>
                        
                        <h3 style="font-weight: 700; text-align: center; padding-top: 0.25rem; padding-bottom: 0.5rem; color: #3b4754;">$110</h3>
                        <a href="#contactForm" role="button" class="getStarted btn text-white">Get Started</a>
                    </div>
                    <div class="package col-auto rounded text-center">
                        <h4 style="text-align: center; font-weight: 700; padding-top: 1rem; color: #3b4754;">CLASSIC</h4> <br>
                        <h6 class="text-muted" style="text-align: center;">
                            <p>Up to 2 locations</p> <br>
                            <p>2 hour shoot</p> <br>
                            <p>Unlimited pictures</p> <br>
                            <p>Up to 110 pictures edited</p>
                            <hr> 
                        </h6>
                        <h3 style="font-weight: 700; text-align: center; padding-top: 0.25rem; padding-bottom: 0.5rem; color: #3b4754;">$200</h3>
                        <a href="#contactForm" role="button" class="getStarted btn text-white">Get Started</a>
                    </div>
                    <div class="package col-auto rounded text-center">
                        <h4 style="text-align: center; font-weight: 700; padding-top: 1rem; color: #3b4754;">PREMIUM</h4> <br>
                        <h6 class="text-muted" style="text-align: center;">
                            <p>Up to 4 locations</p> <br>
                            <p>5 hour shoot</p> <br>
                            <p>Unlimited pictures</p> <br>
                            <p>Up to 300 pictures edited</p> 
                            <hr>
                        </h6>
                        <h3 style="font-weight: 700; text-align: center; padding-top: 0.25rem; padding-bottom: 0.5rem; color: #3b4754;">$420</h3>
                        <a href="#contactForm" role="button" class="getStarted btn text-white">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
<!--.......................................................................................................-->
 <!--.............................Contact Section..................................."https://formspree.io/f/mnqlyblj".......-->
        <div class="container-fluid" id="contactForm" style="padding-bottom: 4rem; padding-top: 2rem; background-color: rgba(243, 243, 243, 0.521);">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <form action="mail.php" method="POST">
                                    <h3 style="font-weight: 700;">CONTACT</h3>
                                    <div class="form-group">
                                        <label for="name">Name*</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name..." required>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact">Contact</label>
                                        <input type="number" class="form-control" name="contact" id="contact" placeholder="Your Contact number...">
                                    </div>
                                    <div class="form-group">
                                        <label for="emailID">Email ID*</label>
                                        <input type="email" class="form-control" name="emailAddress" id="emailID" placeholder="Your Email..." required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message*</label> <br>
                                        <textarea class="form control rounded" name="message" id="message" placeholder="Enter Message..." rows="5" style="border-color:#bdc1c5c2; padding: 0.5rem;" required></textarea>
                                    </div> 
                                    <button class="btn text-white" id="formBtn" type="submit" value="Send">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div> 
        </div>
    <!--.......................................................................................................-->
    </main>
    <!--.............................Footer Section..........................................-->
    <footer>
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-auto">
                    <h6 style="text-align: center;">@ Copyright SHYAM SUNDAR, 2021. All Rights Reserved.</h6>
                </div>
            </div>
            
        </div>
    </footer>
    <script src="js/bootstrap.js"></script>
    
</body>
</html>