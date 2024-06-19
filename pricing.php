<!-- HEADER -->
<?php include 'header.php'; ?>

    <!-- CONTENT -->
    <!-- Header Banner -->
    <section class="banner-header section-padding bg-img" data-overlay-dark="6" data-background="img/alphard-bg.jpg">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h6>Pricing Plan</h6>
                        <h1>Pricing <span>Packages</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="line-vr-section"></div>
    <!-- Pricing Plan -->
    <section class="price section-padding">
        <div class="container">
            <div class="row">
                <div v-for="item in pricing" class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>{{ item.title }}</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li v-if="item.point1">{{ item.point1 }}</li>
                                <li v-if="item.point2">{{ item.point2 }}</li>
                                <li v-if="item.point3">{{ item.point3 }}</li>
                            </ul>
                            <a href="/booking" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
<!-- FOOTER -->
<?php include 'footer.php'; ?>