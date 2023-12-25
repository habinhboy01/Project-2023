// banner home

const popup = document.querySelector('.popup-banner');
const containerPopup = document.querySelector('.banner-img');


popup.onclick = function() {
  popup.style.display = "none";
}

containerPopup.addEventListener('click', function(event) {
  event.stopPropagation();
});