// Create Vue instance
new Vue({
    el: '#app',
    data: {
        slideshow: [],
        location: [],
        fleet: [],
        pricing: [],
        bookingData: {
            name: '',
            email: '',
            phone: '',
            car: '',
            transfer_type: '',
            pickup_date: '',
            pickup_time: '',
            return_date: '',
            return_time: '',
            pickup_location: '',
            dropoff_location: '',
            flight_info: '',
            adults: '',
            children: '',
            request: ''
        },
        formSubmitted: false,
        isTwoWay: false,
        // libraries: [],
        // services: [],
        formData: {
            name: 'Kheng Liang',
            email: 'Kheng_liang1991@live.com',
            contact: '010-8389366',
            subject: 'test',
            message: 'messages'
        },
        isLoading: false,
        successfull: false,
        url: '',
    },
    // start running initalize mounted
    mounted() {
        const sheetId = '1IV6qATVNvtuGErpCpLp97teKvbu1e1RHjTLcHY7y93w';
        const getData = async (sheetId, tabName) => {
            try {
                const { data } = await axios.get(
                    `https://docs.google.com/spreadsheets/d/${sheetId}/gviz/tq?tqx=out:json&sheet=${tabName}&headers=1`
                )
                return JSON.parse(data.substring(47).slice(0, -2))
            } catch (error) {
                throw error
            }
        }
        const sheetTransformer = (cols, rows) => {
            const response = []
            for (const x of rows) {
                const data = {}
                for (let y = 0; y < x.c.length; y++) {
                    const key = cols[y].label
                    const value = x.c[y]?.f ?? x.c[y]?.v

                    if (key != '') {
                        data[key] = value
                    }
                }
                response.push(data)
            }
            return response
        }
        this.initializeDatepicker();
        //get data
        getData(sheetId, "slideshow").then((data) => {
            this.slideshow = sheetTransformer(data.table.cols, data.table.rows);
            
            setTimeout(() => {
                // Slider owlCarousel - (Inner Page Slider)
            $('.slider .owl-carousel').owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 5000,
                nav: false,
                navText: ['<i class="ti-angle-left" aria-hidden="true"></i>', '<i class="ti-angle-right" aria-hidden="true"></i>'],
                responsiveClass: true,
                responsive: {
                    0: {
                        dots: true,
                    },
                    600: {
                        dots: true,
                    },
                    1000: {
                        dots: true,
                    }
                }
            });
            $('.slider-fade .owl-carousel').owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 5000,
                animateOut: 'fadeOut',
                nav: false,
                navText: ['<i class="ti-angle-left" aria-hidden="true"></i>', '<i class="ti-angle-right" aria-hidden="true"></i>']
            });
            $('.header .owl-carousel').on('changed.owl.carousel', function (event) {
                var item = event.item.index - 2; // Position of the current item
                $('h6').removeClass('animated fadeInUp');
                $('h1').removeClass('animated fadeInUp');
                $('h5').removeClass('animated fadeInUp');
                $('p').removeClass('animated fadeInUp');
                $('.button-1').removeClass('animated fadeInUp');
                $('.button-2').removeClass('animated fadeInUp');
                $('.owl-item').not('.cloned').eq(item).find('h6').addClass('animated fadeInUp');
                $('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated fadeInUp');
                $('.owl-item').not('.cloned').eq(item).find('h5').addClass('animated fadeInUp');
                $('.owl-item').not('.cloned').eq(item).find('p').addClass('animated fadeInUp');
                $('.owl-item').not('.cloned').eq(item).find('.button-1').addClass('animated fadeInUp');
                $('.owl-item').not('.cloned').eq(item).find('.button-2').addClass('animated fadeInUp');
            });
            var pageSection = $(".bg-img, section");
            pageSection.each(function (indx) {
                if ($(this).attr("data-background")) {
                    $(this).css("background-image", "url(" + $(this).data("background") + ")");
                }
            });
            }, 500);
        }).catch((error) => {
            console.error("An error occurred:", error);
        });

        getData(sheetId, "location").then((data) => {
            this.location = sheetTransformer(data.table.cols, data.table.rows);
        }).catch((error) => {
            console.error("An error occurred:", error);
        });

        getData(sheetId, "fleet").then((data) => {
            this.fleet = sheetTransformer(data.table.cols, data.table.rows);
            setTimeout(() => {
                $('.car-types1 .owl-carousel').owlCarousel({
                    loop: true,
                    margin: 20,
                    mouseDrag: true,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    dots: true,
                    nav: false,
                    navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                });

                $(".cars1-carousel").owlCarousel({
                    loop: true,
                    margin: 20,
                    autoHeight: false,
                    autoplayTimeout: 5000,
                    dots: false,
                    nav: true,
                    navText: ['<i class="ti-angle-left" aria-hidden="true"></i>', '<i class="ti-angle-right" aria-hidden="true"></i>'],
                    responsiveClass: true,
                    responsive: {
                        0: {
                            dots: false,
                            items: 1,
                        },
                        600: {
                            dots: false,
                            items: 1,
                        },
                        1000: {
                            dots: false,
                            items: 1,
                        }
                    }
                });
            }, 500);
        }).catch((error) => {
            console.error("An error occurred:", error);
        });

        getData(sheetId, "pricing").then((data) => {
            this.pricing = sheetTransformer(data.table.cols, data.table.rows);
        }).catch((error) => {
            console.error("An error occurred:", error);
        });

        //get data
        // getData(sheetId, "services").then((data) => {
        //     this.services = sheetTransformer(data.table.cols, data.table.rows);
        // }).catch((error) => {
        //     console.error("An error occurred:", error);
        // });
        // getData(sheetId, "libraries").then((data) => {
        //     this.libraries = sheetTransformer(data.table.cols, data.table.rows);
        // }).catch((error) => {
        //     console.error("An error occurred:", error);
        // });
    },
    methods: {
        //convert images
        googleImageConvertToImage(link) {
            return "https://lh3.googleusercontent.com/d/" + link.split('/')[5] + "=w1200";
        },
        //get Libraries
        // filterLibraries(limit) {
        //     let filteredLibraries = this.libraries.filter(data => data.galleryUrl === this.url);
        //     if (filteredLibraries.length > 0) {
        //         if (limit > 0) {
        //             return filteredLibraries.slice(0, limit);
        //         } else {
        //             limit = Math.abs(limit); // Convert to positive
        //             return filteredLibraries.slice(limit, filteredLibraries.length);
        //         }
        //     }
        // },
        getSlideshow() {
            return this.slideshow;
        },
        initializeDatepicker() {
            const vm = this;
            setTimeout(() => {
                $('.datepicker').datepicker({
                    orientation: "top"
                }).on('change', function(event) {
                    const tempDate = $(this).val();
                    if ($(this).attr('name') === 'pickup_date') {
                        vm.bookingData.pickup_date = tempDate;
                    }else if ($(this).attr('name') === 'return_date') {
                        vm.bookingData.return_date = tempDate;
                    }
                });
                $('.select2').select2({
                    minimumResultsForSearch: Infinity
                }).on('change', function(event) {
                    const tempcar = $(this).val();
                    vm.bookingData.car = tempcar;
                });
            }, 500);
        },
        //total Libraries
        // totalLibraries() {
        //     return this.libraries.filter(data => data.galleryUrl === this.url).length;
        // },
        // filterSlideshow() {
        //     return this.slideshow.filter(data => data.url === 'Toyota Alphard');
        // },
        // filterGalleryName() {
        //     return this.filterGalleries()[0]?.name;
        // },
        //sending booking data to google sheet
        
        handleTransferTypeChange() {
            
            this.isTwoWay = this.bookingData.transfer_type === 'two-way';
            this.initializeDatepicker();
        },
        handleSubmit(){
            const bookingInfo = {
                name: this.bookingData.name,
                email: this.bookingData.email,
                phone: this.bookingData.phone,
                car: this.bookingData.car,
                transfer_type: this.bookingData.transfer_type,
                pickup_date: this.bookingData.pickup_date,
                pickup_time: this.bookingData.pickup_time,
                return_date: this.bookingData.return_date,
                return_time: this.bookingData.return_time,
                pickup_location: this.bookingData.pickup_location,
                dropoff_location: this.bookingData.dropoff_location,
                flight_info: this.bookingData.flight_info,
                adults: this.bookingData.adults,
                children: this.bookingData.children,
                request: this.bookingData.request,
            };
            this.isLoading = true;
            console.log('Booking Data:', bookingInfo);
            const fetchCode = 'AKfycbzkMiBzaPNJjAHV5Cz66cyz_hN8Zg-vmaYM5wyyoybxPYbdAFi1rxTmybs0aVPumhf1';
            this.fetchPostByType("sendEmail", fetchCode, bookingInfo);
        },
        //sending googlesheet to gmail
        submitForm() {
            const messageData = {
                name: this.formData.name,
                email: this.formData.email,
                contact: this.formData.contact,
                subject: this.formData.subject,
                message: this.formData.message,
            };
            this.isLoading = true;
            console.log('Message Data:', messageData);
            const fetchCode = 'AKfycby3d0mIw-XzGV--ylvqCT6-T5OOzJGQZL2-R8hSIZJTiP3V7HshCyD3fYKN8JjZnPCj';
            this.fetchPostByType("sendEmail", fetchCode, messageData);
        },
        fetchPostByType(type, url, data) {
            // data type
            const dataType = {};
            for (const key in data) {
                dataType[key] = typeof data[key];
            }
            const postData = { type, data, dataType };
            let fetchPromise = fetch(
                `https://script.google.com/macros/s/${url}/exec`,
                {
                    method: "POST",
                    mode: "no-cors",
                    cache: "no-cache",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    redirect: "follow",
                    body: JSON.stringify(postData),
                }
            );
            return fetchPromise;
        }
    },
    computed: {
        limitedPricing() {
            return this.pricing.slice(0, 6);
        }
    }
    // computed: {
    //     filteredCustomers() {
    //         return this.customers.filter(customer => {
    //             const id = customer.id.toLowerCase();
    //             const name = customer.name.toLowerCase();
    //             const contactA = customer.contactA.toString().toLowerCase();
    //             const searchTerm = this.filterCustomer.toLowerCase();
    //             return (id.includes(searchTerm) || name.includes(searchTerm) || contactA.includes(searchTerm));
    //         });
    //     },
    // },
});