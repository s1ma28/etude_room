<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>hello wolrd</h1>

<form action="action.php" method="post">
    名前：<input type="text" name="name" />
    生まれた月： <input type="text" name="month" />
    <input type="submit">
</form>

<?php
class Dog{
    public $name = 'Hachi';

    public function bark() {
        echo "warn!";
    }
}

$a = new Dog();

$a->bark();

echo $a->name;


?>

</body>
</html>

