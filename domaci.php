<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="domaci_proracun.php" method = "GET">
        <input type="text" name="input_cijena">
        <select name="odabir_kategorije" >
            <option value="hrana">Hrana</option>
            <option value="oprema">Racunarska oprema</option>
        </select>
        <input type="checkbox" name="porez"> Izracunaj porez
        <button>Izracunaj cijenu</button>
    </form>
</body>
</html>