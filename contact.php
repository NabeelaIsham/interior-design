<?php
include 'partials/header.php';
?>
        <h1>Contact Us</h1>
    </section>
    <section class="location">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63218.601592640596!2d80.23474088073102!3d7.982137862944698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afcdd29a3acb139%3A0x96538a6cb601c21b!2sGalgamuwa!5e0!3m2!1sen!2slk!4v1689244250240!5m2!1sen!2slk"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>
                            Room No.1,1st floor,Building 66
                        </h5>
                        <p>street 989,zone 53,Doha,Qatar</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>
                            +97430218527
                        </h5>
                        <p>Monday To Saturday, 9 AM to 10 PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>
                            info@daralsalamqatar.com <br>interiors@daralsalamqatar.com
                        </h5>
                        <p>Email us Your Query </p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="form-handler.php" method="post">
                    <input type="text" name="name" placeholder="Enter your Name" required>
                    <input type="email" name="email" placeholder="Enter Email address" required>
                    <input type="text" name="subject" placeholder="Enter Subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" class="hero-btn red-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>


<?php
include 'partials/footer.php';
?>