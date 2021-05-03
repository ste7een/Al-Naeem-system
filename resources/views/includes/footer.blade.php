<footer class="w-100 mt-0">
	<p class="text-center m-0">
		<small>
			صنع بإبداع 💘 Ourstory
		</small>
	</p>
</footer>


<script src="{{asset('libs/progressbar.js/dist/progressbar.min.js')}}"></script>
<script src="{{asset('libs/flatpickr/dist/flatpickr.min.js')}}"></script>
<script src="{{asset('js/quick-website.js')}}"></script>
<script src="{{asset('libs/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/dist/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('libs/svg-injector/dist/svg-injector.min.js')}}"></script>
<script src="{{asset('libs/feather-icons/dist/feather.min.js')}}"></script>
<script src="{{asset('libs/in-view/dist/in-view.min.js')}}"></script>
<script src="{{asset('libs/sticky-kit/dist/sticky-kit.min.js')}}"></script>
<script src="{{asset('libs/bootstrap-notify/bootstrap-notify.min.js')}}"></script>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>




<script>
	
	//
	// Tooltip
	//
	'use strict';
	
	var Tooltip = (function() {
	
		// Variables
	
		var $tooltip = $('[data-toggle="tooltip"]');
	
	
		// Methods
	
		function init() {
			$tooltip.tooltip();
		}
	
	
		// Events
	
		if ($tooltip.length) {
			init();
		}
	
	})();
	
</script>