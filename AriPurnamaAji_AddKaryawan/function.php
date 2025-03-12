<script src="jquery.js"></script>
<script type="text/javascript">
    function pilih_status() {
        if ($("#status").val() == "Kawin") {
            $("#anak").attr('type', 'text');
            $("#tunak").attr('type', 'text');
            $("#anak").val(0);
        } else {
            $("#anak").attr('type', 'hidden');
            $("#tunak").attr('type', 'hidden');
            $("#anak").val(0);
            $("#tunak").val(0);
        }
    }

    function pilih_jabatan() {
        if ($("#jabatan").val() == "Manajer IT") {
            $("#gapok").val(9000000);
        } else if ($("#jabatan").val() == "Manajer Keuangan") {
            $("#gapok").val(8000000);
        } else if ($("#jabatan").val() == "Staff IT") {
            $("#gapok").val(4000000);
        } else if ($("#jabatan").val() == "Staff Keuangan") {
            $("#gapok").val(3000000);
        }
        $("#tunjab").val(10 / 100 * $("#gapok").val());
        tunj_anak();
    }

    function tunj_anak() {
        var anak = $("#anak").val();
        var gapok = $("#gapok").val();
        if (anak <= 3) {
            $("#tunak").val(anak * gapok * 5 / 100);
        } else {
            $("#tunak").val(3 * gapok * 5 / 100);
        }
    }

    function valid() {
        var nama = $("#nama").val();
        if (nama == "") {
            alert('Silahkan isi nama karyawan dahulu!');
            return false;
        } else {
            return confirm('Yakin data sudah sesuai?')
        }
    }
</script>