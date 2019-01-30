@extends('head')

@section('title')

  <title>PropertySticker_login</title>

@endsection

@section('body')

<body>
	<div class="login-wrap" style="margin-top: 80px;">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Register</label>
			<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
			<div class="login-form">
				<div class="sign-in-htm">
					<div class="group">
						<label for="user" class="label">Username</label>
						<input id="user" type="text" class="input">
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
					</div>
		            <div class="form-group pass_show"> 
		                <input type="password" class="form-control" placeholder="Password"> 
		            </div> 
					<div class="group">
						<input type="submit" class="button" value="commit">
					</div>
					<div class="hr"></div>
				</div>
				
			</div>
		</div>
	</div>

	<script type="text/javascript">


		  
	$(document).ready(function(){
	$('.pass_show').append('<span class="ptxt">Show</span>');  
	});
	  

	$(document).on('click','.pass_show .ptxt', function(){ 

	$(this).text($(this).text() == "Show" ? "Hide" : "Show"); 

	$(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 

	});  
	</script>

</body>

@endsection