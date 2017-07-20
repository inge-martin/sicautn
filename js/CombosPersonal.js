//----Tipo usuario----
$.post(baseurl + "cCombosPersonal/getTipoUsuario",
	function(data){
		var c = JSON.parse(data);
		$.each(c,function(i,item){
			$('#cboTipoUsuario').append('<option value="'+item.id_tipo_usuarios+'">'
											+item.descripcion_usuario+'</option>');
		});
	}
);

//----Tipo usuario Administrador----
$.post(baseurl + "cCombosPersonal/getTipoUsuarioAdmin",
	function(data){
		var c = JSON.parse(data);
		$.each(c,function(i,item){
			$('#cboTipoUsuarioAdmin').append('<option value="'+item.id_tipo_usuarios+'">'
											+item.descripcion_usuario+'</option>');
		});
	}
);

//----Carreras----
$.post(baseurl + "cCombosPersonal/getCarreras",
	function(data){
		var c = JSON.parse(data);
		$.each(c,function(i,item){
			$('#cboCarreras').append('<option value="'+item.id_carreras+'">'
											+item.nombre+'</option>');
		});
	}
);

//----Penalizaciones----
$.post(baseurl + "cCombosPersonal/getPenalizaciones",
	function(data){
		var c = JSON.parse(data);
		$.each(c,function(i,item){
			$('#cboPenalizaciones').append('<option value="'+item.id_penalizaciones+'">'
											+item.motivo+'</option>');
		});
	}
);

//----Estados----
$.post(baseurl + "cCombosPersonal/getEstados",
	function(data){
		var c = JSON.parse(data);
		$.each(c,function(i,item){
			$('#cboEstados').append('<option value="'+item.id_estado+'">'
											+item.nombre+'</option>');
		});
	}
);

$('#cboEstados').change(function(){
	$('#cboEstados option:selected').each(function(){
		var id = $('#cboEstados').val();
		//atrapar el id y pasarlo como parametro al combo
		$.post(baseurl + "cCombosPersonal/getMunicipios",
			{
				"id_estado" : id
			},
			function(data){
				$('#cboMunicipios').html('<option>Elije uno</option>');
				$('#cboLocalidades').html('<option>Elije uno</option>');
				var c = JSON.parse(data);
				$.each(c,function(i,item){
					$('#cboMunicipios').append('<option value="'+item.id_municipio+'">'
												+item.nombre+'</option>');
				});//each
			});//function

	});//seleected
});//change

$('#cboMunicipios').change(function(){
	$('#cboMunicipios option:selected').each(function(){
		var id = $('#cboMunicipios').val();
		//atrapar el id y pasarlo como parametro al combo
		$.post(baseurl + "cCombosPersonal/getLocalidades",
			{
				"id_municipio" : id
			},
			function(data){
				$('#cboLocalidades').html('<option>Elije uno</option>');
				var c = JSON.parse(data);
				$.each(c,function(i,item){
					$('#cboLocalidades').append('<option value="'+item.id_localidad+'">'
												+item.nombre+'</option>');
				});//each
			});//function

	});//seleected
});//change
