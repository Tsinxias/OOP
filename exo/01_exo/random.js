let firstImg = document.getElementById('firstImg');
let firstA = document.getElementById('firstA');

let random = function() {
  return Math.round(Math.random()*255);
}

firstImg.addEventListener('click', function() {
  firstA.style.backgroundColor = `rgb(${random()}, ${random()}, ${random()})`;
})
