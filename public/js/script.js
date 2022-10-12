
$(document).ready(function() {

   
    $('.tambahData').on('click', function(){
        
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    });

    $('.modalUbah').on('click', function(){
        
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Update Data');
        $('.modal-body form').attr('action','http://localhost/phpmvc/public/mahasiswa/update');

        const id = $(this).data('id');
        
        $.ajax({

            url: 'http://localhost/phpmvc/public/mahasiswa/getupdate',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }

        });

    });

        
});