<nav class="navbar navbar-default navbar-fixed-top " role="navigation">
  <div class="container">
    <div class="col-md-2">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Nhatro.com</a>
      </div>
    </div>

      <form class="navbar-form navbar-left" role="search">
          <div class="input-group">
            <input type="text" class="form-control" Placeholder="Tìm kiếm">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div><!--/input-group--> 
    </form>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->username}} <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="">Sửa thông tin</a></li>
            <li><a href="" data-toggle="modal" data-target="#change-password-modal">Đổi mật khẩu</a></li>
          </ul>
        </li>
        <li><a href="{{action('UsersController@logout')}}">Đăng xuất</a></li>
        <li><a href="">Đăng tin</a></li>
        @else
        <li><a href="/">Trang chủ</a></li>
        <li><a href="" data-toggle="modal" data-target="#signup-modal">Đăng ký</a></li>
        <li><a href="" data-toggle="modal" data-target="#login-modal">Đăng nhập</a></li>
        <li><a href="/posts/create">Đăng tin</a></li>
        @endif
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
</nav>

<!--pop up login--> 
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Đăng nhập</h4>
      </div>
      <div class="modal-body">
        <form class="redesign" method="post" action="{{Asset('/login')}}" id="form-login">
          <input type="text" name="user_input" id="user_input" placeholder="Email" class="form-control">
          <input type="password" name="password" id="password" placeholder="Password" class="form-control">
          <button class="btn btn-primary " id="dangnhap-btn">Đăng nhập</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!--kiểm tra dữ liệu login-->
<script type="text/javascript">
$("#form-login").validate({
  rules:{
    user_input:{
      required:true,
      minlength:3,
      email:true,
        // remote:{
        //  url:"{{Asset('check/check-username')}}",
        //  type:"POST"
        // }
      },
      password:{
        required:true,
        minlength:6
      }
    },
    messages:{
      user_input:{
        required:"Vui lòng nhập email",
        minlength:"Username phải có ít nhất 3 kí tự",
        email: "Định dạng email không đúng"
        // remote:"Username đã tồn tại"
      },
      password:{
        required:"Vui lòng nhập mật khẩu",
        minlength:"Mật khẩu phải có ít nhất 6 kí tự"
      },

    }
  })
</script>

<!--pop up đăng kí--> 
<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Đăng kí</h4>
      </div>
      <div class="modal-body">
        <form  class="redesign" method="post" action="{{Asset('register')}}" id="form-register">
          <input type="text" name="username" id="username" placeholder="Username" class="form-control">
          <input type="password" name="password" id="password_id" placeholder="Password" class="form-control">
          <input type="password" name="password_confirmation" id="password_confirmation_id" placeholder="Re-password" class="form-control">
          <input type="email" name="email" id="email" placeholder="Email" class="form-control">
          <button class="btn btn-lg btn-primary btn-block">Đăng kí</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!--kiểm tra dữ liệu đăng kí--> 
<script type="text/javascript">
$("#form-register").validate({
  rules:{
    username:{
      required:true,
      minlength:3,
        // remote:{
        //  url:"{{Asset('check/check-username')}}",
        //  type:"POST"
        // }
      },
      password_name:{
        required:true,
        minlength:6
      },
      password_confirmation:{
        equalTo:"#password_id"
      },
      email:{
        required:true,
        email:true,
        remote:{
          url:"{{Asset('check-email')}}",
          type:"POST"
        }
      }
    },
    messages:{
      username:{
        required:"Vui lòng nhập username",
        minlength:"Username phải có ít nhất 3 kí tự",
        // remote:"Username đã tồn tại"
      },
      password:{
        required:"Vui lòng nhập mật khẩu",
        minlength:"Mật khẩu phải có ít nhất 6 kí tự"
      },
      password_confirmation:{
        equalTo:"Mật khẩu xác nhận không đúng"
      },
      email:{
        required:"Vui lòng nhập email",
        email:"Định dạng email không đúng",
        remote:"Email đã được sử dụng. Vui lòng nhập email khác."
      }
    }
  })
</script>



<!--Popup đổi mật khẩu-->
<div class="modal fade" id="change-password-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Đổi mật khẩu</h4>
      </div>
      <div class="modal-body">
        <form class="redesign" action="{{Asset('change-password')}}" method="post" id="form-change-password" >
          <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu cũ">
          <input type="password" class="form-control" name="newpassword"  id="newpassword" placeholder=" Mật khẩu mới">
          <input type="password" class="form-control" name="re_newpassword" id="re_newpassword" placeholder="Xác nhận mật khẩu mới">  
          <button type="submit" class="btn btn-primary">Xác nhận</button>
        </form>

      </div>
    </div>
  </div>
</div>


<!--Kiểm tra dữ liệu password--> 
<script type="text/javascript">
$("#form-change-password").validate({
  rules:{
    password:{
      required:true,
      minlength:6,
        // remote:{
        //  url:"{{Asset('check/check-username')}}",
        //  type:"POST"
        // }
      },
      newpassword:{
        required:true,
        minlength:6
      },
      re_newpassword:{
        equalTo:"#newpassword"
      }
    },
    messages:{
      password:{
        required:"Vui lòng nhập mật khẩu cũ",
        minlength:" Mật khẩu  phải có ít nhất 6 kí tự",
        // remote:"Username đã tồn tại"
      },
      newpassword:{
        required:"Vui lòng nhập mật khẩu mới",
        minlength:"Mật khẩu phải có ít nhất 6 kí tự"
      },
      re_newpassword:{
        equalTo:"Xác nhận mật khẩu mới không đúng"
      }

    }
  })
</script>