<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>The site is under construction</title>
	<meta name="description" content="The site is under construction">
	<meta name="keywords" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">

</head>

<body>

<style>
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Open Sans', sans-serif;
		font-weight: 700;
	}
	.container {
		width: 100%;
		max-width: 1140px;
		padding: 30px 10px;
		margin: 0 auto;
	}
	.logo img {
		max-width: 130px;
	}
	.content {
		display: flex;
		min-height: 250px;
		background-image: url(/images/dev/bg.png);
		background-size: contain;
		background-repeat: no-repeat;
		background-position: center;
		margin: 80px 0;
		justify-content: center;
		align-items: center;
	}
	.content h1 {
		font-size: 40px;
		text-transform: uppercase;
		color: #2E2E2E;
	}
	.footer {
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.footer a + a {
		margin-left: 50px;
	}
	@media (max-width: 767px) {
		.logo img {
			display: block;
			max-width: 100%;
			height: 100%;
			margin: 0 auto;
		}
		.footer {
			flex-direction: column;
		}
		.footer a + a {
			margin-left: 0;
			margin-top: 20px
	}
	.content {
		margin: 40px 0;
	}
	.content h1 {
		text-align: center
	}
</style>

<div class="container">
	<div class="logo">
		<img src="{{ asset('images/dev/logo.svg') }}" alt="logo">
	</div>
	<div class="content">
		<h1>The site is under construction</h1>
	</div>
	<div class="footer">
		<a href="https://www.houzz.com/professionals/kitchen-and-bath-remodelers/nord-construction-pfvwus-pf~1673721966" target="_blank"><img src="{{ asset('images/dev/houzz.png') }}" alt="houzz"></a>
		<a href="https://www.yelp.com/biz/nord-construction-seattle" target="_blank"><img src="{{ asset('images/dev/yelp.png') }}" alt="yelp"></a>
		<a href="https://www.buildzoom.com/contractor/nord-construction-wa" target="_blank"><img src="{{ asset('images/dev/buildzoom.png') }}" alt="buildzoom"></a>
		<a href="https://porch.com/seattle-wa/remodeling-contractors/nord-construction-165461595/pp" target="_blank"><img src="{{ asset('images/dev/porch.png') }}" alt="porch"></a>
	</div>
</div>

</body>
</html>