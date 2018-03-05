<style>
.badge.badge-demo.animate {
	opacity: 1;
	filter: alpha(opacity =   100);
	-webkit-transform: rotate(0deg) scale(1);
	-moz-transform: rotate(0deg) scale(1);
	-o-transform: rotate(0deg) scale(1);
	transform: rotate(0deg) scale(1);
}

.badge.badge-demo.large {
	width: 190px;
	height: 190px;
	background: url(/library/includes/sale_badge/sales-badge.png) top left
		no-repeat;
	background-size: 140px Auto;
}

.badge.badge-demo {
	width: 150px;
	height: 150px;
	background: url(/library/includes/sale_badge/sales-badge.png) top left
		no-repeat;
	top: -25px;
	right: -40px;
	opacity: 0;
	filter: alpha(opacity =   0);
	-webkit-transform: rotate(10deg) scale(1.3);
	-moz-transform: rotate(10deg) scale(1.3);
	-o-transform: rotate(10deg) scale(1.3);
	transform: rotate(10deg) scale(1.3);
	-webkit-transition: opacity 0.75s ease, -webkit-transform 0.75s ease;
	-moz-transition: opacity 0.75s ease, -moz-transform 0.75s ease;
	-o-transition: opacity 0.75s ease, -o-transform 0.75s ease;
	transition: opacity 0.75s ease, transform 0.75s ease;
	-webkit-transition-delay: 0.4s;
	-moz-transition-delay: 0.4s;
	-o-transition-delay: 0.4s;
	transition-delay: 0.4s;
}

.badge {
	display: block;
	position: absolute;
	z-index: 1020;
}
</style>

<script type="text/javascript">
 $(document).ready(function() {
	 w = $(document).width();
	 $('#badge').css({ left: w/2-125, top: 175 });
	 $('#badge').addClass("animate");
	 $('#badge').click(function() {
	        location.href = '/products';
	        return false;
	    });
	});
</script>

<a id="badge" href="/products/" target="_blank"
	class="badge large badge-demo"></a>
