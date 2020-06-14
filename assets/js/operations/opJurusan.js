$(document).ready(function () {
	listJurusan();

	$("#jurusanTable").dataTable();

	function successMsg() {
        swal({
            title: "Success",
            text: "Edit Success !!",
            timer:1500,
            icon: "success"
        });
	}

	function errorMsg() {
        swal({
            title: "Error",
            text: "Edit Error !!",
            timer:1500,
            icon: "error"
        });
	}

	function listJurusan() {
		$.ajax({
			type: "ajax",
			url: "jurusan/list",
			async: false,
			dataType: "json",
			success: function (data) {
				var html = "";
				var i;
				var no = 1;
				for (i = 0; i < data.length; i++) {
					html +=
						'<tr id="' +
						data[i].kd_jurusan +
						'">' +
						"<td>" +
						no++ +
						"</td>" +
						"<td>" +
						data[i].kd_jurusan +
						"</td>" +
						"<td>" +
						data[i].nm_jurusan +
						"</td>" +
						"<td>" +
						data[i].status +
						'<a href="javascript:void(0);"'+
                        'data-idjurusan="'+
                        data[i].id_jurusan +
                        '" class="btn btn-success btn-sm changeStatus float-right" title="Change Status">'+
                        '<i class="fa fa-sync"></i></a>'+
						"</td>" +
						'<td style="text-align:right;">' +
						'<a href="javascript:void(0);" class="btn btn-info btn-sm editRecord" data-id="' +
						data[i].id_jurusan +
						'"data-kdjurusan="' +
						data[i].kd_jurusan +
						'"data-nmjurusan="' +
						data[i].nm_jurusan +
						'"><i class="fa fa-edit"></i></a>' +
						" " +
						'<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-id="' +
						data[i].id_jurusan +
						'"><i class="fa fa-trash"></i></a>' +
						"</td>" +
						"</tr>";
				}
				$("#listJurusan").html(html);
			},
		});
	}

    //------------------ INPUT
		$("#addButtonJur").on("click",'.addJurusan',function(){
			$("#inputJurusan").modal("show");
		});

		$("#inputFormJurusan").submit("click", function () {
			var kdJurusan = $("#kdJurusan").val();
			var nmJurusan = $("#nmJurusan").val();
			$.ajax({
				type: "POST",
				url: "jurusan/create",
				dataType: "JSON",
				data: { kd_jurusan: kdJurusan, nm_jurusan: nmJurusan },
				success: function (data) {
					// location.href="jurusan";
					$("#kdJurusan").val("");
					$("#nmJurusan").val("");
					successMsg();
					$("#inputJurusan").modal("hide");
					listJurusan();
				},
				error: function (data) {
					errorMsg();
				},
			});
			return false;
		});

	//------------------ Change Status

        $("#listJurusan").on("click", ".changeStatus", function () {
            var jurIdStat = $(this).data("idjurusan");
            $("#changeStatusJurusanModal").modal("show");
            $("#idJurusanStatus").val(jurIdStat);
        });

        $("#changeStatusJurusanForm").on("submit", function () {
            var jurIdStat = $("#idJurusanStatus").val();
            $.ajax({
                type: "POST",
                url: "jurusan/change-status",
                dataType: "JSON",
                data: { id_jurusan: jurIdStat },
                success: function (data) {
                    $("#" + jurIdStat).remove();
                    $("#idJurusanStatus").val("");
                    $("#changeStatusJurusanModal").modal("hide");
                    successMsg();
                    listJurusan();
                },
            });
            return false;
		});
		
    //------------------ Delete
    
		$("#listJurusan").on("click", ".deleteRecord", function () {
			var jurId = $(this).data("id");
			$("#deleteModal").modal("show");
			$("#deleteId").val(jurId);
		});

		$("#deleteForm").on("submit", function () {
			var jurId = $("#deleteId").val();
			$.ajax({
				type: "POST",
				url: "jurusan/delete",
				dataType: "JSON",
				data: { id: jurId },
				success: function (data) {
					$("#" + jurId).remove();
					$("#deleteId").val("");
					$("#deleteModal").modal("hide");
					listJurusan();
				},
			});
			return false;
		});

	//------------------ Edit
		$("#listJurusan").on("click", ".editRecord", function () {
			$("#editJurusanModal").modal("show");
			$("#idJurusanEdit").val($(this).data("id"));
			$("#kdJurusanEdit").val($(this).data("kdjurusan"));
			$("#nmJurusanEdit").val($(this).data("nmjurusan"));
		});
		
		// save edit record
		$("#editFormJurusan").on("submit", function () {
			var id_jurusan = $("#idJurusanEdit").val();
			var kd_jurusan = $("#kdJurusanEdit").val();
			var nm_jurusan = $("#nmJurusanEdit").val();
			$.ajax({
				type: "POST",
				url: "jurusan/update",
				dataType: "JSON",
				data: {
					id_jurusan: id_jurusan,
					kd_jurusan: kd_jurusan,
					nm_jurusan: nm_jurusan,
				},
				success: function (data) {
					$("#editJurusanModal").modal("hide");
					successMsg();
					listJurusan();
					//  $("#kdJurusanEdit").val("");
					//  $("#kdJurusanEdit").val("");
					//  $('#editFormJurusan').modal('hide');
					//  listJurusan();
				},
			});
			return false;
		});
	
});
