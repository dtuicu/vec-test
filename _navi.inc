<?php
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	<a class="navbar-brand" href="#" id="a-navbar">Iframe:<span id="at-embedinfo"></span></a>
	<script>document.querySelector('#at-embedinfo').innerHTML = (window !== window.parent) ? 'embedded' : 'not embedded'; </script>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>


	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="?page=1">Attach ?page=1</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="form.php">JS: onbeforeunload</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="redirect-js.php">JS: Redirect</a>
			</li>
            <li class="nav-item">
                <a class="nav-link" href="redirect.php">PHP: Redirect Location</a>
            </li>
			<li class="nav-item">
				<a class="nav-link" href="redirect-phpall.php">PHP:Redirect all GET</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#homepage">SPA</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="injectatjs.php">InjectAT.js</a>
			</li>
            <li class="nav-item">
                <a class="nav-link" href="http://kuehl.local/customer/lloyds/securesite-poc-1/index.php">To HTTP</a>
            </li>
		</ul>
	</div>
</nav>
