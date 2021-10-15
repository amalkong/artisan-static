			<nav class="main-nav">
				<button class="nav-menu-button" onclick="document.querySelector('.main-nav').classList.toggle('toggled');"><i class="fa fa-bars"></i></button>
				<button class="nav-close-button" onclick="document.querySelector('.main-nav').classList.remove('toggled');"><i class="fa fa-times"></i></button>
				<ul>
					<li><a class="fancy-anchor {{ $page->selected('') }}" href="/">Home</a></li>
					<li><a class="fancy-anchor {{ $page->selected('about') }}" href="{{ $page->baseUrl }}/about">About</a></li>
					<li><a class="fancy-anchor {{ $page->selected('projects') }}" href="{{ $page->baseUrl }}/projects">Projects</a></li>
					<li><a class="fancy-anchor {{ $page->selected('posts') }}" href="{{ $page->baseUrl }}/posts">Blog</a></li>
					<li><a class="fancy-anchor {{ $page->selected('contact') }}" href="{{ $page->baseUrl }}/contact">Contact</a></li>
				</ul>
			</nav>
			