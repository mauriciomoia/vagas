@extends('template-painel')
@section('content')
<br>
Olá, <?=$user->nome?> (<a href="../../">Voltar</a>)
<hr>
<div class="row" style="">
	<div class="col-md-6">
		<h4>Anúncio</h4>
		<?php if($anuncio){?>
			<b><?=$anuncio->titulo?></b>
			<br>
			<?=$anuncio->descricao?>
			<br><br>
			<?=$anuncio->cidade?>/<?=$anuncio->estado?>
			<br>
			<?=$anuncio->created_at?>
		<?php } ?>
	</div>
	<div class="col-md-6">
		<h4>Candidatos (<?=$candidatos->count()?>)</h4>
		<?php foreach($candidatos as $item){ ?>
			<div class="row">
				<div class="col-md-6">
					<?=$item->nome?>
					<br>
					<?=$item->email?>
					<br>
					<?=$item->pretensaosalarial?>
					<br>
					<?=$item->linkedin?>
					<br>
					<?=$item->github?>
					<br>
					<?=$item->created_at?>
				</div>
				<div class="col-md-6">
					<?=$item->apresentacao?>
				</div>
			</div>
			
			<hr> 	
		<?php } ?>
	</div>
</div>
@endsection