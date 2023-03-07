<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>Rock-Paper-Scissors</title>
</head>
<body class="bg-info">
    <div class="container mt-1">
    <h1 class="text-center mr-2 font-weight-bold text-white">Rock, Paper or Scissors?</h1>
        <div class="options d-flex justify-content-center">
            <img id="rock" src="./src/images/rock.png" class="optionsImg">
            <img id="paper" src="./src/images/paper.png" class="optionsImg">
            <img id="scissors" src="./src/images/scissors.png" class="optionsImg">
        </div>
    </div>

 
    <h1 class="text-center">Resultado: <p id="resultadoJogo">?</p></h1>
    <div class="container mt-5 mr-1 w-100 d-flex justify-content">
        <h1>Player: </h1>
    <img id="changePic" src="" class="resultsImg">
    <div style="width: 150px"></div>
        <h1>Opponent: </h1>
    <img id="changePicOpponent" src="" class="resultsImg"">
    </div>
    

    <script src="./src/js/main.js"></script>
</body>
</html>