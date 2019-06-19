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
            <div class="current">
                Question <?php echo $_GET['n'] ?> of 5
            </div>
            <p class="question">
                What does PHP stand for ?
            </p>
            <form action="process.php" method="POST">
                <ul>
                    <li><input type="radio" name="choice" value="1">PHP: Hypertext Preprocessor</li>
                    <li><input type="radio" name="choice" value="1">PHP: Pre-Hypertext Processor</li>
                    <li><input type="radio" name="choice" value="1">PHP: Personal Homepage</li>
                    <li><input type="radio" name="choice" value="1">PHP: Private Homepage</li>
                </ul>
                <input type="submit" value="Submit">
            </form>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; 2019, PHP Quizzer
        </div>
    </footer>
</body>
</html>