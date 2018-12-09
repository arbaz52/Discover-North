window.onload = function(){
	setup();
}


setup = function(){
	setup_map()
	$("nav").slideToggle(0);
}


goto = function(link){
	window.location.href = link
}
setup_map = function(){
	//checking if region is selected
	if(get_param("region") || get_param("location")){
		var region = get_param("region") || get_param("location");
		//getting location coordinates
    	var region_info = JSON.parse(TPLMaps.TPLSearch({term: region}))[0];
    	//setting up the map lat, lng
    	//make it better, add map variable and use that to work with things.
    	TPLMaps.loadMap(
    		{center: {lat: region_info.lat, lng: region_info.lng} , zoom: 8, div: "map"})
	}else{
		// alert("Region not selected")
			TPLMaps.loadMap(
    		{center: {lat: 35.7765173, lng: 72.9235029} , zoom: 8, div: "map"})
	}
}
get_route = function(location_name){
	var location_info = JSON.parse(TPLMaps.TPLSearch({term: location_name}));
	console.log(location_info);
	location_info = location_info[0];
	//get route layer
	//add layer on top of the map

}
get_param = function(c){
	var url_string = window.location.href;
	var url = new URL(url_string);
	var c = url.searchParams.get(c);
	return c;
}