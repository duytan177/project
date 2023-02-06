<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.16/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.16/sweetalert2.min.js"></script>

@if(Session::has('error'))
@php
    $error = json_encode(Session::get('error'));
@endphp
<script>
    var error = <?php echo $error ?>;
    Swal.fire({
        title: error,
        icon: 'errors',
        showCloseButton: true,
    })
</script>
@endif

@if(Session::has('success'))
    @php
        $success = json_encode(Session::get('success'));
    @endphp
    <script>
        var success = <?php echo $success ?>;
        Swal.fire({
            title: success,
            icon: 'success',
            showCloseButton: true,
        })
    </script>
@endif
