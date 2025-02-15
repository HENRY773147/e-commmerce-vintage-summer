<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $question_id = $_POST['question_id'];
    $answer_text = $_POST['answer_text'];

    $stmt = $pdo->prepare('INSERT INTO answers (question_id, answer_text) VALUES (?, ?)');
    $stmt->execute([$question_id, $answer_text]);

    header('Location: index.php');
    exit;
}

$question_id = $_GET['question_id'];
$stmt = $pdo->prepare('SELECT * FROM questions WHERE id = ?');
$stmt->execute([$question_id]);
$question = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer a Question</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Answer a Question...</h1>
    <h2><?php echo $question['question_text']; ?></h2>
    <form method="post" action="answer.php">
        <input type="hidden" name="question_id" value="<?php echo $question_id; ?>">
        <textarea name="answer_text" required></textarea>
        <button type="submit">Answer</button>
    </form>
   
</html>