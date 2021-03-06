<footer>

<div id="copyright">
essentia &copy; 2013 creativeLabs. <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> Designed by BootstrapMaster in Poland <img src="img/poland.png" alt="Poland" style="margin-top:-4px">
</div>
<div id="social">
<a href="http://facebook.com/BootstrapMaster" rel="tooltip" title="Facebook" class="facebook">Facebook</a>
<a href="http://facebook.com/BootstrapMaster" rel="tooltip" title="Twitter" class="twitter">Twitter</a>
<a href="http://BootstrapMaster.com/feed/" rel="tooltip" title="RSS" class="rss">RSS</a>
<a href="#" rel="tooltip" title="Github" class="github">Github</a>
<a href="#" rel="tooltip" title="LinkedIn" class="linkedin">LinkedIn</a>
<a href="#" rel="tooltip" title="Pintrest" class="pintrest">Pintrest</a>
<a href="#" rel="tooltip" title="Vimeo" class="vimeo">Vimeo</a>
<a href="#" rel="tooltip" title="YouTube" class="youtube">YouTube</a>
</div>	

</footer>	

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/isotope.js"></script>
<script type="text/javascript" src="js/jquery.imagesloaded.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/flexslider.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript" src="js/fancybox.js"></script>
<script type="text/javascript" src="js/twitter.js"></script>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="js/jquery.slitslider.js"></script>

<script type="text/javascript" src="js/excanvas.js"></script>
<script type="text/javascript" src="js/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="js/jquery.flot.resize.min.js"></script>

<script defer="defer" src="js/custom.js"></script>
<script type="text/javascript">	
$(function() {

var Page = (function() {

var $navArrows = $( '#nav-arrows' ),
$nav = $( '#nav-dots > span' ),
slitslider = $( '#slider' ).slitslider( {
onBeforeChange : function( slide, pos ) {

$nav.removeClass( 'nav-dot-current' );
$nav.eq( pos ).addClass( 'nav-dot-current' );

}
} ),

init = function() {

initEvents();

},
initEvents = function() {

// add navigation events
$navArrows.children( ':last' ).on( 'click', function() {

slitslider.next();
return false;

} );

$navArrows.children( ':first' ).on( 'click', function() {

slitslider.previous();
return false;

} );

$nav.each( function( i ) {

$( this ).on( 'click', function( event ) {

var $dot = $( this );

if( !slitslider.isActive() ) {

$nav.removeClass( 'nav-dot-current' );
$dot.addClass( 'nav-dot-current' );

}

slitslider.jump( i + 1 );
return false;

} );

} );

};

return { init : init };

})();

Page.init();

});
</script>
<!-- end: Java Script -->

</body>
</html>