const { createApp } = Vue;

const app = createApp({
    data(){
        return{
            title:"hello world",
            lista:[],
        }
    },
    methods:{
        fetchList(){
            axios.get("api/list.php").then((resp) => {
                this.lista = resp.data
            });
            console.log(this.lista);
        }
    },
    mounted() {
        this.fetchList();
    },
}).mount("#app");