<?php include 'database.php';?>
<?php 
    /*
    *   Get the Question
    */

    $query1 = "SELECT * FROM `questions`";

    //Get Result
    $res = $mysqli->query($query1) or die($mysqli->error.__LINE__);
    $q_count = $res->num_rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Quizzer</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>PHP Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Test your PHP Knowledge</h2>
            <p>This is an MCQ to test your PHP knowledge</p>
            <ul>
                <li><strong>Number of questions: </strong><?php echo $q_count; ?></li>
                <li><strong>Type: </strong>MCQ</li>
                <li><strong>Estimated Time: </strong><?php echo $q_count*0.5; ?> mins.</li>
            </ul>
            <a href="question.php?n=1" class="start">Start Quiz</a>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; 2019, PHP Quizzer
        </div>
    </footer>
</body>
</html>