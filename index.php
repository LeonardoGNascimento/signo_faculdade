<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css" />
    <title>Descubra seu signo</title>
</head>

<body>
    <div class="container">
        <div class="modal">
            <h1>Descubra seu signo</h1>
            <div>
                <div>
                    <div>
                        <div class="div-form">
                            <label for="data_nascimento">Data Nascimento</label>
                        </div>
                        <div class="div-form">
                            <input type="date" id="data_nascimento" required />
                        </div>
                    </div>
                    <div class="div-form">
                        <button class="button-submit" onclick="buscarSigno()">Buscar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="./js/buscarSigno.js"></script>
<script src="./node_modules/axios/dist/axios.min.js"></script>

</html>