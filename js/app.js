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
        // recupero i dati dall'API server.php per stamparli in pagina
        fetchData () {
            axios.get('server.php').then((res) => {
                console.log(res.data.results)
                this.todos = res.data.results
            })
        },

    }
}).mount('#app')