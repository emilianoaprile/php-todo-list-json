const {createApp} = Vue

createApp ({
    data() {
        return {
            title: 'To Do list',
            todos: [],
            newTodo: '',
        }
    },
    methods: {
        // recupero i dati dall'API server.php per stamparli in pagina con direttiva v-for
        fetchData () {
            axios
            .get('server.php')
            .then((res) => {
                console.log(res.data)
                this.todos = res.data.results
            })
        },
        // recupero i dati provenienti dal form per stamparli in pagina con direttiva v-for
        storeData() {
            const data = {
                todo: this.newTodo,
            }
            axios
            .post('store.php', data, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                }
            })
            .then((res) => {
                console.log(res.data)
                this.todos = res.data.results
            })
        },
    },
    created() {
        this.fetchData();
        this.storeData();
    },
}).mount('#app');