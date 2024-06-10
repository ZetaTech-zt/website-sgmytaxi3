// Create Vue instance
new Vue({
    el: '#app',
    data: {
        slideshow: [],
        // libraries: [],
        // services: [],
        formData: {
            name: 'test',
            email: 'test@gmail.com',
            contact: '0123',
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
        //get data
        getData(sheetId, "slideshow").then((data) => {
            this.slideshow = sheetTransformer(data.table.cols, data.table.rows);
            this.$nextTick(() => {
                this.initializeOwlCarousel();
            });
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
            return "https://lh3.googleusercontent.com/d/" + link.split('/')[5] + "=w600";
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

        initializeOwlCarousel(){
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
        }
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
        //sending googlesheet to gmail
        submitForm() {
            const bookingData = {
                name: this.formData.name,
                email: this.formData.email,
                contact: this.formData.contact,
                subject: this.formData.subject,
                message: this.formData.message,
            };
            this.isLoading = true;
            console.log('Booking Data:', bookingData);
            const fetchCode = 'AKfycbzq1ouSOk9YviB3tYPGXczN8OOcHuGwaGB6iPI48zEYAK63i6-cpQZvmB0FbHDC1Rnd';
            this.fetchPostByType("sendEmail", fetchCode, bookingData);
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