 <!DOCTYPE html>
 <html>
 <head>
     <title>

         View
     </title>
 </head>
 <body>
    <?php require 'partials/nav.php';?>

    <?php foreach ($tasks as $task) {echo $task['todo'] . "<br>";}?>

   <h1>Submit your name</h1>

   <form method="post" action="index.php/names">

    <input type="text" name="name">

    <button type="submit">Send</button>



   </form>
 </body>
 </html>