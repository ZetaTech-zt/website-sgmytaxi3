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
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>KSL CITY MALL/TEBRAU JUSCO/BUKIT INDAH JUSCO</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 80</li>
                                <li>Toyota Alphard : SGD 100</li>
                                <li>Hyundai Starex : SGD 100</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>LEGOLAND JOHOR BAHRU</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 80</li>
                                <li>Toyota Alphard : SGD 100</li>
                                <li>Hyundai Starex : SGD 100</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>JOHOR PREMIUM OUTLETS (JPO)</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 80</li>
                                <li>Toyota Alphard : SGD 100</li>
                                <li>Hyundai Starex : SGD 100</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>SG-JB / SG-JB 1DAY TRIP</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>HALF DAY TRIP : SGD 350</li>
                                <li>FULL DAY TRIP : SGD 400</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>JOHOR BAHRU AREA</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 80</li>
                                <li>Toyota Alphard : SGD 100</li>
                                <li>Hyundai Starex : SGD 100</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>KUKUP</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 130</li>
                                <li>Toyota Alphard : SGD 180</li>
                                <li>Hyundai Starex : SGD 150</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>MALACCA</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 250</li>
                                <li>Toyota Alphard : SGD 300</li>
                                <li>Hyundai Starex : SGD 300</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>MERSING</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 230</li>
                                <li>Toyota Alphard : SGD 280</li>
                                <li>Hyundai Starex : SGD 250</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>DESARU</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 180</li>
                                <li>Toyota Alphard : SGD 200</li>
                                <li>Hyundai Starex : SGD 200</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>PORT DICKSON</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 350</li>
                                <li>Toyota Alphard : SGD 400</li>
                                <li>Hyundai Starex : SGD 400</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>KUALA LUMPUR</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 350</li>
                                <li>Toyota Alphard : SGD 400</li>
                                <li>Hyundai Starex : SGD 400</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>SEKINCHAN</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 400</li>
                                <li>Toyota Alphard : SGD 450</li>
                                <li>Hyundai Starex : SGD 450</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>GENTING HIGHLAND</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 400</li>
                                <li>Toyota Alphard : SGD 400</li>
                                <li>Hyundai Starex : SGD 400</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>KLUANG / BATU PAHAT / YONG PENG JOHOR</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 180</li>
                                <li>Toyota Alphard : SGD 200</li>
                                <li>Hyundai Starex : SGD 200</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>PULAU TIOMAN</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 230</li>
                                <li>Toyota Alphard : SGD 280</li>
                                <li>Hyundai Starex : SGD 250</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>CAMERON HIGHLAND</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 500</li>
                                <li>Toyota Alphard : SGD 600</li>
                                <li>Hyundai Starex : SGD 400</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>IPOH</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 600</li>
                                <li>Toyota Alphard : SGD 700</li>
                                <li>Hyundai Starex : SGD 700</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>PENANG</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 650</li>
                                <li>Toyota Alphard : SGD 700</li>
                                <li>Hyundai Starex : SGD 700</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="item">
                        <h3>SUNWAY LAGOON THEME PARK</h3>
                        <div class="cont">
                            <ul class="dot-list">
                                <li>Toyota Innova : SGD 350</li>
                                <li>Toyota Alphard : SGD 400</li>
                                <li>Hyundai Starex : SGD 400</li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    
<!-- FOOTER -->
<?php include 'footer.php'; ?>