<button data-sharer="facebook" data-url="{{ $page->getUrl() }}" style="background: #3b5998;">
    <i class="fab fa-facebook mr--1"></i>Facebook
</button>

<button data-sharer="twitter" data-url="{{ $page->getUrl() }}" data-title="{{ $page->title }}" style="background: #00aced;">
    <i class="fab fa-twitter mr--1"></i>Twitter
</button>

<button data-sharer="reddit" data-url="{{ $page->getUrl() }}" style="background: #ff4500;">
    <i class="fab fa-reddit mr--1"></i>Reddit
</button>

<button data-sharer="linkedin" data-url="{{ $page->getUrl() }}" style="background: #0077b5;">
    <i class="fab fa-linkedin mr--1"></i>LinkedIn
</button>
