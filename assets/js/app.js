new Glider(document.querySelector(".glider"), {
	slidesToShow: 2,
	slidesToScroll: 1,
	draggable: true,
	dots: ".dots",
	arrows: {
		prev: ".glider-prev",
		next: ".glider-next",
	},
});

function initMap() {
	var location = {
		lat: 31.241513,
		lng: 29.968524,
	};
	var map = new google.maps.Map(document.getElementById("map"), {
		zoom: 4,
		center: location,
	});
	var maker = new google.maps.Maker({
		position: location,
		map: map,
	});
}
