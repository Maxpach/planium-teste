<?php
$file_path = "./json/proposta.json";
$propostas = json_decode(file_get_contents($file_path));
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<title>Planium - Maximiliano</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Planium</title>
		<link rel="stylesheet" href="propostas-cadastradas.css">
	</head>
	<body>
		<div class="container">
			<h1>Propostas Cadastradas</h1>
			<form class="form" action="/php/save-proposta.php" method="POST">
				<div class="beneficiarios_result">
					<?php if (count($propostas) <= 0) { ?>
						<div class="emptyList">
							Não há propostas cadastradas
						</div>
					<?php } ?>
					<?php
						$index = 0;
						foreach($propostas as $propostaIterator):
						$nomeInputName = "beneficiarios_result[{$index}][nome]";
						$idadeInputName = "beneficiarios_result[{$index}][idade]";
						$registroDoPlanoInputName = "beneficiarios_result[{$index}][registro_plano]";
						$precoInputName = "beneficiarios_result[{$index}][preco]";
					?>
						<div class="beneficiario_result">
							<div class="beneficiario_result_row">
								<label for="<?= $nomeInputName ?>">Nome e Sobrenome</label>
								<input
									class="disabled"								
									type="text"
									name="<?= $nomeInputName ?>"
									value="<?= $propostaIterator->nome ?>"
								/>
							</div>
							<div class="beneficiario_result_row">
								<label for="<?= $idadeInputName ?>">Idade</label>
								<input
									class="disabled"
									type="text"
									name="<?= $idadeInputName ?>"
									value="<?= $propostaIterator->idade ?>"
								/>
							</div>
							<div class="beneficiario_result_row">
								<label for="<?= $registroDoPlanoInputName ?>">Registro do plano</label>
								<input
									class="disabled"
									type="text"
									name="<?= $registroDoPlanoInputName ?>"
									value="<?= $propostaIterator->registro_plano ?>"
								/>
							</div>
							<div class="beneficiario_result_row">
								<label for="<?= $precoInputName ?>">Preço</label>
								<input
									class="disabled"
									type="text"
									name="<?= $precoInputName ?>"
									value="<?= $propostaIterator->preco ?>"
								/>
							</div>
						</div>
					<?php
						$index++;
				 		endforeach;
					?>
				</div>
			</form>
			<a href="./index.php" class="button">Cadastrar novos beneficiário</a>
			</br>

			<a href="./main.html" class="button">Sair do programa</a>
		</div>
		<footer >
		<h5>Desenvolvido por - <strong><a class="dev" href="https://maxiimiliano.vercel.app" target="_blank"> Leandro Maximiliano </a></h5>
		</footer>
	</body>
</html>
