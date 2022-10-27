<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/css/index.css">
    <title></title>
</head>
<body>
    <a class="button btn-back" href="index.php">Back</a>
    <h1>Adicionar Chaves</h1>
    <div class="content">
        <form action="index.php" method="POST">
            <div class="input-box">
                <label for="keycontent">Chave:</label>
                <input class="input" type="text" placeholder="Escreva a Chave" value="<?= isset($resultData[0]['keycontent']) ? $resultData[0]['keycontent'] : '' ?>" keycontent="keycontent" required>
            </div>
            <br><br>
            <div class="input-box">
                <label for="serialcontent">Serial:</label>
                <input class="input" type="text" placeholder="Escreva o Serial" value="<?= isset($resultData[0]['serialcontent']) ? $resultData[0]['serialcontent'] : '' ?>"serialcontent ="serialcontent" >
            </div>
            <br><br>
            <div class="input-box">
                <label for="keystate">Status:</label>
                <input class="input" type="text" placeholder="Escreva o Status da Chave" value="<?= isset($resultData[0]['keystate']) ? $resultData[0]['keystate'] : '' ?>" keystate="keystate" >
            </div>
            <br><br>
            <input type="hidden" name="a" value="<?= isset($resultData[0]['idkey']) ? 'edit' : 'new' ?>">
            <input type="hidden" name="id" value="<?= isset($resultData[0]['idkey']) ? $resultData[0]['idkey'] : '' ?>">
            <input class="button btn-search" type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>