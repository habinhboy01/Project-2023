var modalPerformance = document.getElementById('modal');
var modalPerformance2 = document.getElementById('modal2');

var openPerformance = document.getElementsByClassName('img-performance');
var closePerformance = document.getElementById('close-modal');

for ( var i = 0; i < openPerformance.length; i++) {

    openPerformance[i].onclick = function() {

        modalPerformance.classList.add('display-modal-performance');
    }
}

closePerformance.onclick = function() {
    modalPerformance.classList.remove('display-modal-performance');
}

modalPerformance.onclick = function() {
    modalPerformance.classList.remove('display-modal-performance');
}

modalPerformance2.addEventListener('click', function(event) {
  event.stopPropagation();
});