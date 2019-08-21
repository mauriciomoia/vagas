@extends('template-site')
@section('content')
<div class="jumbotron">
	<h3>Vagas</h3>
	<div class="row" style="">
		<div class="col-md-12">
		</div>
	</div>
</div>

<div class="row" style="">
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
		<?php foreach($anuncios as $item){ ?>
		<div class="row" >
			<div class="col-md-12">
				<a href="anuncio/<?=$item->id?>"><b><?=$item->titulo?></b></a>
				<br>
				<?=$item->descricao?>
				<br><br>
				<?=$item->cidade?>/<?=$item->estado?>
				<?=$item->created_at?>
			</div>
		</div>
		<hr>
		<?php } ?>
		
	</div>
	<div class="col-md-4">
	</div>
</div>
@endsection