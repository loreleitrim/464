const fed = document.getElementById('fed');
const molex = document.getElementById('molex');
const rv = document.getElementById('rv');

fed.addEventListener('click', displayFed);
molex.addEventListener('click', displayMolex);
rv.addEventListener('click', displayRv);

function displayFed(){
  let fedDescription = document.getElementById('fed-description');
  if (fedDescription.classList.contains("show-fed-details")){
    fedDescription.classList.remove("show-fed-details");
    fedDescription.classList.add('hide-fed-details')
  } else{
    fedDescription.classList.add("show-fed-details");
    fedDescription.classList.remove('hide-fed-details');
  }
}

function displayMolex(){
  let molexDescription = document.getElementById('molex-description');
  if (molexDescription.classList.contains("show-molex-details")){
    molexDescription.classList.remove("show-molex-details");
    molexDescription.classList.add('hide-molex-details')
  } else{
    molexDescription.classList.add("show-molex-details");
    molexDescription.classList.remove('hide-molex-details');
  }
}

function displayRv(){
  let rvDescription = document.getElementById('rv-description');
  if (rvDescription.classList.contains("show-rv-details")){
    rvDescription.classList.remove("show-rv-details");
    rvDescription.classList.add('hide-rv-details')
  } else{
    rvDescription.classList.add("show-rv-details");
    rvDescription.classList.remove('hide-rv-details');
  }
}