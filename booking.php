<!-- HEADER -->
<?php include 'header.php'; ?>

    <!-- CONTENT -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mb-30">
                <form method="post" @submit.prevent="handleSubmit">
                    <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div v-if="formSubmitted" class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                        </div>
                    </div>
                    <!-- form elements -->
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <label for="name" class="form-label">Name *</label>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <input v-model="bookingData.name" name="name" type="text" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <label for="email" class="form-label">Email *</label>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <input v-model="bookingData.email" name="email" type="email" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <label for="phone" class="form-label">Phone Number *</label>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <input v-model="bookingData.phone" name="phone" type="text" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <label for="car" class="form-label">Car *</label>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="select1_wrapper">
                                <select v-model="bookingData.car" name="car" class="select2 select" style="width: 100%">
                                    <option value="0">Choose A Car *</option>
                                    <option value="1">Toyota Innova - 6 seat</option>
                                    <option value="2">Toyota Alphard - 7 seat</option>
                                    <option value="3">Hyundai Starex - 10 seat</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <label class="form-label">Transfer Type *</label>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div style="display: inline-block; margin-right: 20px;">
                                <input @change="handleTransferTypeChange" v-model="bookingData.transfer_type" name="transfer_type" type="radio" id="oneWay" value="one-way" checked />
                                <label class="form-check-label ms-2" for="oneWay">ONE WAY TRANSFER</label>
                            </div>
                            <div style="display: inline-block; margin-right: 20px;">
                                <input @change="handleTransferTypeChange" v-model="bookingData.transfer_type" name="transfer_type" type="radio" id="twoWay" value="two-way" />
                                <label class="form-check-label ms-2" for="twoWay">TWO WAY TRANSFER</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <label for="pickup_date" class="form-label">Pickup Date *{{bookingData.pickup_date}}</label>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <input v-model="bookingData.pickup_date" name="pickup_date" type="text" class="input datepicker" required />
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <label for="pickup_time" class="form-label">Pickup Time *</label>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <input v-model="bookingData.pickup_time" name="pickup_time" type="text" required />
                        </div>
                    </div>

                    <div class="row" v-if="isTwoWay">
                        <div class="col-lg-3 col-md-3">
                            <label for="return_date" class="form-label">Return Date *</label>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <input v-model="bookingData.return_date" name="return_date" type="text" class="input datepicker" required />
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <label for="return_time" class="form-label">Return Time *</label>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <input v-model="bookingData.return_time" name="return_time" type="text" required />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <label for="pickup_location" class="form-label">Pickup Location *{{bookingData.pickup_location}}</label>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <input v-model="bookingData.pickup_location" name="pickup_location" type="text" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <label for="dropoff_location" class="form-label">Drop Off Location *</label>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <input v-model="bookingData.dropoff_location" name="dropoff_location" type="text" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <label for="flight_info" class="form-label">Flight Info *</label>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <input v-model="bookingData.flight_info" name="flight_info" type="text" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <label for="adults" class="form-label">Number Of Adults *</label>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <input v-model="bookingData.adults" name="adults" type="text" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <label for="children" class="form-label">Number Of Children</label>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <input v-model="bookingData.children" name="children" type="text" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <label for="request" class="form-label">Additional Information Requests</label>
                        </div>
                        <div class="col-lg-9 col-md-9 form-group">
                            <textarea v-model="bookingData.request" name="request" id="request" cols="30" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="booking-button mt-15">SUBMIT</button>
                        </div>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </section>

<!-- FOOTER -->
<?php include 'footer.php'; ?>