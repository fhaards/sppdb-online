$(document).ready(function () {
	listBerita();

    $("#beritaTable").dataTable();
    
	function successMsg() {
        swal({
            title: "Success",
            text: "Action Success !!",
            timer:1500,
            icon: "success"
        });
	}

	function errorMsg() {
        swal({
            title: "Error",
            text: "Action Error !!",
            timer:1500,
            icon: "error"
        });
    }
    
	function listBerita() {
		$.ajax({
			type: "ajax",
			url: "berita/list",
			async: false,
			dataType: "json",
			success: function (data) {
				var showberita = "";
				var i;
				var no = 1;
				for (i = 0; i < data.length; i++) {
					showberita +=
						'<tr id="' +
						data[i].id_berita +
						'">' +
						"<td>" +
						no++ +
						"</td>" +
						"<td>" +
						data[i].judul_berita +
						"</td>" +
						"<td>" +
						data[i].tgl_berita +
						"</td>" +
						"<td>" +
						data[i].status +
						"</td>" +
						'<td style="text-align:right;">' +
						'<a href="berita/edit/'+data[i].id_berita +'" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>' +
						" " +
						'<a href="berita/detail/'+data[i].id_berita +'" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a> ' +
						'<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-idberita="' +
						data[i].id_berita +
						'"><i class="fa fa-trash"></i></a>' +
						"</td>" +
						"</tr>";
				}
				$("#listBerita").html(showberita);
			},
		});
	}

    //------------------ INPUT
        $("#addButton").on("click",'.addBtnBerita',function(){
            $("#inputBeritaModal").modal("show");
        });

        $("#inputFormBerita").submit("click", function () {
            var judulBerita = $("#judulBerita").val();
            var isiBerita = $("#isiBerita").val();
            $.ajax({
                type: "POST",
                url: "berita/create",
                dataType: "JSON",
                data: { judul_berita: judulBerita, isi_berita: isiBerita},
                success: function (data) {
                    // location.href="jurusan";
                    $("#judulBerita").val(" ");
                    tinymce.activeEditor.setContent('');
                    $("#inputBeritaModal").modal("hide");
                    successMsg();
                    listBerita();
                },
                error: function (data) {
                    errorMsg();
                },
            });
            return false;
        });

    //------------------ Delete
    
        $("#listBerita").on("click", ".deleteRecord", function () {
            var berId = $(this).data("idberita");
            $("#deleteBeritaModal").modal("show");
            $("#deleteBeritaId").val(berId);
        });

        $("#deleteFormBerita").on("submit", function () {
            var berId = $("#deleteBeritaId").val();
            $.ajax({
                type: "POST",
                url: "berita/delete",
                dataType: "JSON",
                data: { id_berita: berId },
                success: function (data) {
                    $("#" + berId).remove();
                    $("#deleteBeritaId").val("");
                    $("#deleteBeritaModal").modal("hide");
                    successMsg();
                    listBerita();
                },
            });
            return false;
        });

});
