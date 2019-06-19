<?php include 'database.php';?>
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
                <li><strong>Number of questions: </strong>5</li>
                <li><strong>Type: </strong>MCQ</li>
                <li><strong>Estimated Time: </strong>4 min.</li>
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