<?php
    if(isset($_REQUEST['try']) and ($_REQUEST['try'] == 'submit')) {
        session_start();
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['number'] = $_POST['number'];
        echo "<a href='script2.php'>clique aqui!</a>";
    } else {
        ?>
            <form method="POST" name="form" action="script.php?try=submit">
                <label for="name">Nome: </label>
                <input type="text" name="name">
                <br>
                <label for="number">Telefone: </label>
                <input type="text" name="number">
                <br>
                <button type="submit" value="Send">Enviar</button>
            </form>
        <?php
    }
?>