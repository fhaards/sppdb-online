$(document).ready(function () {
	listGelombang();

	$("#gelombangTable").dataTable();

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
            text: "Submit Error !!",
            timer:1500,
            icon: "error"
        });
	}

	function listGelombang() {
		$.ajax({
			type: "ajax",
			url: "gelombang/list",
			async: false,
			dataType: "json",
			success: function (data) {
				var showGelombang = "";
				var i;
				var no = 1;
				for (i = 0; i < data.length; i++) {
					showGelombang +=
						'<tr id="' +
						data[i].id_gel +
						'">' +
						"<td>" +
						no++ +
						"</td>" +
						"<td>" +
						data[i].nm_gel +
						"</td>" +
						"<td>" +
						data[i].tgl_mulai +
						"</td>" +
						"<td>" +
						data[i].tgl_akhir +
						"</td>" +
						"<td>" +
						data[i].total_peserta +
						"</td>" +
						"<td>" +
                        data[i].status +
                        '<a href="javascript:void(0);"'+
                        'data-idgelombang="'+
                        data[i].id_gel +
                        '" class="btn btn-success btn-sm changeStatus float-right" title="Change Status">'+
                        '<i class="fa fa-sync"></i></a>'+
						"</td>" +
						'<td style="text-align:right;">' +
						'<a href="javascript:void(0);" class="btn btn-info btn-sm editRecord" data-idgelombang="' +
						data[i].id_gel +
						'"data-nmgelombang="' +
						data[i].nm_gel +
						'"data-tglmulai="' +
						data[i].tgl_mulai +
						'"data-tglakhir="' +
						data[i].tgl_akhir +
						'"><i class="fa fa-edit"></i></a>' +
						" " +
						'<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-idgelombang="' +
						data[i].id_gel +
						'"><i class="fa fa-trash"></i></a>' +
						"</td>" +
						"</tr>";
				}
				$("#listGelombang").html(showGelombang);
			},
		});
	}

    //------------------ INPUT
        $("#addButtonGel").on("click",'.addGelombang',function(){
            $("#inputGelombangModal").modal("show");
        });

        $("#inputFormGelombang").submit("click", function () {

            var nmGelombang = $("#nmGelombang").val();
            var tglMulai = $("#tglMulaiGel").val();
            var tglBerakhir = $("#tglBerakhirGel").val();
            
            $.ajax({
                type: "POST",
                url: "gelombang/create",
                dataType: "JSON",
                data: { nm_gel: nmGelombang, 
                        tgl_mulai: tglMulai,
                        tgl_akhir: tglBerakhir,
                    },
                success: function (data) {
                    // location.href="jurusan";
                    $("#nmGelombang").val("");
                    $("#tglMulaiGel").val("");
                    $("#tglBerakhirGel").val("");
                    successMsg();
                    $("#inputGelombangModal").modal("hide");
                    listGelombang();
                    
                },
                error: function (data) {
                    errorMsg();
                },
            });
            return false;
        });

    //------------------ Delete
    
        $("#listGelombang").on("click", ".deleteRecord", function () {
            var gelId = $(this).data("idgelombangStat");
            $("#deleteModalGelombang").modal("show");
            $("#deleteGelombangId").val(gelId);
        });

        $("#deleteFormGelombang").on("submit", function () {
            var gelId = $("#deleteGelombangId").val();
            $.ajax({
                type: "POST",
                url: "gelombang/delete",
                dataType: "JSON",
                data: { id_gel: gelId },
                success: function (data) {
                    $("#" + gelId).remove();
                    $("#deleteGelombangId").val("");
                    $("#deleteModalGelombang").modal("hide");
                    successMsg();
                    listGelombang();
                },
            });
            return false;
        });
    
    //------------------ Change Status

        $("#listGelombang").on("click", ".changeStatus", function () {
            var gelIdStat = $(this).data("idgelombang");
            $("#changeStatusGelombangModal").modal("show");
            $("#idgelombangStat").val(gelIdStat);
        });

        $("#changeStatusGelombangForm").on("submit", function () {
            var gelIdStat = $("#idgelombangStat").val();
            $.ajax({
                type: "POST",
                url: "gelombang/change-status",
                dataType: "JSON",
                data: { id_gel: gelIdStat },
                success: function (data) {
                    $("#" + gelIdStat).remove();
                    $("#idgelombangStat").val("");
                    $("#changeStatusGelombangModal").modal("hide");
                    successMsg();
                    listGelombang();
                },
            });
            return false;
        });
    
	//------------------ Edit
        $("#listGelombang").on("click", ".editRecord", function () {
            $("#editGelombangModal").modal("show");
            $("#idGelombangEdit").val($(this).data("idgelombang"));
            $("#nmGelombangEdit").val($(this).data("nmgelombang"));
            $("#tglMulaiGelEdit").val($(this).data("tglmulai"));
            $("#tglBerakhirGelEdit").val($(this).data("tglakhir"));
        });

        $("#editFormGelombang").on("submit", function () {
            var idGelombangEdit = $("#idGelombangEdit").val();
            var nmGelombangEdit = $("#nmGelombangEdit").val();
            var tglMulaiEdit = $("#tglMulaiGelEdit").val();
            var tglBerakhirEdit = $("#tglBerakhirGelEdit").val();
            $.ajax({
                type: "POST",
                url: "gelombang/update",
                dataType: "JSON",
                data: { 
                    id_gel :idGelombangEdit,
                    nm_gel: nmGelombangEdit, 
                    tgl_mulai: tglMulaiEdit,
                    tgl_akhir: tglBerakhirEdit,
                },
                success: function (data) {
                    $("#editGelombangModal").modal("hide");
                    successMsg();
                    listGelombang();
                },
            });
            return false;
        });
	
});
