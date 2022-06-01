
	<!doctype html>
	<html lang="pt-BR">
	<head>
		<title>Planium - Maximiliano</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="css/style.css">

		<script>
            var beneficiarioIndex = 0;
            function addBeneficiarioToForm() {
                var beneficiarios = document.getElementById("beneficiarios");
                let nameInputName = `beneficiario[${beneficiarioIndex}][idade]`;
                let idadeInputName = `beneficiario[${beneficiarioIndex}][nome]`;
                let registroDoPlanoInputName = `beneficiario[${beneficiarioIndex}][registro-do-plano]`;
                beneficiarios.innerHTML += `
                <div class="beneficiario-container">
                    <div class="beneficiario-container-row">
                        <label for="${nameInputName}">Idade</label>
                        <input type="text" name="${nameInputName}"/>
                    </div>
                    <div class="beneficiario-container-row">
                        <label for="${idadeInputName}">Nome</label>
                        <input type="text" name="${idadeInputName}"/>
                    </div>
                    <div class="beneficiario-container-row">
                        <label for="${registroDoPlanoInputName}">Registro do plano</label>
                        <input type="text" name="${registroDoPlanoInputName}"/>
                    </div>
                </div>
                `;
                beneficiarioIndex = beneficiarioIndex + 1;
            }
            document.addEventListener("DOMContentLoaded", function(event) {
                addBeneficiarioToForm();
            });
        </script>

		</head>
		<body>
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div id="logo" class="col-md-6 text-center mb-5">
						<img src="imagens/platium.svg" alt="logo" width="200px"></img>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="wrapper">
							<div class="row no-gutters">
								<div class="col-md-6 d-flex align-items-stretch">
									<div class="contact-wrap w-100 p-md-5 p-4 py-5">
										<h3 class="mb-4">Cadastrar Beneficiários</h3>
										<div id="form-message-warning" class="mb-4"></div> 
										<div id="form-message-success" class="mb-4">
										concluido!
										</div>
										<form class="form" action="form-proposta.php" method="POST">
                							<div id="beneficiarios" class="beneficiarios"></div>
											<div class="row">
												
												<div class="col-md-12">
													<!-- 
														Aqui esta pegando o meu select para que pudesse ficar mais facil ainda a inserção na hora de preencher
														os inputs.
														Mas como preciso salvar em uma variável/const, ficou meio complicado de automatizar este processo.
														Mas creio que fiz exatamente o que pediram.


														
													<div class="form-group"> 
														<input type="number" class="form-control" name="idade" id="idade" placeholder="Sua idade" min="0">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome e sobrenome" maxlength="40">
													</div>
												</div>
												<div class="col-md-12"> 
													<div class="form-group">
														<select class="form-control" name="plano" id="plano" placeholder="Registro do Plano">
															<option value="reg1">Bitix Customer Plano 1</option>
															<option value="reg2">Bitix Customer Plano 2</option>
															<option value="reg3">Bitix Customer Plano 3</option>
															<option value="reg4">Bitix Customer Plano 4</option>
															<option value="reg5">Bitix Customer Plano 5</option>
															<option value="reg6">Bitix Customer Plano 6</option>
														</select>
													</div> -->
												</div>
												</br>
												
												<div class="col-md-12"> 
													<div class="add-button-container">
														<button class="add-button" type="button" onclick="addBeneficiarioToForm()" action={}> + Adicionar Beneficiário </button>
													</div>
													</br>
												</div>												
												
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Cadastrar" class="btn btn-primary">
														<div class="submitting"></div>
													</div>
												</div>
												</br>

												<div class="col-md-12">
												<a href="./propostas-cadastradas.php" class="button">Visualizar cadastros</a>
												</div>
												</br>
												</br>
												</br>
												</br>
												</br>
												<a id="voltar" href="./main.html" class="button" >sair</a>
											</div>
										</form>
									</div>
								</div>
								<div class="col-md-6 d-flex align-items-stretch">
									<div class="info-wrap w-100 p-md-5 p-4 py-5 img">
										<h3>Teste Planium</h3>
										<p class="mb-4">Backend em PHP</p>
								<div class="dbox w-100 d-flex align-items-start">
									
									<div class="text pl-3">
									<p><span>Entrada:</span> Beneficiario.json = Quantidade de benificiários , idade, nome, registro do plano.</p>
								</div>
							</div>
								<div class="dbox w-100 d-flex align-items-center">
									
									<div class="text pl-3">
									<p><span>Saida:</span> proposta.json = Preço do plano, idade, valor total do plano selecionado</p>
								</div>
							</div>
								<div class="dbox w-100 d-flex align-items-center">
									
									<div class="text pl-3">
									<p><span>Json requisitados:</span> Plans.json e Prices.json</p>
								</div>
							</div>
							<div class="dbox w-100 d-flex align-items-center">
									
								<div class="text pl-3">
								<p><span>Json criados:</span> Beneficiarios.json e proposta.json</p>
								</div>
						</div>
								
						</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/main.js"></script>

	<footer class="dev">
	<h5>Desenvolvido por - <strong><a href="https://maxiimiliano.vercel.app" target="_blank"> Leandro Maximiliano </a></h5>
	</footer>
		</body>
	</html>
