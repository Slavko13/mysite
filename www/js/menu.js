document.getElementById('menuHead').onmouseover = function(event){
	var target = event.target;
	if (target.className == 'menu-item'){
		var s = target.getElementsByClassName('submenu');
		
		s[0].style.display = 'block';
	}
}
document.onmouseover = function(event){
	var target = event.target;
	console.log(event.target);
	if (target.className!='menu-item' && target.className!='submenu'){
		closeMenu();
	}
}

function closeMenu(){
	var menu = document.getElementById('menuHead');
	var sub = document.getElementsByClassName('submenu');
	for (var i = 0; i<sub.length; i++){
		sub[i].style.display="none";
	}
}