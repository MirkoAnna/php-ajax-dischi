const app = new Vue (
    {
        el: '#root',
        data: {
            discsList: []
        },
        methods: {
            getListDiscs() {
                axios.get('http://localhost/php-ajax-dischi/server.php')
                .then((response) => {
                    this.discsList = response.data;
                    console.log(this.discsList);
                });
            }
        },
        created() {
            this.getListDiscs();
        }
    }
)