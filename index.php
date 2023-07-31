<?php
include 'partials/header.php';
?>
        

            <div class="form-box login">
                <h2>Login</h2>
                <form action="login-logic.php">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" name="email"required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">
                            Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button class="btn" type="submit" name= "submit">Login</button>
                    <div class="login-register">
                        <p>Don't have an account ?<a href="#" class="register-link"> Register</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <h2>Registration</h2>
                <form action="register-logic.php" method="post">
                    <div class="input-box">
                        <div class="input-box">
                            <span class="icon"><ion-icon name="person"></ion-icon></span>
                            <input type="text" name="name" required>
                            <label>Fullname</label>
                        </div>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="text" name="username" required>
                        <label>User name</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="REpassword" required>
                        <label>Retype Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">
                            agree to the terms & conditions</label>
                    </div>
                    <button class="btn" type="submit" name="submit">Register</button>
                    <div class="login-register">
                        <p>Already have an account ?<a href="#" class="login-link"> Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="modern">
        <div class="text-box">
            <h1>Modern Interior Designs</h1>
            <p>
                Design your Dream with Perfect Architectural and Interior Ideas
            </p>
            <a href="" class="hero-btn">Discover</a>
        </div>
    </section>


    <section class="Designs">
        <h1>Designs for You</h1>
        <p>All your designs will be illustrated
            with the high advanced techniques to emphasize
            the design language. </p>
        <div class="row">
            <div class="Desings-col">
                <h3>3D Visualization</h3>
                <p>Manual sketches, 3d models, physical models,detail drawings (plans, elevations, etc.),for your
                    extraordinary heavenly space.</p>
            </div>
            <div class="Desings-col">
                <h3>Interior Designing and Decor</h3>
                <p>Manual sketches, 3d models, physical models,detail drawings (plans, elevations, etc.),for your
                    extraordinary heavenly space.</p>
            </div>
            <div class="Desings-col">
                <h3>Exterior Architecture</h3>
                <p>Manual sketches, 3d models, physical models,detail drawings (plans, elevations, etc.),for your
                    extraordinary heavenly space.</p>
            </div>
            <div class="Desings-col">
                <h3>Name Boards</h3>
                <p>Manual sketches, 3d models, physical models,detail drawings (plans, elevations, etc.),for your
                    extraordinary heavenly space.</p>
            </div>
        </div>

    </section>
    <section class="Templates">
        <h1>Our Designs</h1>
        <p>our design team works closely with highly experienced specialist, consultants, structural, mechanical and
            electrical
            engineers
            & quantity surveyors, in order to meet the supreme
            results in terms
            of the design from quality of standard to cost effective
            mechanisms.</p>
        <div class="row">
            <div class="Templates-col">
                <img src="Images/B8.jpg">
                <div class="layer">
                    <h3>BedRooms</h3>
                </div>
            </div>
            <div class="Templates-col">
                <img src="Images/D4.jpg">
                <div class="layer">
                    <h3>Dinnig Rooms</h3>
                </div>
            </div>
            <div class="Templates-col">
                <img src="Images/LI4.jpg">
                <div class="layer">
                    <h3>Living Rooms</h3>
                </div>
            </div>
            <div class="Templates-col">
                <img src="Images/L7.jpg">
                <div class="layer">
                    <h3>Lobby</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="works">
        <h1>Our Team</h1>
        <p>Procedure of working in a Project</p>
        <div class="row">
            <div class="works-col">
                <img src="Images/c1.jpg">
                <h3>Design Concepts and Consultancy</h3>
                <p>We work al ongside o u r c l i e n t s t o
                    develop an in-depth
                    understanding of their tastes and
                    needs to ensure all
                    stylistic and functional requirements
                    are met. Our forte
                    is to deliver diverse range of high-end
                    creative designs
                    for clients and developers across the
                    city and
                    surrounding counties.</p>
            </div>
            <div class="works-col">
                <img src="Images/a1.jpg">
                <h3>Design Approach</h3>
                <p>During the design stage, We make
                    extraordinary pleasant
                    e f f o r t f r o m p r e c e d e n t r e s e a r c h ,
                    planning, to
                    preliminary design stage to light up the
                    concept
                    that highly meet the essence of your
                    Design base.</p>
            </div>
            <div class="works-col">
                <img src="Images/r1.jpg">
                <h3>Reports and Finding</h3>
                <p>our design team works closely with highly experienced
                    specialist,
                    consultants, structural, mechanical and electrical
                    engineers
                    & quantity surveyors, in order to meet the supreme
                    results in terms
                    of the design from quality of standard to cost effective
                    mechanisms.</p>
            </div>
        </div>

    </section>
    <section class="review">
        <h1>Customers of Our Projects</h1>
        <p>Reviews of Some Customers</p>
        <div class="rows">
            <div class="review-col">
                <img src="Images/images.jfif">
                <div>
                    <p>
                        Delivered on Time and <br>attaractive ideas
                    </p>
                    <h3>David Alan</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="review-col">
                <img src="Images/images (1).jfif">
                <div>
                    <p>
                        Good Customer Interaction and<br> Attractive models
                    </p>
                    <h3>Angelo Karen</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>


        </div>
    </section>

    <section class="cta">
        <h1>Design Your Projects Anywhere From the world</h1>
        <a href="" class="hero-btn">
            Contact Us
        </a>
    </section>
   
    <?php
include 'partials/footer.php';
?>