// tìm kiếm map

document.querySelector('#search-map').addEventListener('input', filterList);

function filterList() {
    const searchInput = document.querySelector('#search-map');

    const filter = searchInput.value.toLowerCase();

    const listItems = document.querySelectorAll('.list-branch-contact');

    listItems.forEach((item) => {
        let text = item.textContent;

        if(text.toLowerCase().includes(filter.toLowerCase())) {
            item.style.display = '';
        }
        else {
            item.style.display = 'none';
        }
    });
}

// ---------------

let showAddress = document.getElementsByClassName('list-branch-contact');

for(var j = 0; j < showAddress.length; j++) {
    showAddress[0].classList.add('tab-map');
}

let showMap = document.getElementsByClassName('content-contact');

for(var k = 0; k < showMap.length; k++) {
    showMap[0].classList.add('pane-map');
}


var allSelect = document.querySelector.bind(document);
var all = document.querySelectorAll.bind(document);

var button = all('.list-branch-contact');
var contents = all('.content-contact');

button.forEach((tab, index) => {
    var content = contents[index];

    tab.onclick = function () {

        allSelect('.list-branch-contact.tab-map').classList.remove('tab-map');
        allSelect('.content-contact.pane-map').classList.remove('pane-map');

        this.classList.add('tab-map');
        content.classList.add('pane-map');

    }
}); 