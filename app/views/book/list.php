<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Livros</title>
</head>
<body>
    <h1>Lista de Livros</h1>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <strong><?php echo $book['title']; ?></strong> - <?php echo $book['author']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
