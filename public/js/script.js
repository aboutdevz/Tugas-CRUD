$(function(){
    const path = window.location.origin+"/CRUD/public/";

    $('#delete').click(function(){
        return confirm('Yakin Mau Di Hapus?');
        
    });


    $('.updatebadge').on('click',function() {
        const id = $(this).data('id');
        console.log('okok');
       $.ajax({

           url: path+'Home/getUpdate',
           data: {id : id},
           method: 'POST',
           dataType: 'json',
           success: function(data){
               console.log(data);
                $('#namaUpdate').val(data.nama);
                $('#kelasUpdate').val(data.kelas);
                $('#absenUpdate').val(data.absen);
                $('#idUpdate').val(data.id);
           }
       });
    });
});