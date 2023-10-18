<!DOCTYPE html>
<html>
<head>
    <title>Простой калькулятор</title>
</head>
<body>
    <h1>Простой калькулятор</h1>
    <form method="post" action="">
        <input type="text" name="num1" placeholder="Число 1">
        <input type="text" name="num2" placeholder="Число 2">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value=""></option>
            <option value="/">/</option>
        </select>
        <input type="submit" name="calculate" value="Вычислить">
    </form>
</body>
</html>