@extends('home.index', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <section class="counter">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <h1 class="pb-3">BLOOD COMMUNITY MEMBERS</h1>

                </div>
                <div class="col count-item">
                    <span id="count1" class="display-4"></span>
                    <p>BLOOD REQUESTS</p>
                </div>
                <div class="col count-item">
                    <span id="count2" class="display-4"></span>
                    <p>REQUESTS COMPLETED</p>
                </div>
                <div class="col count-item">
                    <span id="count3" class="display-4"></span>
                    <p>OUR BLOOD DONORS</p>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
		
    });
  </script>
 <script>
	document.addEventListener("DOMContentLoaded", () => {
		function counter(id, start, end, duration) {
			let obj = document.getElementById(id),
				current = start,
				range = end - start,
				increment = end > start ? 1 : -1,
				step = Math.abs(Math.floor(duration / range)),
				timer = setInterval(() => {
					current += increment;
					obj.textContent = current;
					if (current == end) {
						clearInterval(timer);
					}
				}, step);
		}
		counter("count1", 0, 400, 3000);
		counter("count2", 100, 50, 2500);
		counter("count3", 0, 40, 3000);
	});
</script>


@endpush
