
/***********************************quotes slide*************************/


var quoteSlideIndex = 0;
carousel();


function carousel(){
  var x;
  var q = document.getElementsByClassName("quoteslide");
  for (x = 0; x < q.length; x++){
    q[x].style.display = "none";
  }
  quoteSlideIndex++;
  if (quoteSlideIndex > q.length) {quoteSlideIndex = 1}
  q[quoteSlideIndex-1].style.display= "block";
  setTimeout(carousel, 6000);
}