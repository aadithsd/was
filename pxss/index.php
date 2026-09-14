<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Persistent XSS Demo</title>
</head>
<body>
    <h1>Comment Section</h1>

    <form action="submit.php" method="POST">
        <label for="comment">Enter your comment:</label>
        <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>

    <h2>Comments</h2>
    <div id="comments">
        <?php
        if (file_exists('comments.txt')) {
            $comments = file('comments.txt', FILE_IGNORE_NEW_LINES);
            foreach ($comments as $comment) {
                echo "<p>$comment</p>";
            }
        }
        ?>
    </div>
</body>
</html>