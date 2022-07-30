<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                            Crear Producto
                    </div>
                    <div class="card-body">
                            <form @submit.prevent="crear">
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <div class="form-control">
                                        <label >Nombre</label>
                                        <input type="text" class="form-control" v-model="producto.nombre">
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-floating">
                                        <textarea id="floatingTextarea2" class="form-control" v-model="producto.detalle" style="heigth: 100px"></textarea>
                                        <label  for="floatingTextarea2">Detalle</label>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-control">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Categoria</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" v-model="producto.categoria_id">
                                        <option selected>Seleccione...</option>
                                        <option value="1">Lacteos</option>
                                        </select>
                                        </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-control">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect2">Medida</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect2" v-model="producto.medida_id">
                                        <option selected>Seleccione...</option>
                                        <option value="1">Litros</option>
                                        </select>
                                        </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-control">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect3">Tipo Uso</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect3" v-model="producto.tipouso_id">
                                        <option selected>Seleccione...</option>
                                        <option value="1">Oral</option>
                                        </select>
                                        </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-control">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect4">Marca</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect4" v-model="producto.marca_id">
                                        <option selected>Seleccione...</option>
                                        <option value="1">Patito</option>
                                        </select>
                                        </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-control">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Vencimiento</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" v-model="producto.vencimiento">
                                        <option selected>Seleccione...</option>
                                        <option value="1">Si</option>
                                        <option value="2">No</option>
                                        </select>
                                        </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-control">
                                        <label >Codigo</label>
                                        <input type="text" class="form-control" v-model="producto.codigo">
                                    </div>
                                </div>
                                 <div class="col-12 mb-2">
                                    <div class="form-control">
                                        <label >Barras</label>
                                        <input type="text" class="form-control" v-model="producto.barras">
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-control">
                                        <label >Compra Inicio</label>
                                        <input type="text" class="form-control" v-model="producto.comprainicio">
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-control">
                                        <label >Venta Inicio</label>
                                        <input type="text" class="form-control" v-model="producto.ventainicio">
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-control">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Estado</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" v-model="producto.status">
                                        <option selected>Seleccione...</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                        </select>
                                        </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                                
                            </div>                            
                            </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
export default{
    name:"crear-producto",
    data(){
        return{
            producto:{
                nombre:"",
                detalle:"",
                categoria_id:"",
                medida_id:"",
                tipouso_id:"",
                marca_id:"",
                vencimiento:"",
                codigo:"",
                barras:"",
                comprainicio:"",
                ventainicio:"",
                status:""
            }
        }
    },
    methods:{
        async crear(){
            await this.axios.post('/api/producto' ,this.producto)
            .then(response=>{
                this.$router.push({name:"mostrarProducto"})
            })
            .catch(error=>{
                console.log(error)
            })
        }
    }

}
</script>