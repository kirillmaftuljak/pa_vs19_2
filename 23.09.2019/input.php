<form action="input_do.php" method="get">
    <div>
        <label for="firstName">Nimi</label>
        <input type="text" id="firstName" name="firstName">
    </div>
    <div>
        <label for="lastName">Perenimi</label>
        <input type="text" id="lastName" name="lastName">
    </div>
    <div>
        <label for="age">Vanus</label>
        <input type="number" step="1" id="age" name="age">
    </div>
    <div>
        <label for="height">Pikkus(m)</label>
        <input type="number" step="0.01" id="height" name="height">
    </div>
    <div>
        <label for="weight">Kaal(kg)</label>
        <input type="text" id="weight" name="weight">
    </div>
    <input type="submit" value="Saada">
</form>