const app = new Vue({
    el: '#app',
    data: {
        albums: [],
        artisti: [],
        filters: 'all',
        dataURL: `http://localhost/php-ajax-dischi/php-dischi2/scripts/get-albums.php`,
    },
    created() {
        axios
            .get(this.dataURL)
            .then((res) => {
                //console.log(res.data);
                this.albums = res.data;
            })
            .catch((err) => {
                console.log(err);
            });
    },
    updated() {
        this.getName();
    },
    methods: {
        getArtist() {
            axios
                .get(this.dataURL + `?artist=${this.filters}`)
                .then((res) => {
                    //console.log(res.data);
                    this.albums = res.data;
                })
                .catch((err) => {
                    console.log(err);
                });
            // console.log(this.filters);
            // console.log(this.dataURL);
            // console.log(this.albums);
        },
        getName() {
            this.albums.forEach((element) => {
                if (!this.artisti.includes(element.author)) {
                    this.artisti.push(element.author);
                }
            });
            //console.log(this.artisti);
        },
    },
});
