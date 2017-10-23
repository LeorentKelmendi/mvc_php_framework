 <!DOCTYPE html>
 <html>
 <head>
     <title>

         View
     </title>
 </head>
 <body>
    <nav>
        <ul>
            <li><a href="contact.php">Contact me </a></li>
            <li><a href="about.php">About.php</a></li>
        </ul>
    </nav>

    <?php foreach ($tasks as $task): ?>
        <li><?=$task['todo']?> </li>
    <?php endforeach;?>
 </body>
 </html>