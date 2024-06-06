<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rock Paper Scissors</title>
    <link rel="stylesheet" href="./styles.css" />
    <style>*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  --very-dark-blue: #0a0a23;
  --white: #ffffff;
  --yellow: #f1be32;
  --golden-yellow: #feac32;
}

body {
  background-color: var(--very-dark-blue);
  text-align: center;
  color: var(--white);
}

h1 {
  margin: 15px 0 20px;
}

.btn {
  cursor: pointer;
  width: 100px;
  margin: 10px;
  color: var(--very-dark-blue);
  background-color: var(--golden-yellow);
  background-image: linear-gradient(#fecc4c, #ffac33);
  border-color: var(--golden-yellow);
  border-width: 3px;
}

.btn:hover {
  background-image: linear-gradient(#ffcc4c, #f89808);
}

.rules-container {
  padding: 10px 0;
  margin: auto;
  border-radius: 15px;
  border: 5px solid var(--yellow);
  background-color: var(--white);
  color: var(--very-dark-blue);
}

.rules-container ul {
  list-style-type: none;
}

.rules-container p {
  margin: 10px 0;
}

@media (min-width: 760px) {
  .rules-container {
    width: 60%;
  }
}

.score-container {
  display: flex;
  justify-content: space-around;
  margin: 30px 0;
  font-size: 1.2rem;
}

.score {
  font-weight: 500;
}

.results-container {
  font-size: 1.3rem;
  margin: 15px 0;
}

#winner-msg {
  margin-top: 25px;
}

#reset-game-btn {
  display: none;
  margin: 20px auto;
}
</style>
  </head>
  <body>
    <h1>Let's play Rock, Paper, Scissors!</h1>
    <main>
      <details class="rules-container">
        <summary>Rules to the game</summary>

        <p>You will be playing against the computer.</p>
        <p>You can choose between Rock, Paper, and Scissors.</p>
        <p>The first one to three points wins.</p>

        <p>Here are the rules to getting a point in the game:</p>
        <ul>
          <li>Rock beats Scissors</li>
          <li>Scissors beats Paper</li>
          <li>Paper beats Rock</li>
        </ul>
        <p>
          If the player and computer choose the same option (Ex. Paper and
          Paper), then no one gets the point.
        </p>
      </details>

      <div class="score-container">
        <strong
          >Your Score: <span class="score" id="player-score">0</span></strong
        >
        <strong
          >Computer Score:
          <span class="score" id="computer-score">0</span></strong
        >
      </div>

      <section class="options-container">
        <h2>Choose an option:</h2>
        <div class="btn-container">
          <button id="rock-btn" class="btn">Rock</button>
          <button id="paper-btn" class="btn">Paper</button>
          <button id="scissors-btn" class="btn">Scissors</button>
        </div>
      </section>

      <div class="results-container">
        <p id="results-msg"></p>
        <p id="winner-msg"></p>
        <button class="btn" id="reset-game-btn">Play again?</button>
      </div>
    </main>
    <script src="./script.js"></script>
  </body>
</html>
