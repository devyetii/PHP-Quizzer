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
            <h2>Add Question</h2>
            <form action="add.php" method="POST">
                <p>
                    <label for="question_number">Question number</label>
                    <input type="number" name="question_number">
                </p>
                <p>
                    <label for="question_txt">Question Text</label>
                    <input type="text" name="question_txt">
                </p>
                <p>
                    <label for="choice1">Choice #1</label>
                    <input type="text" name="choice1">
                </p>
                <p>
                    <label for="choice2">Choice #2</label>
                    <input type="text" name="choice2">
                </p>
                <p>
                    <label for="choice3">Choice #3</label>
                    <input type="text" name="choice3">
                </p>
                <p>
                    <label for="choice4">Choice #4</label>
                    <input type="text" name="choice4">
                </p>

                <p>
                    <label for="correct">Correct Choice No.</label>
                    <input type="number" name="correct">
                </p>
                <input type="submit" name="submit" value="Submit">
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