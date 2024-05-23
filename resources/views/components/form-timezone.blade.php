<input name="_tz" hidden>

<script>
    $('input[name=_tz]').val(Intl.DateTimeFormat().resolvedOptions().timeZone)
</script>