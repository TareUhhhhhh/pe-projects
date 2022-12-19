setTimeout(function(){
    document.body.className="";
},500);

function menuFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

var body = document.querySelector('body');

document.addEventListener('click', function(event) {

  console.log(event.target);

  if ( event.target.matches('.toggle') ) {
    body.classList.toggle('small-menu-open');
  }
});