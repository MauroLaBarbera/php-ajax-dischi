const app = new Vue({
    el: '#app',
    data: {
        albums: [],
    },
    created() {
        const dataURL =
            'http://localhost/php-ajax-dischi/php-dischi2/database.php';

        axios
            .get(dataURL)
            .then((res) => {
                //console.log(res.data);
                this.albums = res.data;
            })
            .catch((err) => {
                console.log(err);
            });
    },
});
