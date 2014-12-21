<div class="col-md-3">
	<div class="panel panel-info">
		<div class="panel-heading">
			<strong>Tìm kiếm</strong>
		</div>
	</div> 
	<!-- dropdown tinh thanh-->
	<form action="{{Asset('/search')}}" method="POST" role="form">
		<div class="form-group">
			<select name="tinh" id="tinh"  onchange="populate(this.id,'huyen')"  class="form-control">
				<option value="">Chọn Tỉnh/Thành</option>
				<option value="Hà Nội">Hà Nội</option>
				<option value="Hồ Chí Minh">Hồ Chí Minh</option>
			</select>
		</div>
		<!-- ./dropdown tinh thanh -->
		<!-- dropdown quan huyen -->
		<div class="form-group">
			<select name="huyen" id="huyen" class="form-control">
				<option value="">Chọn Quận/Huyện</option>				
			</select>
		</div>
		<!-- ./dropdown quan huyen -->
		<!-- dropdown muc gia -->
		<div class="form-group">
			<select name="area" id="area" class="form-control">
				<option value="" selected="selected">Chọn Diện tích</option>
				<option value="1"> <15 m2 </option>
				<option value="2">15-30m2</option>
				<option value="3">>=30m2</option>
			</select>
		</div>
		<!-- ./dropdown muc gia -->
		<!-- dropdown dien tich -->
		<div class="form-group">
			<select name="price" id="price" class="form-control">
				<option selected="selected">Chọn Giá</option>            	
				<option value="1"> dưới 1 triệu</option>
				<option value="2">từ 1 đến 2 triệu</option>
				<option value="3"> trên 2 triệu</option>
			</select>
		</div>
		<!-- ./dropdown dien tich -->
		<button class="btn btn-info col-sm-3 pull-right" type="submit">Tìm</button>
	</form>
</div>
