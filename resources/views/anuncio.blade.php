@extends('template-site')
@section('content')
<div class="jumbotron">
	<h5><?=$anuncio->cidade.'/'.$anuncio->estado?></h5>
	<h3><?=$anuncio->titulo?></h3>
	<div class="row" style="">
		<div class="col-md-4">
		</div>
		<div class="col-md-4" style="text-align:left">
			<?=$anuncio->descricao?>
		</div>
		<div class="col-md-4">
		</div>
	</div>
	<br>
	<div class="row" >
		<div class="col-md-12">
			<a class="btn btn-success" href="#" >Candidate-se</a>
		</div>
	</div>
</div>

<div class="row" style="">
	<div class="col-md-4">
	</div>
	<div class="col-md-4" style="text-align:center">
		<form method="POST" action="../candidatar/<?=$anuncio->id?>" enctype="multipart/form-data">
			@csrf
			<b>Nome completo</b><br>
			<input class="form-control" type="text" name="nome">
			<br>
			<b>Email</b><br>
			<input class="form-control" type="text" name="email">
			<br>
			<b>Telefone</b><br>
			<input class="form-control" type="text" name="telefone">
			<br>
			<b>Carta de apresentação</b><br>
			<textarea class="form-control" name="apresentacao"></textarea>
			<br>
			<b>Pretensão salarial</b><br>
			<input class="form-control" type="text" name="pretensaosalarial">
			<br>
			<b>Github</b><br>
			<input class="form-control" type="text" name="github">
			<br>
			<b>Linkedin</b><br>
			<input class="form-control" type="text" name="linkedin">
			<br>
			<b>Curriculum</b><br>
			<input class="form-control" type="file" name="anexo" id="file">
			<br>
			<button type="submit" class="btn btn-success">Enviar</button>
		</form>
	</div>
	<div class="col-md-4">
	</div>
</div>
@endsection