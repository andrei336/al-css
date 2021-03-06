<!DOCTYPE html>
<html lang="ro-RO">
<head>
	<meta charset="utf-8">
	<title>Style CSS by Al</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Al">
	<link rel="icon" type="image/png" href="style/images/favicon.png">
	<link rel="stylesheet" href="style/font-awesome-4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style/al.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
	<div class="al-container-flexible">
		<img style="float:left;padding:20px 20px;" src="style/images/logo_t.png" alt="AL.css">
		<h1>Titlul site h1...</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores aspernatur soluta dolore voluptatibus minus possimus quasi natus molestias vero vel accusamus qui, </p>
		<p>Vero doloribus maiores omnis sequi commodi aliquid beatae quos sunt at conseclabor</p>
		<div class="al-navbar al-navbar-top one al-navbar-small al-navbar-extend">
			<div class="al-navbar-header">
				<div class="al-navbar-title">AL - css responsive - h38</div>
				<div class="al-navbar-handle one"><span class="fa fa-navicon"></span></div>
			</div>
			<ul>
				<li><a href="#">link 1</a></li>
				<li class="active"><a href="#">link 2</a></li>
				<li><a href="#">link 3</a>
					<ul>
						<li><a href="#">link 3.1</a></li>
						<li><a href="#">link 3.2</a></li>
						<li><a href="#">link 3.3</a></li>
					</ul>
				</li>
				<li><a href="#">link 4</a></li>
			</ul>
		</div>
		<div class="al-navbar al-navbar-top two">
			<div class="al-navbar-header">
				<div class="al-navbar-title"><a href="http://www.alcss.greencitysrl.ro" title="AL.css">Name site - h48</a></div>
				<div class="al-navbar-handle two"><span class="fa fa-navicon"></span></div>
			</div>
			<ul>
				<li><a href="#">link 1</a></li>
				<li><a href="#">link 2</a></li>
				<li class="active"><a href="#">link 3</a></li>
				<li><a href="#">link 4</a></li>
			</ul>
			<ul class="al-right">
				<li><a href="#">log in</a></li>
				<li><a href="#">search</a></li>
			</ul>
		</div>
		<div class="al-navbar al-navbar-top al-navbar-large al-navbar-extend three">
			<div class="al-navbar-header">
				<div class="al-navbar-title">
				<a href="http://www.alcss.greencitysrl.ro" title="AL.css">AL.css site - h58</a>
				</div>
				<div class="al-navbar-handle three"><span class="fa fa-navicon"></span></div>
			</div>
			<ul>
				<li><a href="#">link 1</a></li>
				<li><a href="#">link 2</a></li>
				<li><a href="#">link 3</a></li>
				<li class="active"><a href="#">link 4</a></li>
			</ul>
		</div>
		<div class="al-navbar al-navbar-top al-navbar-xlarge al-navbar-extend  four">
			<div class="al-navbar-header">
				<div class="al-navbar-title">Name site - h68</div>
				<div class="al-navbar-handle four"><span class="fa fa-navicon"></span></div>
			</div>
			<ul>
				<li><a href="#">link 1</a></li>
				<li class="active"><a href="#">link 2</a></li>
				<li><a href="#">link 3</a></li>
				<li><a href="#">link 4</a></li>
			</ul>
		</div>
	</div>
	<div class="al-container">
		<h2>Titlul site h2...</h2>
		<div class="al-alert-box al-b">
			<strong>alert-box</strong>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			<span class="al-close" onclick="this.parentElement.style.display='none'"></span>
		</div>
		<div class="al-alert-box al-initially">
			<strong>Initially</strong>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			<span class="al-close" onclick="this.parentElement.style.display='none'"></span>
		</div>
		<div class="al-alert-box al-ok">
			<strong>ok</strong>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			<span class="al-close" onclick="this.parentElement.style.display='none'"></span>
		</div>
		<div class="al-alert-box al-information">
			<strong>Information</strong>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			<span class="al-close" onclick="this.parentElement.style.display='none'"></span>
		</div>
		<div class="al-alert-box al-warning">
			<strong>warning</strong>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			<span class="al-close" onclick="this.parentElement.style.display='none'"></span>
		</div>
		<div class="al-alert-box al-danger">
			<strong>danger</strong>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			<span class="al-close" onclick="this.parentElement.style.display='none'"></span>
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		<p>Vero doloribus maiores omnis sequi commodi aliquid beatae quos sunt at consectetur in, officiis distinctio totam reiciendis, et similique, dolor </p>
		<div class="row">
			<div class="al-col-03m al-col-06s">
				<div class="al-navbar al-navbar-side al-navbar-small">
					<div class="al-navbar-header">
						<div class="al-navbar-title">
							<a href="http://www.alcss.ro">AL - css responsive test - h38</a>
						</div>
					</div>
					<ul>
						<li><a href="#">link 1</a></li>
						<li class="active"><a href="#">link 2</a></li>
						<li><a href="#">link 3</a></li>
						<li><a href="#">link 4</a></li>
					</ul>
				</div>
			</div>
			<div class="al-col-03m al-col-06s">
				<div class="al-navbar al-navbar-side">
					<div class="al-navbar-header">
						<div class="al-navbar-title">
							<a href="http://www.alcss.ro">Meniu - h38</a>
						</div>
					</div>
					<ul>
						<li><a href="#">link 1</a></li>
						<li class="active"><a href="#">link 2</a></li>
						<li><a href="#">link 3</a></li>
						<li><a href="#">link 4</a></li>
					</ul>
				</div>
			</div>
			<div class="al-col-03m al-col-06s">
				<div class="al-navbar al-navbar-side al-navbar-large">
					<div class="al-navbar-header">Name site - h48</div>
					<ul>
						<li><a href="#">link 1</a></li>
						<li class="active"><a href="#">link 2</a></li>
						<li><a href="#">link 3</a>
							<ul>
								<li><a href="#">link 3.1</a></li>
								<li><a href="#">link 3.2</a></li>
								<li><a href="#">link 3.3</a></li>
							</ul>
						</li>
						<li><a href="#">link 4</a></li>
					</ul>
				</div>
			</div>
			<div class="al-col-03m al-col-06s">
				<div class="al-navbar al-navbar-side al-navbar-xlarge">
					<div class="al-navbar-header">Name site - h48</div>
					<ul>
						<li><a href="#">link 1</a></li>
						<li class="active"><a href="#">link 2</a></li>
						<li><a href="#">link 3</a></li>
						<li><a href="#">link 4</a></li>
					</ul>
				</div>
				</div>
			</div>
		<p>
			<button class="al-button al-button-xs">Ok! xs</button>
			<button class="al-button al-button-s">Okk! s</button>
			<button class="al-button al-button-m">Okk! m</button>
			<button class="al-button al-button-l">Okk! l</button>
			<button class="al-button al-button-xl">Ok! xl</button>
			<button>proba default</button>
		</p>
		<p>
			<button class="al-button al-button-normaly">Normaly button</button>
			<button class="al-button al-button-ok">Ok button</button>
			<button class="al-button al-button-info">Info button</button>
			<button class="al-button al-button-atention">Atenttion button</button>
			<button class="al-button al-button-fire">Fire button</button>
		</p>
		<p><button class="al-button al-button-extend">Extend button</button></p>
		<p>
			<div class="al-button-group">
				<button class="al-button">group button 1</button>
				<button class="al-button">group button 2</button>
				<button class="al-button">group button 3</button>
				<button class="al-button">group button 4</button>
				<button class="al-button">group button 5</button>
			</div>
		</p>
		<p>
			<button class="al-button al-button-active">Active button</button>
			<button class="al-button al-disabled">Disable button</button>
		</p>
		<p>
			<button class="al-button al-button-xl al-b-rad-xxs">border rad</button>
			<button class="al-button al-button-xl al-b-rad-xs">border rad</button>
			<button class="al-button al-button-xl al-b-rad-s">border rad</button>
			<button class="al-button al-button-xl al-b-rad-m">border rad</button>
			<button class="al-button al-button-xl al-b-rad-l">border rad</button>
			<button class="al-button al-button-xl al-b-rad-xl">border rad</button>
			<button class="al-button al-button-xl al-b-rad-xxl">border rad</button>
		</p>
		<div class="al-row">
			<div class="al-col-04s">
				<h2>TITLU h2</h2><p>Paragraf in coloana de 4 s doloribus, et volupinima cum debitis mollitia placeat..........</p>
				<p>os cumque, doloribus, et volupinima cum debitis mollitia placeat sapiente veniam. Nesciunt tempore voluptatibus veniam nostrum maxime aspernatur, accusantium fugit.</p>
			</div>
			<div class="al-col-02s">
				<h3>Titlu h3</h3>
				<div class="al-navbar al-navbar-side">
					<ul>
						<li><a href="#">link 1</a></li>
						<li><a href="#">link 2</a></li>
						<li><a href="#">link 3</a></li>
						<li><a href="#">link 4</a></li>
					</ul>
				</div>
				<p>Paragraf in coloana de 2 s adica jumatate</p>
				<p>suscipit molestias, recusandae blanditiis deleniti qui maxime.</p>
			</div>
			<div class="al-col-02s">
				<h2>Titlu h2</h2>
				<p>Tempore, omnis, explicabo. Ipsum vel, nesciunt quasi autem, corporis nostrum labore dolorem, soluta quia, odio maxime? Nostrum.</p>
			</div>
			<div class="al-col-04s">
				<p>Lorem hic consectetur, in simioremque corporis, at architecto consequuntur. Maxime, necessitatibus laboriosam.</p>
				<p>Et labore facere cumque. Cerat itaque a.</p>
			</div>
		</div><!-- /al-row -->
	</div>
	<script>
		$('.al-navbar-handle.one').on('click', function(){
			$('.al-navbar-top.one ul').toggleClass('al-navbar-show');
		});
		$('.al-navbar-handle.two').on('click', function(){
			$('.al-navbar-top.two ul').toggleClass('al-navbar-show');
		});
		$('.al-navbar-handle.three').on('click', function(){
			$('.al-navbar-top.three ul').toggleClass('al-navbar-show');
		});
		$('.al-navbar-handle.four').on('click', function(){
			$('.al-navbar-top.four ul').toggleClass('al-navbar-show');
		});
	</script>
</body>
</html>