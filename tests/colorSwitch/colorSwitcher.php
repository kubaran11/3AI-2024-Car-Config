<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color switch</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer>
        console.log("loaded");
    </script>
</head>
<body onload="newPage()">
    <div class="box">
        <div class="colorbox" id="colorbox"></div>
    </div>

    <button class="button" id="prev" onclick="updatePrev()">prev</button>
    <button class="button" id="next" onclick="updateNext()">next</button>

    <p id="indexID">Current color index: [/]</p>

</body>
</html>