<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body><title>Landing Page</title>
<link rel="stylesheet" href="styles.css">
<div class="container">
    <div class="content">
        <h1>CycleMelb</h1>
        <div class="button-container">
            <button id="navigateButton" class="btn">Accident maps</button> <!-- yet to implement feature  -->
            <button id="navigateButton1" class="btn">View Routes</button>
        </div>
    </div>
</div>
<script>
    document.getElementById('navigateButton').addEventListener('click', function() {
        window.location.href = 'map.html';
    });

    document.getElementById('navigateButton1').addEventListener('click', function() {
        window.location.href = 'input.html';
    });
</script>
</body>
</html>
