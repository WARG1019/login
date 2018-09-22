var app = new Vue({
	el:'#nuevo',
	data:{
		checked : false,
		services:[
        
          { id: null, name: 'Selecciona un servicio' },
          { id: 1, name: 'Telefono' },
          { id: 2, name: 'Walk In' },
          { id: 3, name: 'Correo' },
          { id: 4, name: 'Referenciado' },
          { id: 5, name: 'Ejecutivo Ventas' },
          { id: 6, name: 'Reservas' },
          { id: 7, name: 'Web' }
		],
	},
}) 