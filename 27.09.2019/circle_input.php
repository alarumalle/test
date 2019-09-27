<?php
// circle_input.php
//siin on kasutatud geti meetodit
//name on vormi nimi, mis on pärast aadressiribal peale ?märki
//selle meetodiga ei saa sisestada läbi vormi komaarve, aga saab neid lisada aadressiriba kaudu
?>

<form action="circle_do.php" method="get">
    <label for="radius">Sisesta ringi raadius: </label>
    <input type="number" id="radius" name="circle-radius">
</form>

