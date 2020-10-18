$(function(){

    $('.tambahModal').on('click', function(){
        $('#judulModal').html('Tambah Artikel');
        $('.modal-footer button[type=submit]').html('Posting Artikel');
    });

    $('.ubahModal').on('click', function(){
        $('#judulModal').html('Ubah Artikel');
        $('.modal-footer button[type=submit]').html('Update Artikel');
        $('.modal-body form').attr('action', 'http://localhost/kurikulum-backend/evaluasi/website/public/admin/update');
        const id = $(this).data('id');
        console.log(id);
        $.ajax({
            url : 'http://localhost/kurikulum-backend/evaluasi/website/public/admin/id',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#judul').val(data.judul);
                $('#label').val(data.label);
                $('#penulis').val(data.penulis);
                $('#gambarhide').val(data.gambar);
                $('#isi').val(data.isi);
                $('#id').val(data.id);
            }
        });
    });

});