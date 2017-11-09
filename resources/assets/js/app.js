
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');
window.toastr = require('toastr');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

const carreras = new Vue({
    el: document.querySelector('#carreras'),
    created: function(){
        this.obtenerCarreras();
    },
    data: {
        carreras:[],
        facultades:[],
        nombre:'',
        fillCarrera:{'id':0,'nombre':''},
        errors:[]
    },
    methods:{
        crearCarrera: function(){
            let url = '/carreras';
            axios.post(url,{
                nombre: this.nombre,
            }).then((response)=>{
                this.obtenerCarreras();
                this.nombre = '';
                this.errors = [];
                $('#crearCarrera').modal('hide');
                toastr.success('La carrera se guardó correctamente')
            }).catch(error => {
                this.errors = error.response.data;
            });;
        },
        obtenerCarreras: function(){
            let url = '../carriers';
            axios.get(url).then(response => {
                this.carreras = response.data;


            });
        },
        editarCarrera:function(carrera){
            this.fillCarrera.id = carrera.id;
            this.fillCarrera.nombre = carrera.nombre;
            $('#editarCarrera').modal('show');
        },
        eliminarCarrera: function(id){
            let url = `/carreras/${id}`;
            let t = this;
            toastr.info("<br /><button type='button' id='confirmationDelete' class='btn clear'>Aceptar</button>",'¿Se requiere confirmación para eliminar?',
            {
                closeButton: false,
                allowHtml: true,
                onShown: function (toast) {
                    $("#confirmationDelete").click(function(){
                        axios.delete(url).then(response =>{

                            t.obtenerCarreras();

                        });
                    });
                  }
            });

        }
    }
});

$(document).ready(function()
{
   $("#mostrarmodal").modal("show");


});
