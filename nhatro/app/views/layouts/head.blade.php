<meta charset=utf-8>
<meta name=description content="">
<meta name=viewport content="width=device-width, initial-scale=1">
<title>Nhà trọ online | @yield('title') </title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap-theme.min.css')}}
	{{ HTML::style('css/metisMenu.min.css')}}	
	{{ HTML::style('css/custom.css')}}
	{{ HTML::style('css/sb-admin-2.css')}}	
	{{ HTML::style('font-awesome-4.1.0/css/font-awesome.min.css')}}	
	{{ HTML::script('js/jquery.min.js')}}
	{{ HTML::script('js/bootstrap.min.js')}}
	{{ HTML::script('js/jquery-validation/jquery.validate.js')}}

<script type="text/javascript">
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "Hà Nội"){
		var optionArray = ["|","Hai Bà Trưng|Hai Bà Trưng","Đống Đa|Đống Đa","Hoàn Kiếm|Hoàn Kiếm","Ba Đình |Ba Đình","Sơn Tây|Sơn Tây","Đông Anh|Đông Anh","Tây Hồ|Tây Hồ","Hoàng Mai|Hoàng Mai","Long Biên|Long Biên","Thanh Xuân|Thanh Xuân","Hà Đông|Hà Đông"];
	} else if(s1.value == "Hồ Chí Minh"){
		var optionArray = ["|","Thủ Đức|Thủ Đức","Tân Bình|Tân Bình","Tân Phú|Tân Phú","Gò Vấp|Gò Vấp","Bình Thạnh|Bình Thạnh","Quận 1| Quận 1","Quận 2| Quận 2","Quận 3| Quận 3","Quận 4| Quận 4","Quận 5| Quận 5","Quận 6| Quận 6","Quận 7| Quận 7","Quận 8| Quận 8","Quận 9| Quận 9","Quận 10| Quận 10"];
	}	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
</script>