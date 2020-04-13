const flashData = $('.flash-data').data('flashdata');

if(flashData) {
  Swal.fire({
    title: 'Berhasil!',
    text: flashData,
    icon: 'success'
  })
}

// tombol hapus
$('.btn-danger').on('click',function(e) {
  e.preventDefault(); // apapun pilihan yg diklik di swal, perintah tombol akan tetap dijalankan, oleh karena itu aksi href default hrs dimatikan
  const href = $(this).attr('href'); // ambil url href
  Swal.fire({
    title: 'Apa anda yakin?',
    text: "Data mahasiswa akan dihapus!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus'
  }).then((result) => {
  if (result.value) {
      document.location.href = href; // jalankan href disini
    }
  })
});
