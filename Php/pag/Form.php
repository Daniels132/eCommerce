<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../CSS/bootstrap.css">
	<title>Login</title>
	<link rel="shortcut icon" type="image/x-icon" href="../Imagens/Logo.jpg">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<title>Login</title>
	<style type="text/css">
		* {
			margin: 2px;
			padding: 2px;
		}
	</style>
	<script type="text/javascript">
		function alerta() {
			alert("Parabéns, você completou seu cadastro!");
		}
		function mudacor(obj, cor) {
			obj.style.backgroundColor = cor;
		}
		function eventos() {
			var obj1 = document.forms[0].elements[1];
			var obj2 = document.forms[0].elements[2];
			var obj3 = document.forms[1].elements[1];
			var obj4 = document.forms[1].elements[2];
			var obj5 = document.forms[1].elements[3];
			var obj6 = document.forms[1].elements[4];
			var obj7 = document.forms[1].elements[5];
			var obj8 = document.forms[1].elements[6];

			document.getElementById("botao").addEventListener("click", alerta);

			obj1.addEventListener("mouseover", function (event) {
				mudacor(obj1, "#ddd");
			});
			obj1.addEventListener("mouseout", function (event) {
				mudacor(obj1, "#fff");
			});
			obj2.addEventListener("mouseover", function (event) {
				mudacor(obj2, "#ddd");
			});
			obj2.addEventListener("mouseout", function (event) {
				mudacor(obj2, "#fff");
			});
			obj3.addEventListener("mouseover", function (event) {
				mudacor(obj3, "#ddd");
			});
			obj3.addEventListener("mouseout", function (event) {
				mudacor(obj3, "#fff");
			});
			obj4.addEventListener("mouseover", function (event) {
				mudacor(obj4, "#ddd");
			});
			obj4.addEventListener("mouseout", function (event) {
				mudacor(obj4, "#fff");
			});
			obj5.addEventListener("mouseover", function (event) {
				mudacor(obj5, "#ddd");
			});
			obj5.addEventListener("mouseout", function (event) {
				mudacor(obj5, "#fff");
			});
			obj6.addEventListener("mouseover", function (event) {
				mudacor(obj6, "#ddd");
			});
			obj6.addEventListener("mouseout", function (event) {
				mudacor(obj6, "#fff");
			});
			obj7.addEventListener("mouseover", function (event) {
				mudacor(obj7, "#ddd");
			});
			obj7.addEventListener("mouseout", function (event) {
				mudacor(obj7, "#fff");
			});
			obj8.addEventListener("mouseover", function (event) {
				mudacor(obj8, "#F5F5DC");
			});
			obj8.addEventListener("mouseout", function (event) {
				mudacor(obj8, "#fff");
			});
		}
		window.addEventListener("load", eventos);
	</script>
</head>

<body>
	<form>
		<fieldset>
			<legend>Acesse sua conta</legend>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
							placeholder="Coloque seu email">
						<small id="emailHelp" class="form-text text-muted">Nós não vamos divulgar seu Email</small>
					</div>
					<div class="col">

						<label for="exampleInputPassword1">Senha</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
					</div>
				</div>
			</div>
			<div class="form-group form-check">
				<div class="row">
					<div class="col">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Mantenha-me conectado</label>
					</div>
					<div class="col">
						<a href="..\index.html"><button type="button" class="btn btn-primary">Entrar</button></a>
					</div>
				</div>
			</div>
		</fieldset>
	</form>
	<br><br>
	<form>
		<fieldset>
			<legend>Crie sua conta</legend>
			<div class="row">
				<div class="col">
					<label for="inputEmail4">Email</label>
					<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
				</div>
				<div class="col">
					<label for="inputPassword4">Senha</label>
					<input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<label for="inputAddress">Endereço</label>
					<input type="text" class="form-control" id="inputAddress" placeholder="AV. Brasil 45">
				</div>
				<div class="col">
					<label for="inputAddress2">Complemento</label>
					<input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, Andar">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<label for="inputCity">Cidade</label>
					<input type="text" class="form-control" id="inputCity">
				</div>
				<div class="col">
					<label for="inputState">Estado</label>
					<select id="inputState" class="form-control">
						<option selected>Escolha...</option>
						<option>Acre (AC)</option>
						<option>Alagoas (AL)</option>
						<option>Amapá (AP)</option>
						<option>Amazonas (AM)</option>
						<option>Bahia (BA)</option>
						<option>Ceará (CE)</option>
						<option>Distrito Federal (DF)</option>
						<option>Espírito Santo (ES)</option>
						<option>Goiás (GO)</option>
						<option>Maranhão (MA)</option>
						<option>Mato Grosso (MT)</option>
						<option>Mato Grosso do Sul (MS)</option>
						<option>Minas Gerais (MG)</option>
						<option>Pará (PA)</option>
						<option>Paraíba (PB)</option>
						<option>Paraná (PR)</option>
						<option>Pernambuco (PE)</option>
						<option>Piauí (PI)</option>
						<option>Rio de Janeiro (RJ)</option>
						<option>Rio Grande do Norte (RN)</option>
						<option>Rio Grande do Sul (RS)</option>
						<option>Rondônia (RO)</option>
						<option>Roraima (RR)</option>
						<option>Santa Catarina (SC)</option>
						<option>São Paulo (SP)</option>
						<option>Sergipe (SE)</option>
						<option>Tocantins (TO)</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck">
					<label class="form-check-label" for="gridCheck">
						Mantenha-me conectado
					</label>
				</div>
			</div>
		</fieldset>
		<a href="..\index.php">
			<button type="button" class="btn btn-primary" id="botao">Criar conta</button>
		</a>
	</form>
</body>

</html>