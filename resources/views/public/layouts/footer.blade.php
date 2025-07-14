<!-- Footer -->
<footer id="footer">
    <div id='overlayer'></div>
    <div class='loader'>
        <div class='spinner-border' role='status'>
            <span class='visually-hidden'>Loading...</span>
        </div>
    </div>
</footer>

<!-- Dynamic Footer -->
@include('public.layouts.dynamic-footer')

<script src="{{ asset('scss/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('scss/js/tiny-slider.js') }}"></script>
<script src="{{ asset('scss/js/aos.js') }}"></script>
<script src="{{ asset('scss/js/navbar.js') }}"></script>
<script src="{{ asset('scss/js/counter.js') }}"></script>
<script src="{{ asset('scss/js/custom.js') }}"></script>
<script src="{{ asset('scss/js/neededloader.js') }}"></script>

<!-- Modal -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $('#staticBackdrop').modal('show');
        }, 1000);

        // setTimeout(function() {$('#staticBackdrop').modal('hide');}, 10000);
    });
</script>
</body>

</html>
