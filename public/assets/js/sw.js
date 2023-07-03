function deleteData(id) {
    Swal.fire({
        title: "Apakah kamu yakin?",
        text: "Data yang dihapus tidak dapat kembali.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, hapus!",
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(`delete-form-${id}`).submit();
        }
    });
}
function approveData(id, table) {
    console.log(table);
    Swal.fire({
        title: "Apakah kamu yakin ingin setujui data ini?",
        text: "Data yang sudah disetujui tidak dapat diubah.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Setujui!",
    }).then((result) => {
        if (result.isConfirmed) {
            $.get("/admin/approved/" + id + "/" + table, function (data) {
                Swal.fire("Berhasil", "Data berhasil diupdate!", "success");
                location.reload();
            });
        }
    });
}
