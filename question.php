<?php include 'database.php'; ?>
<?php 
    //Set question number
    $qno = (int) $_GET['n'];

    /*
    **   BAD PRACTICE ! Getting total no. of questions
    */

    $q_count = $mysqli->query("SELECT * FROM `questions`")->num_rows or die ($mysqli->error.__LINE__);

    
    /*
    **   Get the Question
    */

    $query1 = "SELECT * FROM `questions` WHERE question_number = $qno";
    //Get Result
    $res1 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
    $question = $res1->fetch_assoc();

    /*
    **   Get the Choices
    */

    $query2 = "SELECT * FROM `choices` WHERE question_number = $qno";
    //Get Result
    $res2 = $mysqli->query($query2) or die($mysqli->error.__LINE__);
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
            <div class="current">
                Question <?php echo $qno ?> of <?php echo $q_count ?>
            </div>
            <p class="question">
                <?php echo $question['text']; ?>
            </p>
            <form action="process.php" method="POST">
                <ul>
                    <?php while ($choice = $res2->fetch_assoc()) : ?>
                        <li><input type="radio" name="choice" value="<?php echo $choice['id']; ?>">
                            <?php echo htmlspecialchars($choice['text']); ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <input type="hidden" name="qno" value="<?php echo $qno; ?>">
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