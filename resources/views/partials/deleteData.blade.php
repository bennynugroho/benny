<script>
    function deleteData(url){
            Swal.fire({
                title: 'Yakin ingin menghapus data?',
                text: "Anda tidak dapat mengembalikan data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Kembali'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        type: 'delete',
                        data: {
                            '_token' : '{{ csrf_token() }}',
                        },
                        success: function(data) {
                            Swal.fire(
                                'Deleted!',
                                `${data}`,
                                'success'
                            ).then(function(){
                                location.reload();
                            });
                        }
                    });
                }
            })
        }
</script>