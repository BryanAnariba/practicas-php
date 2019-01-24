<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Introduce tus Datos</h1>
    <div style="margin-left:auto; margin-right:auto;">
        <form action="comprueba-login.php" method="POST">
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
            </table>
        </form>
    </div>

</body>
</html>