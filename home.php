<?php include 'header.php'; ?>
    <!-- Slider -->
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <div v-for="item in slideshow" class="item bg-img" data-overlay-dark="5" :data-background="googleImageConvertToImage(item.photo)">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 mb-30">
                                <div class="v-middle">
                                    <h6>* Premium</h6>
                                    <h1>{{ item.title }}</h1>
                                    <h5>{{ item.description }} </h5> <a href="/fleet" class="button-1 mt-15 mb-15">VIEW DETAILS</a> <a href="/booking" class="button-2 mt-15 mb-15">BOOK NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About -->

    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-30">
                    <div class="content">
                        <div class="section-subtitle">Trusted Transport Service</div>
                        <div class="section-title">We Are <span>HAYLEY GLOBAL VACATION</span></div>
                        <p class="mb-30">
                            We specialize in providing reliable, comfortable, and safe transportation services using our fleet of Multi-Purpose Vehicles (MPVs). 
                            Whether you're traveling for business, leisure, or a special event, our professional drivers and top-of-the-line vehicles ensure a smooth journey.
                        </p>
                        <ul class="list-unstyled list mb-30">
                            <li>
                                <div class="list-icon"> <span class="ti-check"></span> </div>
                                <div class="list-text">
                                    <p>MPV Cars</p>
                                </div>
                            </li>
                            <li>
                                <div class="list-icon"> <span class="ti-check"></span> </div>
                                <div class="list-text">
                                    <p>Personal Driver</p>
                                </div>
                            </li>
                            <li>
                                <div class="list-icon"> <span class="ti-check"></span> </div>
                                <div class="list-text">
                                    <p>Private Transfer / Tourism Charter / Airport Transfer</p>
                                </div>
                            </li>
                        </ul> <a href="about" class="button-1">READ MORE</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-12">
                    <img src="img/interior.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
   
    <!-- Package -->
    <section  class="price section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center mb-30">
                    <div class="section-subtitle">Select Your Package</div>
                    <div class="section-title white">Our <span>Packages</span></div>
                </div>
            </div>
            <div class="row">
                <div v-for="(item, index) in limitedPricing" :key="index" class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>{{ item.title }}</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>{{ item.point1 }}</li>
                                <li>{{ item.point2 }}</li>
                                <li>{{ item.point3 }}</li>
                            </ul>
                            <!-- data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" -->
                            <a href="/booking" class="button-2 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-12 text-center">
                <a href="/pricing" class="button-1">READ MORE</a>
            </div>
        </div>
    </section>

    <!-- Transport -->
    <section class="cars1 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-30">
                    <div class="section-subtitle">Select Your Transport</div>
                    <div class="section-title">Our <span>MPVs</span></div>
                </div>
            </div>
            <div class="cars1-carousel owl-theme owl-carousel">
                <div v-for="item in fleet" class="item">
                    <div class="img">
                        <img :src="googleImageConvertToImage(item.photo)" alt="{{ item.title }}">
                    </div>
                    <div class="con opacity-1">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="title"><a href="#">{{ item.title }}</a></div>
                                <div class="details"> <span><i class="omfi-passengers"></i> {{ item.seat }}</span> <span><i class="omfi-luggage"></i> {{ item.luggage }}</span> <span><i class="omfi-door"></i> {{ item.door }}</span> <span><i class="omfi-age"></i> {{ item.airbag }}</span> </div>
                            </div>
                            <div class="col-md-5">
                                <div class="book">
                                    <div><a href="/booking" class="button-1 px-4 mt-20">BOOK NOW</a></div>
                                    <div><span class="price">{{ item.price }}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Satisfactions -->
    <section class="cars1 section-padding">
        <div class="container">
            <div class="first-footer">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center mb-30">
                        <div class="section-subtitle">WHY CHOOSE US</div>
                        <div class="section-title white">Customer <span>Satisfaction</span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="links dark footer-contact-links">
                            <div class="footer-contact-links-wrapper">
                                <div class="footer-contact-link-wrapper">
                                    <div class="image-wrapper footer-contact-link-icon">
                                        <div class="icon-footer"> <i class="fa-regular fa-face-smile fa-2xl"></i> </div>
                                    </div>
                                    <div class="footer-contact-link-content">
                                        <h6>Professional</h6>
                                        <p>Our driver are well trained with good attitude.</p>
                                    </div>
                                </div>
                                <div class="footer-contact-links-divider"></div>
                                <div class="footer-contact-link-wrapper">
                                    <div class="image-wrapper footer-contact-link-icon">
                                        <div class="icon-footer"> <i class="fa-regular fa-face-smile fa-2xl"></i> </div>
                                    </div>
                                    <div class="footer-contact-link-content">
                                        <h6>Convenience</h6>
                                        <p>Provide transport services based on your need.</p>
                                    </div>
                                </div>
                                <div class="footer-contact-links-divider"></div>
                                <div class="footer-contact-link-wrapper">
                                    <div class="image-wrapper footer-contact-link-icon">
                                        <div class="icon-footer"> <i class="fa-regular fa-face-smile fa-2xl"></i> </div>
                                    </div>
                                    <div class="footer-contact-link-content">
                                        <h6>Punctuality</h6>
                                        <p>Our vehicles arrive on time in schedule.</p>
                                    </div>
                                </div>
                                <div class="footer-contact-links-divider"></div>
                                <div class="footer-contact-link-wrapper">
                                    <div class="image-wrapper footer-contact-link-icon">
                                        <div class="icon-footer"> <i class="fa-regular fa-face-smile fa-2xl"></i> </div>
                                    </div>
                                    <div class="footer-contact-link-content">
                                        <h6>Luxurious</h6>
                                        <p>Good transportation with limousine services.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Testimonials -->
    <section class="testimonials section-padding mt-15">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-30">
                    <div class="section-subtitle">Testimonials</div>
                    <div class="section-title white">Customer <span>Reviews</span></div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="stars"> <span class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                            </div> <i class="fa-solid fa-quote-left"></i>
                            <div class="text">
                                <p>Fantastic service! The MPV was extremely comfortable, and the driver was very professional. Highly recommend Hayley Global Vacation!</p>
                            </div>
                            <div class="info mt-30">
                                <div class="img-curv">
                                    <div class="img"> <img src="img/team/1.jpg" alt=""> </div>
                                    <div class="shap-left-top">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                    <div class="shap-right-bottom">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-30">
                                    <h6>Dan Martin</h6>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="stars"> <span class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                            </div> <i class="fa-solid fa-quote-left"></i>
                            <div class="text">
                                <p>I booked their service for an airport transfer, and it was flawless. Punctual and very convenient. Will use again!</p>
                            </div>
                            <div class="info mt-30">
                                <div class="img-curv">
                                    <div class="img"> <img src="img/team/4.jpg" alt=""> </div>
                                    <div class="shap-left-top">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                    <div class="shap-right-bottom">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-30">
                                    <h6>Olivia Brown</h6>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="stars"> <span class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                            </div> <i class="fa-solid fa-quote-left"></i>
                            <div class="text">
                                <p>Our company has been using Hayley Global Vacation for all our corporate travel needs. They never disappoint.</p>
                            </div>
                            <div class="info mt-30">
                                <div class="img-curv">
                                    <div class="img"> <img src="img/team/6.jpg" alt=""> </div>
                                    <div class="shap-left-top">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                    <div class="shap-right-bottom">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-30">
                                    <h6>Emily Martin</h6>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comment -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row">
                <!-- Form -->
                <div class="col-lg-12 col-md-12 mb-30">
                    <div class="form-box">
                        <h5>Leave your comment here</h5>
                        <form method="post" class="contact__form" action="">
                            <!-- form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                                </div>
                            </div>
                            <!-- form elements -->
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" placeholder="Name *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Email *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Phone Number *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="subject" type="text" placeholder="Subject *" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Comment *" required></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <input name="submit" type="submit" value="SUBMIT">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php include 'footer.php'; ?>