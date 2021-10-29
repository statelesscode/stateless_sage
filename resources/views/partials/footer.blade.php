<?php
$cc0_url = "https://creativecommons.org/share-your-work/public-domain/cc0/";
$unlicense_url = "https://unlicense.org/";
$mit_url = "https://opensource.org/licenses/MIT";
$aip = "https://c4sif.org/aip/";
$github_url = "https://github.com/statelesscode";
$youtube_url = "https://www.youtube.com/channel/UClFrwwEOAg9FVDZJ0YfdgYg";
$facebook_url = "https://www.facebook.com/statelesscode";
$twitter_url = "https://twitter.com/statelesscode";
$instagram_url = "https://www.instagram.com/statelesscode/";
?>
<footer class="site-footer bg-gradient-to-br from-scseafoam-500 to-scseafoam-800 text-scbluegray-50 py-8 px-4 sm:px-12">
  <!-- Legal -->
  <div class="legal">
    <!-- ANTI IP ICON LINKS -->
    <div class="flex space-x-4 items-center justify-center">
      <div>
        <a href="{{ $cc0_url }}">
          <img alt="Creative Commons CC0 logo"
               src="@asset('images/cc-zero.svg')"
               class="h-6 flex-auto">
        </a>
      </div>
      <div>
        <a href="{{ $unlicense_url }}">
          <img alt="UNLICENSE logo"
               src="@asset('images/unlicense-icon.svg')"
               class="h-6 flex-auto">
        </a>
      </div>
      <div>
        <a href="{{ $mit_url }}">
          <img alt="MIT License logo"
               src="@asset('images/mit-license-icon.svg')"
               class="h-6 flex-auto">
        </a>
      </div>
    </div>
    <p class="text-xs text-gray-300 my-3 mx-4 sm:mx-12 md:mx-16 lg:mx-24 xl:mx-48 2xl:mx-64">
    Unless otherwise noted, all content on this site is
    <a href="{{ $cc0_url }}">CC0 - No rights reserved</a>
    and code is released under the <a href="{{ $unlicense_url }}">UNLICENSE</a> and/or the <a
    href="{{ $unlicense_url }}">MIT Licence</a> (whichever you are more comfortable with).
    Nearly all code is available on <a href="{{ $github_url }}">GitHub</a>. Stateless Code
    is <a href="{{ $aip }}">against intellectual property</a> and considers it a racket.
    Copying is not stealing. For logos to external sites, the copyright holders retain their
    copyright. See their sites for more information.</p>
  </div>
  <!-- Social Media -->
  <div class="footer-social">
    <p class="text-center text-sm my-2">Follow us on social media.</p>
    <div class="flex space-x-4 items-center justify-center">
      <div>
        <a href="{{ $github_url }}">
          <img alt="GitHub logo"
               src="@asset('images/Octicons-mark-github.svg')"
               class="h-6 flex-auto">
        </a>
      </div>
      <div>
        <a href="{{ $youtube_url }}">
          <img alt="YouTube logo"
               src="@asset('images/youtube-logo.svg')"
               class="h-6 flex-auto">
        </a>
      </div>
      <div>
        <a href="{{ $facebook_url }}">
          <img alt="Facebook logo"
               src="@asset('images/facebook-logo.svg')"
               class="h-6 flex-auto">
        </a>
      </div>
      <div>
        <a href="{{ $twitter_url }}">
          <img alt="Twitter logo"
               src="@asset('images/twitter-logo.svg')"
               class="h-6 flex-auto">
        </a>
      </div>
      <div>
        <a href="{{ $instagram_url }}">
          <img alt="Instagram logo"
               src="@asset('images/instagram-logo.svg')"
               class="h-6 flex-auto">
        </a>
      </div>
    </div>
  </div>
  <p class="text-center my-4">Jesus is Lord. Taxation is theft!</p>
</footer>
