<?php
function isPalindrome($string) {}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form>
            <div class="form-group" action="POST">
                <label for="isPalindrome">Enter a word</label>
                <input type="text" class="form-control" id="isPalindrome" name="isPalindrome">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div id="result"> </div>
</body>

</html>