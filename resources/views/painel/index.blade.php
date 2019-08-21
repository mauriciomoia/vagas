@extends('template-painel')
@section('content')
<br>
Olá, <?=$user->nome?>
<hr>
<div class="row" style="">
	<div class="col-md-6">
		<h4>Criar anúncio</h4>
		<form action="painel/anuncio/add" method="POST" class="" >
			@csrf
			<b>Título</b><br>
			<input name="titulo" type="text" class="form-control">
			<br>
			<b>Descrição</b><br>
			<textarea class="form-control" name="descricao"></textarea>
			<br>
			<b>Cidade</b><br>
			<input name="cidade" type="text" class="form-control">
			<br>
			<b>Estado</b><br>
			<select id="estado" name="estado" class="form-control">
				<option value="AC">Acre</option>
				<option value="AL">Alagoas</option>
				<option value="AP">Amapá</option>
				<option value="AM">Amazonas</option>
				<option value="BA">Bahia</option>
				<option value="CE">Ceará</option>
				<option value="DF">Distrito Federal</option>
				<option value="ES">Espírito Santo</option>
				<option value="GO">Goiás</option>
				<option value="MA">Maranhão</option>
				<option value="MT">Mato Grosso</option>
				<option value="MS">Mato Grosso do Sul</option>
				<option value="MG">Minas Gerais</option>
				<option value="PA">Pará</option>
				<option value="PB">Paraíba</option>
				<option value="PR">Paraná</option>
				<option value="PE">Pernambuco</option>
				<option value="PI">Piauí</option>
				<option value="RJ">Rio de Janeiro</option>
				<option value="RN">Rio Grande do Norte</option>
				<option value="RS">Rio Grande do Sul</option>
				<option value="RO">Rondônia</option>
				<option value="RR">Roraima</option>
				<option value="SC">Santa Catarina</option>
				<option value="SP">São Paulo</option>
				<option value="SE">Sergipe</option>
				<option value="TO">Tocantins</option>
				<option value="EX">Estrangeiro</option>
			</select>
			<b>País</b><br>
			<input name="pais" type="text" class="form-control" value="Brasil">
			<br>
			
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</div>
	<div class="col-md-6">
		<h4>Meus anúncios (<?=$anuncios->count()?>)</h4>
		<?php foreach($anuncios as $item){ ?>
			<div class="row">
				<div class="col-md-6">
					<a href="painel/anuncio/view/<?=$item->id?>">
						<?=$item->titulo?>
					</a>
					<br>
					<b>Candidatos: </b><?=0?>
				</div>
				<div class="col-md-6">
					<?=$item->cidade?>/<?=$item->estado?>
					<br>
					<?=$item->created_at?>
				</div>
			</div>
			
			<hr> 	
		<?php } ?>
	</div>
</div>
@endsection