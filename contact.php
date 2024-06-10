<!-- HEADER -->
<?php include 'header.php'; ?>

    <!-- CONTENT -->
    <!-- Header Banner -->
    <section class="banner-header middle-height section-padding bg-img" data-overlay-dark="5" data-background="img/alphard-bg.jpg">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h6>Get in touch</h6>
                        <h1>Contact <span>Us</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Box -->
    <div class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <span class="icon omfi-envelope"></span>
                        <h5>Email us</h5>
                        <p>info@hayleyglobalvacation.com</p> <i class="numb omfi-envelope"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <span class="icon omfi-location"></span>
                        <h5>Our address</h5>
                        <p>Dubai, Water Tower, Office 123</p> <i class="numb omfi-location"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <span class="icon ti-time"></span>
                        <h5>Opening Hours</h5>
                        <p>Mon-Sun: 8 AM - 7 PM</p> <i class="numb ti-time"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item active"> <span class="icon omfi-phone"></span>
                        <h5>Call us</h5>
                        <p>+971 52-333-4444</p> <i class="numb omfi-phone"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row">
                <!-- Form -->
                <div class="col-lg-6 col-md-12 mb-30">
                    <div class="form-box">
                        <h5>Get in touch</h5>
                        <form method="post" @submit.prevent="submitForm" class="contact__form">
                            <!-- form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                                </div>
                            </div>
                            <!-- form elements -->
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" v-model="formData.name" type="text" placeholder="Name *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" v-model="formData.email" type="email" placeholder="Email *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="contact" v-model="formData.contact" type="text" placeholder="Phone Number *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="subject" v-model="formData.subject" type="text" placeholder="Subject *" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" v-model="formData.message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input name="submit" type="submit" value="SEND MESSAGE">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Map -->
                <div class="col-lg-5 offset-lg-1 col-md-12">
                    <h5>Location</h5>
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15932.76330763048!2d103.71038899999999!3d1.5503465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da6da7b9a49e23%3A0x6f48234df255e7d0!2s22%2C%20Jalan%20Setia%20Tropika%201%2F29%2C%20Setia%20Tropika%2C%2081300%20Johor%20Bahru%2C%20Johor%2C%20Malaysia!5e0!3m2!1sen!2smy!4v1628174987182!5m2!1sen!2smy" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- FOOTER -->
<?php include 'footer.php'; ?>