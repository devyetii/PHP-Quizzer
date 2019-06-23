<?php include 'database.php' ?>
<?php 
    if (isset($_POST['submit'])) {
        $total              = $mysqli->query("SELECT * FROM `questions`")->num_rows;
        $question_number    = $_POST['question_number'];
        $question_text      = $_POST['question_txt'];
        $correct_choice     = $_POST['correct'];
        $choices            = [
                                $_POST['choice1'],
                                $_POST['choice2'],
                                $_POST['choice3'],
                                $_POST['choice4'],
                            ];
        
        if ($question_text != "" && $question_number > $total) {
            $q_query            = "INSERT INTO `questions` (question_number, text) 
                                    VALUES ('$question_number', '$question_text')";
            $q_insert_row       = $mysqli->query($q_query) or die($mysqli->error.__LINE__);

            if (
                    $q_insert_row        &&
                    $correct_choice > -1 &&
                    $correct_choice < 5  &&
                    $choices[$correct_choice-1] != ""
                ) {
                foreach ($choices as $choice => $value) {
                    if ($value != "") {
                        $is_correct     = ($correct_choice == $choice+1) ? 1 : 0;
                        $c_query        = "INSERT INTO `choices` (question_number, is_correct, text)
                                            VALUES ('$question_number', '$is_correct', '$value')";
                        $c_insert_row   = $mysqli->query($c_query) or die($mysqli->error.__LINE__);

                        if (!$c_insert_row)
                            die ('ERROR : ('.$mysqli->errno .'), ' . $mysqli->error);
                    }
                }
                    $msg = "Question has been added!";
            } else  $msg = "Failed to add question, please be resonable!";
        }
    }
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
            <h2>Add Question</h2>
            <?php 
                if (isset($msg)) {
                    echo '<p>' . $msg . '</p>';
                }
            ?>
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
                <input type="submit" name="submit" value="Submit" class="start">
            </form>
            <a href="index.php" class="start">Back to Home</a>
        </div>

    </main>
    <footer>
        <div class="container">
            Copyright &copy; 2019, PHP Quizzer
        </div>
    </footer>
</body>
</html>