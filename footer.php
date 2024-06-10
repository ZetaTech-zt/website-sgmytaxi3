    <!-- Footer -->
    <footer class="footer clearfix">
        <div class="container">
            <!-- second footer -->
            <div class="second-footer">
                <div class="row">
                    <!-- about & social icons -->
                    <div class="col-md-4 widget-area">
                        <div class="widget clearfix">
                            <div class="footer-logo"><img src="img/logo.png" alt=""></div>
                            <!-- <div class="footer-logo"><h2>CARE<span>X</span></h2></div> -->
                            <div class="widget-text">
                                <p>We provide MVP Private Car service between Singapore to Johor Bahru, & other locations in Malaysia. Our fleet of MPVs is equipped with modern amenities to cater to all your travel needs.</p>
                                <div class="social-icons">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- quick links -->
                    <div class="col-md-3 offset-md-1 widget-area">
                        <div class="widget clearfix usful-links">
                            <h3 class="widget-title">Quick Links</h3>
                            <ul>
                                <li><a href="/about">About</a></li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="/location">Location</a></li>
                                <li><a href="/fleet">Fleet</a></li>
                                <li><a href="/pricing">Pricing</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- quick info -->
                    <div class="col-md-3 offset-md-1 widget-area">
                        <div class="widget clearfix">
                            <p><i class="icon omfi-phone"></i> 011-11989398</p>
                            <p><i class="icon omfi-location"></i> 26, Jln Kempas Utama 2/5, Taman Kempas Utama, 81300 Johor Bahru, Johor</p>
                        </div>
                    </div>

                    <!-- subscribe -->
                    <!-- <div class="col-md-4 widget-area">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Subscribe</h3>
                            <p>Want to be notified about our services. Just sign up and we'll send you a notification by email.</p>
                            <div class="widget-newsletter">
                                <form action="#">
                                    <input type="email" placeholder="Email Address" required>
                                    <button type="submit"><i class="ti-arrow-top-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- bottom footer -->
            <div class="bottom-footer-text">
                <div class="row copyright">
                    <div class="col-md-12">
                        <p class="mb-0">&copy;2024 <a href="#">Zeta Capital</a>. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- RentNow Popup -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Booking Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="booking-box">
                        <div class="">
                            <form method="post" action="#0" class="">
                                <!-- form message -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                                    </div>
                                </div>
                                <!-- form elements -->
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <input name="name" type="text" placeholder="Name *" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <input name="email" type="email" placeholder="Email *" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <input name="phone" type="text" placeholder="Phone Number *" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="select1_wrapper">
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="0">Choose A Car *</option>
                                                    <option value="1">Toyota Innova - 6 seat</option>
                                                    <option value="2">Toyota Alphard - 7 seat</option>
                                                    <option value="3">Hyundai Starex - 10 seat</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 my-3">
                                        <div style="display: inline-block; margin-right: 20px;">
                                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                                            <label class="form-check-label ms-2" for="radio1">ONE WAY TRANSFER</label>
                                        </div>
                                        <div style="display: inline-block; margin-right: 20px;">
                                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
                                            <label class="form-check-label ms-2" for="radio2">TWO WAY TRANSFER</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="input1_wrapper">
                                            <div class="input1_inner">
                                                <input type="text" class="form-control input datepicker" placeholder="Pickup Date *" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <input name="time" type="text" placeholder="Pickup Time *" required>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="input1_wrapper">
                                            <div class="input1_inner">
                                                <input type="text" class="form-control input datepicker" placeholder="Return Date *" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <input name="time" type="text" placeholder="Return Time *" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <input name="pickup" type="text" placeholder="Pickup Location *" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <input name="dropoff" type="text" placeholder="Drop Off Location *" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <input name="flight" type="text" placeholder="Flight Info *" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <input name="adults" type="text" placeholder="Number Of Adults *" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <input name="children" type="text" placeholder="Number Of Children" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12 form-group">
                                        <textarea name="message" id="message" cols="30" rows="4" placeholder="Additional Information Requests"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="booking-button mt-15">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
   <!-- jQuery -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/vue@2.6.14/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router@3.5.2/dist/vue-router.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/vue.js"></script>
    <!-- <script src="js/firebaseConfig.js"></script> -->
    <script src="js/jquery-migrate-3.4.1.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>