const { createApp } = Vue;

const app = createApp({
    data(){
        return{
            lista:[],
            newTask:{},
        }
    },

    methods:{

        fetchList(){
            axios.get("api/completeList.php").then((resp) => {
                this.lista = resp.data
            });
            console.log(this.lista);
        },
        onClickFetch(){

            console.log(this.newTask);

            axios.post("api/list.php", this.newTask,{headers: { "Content-Type": "multipart/form-data" }})
            .then((resp) => {
                this.fetchList()
            });
            console.log(this.lista);
        },
    },

    mounted() {
        this.fetchList();
    },
}).mount("#app");