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
    <header>
        <h1>
            <?= $greeting; ?>
        </h1>
        <h1>
            <?= $treet; ?>
        </h1>
        <ul>
        <!-- this is the syntax I'll use for most php files -->
            <?php foreach($names as $name){
                echo "<li>$name</li>";
            };
            ?>
        </ul>
        <ul>
        <!-- I'll see this syntax more inside php/html mix files -->
            <?php foreach($names as $name) : ?>
                <li><?= $name; ?></li>
            <?php endforeach;?>
        </ul>
        <ul>
        <!-- I'll see this syntax more inside php/html mix files -->
            <?php foreach($person as $key => $value) : ?>
                <li><?= "name: $value, age: $key"; ?></li>
            <?php endforeach;?>
        </ul>
        <ul>
        <!-- I'll see this syntax more inside php/html mix files -->
            <?php foreach($task as $key => $value) : ?>
                <li><?= ucfirst($key) .": " . $value; ?></li>
            <?php endforeach;?>
            <?php $task['completed'] = 1; ?>
            <li>status: <?= $task['completed'] ? 'finished' : 'slacking'; ?></li>
            <li>status: <?php if($task['completed']) {
                        echo '&#9989;';
                    } else {
                        echo 'Not Finished';
                    }?>
            </li>
            <!-- More often seen in htlm/php files -->
            <li>status: 
                <?php if($task['completed']) : ?> 
                    <span class="icon">&#9989</span> 
                <?php else : ?>
                    <span class="icon">incomplete</span> 
                <?php endif; ?>
            </li>
        </ul>
    </header>
    
</body>
</html>