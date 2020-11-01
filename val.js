var filter_select_el = document.getElementById('filter');
var items_el = document.getElementById('items');

filter_select_el.onchange = function() {
	console.log(this.value);
  var items = items_el.getElementsByClassName('item');
  for (var i=0; i<items.length; i++) {
  	if (items[i].classList.contains(this.value)) {
    	items[i].style.display = 'block';
    } else {
    	items[i].style.display = 'none';
    }
  }
};