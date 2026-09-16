<html>
<body>

Número 1 = <?php echo $_POST["number1"]; ?><br>
Número 2 = <?php echo $_POST["number2"]; ?><br>

<?php

    if ($_POST["operation"] === "soma") {
        echo $_POST["number1"] + $_POST["number2"];
    }

?>

</body>
</html>