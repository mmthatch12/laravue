<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            background: grey;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/about/culture">About our Culture</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    <header>
        <ul>
            <?php foreach($tasks as $task) :?>
                <li>
                    <?php if ($task->completed) : ?>
                        <strike><?= $task->description; ?></strike>
                    <?php else: ?>
                        <?= $task->description; ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </header>
    
</body>
</html>