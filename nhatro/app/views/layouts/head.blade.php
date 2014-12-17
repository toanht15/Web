<meta charset=utf-8>
<meta name=description content="">
<meta name=viewport content="width=device-width, initial-scale=1">
<title>Nhà trọ online </title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap-theme.min.css')}}
	{{ HTML::style('css/metisMenu.min.css')}}	
	{{ HTML::style('css/custom.css')}}
	{{ HTML::style('css/sb-admin-2.css')}}	
	{{ HTML::style('font-awesome-4.1.0/css/font-awesome.min.css')}}	
	{{ HTML::style('css/style.css')}}
	{{ HTML::script('js/jquery.min.js')}}
	{{ HTML::script('js/bootstrap.min.js')}}
	{{ HTML::script('js/jquery-validation/jquery.validate.js')}}

<script type="text/javascript">
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "1"){
		var optionArray = ["|","haibatrung|Hai Bà Trưng","dongda|Đống Đa","hoankiem|Hoàn Kiếm","badinh|Ba Đình", "sontay|Sơn Tây","donganh|Đông Anh","tayho|Tây Hồ","hoangmai|Hoàng Mai","longbien|Long Biên","thanhxuan|Thanh Xuân","hadong|Hà Đông"];
	} else if(s1.value == "2"){
		var optionArray = ["|","thuduc|Thủ Đức","tanbinh|Tân Bình","tanphu|Tân Phú","govap|Gò Vấp","binhthanh|Bình Thạnh","quan1| Quận 1","quan2| Quận 2","quan3| Quận 3","quan4| Quận 4","quan5| Quận 5","quan6| Quận 6","quan7| Quận 7","quan8| Quận 8","quan9| Quận 9","quan10| Quận 10"];
	}	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
</script>