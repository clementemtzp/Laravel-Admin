<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
