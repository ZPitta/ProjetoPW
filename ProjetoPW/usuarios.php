<?php include("./cabecalho.php"); ?>
    <h1>Página de Usuários</h1>
    <table border="3">
        <?php
            for($i = 0; $i < 10; $i++){
                ?>
                    <tr>
                        <td>Login <?php echo $i; ?></td>
                        <td>Email <?php echo $i; ?></td>
                        <td><input type="checkbox" /></td>
                    </tr>
                <?php
            }
        ?>
<?php include("./rodape.php"); ?>