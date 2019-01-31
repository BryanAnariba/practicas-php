<h1>Introduce tus Datos</h1>
    <div style="margin-left:auto; margin-right:auto;">
        <!--1 PASO INCLUIR $_SERVER['SELF'];-->
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <table>
                <tr>
                    <td class="izq">Login:
                    </td>
                    <td class="der">
                        <input type="text" name="login">
                    </td>
                </tr>
                <tr>
                    <td class="izq">Password:
                    </td>
                    <td class="der">
                        <input type="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="entrar" value="Logear!">
                    </td>
                </tr>
                <tr>
                    <td class="izq">Recordar:
                    </td>
                    <td class="der">
                        <input type="checkbox" name="recordar" id="recordar">
                    </td>
                </tr>

            </table>
        </form>
    </div>