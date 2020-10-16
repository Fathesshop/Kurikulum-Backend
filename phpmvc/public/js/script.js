$(function(){

    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data Anak Langit');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click', function(){
        $('#formModalLabel').html('Ubah Data Anak Langit');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/kurikulum-backend/phpmvc/public/anaklangit/ubah');
        const id = $(this).data('id');
        console.log(id);
        $.ajax({
            url : 'http://localhost/kurikulum-backend/phpmvc/public/anaklangit/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#kerja').val(data.kerja);
                $('#id').val(data.id);
            }
        });
    });

});