<div class="col-md-3" id="leftCol">
    <ul class="nav nav-stacked" id="sidebar">
        <li class="panel panel-info">
            <div class="panel-heading"> <strong> QUẢN LÝ</strong>
            </div>
        </li>
        <li>
            <a href=""><i class="fa fa-user fa-fw"></i> Thông tin cá nhân</a>
        </li>
        <li>
            <a href="{{action('UsersController@show',Auth::user()->id)}}"><i class="fa fa-table fa-fw"></i> Danh sách bài đăng</a>
        </li>
        @if(Auth::user()->role==1)
        <li>
            <a href="/users/listusers"><i class="fa fa-files-o fa-fw"></i>Danh sách thành viên</a>
        </li>  
        @endif                                                                  
    </ul>
</div>