$(document).ready(function(){
	//future default load animation
	$('.menu_one').addClass('active');
});

var currentActivePage = 1;

$('.menu_one').click(function(){
	removeActive(1);
});

$('.menu_two').click(function(){
	removeActive(2);
});

$('.menu_three').click(function(){
	removeActive(3);
});

function removeActive(caller){
	if (currentActivePage == 1 && caller != 1){
		$('.menu_one').removeClass('active');
		addActive(caller);
	} else if (currentActivePage == 2 && caller != 2) {
		$('.menu_two').removeClass('active');
		addActive(caller);
	} else if (currentActivePage == 3 && caller != 3) {
		$('.menu_three').removeClass('active');
		addActive(caller);
	} else
		return false;
};

function addActive(newActive){
	if(newActive == 1){
		$('.menu_one').addClass('active');
		currentActivePage = 1;
	} else if (newActive == 2) {
		$('.menu_two').addClass('active');
		currentActivePage = 2;
	} else if (newActive == 3) {
		$('.menu_three').addClass('active');
		currentActivePage = 3;
	}
};
