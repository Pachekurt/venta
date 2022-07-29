const Mostrar = ()=>import('./components/Producto/Mostrar')
const Crear = ()=>import('./components/Producto/Crear.vue');
const Editar = ()=>import('./components/Producto/Editar.vue');

export const routes =[
{
    name:'mostrarProductos',
    path:'/productos',
    component:Mostrar  
},
{
    name:'crearProducto',
    path:'/crear',
    component:Crear  
},
{
    name:'editarProducto',
    path:'/editar/:id',
    component:Editar  
},
];