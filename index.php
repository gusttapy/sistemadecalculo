<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Perfumes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="titulo">Gustavo Parfum</div>

<h2></h2>

<form action="processa.php" method="POST">

Nome:<br>
<input type="text" name="nome" required><br><br>
Perfume:<br>
<input type="text" name="perfume" required><br><br>
Valor da Compra (R$):<br>
<input type="number" step="0.01" name="valor" required><br><br>
Peso(kg):<br>
<input type="number" step="0.01" name="peso" required><br><br>
Distância (km):<br>
<input type="number" name="distancia" required><br><br>

Tipo de Perfume:<br>
<select name="produto">
<option value="normal">Perfume Comum</option>
<option value="fragil">Perfume Suave</option>
<option value="normal">Perfume Fresco</option>
<option value="normal">Perfume Doce</option>
<option value="normal">Perfume Frutado</option>
</select>
<br><br>

Forma de Entrega:<br>
<select name="entrega">
<option value="economica">Econômica</option>
<option value="normal">Normal</option>
<option value="expressa">Expressa</option>
<option value="retirada">Retirada na Loja</option>
</select>

<br><br>
<button type="submit">Calcular Frete</button>

</form>

</body>
</html>
