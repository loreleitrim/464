const guessSubmit = document.getElementById('pepperForm');
console.log(guessSubmit);
const guessField = document.getElementById('guesses');
console.log(guessField);

guessSubmit.addEventListener('click', checkGuess)

function checkGuess(){
  const userGuess = guessField.value;
  console.log(userGuess);
}