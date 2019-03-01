<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
               Permission::create([
                'name' =>'Navegar por inicio intranet',
                'slug' =>'intranet.index',
                'description' =>'Ver Inicio Intranet',
               ]);
               #usuarios
               Permission::create([
                'name' =>'Navegar listado de usuarios',
                'slug' =>'users',
                'description' =>'Listar el Usuarios',
               ]);
               Permission::create([
                'name' =>'Registrar Usuarios',
                'slug' =>'users.create',
                'description' =>'Registrar Usuarios',
               ]);

               Permission::create([
                'name' =>'Eliminar Usuarios',
                'slug' =>'users.destroy',
                'description' =>'Eliminar Usuarios',
               ]);
               Permission::create([
                'name' =>'Ver datos Usuarios',
                'slug' =>'users.show',
                'description' =>'Ver detalle de Usuarios',
               ]);
               Permission::create([
                'name' =>'Editar Usuarios',
                'slug' =>'users.edit',
                'description' =>'Editar Usuarios',
               ]);

                #personal
               Permission::create([
                'name' =>'Navegar listado de personal',
                'slug' =>'personal',
                'description' =>'Listar Personal',
               ]);
               Permission::create([
                'name' =>'Ingresar personal',
                'slug' =>'personal.create',
                'description' =>'Crear Personal',
               ]);
               Permission::create([
                'name' =>'Ingresar cargos',
                'slug' =>'personal.createc',
                'description' =>'Crear Cargo',
               ]);
               Permission::create([
                'name' =>'Ver datos de personal',
                'slug' =>'personal.show',
                'description' =>'Ver Detalle de Personal',
               ]);
               Permission::create([
                'name' =>'Editar personal',
                'slug' =>'personal.edit',
                'description' =>'Editar Personal',
               ]);
               #inventario
               Permission::create([
                'name' =>'Navegar listado de inventario',
                'slug' =>'inventario',
                'description' =>'Listar Inventario',
               ]);
               Permission::create([
                'name' =>'Registrar inventario',
                'slug' =>'inventario.create',
                'description' =>'Registrar Inventario',
               ]);
               Permission::create([
                'name' =>'Ver datos inventario',
                'slug' =>'inventario.show',
                'description' =>'ver detalle Inventario',
               ]);
               Permission::create([
                'name' =>'Editar inventario',
                'slug' =>'inventario.edit',
                'description' =>'Editar Inventario',
               ]);
        
               #producto
               Permission::create([
                'name' =>'Navegar listado de productos en cotizacion',
                'slug' =>'producto',
                'description' =>'Listar Productos en cotizacion',
               ]);
               
               Permission::create([
                'name' =>'Generar Orden de compra materiales',
                'slug' =>'producto.orden_compra_m',
                'description' =>'Generar Orden de compra materiales',
               ]);

                Permission::create([
                'name' =>'Eliminar producto de cotización',
                'slug' =>'producto.destroy',
                'description' =>'Eliminar producto de cotización',
               ]);

               Permission::create([
                'name' =>'Generar Orden de Trabajo',
                'slug' =>'producto.orden_trabajo',
                'description' =>'Generar Orden de Trabajo',
               ]);
               Permission::create([
                'name' =>'Generar PDF Cotización Producto',
                'slug' =>'pdf_c_pro',
                'description' =>'Generar PDF Cotización Producto',
               ]);
               
               Permission::create([
                'name' =>'Navegar listado de productos en convenio',
                'slug' =>'producto.index2',
                'description' =>'Listar Productos en convenio',
               ]);
               
               Permission::create([
                'name' =>'Cotizar Producto en convenio',
                'slug' =>'producto.cotizarconvenio2',
                'description' =>'Cotizar Productos en convenio',
               ]);
               Permission::create([
                'name' =>'Cotizar Producto en cotización',
                'slug' =>'producto.create',
                'description' =>'Cotizar Productos en cotización',
               ]);
               Permission::create([
                'name' =>'Ver datos de producto de convenio',
                'slug' =>'producto.show2',
                'description' =>'Ver Detalle Producto en Convenio',
               ]);

               Permission::create([
                'name' =>'Ver datos de producto de cotización',
                'slug' =>'producto.show',
                'description' =>'Ver Detalle Producto en cotización',
               ]);
               Permission::create([
                'name' =>'Editar producto cotización',
                'slug' =>'producto.edit',
                'description' =>'Editar Producto en cotización',
               ]);              
               
               Permission::create([
                'name' =>'Editar producto en convenio',
                'slug' =>'producto.edit2',
                'description' =>'Editar Producto en convenio',
               ]);
        
               #proveedor
               Permission::create([
                'name' =>'Navegar Listado de proveedores',
                'slug' =>'proveedor',
                'description' =>'Listar los Proveedores',
               ]);
               Permission::create([
                'name' =>'Registrar proveedor',
                'slug' =>'proveedor.create',
                'description' =>'Crear Proveedores',
               ]);
               Permission::create([
                'name' =>'Ver datos del proveedor',
                'slug' =>'proveedor.show',
                'description' =>'Ver Detalle Proveedor',
               ]);
               Permission::create([
                'name' =>'Editar proveedor',
                'slug' =>'proveedor.edit',
                'description' =>'Editar Proveedores',
               ]);
               
          //convenios
          Permission::create([
            'name' =>'Navegar Listado de Convenios',
            'slug' =>'convenio',
            'description' =>'Navegar Listado de Convenios',
           ]);
          Permission::create([
            'name' =>'Eliminar producto de convenio',
            'slug' =>'destroy_pro',
            'description' =>'Eliminar producto de convenio',
           ]);
           Permission::create([
            'name' =>'Subir Orden de Compra Convenio',
            'slug' =>'convenio.guia',
            'description' =>'Subir OT',
           ]);
           Permission::create([
            'name' =>'Ver Datos Convenio',
            'slug' =>'convenio.show',
            'description' =>'Ver Convenios',
           ]);
           Permission::create([
            'name' =>'Editar Convenios',
            'slug' =>'convenio.edit',
            'description' =>'Editar Convenios',
            ]);
        Permission::create([
                'name' =>'Añadir Producto a Convenio',
                'slug' =>'producto.crear',
                'description' =>'Añadir Producto a Convenio',

            
           ]);

               #cotizacion
               Permission::create([
                'name' =>'Navegar listado de cotizaciones',
                'slug' =>'cotizacion',
                'description' =>'Listar Cotizaciones',
               ]);

               
               Permission::create([
                'name' =>'Subir Orden de Compra Cotización',
                'slug' =>'cotizacion.guia',
                'description' =>'Subir OT',
               ]);
               Permission::create([
                'name' =>'Registro de solicitud de cotización',
                'slug' =>'cotizacion.create',
                'description' =>'Crear Solicitud de Cotizaciones',
               ]);
               Permission::create([
                'name' =>'Ver datos de cotizacion',
                'slug' =>'cotizacion.show',
                'description' =>'Ver Detalle Cotización',
               ]);
               Permission::create([
                'name' =>'Editar cotización',
                'slug' =>'cotizacion.edit',
                'description' =>'Editar Cotizacion',
               ]);
        
            #clientes
            Permission::create([
                'name' =>'Navegar listado de Clientes',
                'slug' =>'clientes',
                'description' =>'Listar Clientes',
               ]);
               Permission::create([
                'name' =>'Registrar Clientes',
                'slug' =>'clientes.create',
                'description' =>'Crear Cliente',
               ]);
               Permission::create([
                'name' =>'Ver datos de Clientes',
                'slug' =>'clientes.show',
                'description' =>'Ver Detalle Clientes',
               ]);
               Permission::create([
                'name' =>'Editar Clientes',
                'slug' =>'clientes.edit',
                'description' =>'Editar Clientes',
               ]);
        
               #roles
               Permission::create([
                'name' =>'Navegar listado de roles',
                'slug' =>'roles',
                'description' =>'Listar Roles',
               ]);
               Permission::create([
                'name' =>'Registrar roles',
                'slug' =>'roles.create',
                'description' =>'Crear Roles',
               ]);
               Permission::create([
                'name' =>'Ver datos de roles',
                'slug' =>'roles.show',
                'description' =>'Ver Detalle Rol',
               ]);
               Permission::create([
                'name' =>'Editar roles',
                'slug' =>'roles.edit',
                'description' =>'Editar Roles',
               ]);

             



                #iva
                Permission::create([
                'name' =>'Navegar listado de Ivas',
                'slug' =>'iva',
                'description' =>'Listar ivas',
                ]);
                Permission::create([
                'name' =>'Registrar ivas',
                'slug' =>'iva.create',
                'description' =>'Crear ivas',
                ]);
                Permission::create([
                'name' =>'Ver datos de ivas',
                'slug' =>'ivas.show',
                'description' =>'Ver Detalle Rol',
                ]);
                Permission::create([
                'name' =>'Editar ivas',
                'slug' =>'ivas.edit',
                'description' =>'Editar ivas',
                ]);
               }     
        
        
    
}
