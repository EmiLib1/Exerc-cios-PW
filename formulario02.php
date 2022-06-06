<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="estilo2.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script type="text/javascript">
        function validar(){
            var nome = formulario.nome.value;
            var logradouro = formulario.logradouro.value;
            var numero = formulario.numero.value;
            var cep = formulario.CEP.value;
            var bairro = formulario.bairro.value;
            var cidade = formulario.cidade.value;
            var estado = formulario.estado.value;

            if (nome.length < 5){
                alert("Preencha o campo nome!")
                formulario.nome.focus();
                return false;
            }

            if (logradouro.length < 10){
                alert("Preencha o campo logradouro!")
                formulario.logradouro.focus();
                return false;
            }

            if (numero.length == ""){
                alert("Preencha o campo número da residência!")
                formulario.numero.focus();
                return false;
            }

            if (cep.length < 8){
                alert("Preencha o campo CEP!")
                formulario.CEP.focus();
                return false;
            }

            if (bairro.length < 10){
                alert("Preencha o campo bairro!")
                formulario.bairro.focus();
                return false;
            }

            if (cidade.length < 3){
                alert("Preencha o campo cidade!")
                formulario.cidade.focus();
                return false;
            }

            if (estado.length < 2){
                alert("Preencha o campo estado!")
                formulario.estado.focus();
                return false;
            }

        }
    </script>


</head>

<body>
    <form class="formulario" name="formulario" action="processador.php" method="post" enctype="multipart/form-data">
    <h1>Emili Liberato - 3IPIIEM</h1>
    <h2>Formulário HTML</h2>
        <div>
            <label> Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="No mínimo 5 caracteres">
        </div>

        <br><br>
        <div>
            <label> Logradouro: </label>
            <input type="text" name="logradouro" id="logradouro" placeholder="No mínimo 10 caracteres">
        </div>

        <br><br>
        <div>
            <label> N° da Residência: </label>
            <input type="number" name="numero" id="numero">
        </div>
        <br><br>
        <div>
            <label> CEP: </label>
            <input type="text" name="CEP" id="CEP" placeholder="00000-000">
        </div>
        <br><br>
        <div>
            <label> Complemento: </label>
            <input type="text" name="complemento" id="complemento" placeholder="Não obrigatório*">
        </div>
        <br><br>
        <div>
            <label> Bairro: </label>
            <input type="text" name="bairro" id="bairro" placeholder="No mínimo 10 caracteres">
        </div>
        <br><br>
        <div>
            <label> Cidade: </label>
            <input type="text" name="cidade" id="cidade" placeholder="Escreva por extenso">
        </div>
        <br><br>
        <div>
        <label> Estado: </label>
            <select id="estado" name="estado" placeholder="Por extenso ou sigla">
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
        </div>
        <br><br>
        <div>
            <label> Imagem: </label>
            <input type="file" name="arq" id="name" accept="image/png, image/jpeg">
        </div>
        <br><br>

        <!-- Botão de envio -->
        <div>
             <input type="submit" id="bt_" onclick="return validar()" value="Enviar" >

        </div>

    </form>
</body>
</html>