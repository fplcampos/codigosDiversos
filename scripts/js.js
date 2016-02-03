jQuery(function(){

	/* Links Gerais NOSSO TRABALHO */
	var divContent 	 = '.novosCampos';
	var i 			 = 2;
	var botAdicionar = '.addFields';
	var qtd 		 = jQuery('.qtd');
	
	jQuery(botAdicionar).click(function() {
	
		var campos = jQuery('<div class="form-group form-group-sm">'+
							'<div class="row">'+
								'<div class="col-sm-4">'+
									'<label for="veiculoMateria'+i+'">Veículo:</label>'+
									'<input type="text" class="form-control input-sm" name="veiculoMateria'+i+'" id="veiculoMateria'+i+'" placeholder="Veículo da matéria">'+
								'</div>'+
								'<div class="col-sm-4">'+
									'<label for="tituloMateria'+i+'">Título matéria</label>'+
									'<input type="text" class="form-control input-sm" name="tituloMateria'+i+'" id="tituloMateria'+i+'" placeholder="Título da matéria">'+
								'</div>'+
								'<div class="col-sm-4">'+
									'<label for="linkMateria'+i+'">Link da matéria</label>'+
									'<input type="text" class="form-control input-sm" name="linkMateria'+i+'" id="linkMateria'+i+'" placeholder="Link da matéria">'+
								'</div>'+
								'<input type="hidden" class="qtd" name="qtd" value="'+i+'">'+
							'</div>'+
						'</div>').appendTo(divContent);		
		i++;
	});

	/* Publicações Previstas */
	var divContent2	  = '.areaNovasPub';
	var n 			  = 2;
	var botAdicionar2 = '.addFields2';
	
	jQuery(botAdicionar2).click(function() {
			
		var campos = jQuery('<div class="form-group form-group-sm">'+
								'<div class="row">'+
									'<div class="col-sm-12">'+
										'<label for="tituloPrevSemana'+n+'">Título:</label>'+
										'<input type="text" class="form-control input-sm" name="tituloPrevSemana'+n+'" id="tituloPrevSemana'+n+'" placeholder="Título da matéria">'+
									'</div>'+
								'</div>'+
							'</div>'+
							'<div class="form-group form-group-sm">'+
								'<div class="row">'+
									'<div class="col-sm-12">'+
										'<label for="txtMatPrevSemana'+n+'">Texto Matéria:</label>'+
										'<textarea class="form-control" rows="5" name="txtMatPrevSemana'+n+'" id="txtMatPrevSemana'+n+'"></textarea>'+
									'</div>'+
									'<input type="hidden" class="qtdN" name="qtdN" value="'+n+'">'+
								'</div>'+
							'</div>').appendTo(divContent2);
		n++;
	});

	/* A Cerveja */
	var divContent3	  = '.areaACerva';
	var y 			  = 2;
	var botAdicionar3 = '.addFields3';
	
	jQuery(botAdicionar3).click(function() {
			
		var campos = jQuery('<div class="form-group form-group-sm">'+
								'<div class="row">'+
									'<div class="col-sm-12">'+
										'<label for="tituloACerva'+y+'">Título:</label>'+
										'<input type="text" class="form-control input-sm" name="tituloACerva'+y+'" id="tituloACerva'+y+'" placeholder="Título da matéria">'+
									'</div>'+
								'</div>'+
							'</div>'+
							'<div class="form-group form-group-sm">'+
								'<div class="row">'+
									'<div class="col-sm-12">'+
										'<label for="txtMatACerva'+y+'">Texto Matéria:</label>'+
										'<textarea class="form-control" rows="5" name="txtMatACerva'+y+'" id="txtMatACerva'+y+'"></textarea>'+
									'</div>'+
									'<input type="hidden" class="qtdY" name="qtdY" value="'+y+'">'+
								'</div>'+
							'</div>').appendTo(divContent3);
		y++;
	});

	/* AMBEV / MARCA */
	var divContent4	  = '.areaMarcas';
	var z 			  = 2;
	var botAdicionar4 = '.addFields4';
	
	jQuery(botAdicionar4).click(function() {
			
		var campos = jQuery('<div class="form-group form-group-sm">'+
								'<div class="row">'+
									'<div class="col-sm-12">'+
										'<label for="tituloMarcas'+z+'">Título:</label>'+
										'<input type="text" class="form-control input-sm" name="tituloMarcas'+z+'" id="tituloMarcas'+z+'" placeholder="Título da matéria">'+
									'</div>'+
								'</div>'+
							'</div>'+
							'<div class="form-group form-group-sm">'+
								'<div class="row">'+
									'<div class="col-sm-12">'+
										'<label for="txtMatMarcas'+z+'">Texto Matéria:</label>'+
										'<textarea class="form-control" rows="5" name="txtMatMarcas'+z+'" id="txtMatMarcas'+z+'"></textarea>'+
									'</div>'+
									'<input type="hidden" class="qtdZ" name="qtdZ" value="'+z+'">'+
								'</div>'+
							'</div>').appendTo(divContent4);
		z++;
	});
});