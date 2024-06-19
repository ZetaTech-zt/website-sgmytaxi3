<!-- HEADER -->
<?php include 'header.php'; ?>

    <!-- CONTENT -->
    <!-- Header Banner -->
    <section class="banner-header section-padding bg-img" data-overlay-dark="6" data-background="img/alphard-bg.jpg">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h6>What We Do</h6>
                        <h1>Our <span>Services</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="line-vr-section"></div>
    <!-- Services Box 2 -->
    <section class="services-box2 section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center mb-30">
                    <div class="section-title white">Reliable <span>Transport Solutions</span></div>
                    <p>We provide transportation services to all kinds of customers with a good prices we offered to customers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Box -->
    <div class="services-box mt--120 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="item active"> <span class="fa-solid fa-car"></span>
                        <h5>Private Transfer</h5>
                        <p>Fetching you from point A to point B without detour and ensuring you arrive on time and comfortably.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="item"> <span class="fa-solid fa-umbrella-beach"></span>
                        <h5>Tourism Charter</h5>
                        <p>Explore the city in comfort with our customizable city tour packages. Our knowledgeable drivers can guide you through the best attractions and hidden gems.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="item"> <span class="fa-solid fa-plane"></span>
                        <h5>Airport Transfer</h5>
                        <p>Enjoy hassle-free airport transfers with our prompt and reliable service. Our drivers monitor flight schedules to ensure timely pick-ups and drop-offs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Search -->
    <section data-scroll-index="8" class="background bg-img bg-fixed section-padding" data-overlay-dark="5" data-background="img/starex-bg.jpg">
        <div class="container">
            <div class="card bg-transparent">
                <div class="card-body" style="background-color: rgba(0, 0, 0, 0.5);">
                    <div class="col-md-12 text-center mb-15">
                        <div class="section-title">Premium Vehicles</div>
                        <div class="section-subtitle">LUXURY & COMFORT & SAFE</div>
                        <p>Private MPV transfers are readily available between Singapore and Malaysia. We provide an experienced and friendly driver to guarantee you get to your location securely and on time.</p>
                        <div><a href="/fleet" class="btn" style="background-color:#f5b754">READ MORE</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Transport -->
    <section class="cars1 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-30">
                    <div class="section-title">OUR <span>TRANSPORT RATES</span></div>
                </div>
            </div>
            <div class="cars1-carousel owl-theme owl-carousel">
                <div v-for="item in fleet" class="item">
                    <div class="img">
                        <img :src="googleImageConvertToImage(item.photo)" alt="{{ item.title }}" class="bg-gray">
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
                                    <div><span class="price">{{ item.price }}</span> <!--<span>/way</span>--></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    
<!-- FOOTER -->
<?php include 'footer.php'; ?>