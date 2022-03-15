const app = new Vue (
    {
        el: '#root',
        data: {
            discsList: []
        },
        methods: {
            getDiscsList() {

                axios.get('http://localhost/php-ajax-dischi/server.php')
                .then((response) => {
                    this.discsList = response.data;
                });
                
            }
        },
        created() {
            this.getDiscsList();
        }
    }
)