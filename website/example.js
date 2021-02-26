function revealAnswer() {
  let answerElement = document.getElementsByClassName("answer")[0];

   answerElement.style.display = "block";
}

setTimeout(
   /* Your solution goes here */
   setTimeout(function(){revealAnswer(); }, 3000));
);