<!-- HEADER -->
<?php include 'header.php'; ?>

    <!-- CONTENT -->
    <!-- About -->
    <section class="about section-padding">
        <div v-for="(item, index) in location" :key="index" class="container" style="padding-bottom: 60px;">
            <div class="row">
                <div v-if="index % 2 === 0" class="col-lg-6 col-md-12 mb-30">
                    <div class="content">
                        <div class="section-title">{{ item.title }}</div>
                        <p class="mb-30">{{ item.description }}</p>
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                    </div>
                </div>
                <div v-if="index % 2 === 0" class="col-lg-5 offset-lg-1 col-md-12">
                    <img :src="googleImageConvertToImage(item.photo)" class="img-fluid" alt="">
                </div>

                <div v-if="index % 2 === 1" class="col-lg-5 col-md-12 mb-30">
                    <img :src="googleImageConvertToImage(item.photo)"  class="img-fluid" alt="">
                </div>
                <div v-if="index % 2 === 1" class="col-lg-6 offset-lg-1 col-md-12">
                    <div class="content">
                        <div class="section-title">{{ item.title }}</div>
                        <p class="mb-30">{{ item.description }}</p>
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="container" style="padding-bottom: 60px;">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 col-md-12">
                    <img src="img/mersing.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-md-12 mb-30">
                    <div class="content">
                        <div class="section-title">MERSING</div>
                        <p class="mb-30">
                            Mersing, a coastal town in Johor, serves as a gateway to the beautiful islands of the South China Sea, such as Tioman Island. 
                            It is known for its pristine beaches, clear waters, and vibrant marine life, making it a popular destination for island hopping and snorkeling.
                        </p>
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="padding-bottom: 60px;">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-30">
                    <div class="content">
                        <div class="section-title">KUALA LUMPUR</div>
                        <p class="mb-30">
                            Kuala Lumpur, the capital city of Malaysia, is a vibrant metropolis famous for its iconic Petronas Twin Towers, bustling markets, and diverse culinary scene. 
                            It offers a dynamic blend of modern skyscrapers, historical sites, and rich cultural heritage.
                        </p>
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-12">
                    <img src="img/kualalumpur.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 col-md-12">
                    <img src="img/cameronhighland.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-md-12 mb-30">
                    <div class="content">
                        <div class="section-title">CAMERON HIGHLANDS</div>
                        <p class="mb-30">
                            Cameron Highlands is a cool, scenic hill station renowned for its tea plantations, strawberry farms, and lush green landscapes. 
                            It provides a refreshing retreat from the tropical heat with its pleasant climate and picturesque vistas.
                        </p>
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-1 mt-30">BOOK NOW</a>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    
<!-- FOOTER -->
<?php include 'footer.php'; ?>