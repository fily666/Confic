const app = new Vue({
    el:'#app',
    data:{
        titulo:'GMY_fily',
        tareas:[],
        nuevatarea:''
    },

    methods:{
        agregartarea: function (){
            //console.log('diste click',this.nuevatarea);
            this.tareas.push({
                nombre: this.nuevatarea,
                estado: false
            });
            
            this.nuevatarea = '';
            localStorage.setItem('gmy-vue',JSON.stringify(this.tareas));
        },

        editartarea: function (index) {
            this.tareas[index].estado = true;
            localStorage.setItem('gmy-vue',JSON.stringify(this.tareas));
        },

        eliminartarea: function (index) {
            this.tareas.splice (index, 1);
            localStorage.setItem('gmy-vue',JSON.stringify(this.tareas));

        }
    },
    created: function ( ) {
        let dataDB = JSON.parse(localStorage.getItem('gmy-vue'));
        if  (dataDB === null){
            this.tareas =[];
        }else{
             this.tareas = dataDB;
        }
            
        
    }


    })    