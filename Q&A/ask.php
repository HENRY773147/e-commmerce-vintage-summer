<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $question_text = $_POST['question_text'];

    $stmt = $pdo->prepare('INSERT INTO questions (question_text) VALUES (?)');
    $stmt->execute([$question_text]);

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask Questions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Ask Question.....</h1>
    <form method="post" action="ask.php">
        <textarea name="question_text" required></textarea>
        <button type="submit">Ask</button>
    </form>
    <p>need to see the Answers.?</p>
    <button><a href="index.php">Answers</a></button>

    <script src="script.js"></script>
</body>


</html>