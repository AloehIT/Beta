
<script src="{{URL::to('assets/js/argon-dashboard.min.js?v=2.0.4')}}"></script>

<script src="{{URL::to('assets/admin.assets/js/jquery/jquery-3.3.1.min.js')}}"></script>
<script src="{{URL::to('../assets/admin.assets/js/core/popper.min.js')}}"></script>
<script src="{{URL::to('../assets/admin.assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{URL::to('../assets/admin.assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{URL::to('../assets/admin.assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{URL::to('../assets/admin.assets/js/plugins/chartjs.min.js')}}"></script>
<script src="{{URL::to('../assets/admin.assets/js/argon-dashboard.min.js?v=2.0.4')}}"></script>


<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>


<!-- Github buttons -->
<script async defer src="{{URL::to('https://buttons.github.io/buttons.js')}}"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->



<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#gambar_nodin').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#preview_gambar").change(function(){
        bacaGambar(this);
    });
</script>

<script>
    $(document).ready(function(){
        $(".preloader").fadeOut();
      })
</script>




