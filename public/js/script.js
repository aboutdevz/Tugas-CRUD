$(function(){
    const path = window.location.origin+"/public/";

    $('.delete').click(function(){
        return confirm('Yakin Mau Di Hapus?'); 
    });


    $('.updatebadge').on('click',function() {
        const id = $(this).data('id');
       $.ajax({

           url: path+'Crud/getUpdate',
           data: {id : id},
           method: 'POST',
           dataType: 'json',
           success: function(data){
                $('#namaUpdate').val(data.nama);
                $('#kelasUpdate').val(data.kelas);
                $('#absenUpdate').val(data.absen);
                $('#idUpdate').val(data.id);
           }
       });
    });
});