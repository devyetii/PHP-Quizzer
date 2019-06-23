<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
    //Get no. of the question
    $qno = $_POST['qno'];

    if (!isset($_SESSION['score']) || $qno == 1) {
        $_SESSION['score'] = 0;
    }

    //Get ID of the choice
    $choice_id = $_POST['choice'];

    /*
    *   Get the choice
    */
    $query = "SELECT * FROM `choices` WHERE id=$choice_id";

    //Fetch the results
    $res = $mysqli->query($query) or die ($mysqli->error.__LINE__);
    $choice = $res->fetch_assoc();

    /*
    *   BAD PRACTICE ! Getting total no. of questions
    */
    $q_count = $mysqli->query("SELECT * FROM `questions`")->num_rows or die ($mysqli->error.__LINE__);
    
    //Add is_correct to the score
    $_SESSION['score'] += (int) $choice['is_correct'];

    //Redirecting
    if ($qno == $q_count) {
        header("Location: final.php");
        exit();
    } else {
        $qno++;
        header("Location: question.php?n=$qno");
    }
?> 