<template>
<div class="row">
    <div class="col-lg-12 mb-4">
        <router-link :to='{name:"crearProducto"}' class="btn btn-success" > Nuevo</router-link>
    </div>
    <div class="col-12-md">
        <div class="table-responsive">
            <table class="bg-primary text-white">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Detalle</th>
                        <th>Codigo</th>
                        <th>Barras</th>
                        <th>Vencimiento</th>
                        <th>Compra</th>
                        <th>Venta</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="producto in productos" :key="producto.id">
                        <td>{{producto.id}}</td>
                        <td>{{producto.nombre}}</td>
                        <td>{{producto.detalle}}</td>
                        <td>{{producto.codigo}}</td>
                        <td>{{producto.barras}}</td>
                        <td>{{producto.vencimiento}}</td>
                        <td>{{producto.comprainicio}}</td>
                        <td>{{producto.ventainicio}}</td>
                        <td>{{producto.status}}</td>
                        <td>
                            <router-link :to='{name:"editarProducto",params:{id:producto.id}}' class="btn btn-info" > Editar</router-link>
                            <a type="button" @click="borrarProducto(producto.id)" class="btn btn-danger"></a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
</template>
<script>
export default{
    name:"productos",
    data(){
        return{
            productos:[]
        }
    },
    mounted(){
        this.mostrarProductos()
    },
    methods:{
        async mostrarProductos(){
            await this.axios.get('/api/producto')
            .then(response=>{
                this.productos=response.data
            })
            .catch(error=>{
                this.blog=[]
            })
        },
            borrarProducto(id){
                if(confirm("Confirma que desea eliminar")){
                    this.axios.delete('/api/producto/'+id)
                    .then(response=>{
                        this.mostrarProductos()
                    })
                    .catch(error=>{
                        console
                    })
                }
            }
        
    }
    }

</script>