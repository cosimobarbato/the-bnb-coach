window.onload = function(){
  const hamburger = document.getElementById('hamburger');
  hamburger.addEventListener('click', hamburgerExpand);
  
  function hamburgerExpand(){
    document.querySelector('nav ul').classList.toggle("hidden");
  }
}

