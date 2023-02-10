<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
{{-- <script type="text/javascript" src="{{ asset("assets/js/scripts.js") }}"></script> --}}
<script>
    $(document).ready(function () {
        $("#action_menu_btn").click(function () {
            $(".action_menu").toggle();
        });
    });
</script>
