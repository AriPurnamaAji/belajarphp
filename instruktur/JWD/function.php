

<script src="jquery.js"></script>
<script type="text/javascript">
    function pilih_jabatan(){
        var id = $("#jabatan").val();
        if(id==1){
            $("#gapok").val(8500000);
        }else if(id==2){
            $("#gapok").val(9000000);
        }else if(id==3){
            $("#gapok").val(4500000);
        }else{
            $("#gapok").val(4000000);
        }

        var gapok=$("#gapok").val();
        $("#tunjab").val(10/100 * gapok);
                
    }

    function pilih_status(){
        if($("#status").val()=="Kawin"){
            $("#anak").attr('type','text');
            $("#tunak").attr('type','text');
            $("#anak").val(0);
            
        }else{
            $("#anak").attr('type','hidden');
            $("#tunak").attr('type','hidden');
            $("#anak").val(0);
            $("#tunak").val(0);
        }
    }

    function tunj_anak(){
        var anak=$("#anak").val();
        var gapok=$("#gapok").val();
        if($("#anak").val()<3){
            $("#tunak").val(anak * gapok * 5/100);
        }else{
            $("#tunak").val(3 * gapok * 5/100);
            $("#anak").val(3);
        }
    }

    function pilihKaryawan(){
        var id = $("#karyawan").val();
        $.ajax({
            url:"pilihkaryawan.php",
            data:"id="+id,
            dataType:"json",
            success : function(kar){
                $("#jabatan").val(kar.Nama_Jabatan);
                $("#gapok").val(kar.Gaji_Pokok);
                $("#tunjab").val(kar.Tunjangan_Jabatan);
                $("#status").val(kar.Status);
                $("#anak").val(kar.Jumlah_Anak);
                $("#tunak").val(kar.Tunjangan_Anak);
                var gapok = parseInt($("#gapok").val());
                $("#bpjs").val(gapok * 4/100);
                $("#pph").val(gapok * 2/100);
                var tunjab = parseInt($("#tunjab").val());
                var tunak = parseInt($("#tunak").val());
                $("#pendapatan").val(gapok + tunjab + tunak);
                var bpjs=parseInt($("#bpjs").val());
                var pph=parseInt($("#pph").val());
                $("#potongan").val(bpjs + pph);
                var pendapatan =parseInt($("#pendapatan").val());
                var potongan = parseInt($("#potongan").val());
                $("#gaber").val(pendapatan-potongan);
            }
        })
    }


</script>


