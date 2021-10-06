			<nav class="main-nav">
				<ul>
					<li><a class="fancy-anchor {{ $page->selected('home') }}" href="/">Home</a></li>
					<li><a class="fancy-anchor {{ $page->selected('about') }}" href="{{ $page->baseUrl }}/about">About</a></li>
					<li><a class="fancy-anchor {{ $page->selected('projects') }}" href="{{ $page->baseUrl }}/projects">Projects</a></li>
					<li><a class="fancy-anchor {{ $page->selected('posts') }}" href="{{ $page->baseUrl }}/posts">Blog</a></li>
					<li><a class="fancy-anchor {{ $page->selected('contact') }}" href="{{ $page->baseUrl }}/contact">Contact</a></li>
				</ul>				
			</nav>
			