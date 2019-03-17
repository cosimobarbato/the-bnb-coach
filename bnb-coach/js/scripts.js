window.onload = function(){

  // MOBILE MENU
  const hamburger = document.getElementById('hamburger');
  hamburger.addEventListener('click', hamburgerExpand);
  
  function hamburgerExpand(){
    document.querySelector('nav ul').classList.toggle("hidden");
  }

  // SET FOOTER DATE
  let CurrentDate = new Date;
  document.getElementById('current-date').innerText = CurrentDate.getFullYear();
}

