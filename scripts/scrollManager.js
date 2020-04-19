treatedElements = [];

window.addEventListener('scroll', function() {
  elements = document.getElementsByClassName('sa');
  for(var i = 0; i < elements.length; i++){
    if(!treatedElements.includes(elements[i]) && isScrolledIntoView(elements[i])){
        treatedElements.pop(elements[i]);
        for(var j = 0; j < elements[i].classList.length; j++){
            if(elements[i].classList[j].startsWith("sa-")){
                saClass = elements[i].classList[j].split("sa-")[1];
                elements[i].classList.add(saClass);
            }
        }
    }
  }
});

function isScrolledIntoView(el) {
    var rect = el.getBoundingClientRect();
    var elemTop = rect.top;
    var elemBottom = rect.bottom;

    // Only completely visible elements return true:
    var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
    // Partially visible elements return true:
    //isVisible = elemTop < window.innerHeight && elemBottom >= 0;
    return isVisible;
}