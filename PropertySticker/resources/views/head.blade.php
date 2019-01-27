<!--doctype html-->
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


	    <link rel="Shortcut Icon" type="image/x-icon" href={{URL::asset('/img/math_icon.png')}}>

		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
	    
	    <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet" />
	    
	    <link href="{{URL::asset('css/fresh-bootstrap-table.css')}}" rel="stylesheet" />
	     
	    <!--     Fonts and icons     -->
	    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

	        
		@yield('css')
	  	@yield('AddStyle')
	  	@yield('title')
	</head>

	@yield('body')
</html>