// Create Vue instance
new Vue({
    el: '#app',
    data: {
        galleries: [],
        libraries: [],
        services: [],
        formData: {
            name: 'test',
            email: 'test@gmail.com',
            contact: '0123',
            subject: 'test',
            message: 'messages'
        },
        isLoading: false,
        successfull: false,
        url: ''
    },
    created() {
        this.url = this.getUrl();
    },
    // start from here mounted
    mounted() {
        const sheetId = '1AV7ShrNFFoXcVRRT8e_1HKSQcEQza9Ij9L88MADwlMo';
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
        getData(sheetId, "galleries").then((data) => {
            this.galleries = sheetTransformer(data.table.cols, data.table.rows);
        }).catch((error) => {
            console.error("An error occurred:", error);
        });
        getData(sheetId, "libraries").then((data) => {
            this.libraries = sheetTransformer(data.table.cols, data.table.rows);
        }).catch((error) => {
            console.error("An error occurred:", error);
        });
    },
    methods: {
        //convert images
        googleImageConvertToImage(link) {
            return "https://lh3.googleusercontent.com/d/" + link.split('/')[5] + "=w600";
        },
        //get Libraries
        filterLibraries(limit) {
            let filteredLibraries = this.libraries.filter(data => data.galleryUrl === this.url);
            if (filteredLibraries.length > 0) {
                if (limit > 0) {
                    return filteredLibraries.slice(0, limit);
                } else {
                    limit = Math.abs(limit); // Convert to positive
                    return filteredLibraries.slice(limit, filteredLibraries.length);
                }
            }
        },
        //total Libraries count
        totalLibraries() {
            return this.libraries.filter(data => data.galleryUrl === this.url).length;
        },
        filterGalleries() {
            return this.galleries.filter(data => data.url === this.url);
        },
        getUrl() {
            const patharr = window.location.pathname.split("/");
            return patharr[patharr.length - 1];
        },
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
            const fetchCode = 'AKfycbyGTMHfMp0SlqhkQFRGD-j4jzwkfWV6XHdCcerD5FDzodfDKhnMkhlKos_RvB3AZnpC';
            setTimeout(() => {
                this.isLoading = false;
                this.successfull = true;
            }, 2000);
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
    computed: {
        filteredCustomers() {
            return this.customers.filter(customer => {
                const id = customer.id.toLowerCase();
                const name = customer.name.toLowerCase();
                const contactA = customer.contactA.toString().toLowerCase();
                const searchTerm = this.filterCustomer.toLowerCase();
                return (id.includes(searchTerm) || name.includes(searchTerm) || contactA.includes(searchTerm));
            });
        },
    },
});