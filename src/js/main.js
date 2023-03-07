function randResults() {
  const randomOption = ["scissors", "rock", "paper"];
  const random = Math.floor(Math.random() * randomOption.length);
  return randomOption[random];
}

function clickedElement(e, opponent = randResults()) {
  

  if (e.target.className == "optionsImg") {
    const Picture = e.target.src;
    const playerSrc = './src/images/' + Picture.substr(48)
    const opponentSrc = './src/images/' + opponent + '.png'
    const playerPicture = document.getElementById("changePic");
    const opponentPicture = document.getElementById("changePicOpponent");
 
    const player = e.target.id;
    if (player == opponent) {
      document.getElementById("resultadoJogo").innerHTML = "Empate.";
      playerPicture.setAttribute("src", playerSrc);	
      opponentPicture.setAttribute("src", opponentSrc);	
    } else if (
      player == "scissors" && opponent == "paper" ||
      player == "paper" && opponent == "rock" ||
      player == "rock" && opponent == "scissors") {
      document.getElementById("resultadoJogo").innerHTML = "Vitória";
      playerPicture.setAttribute("src", playerSrc);	
      opponentPicture.setAttribute("src", opponentSrc);	
    } else {
      document.getElementById("resultadoJogo").innerHTML = "Derrota.";
      playerPicture.setAttribute("src", playerSrc);	
      opponentPicture.setAttribute("src", opponentSrc);	
    }
  } return false;
}

window.addEventListener('click', clickedElement);
