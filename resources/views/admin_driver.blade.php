<head>
	<title></title>
	<link rel="stylesheet" href="css/admin.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

	<div id="mySidenav" class="sidenav">
        <p class="logo"><a href="{{route('home')}}"><span>H</span>awaa</a></p>
  <a  class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="{{route('admin')}}" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Users</a>
  <a href="{{route('admin_driver')}}" class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Drivers</a>
  <a href="{{route('admin_order')}}"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Orders</a>
  {{-- <a href="#"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Inventory</a>
  <a href="#"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Accounts</a>
  <a href="#"class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Tasks</a> --}}

</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span>
</div>

	<div class="col-div-6">
	<div class="profile">

		{{-- <img src="/public/DSC_0469-Recovered.jpg" class="pro-img" /> --}}
		<p>@auth
            {{Auth::user()->name}}
            <a href="{{route('my_logout')}}">log out</a>
                @endauth
                <span>Admin</span></p>
	</div>
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>

	<div class="col-div-3">
		<div class="box">
			<p>17<br/><span>Users</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>8<br/><span>Drivers</span></p>
			<i class="fa fa-list box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>99<br/><span>Orders</span></p>
			<i class="fa fa-shopping-bag box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>127<br/><span>Total</span></p>
			<i class="fa fa-tasks box-icon"></i>
		</div>
	</div>
	<div class="clearfix"></div>
	<br/><br/>
	<div class="col-div-8">
		<div class="box-8">
		<div class="content-box">
			<p>Top Selling Projects <span></span></p>
			<br/>
			<table>
  <tr>
    <th>Name</th>
    {{-- <th>Contact</th> --}}
    <th>delete</th>
  </tr>
  {{-- <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr> --}}
  @foreach ($data as $item)

  <tr>
    <td><a href="">{{$item['name']}}</a></td>
    {{-- <td>Maria Anders</td> --}}
    <td><button onclick="confirm('kkkkkkkkkkkkkk')" class="btn btn-danger">delete</a></td>
  </tr>

  @endforeach

</table>
		</div>
	</div>
	</div>

	<div class="col-div-4">
		<div class="box-4">
		<div class="content-box">
			<p>Total <span>Sell All</span></p>

			<div class="circle-wrap">
    <div class="circle">
      <div class="mask full">
        <div class="fill"></div>
      </div>
      <div class="mask half">
        <div class="fill"></div>
      </div>
      <div class="inside-circle"> 70% </div>
    </div>
  </div>
		</div>
	</div>
	</div>

	<div class="clearfix"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function handleDelete(){
    if(confirm('Sure you want to Delete?')){
        //<?= url('/delete_driver/driver=$item') ?>
        location = "<?= url('/delete_driver/driver=$item') ?>"
    }
}

  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
  });

</script>

</body>


</html>
