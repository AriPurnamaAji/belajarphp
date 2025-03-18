<script src="jquery.js"></script>
<script type="text/javascript">
    function valid() {
        var nama = $("#nama").val();
        if (nama == "") {
            alert('Silahkan isi nama pasien dahulu!');
            return false;
        } else {
            return confirm('Yakin data sudah sesuai?')
        }
    }
</script>