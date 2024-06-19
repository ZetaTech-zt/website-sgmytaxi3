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
                        <a href="/booking" class="button-1 mt-30">BOOK NOW</a>
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
                        <a href="/booking" class="button-1 mt-30">BOOK NOW</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
<!-- FOOTER -->
<?php include 'footer.php'; ?>