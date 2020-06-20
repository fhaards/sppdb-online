$(document).ready(function () {
	listRuangUjian();

	$("#ruangUjianTable").dataTable({
		bInfo: true,
		bFilter: true,
		bLengthChange: false,
		pageLength: 10,
	});

	function successMsg() {
		swal({
			title: "Success",
			text: "Action Success !!",
			timer: 1500,
			icon: "success",
		});
	}

	function errorMsg() {
		swal({
			title: "Error",
			text: "Submit Error !!",
			timer: 1500,
			icon: "error",
		});
	}

	function errorMsg2() {
		swal({
			title: "Error",
			text: "Submit Error, Any Peserta use this Room !!",
			timer: 1500,
			icon: "error",
		});
	}

	function listRuangUjian() {
		$.ajax({
			type: "ajax",
			url: "ruang-ujian/list",
			async: false,
			dataType: "json",
			success: function (data) {
				var showRuangUjian = "";
				var i;
				var no = 1;
				for (i = 0; i < data.length; i++) {
					showRuangUjian +=
						'<tr id="' +
						data[i].ruangId +
						'">' +
						"<td>" +
						no++ +
						"</td>" +
						"<td>" +
						data[i].nm_ruang +
						"</td>" +
						"<td>" +
						data[i].max +
						"</td>" +
						"<td>" +
						data[i].total +
						"</td>" +
						"<td>" +
						'<a href="javascript:void(0);" class="btn btn-info btn-sm editRecord" data-id-ruang="' +
						data[i].ruangId +
						'"data-nm-ruang="' +
						data[i].nm_ruang +
						'"data-max-capacity="' +
						data[i].max +
						'"><i class="fa fa-edit"></i></a>' +
						" " +
						'<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-id-ruang="' +
						data[i].ruangId +
						'"' +
						'data-total-peserta="' +
						data[i].total +
						'"><i class="fa fa-trash"></i></a>' +
						" " +
						'<a href="ruang-ujian/detail/'+data[i].ruangId +'" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>'+
						"</td>" +
						"</tr>";
				}
				$("#listRuangUjian").html(showRuangUjian);
			},
		});
	}

	//------------------ INPUT
	$("#addButtonRuang").on("click", ".addRuangUjian", function () {
		$("#inputRuangUjianModal").modal("show");
	});

	$("#inputFormRuangUjian").submit("click", function () {
		var nmRuangUjian = $("#nmRuangUjian").val();
		var maxCapacity = $("#maxCapacity").val();

		$.ajax({
			type: "POST",
			url: "ruang-ujian/create",
			dataType: "JSON",
			data: { nm_ruang: nmRuangUjian, max: maxCapacity },
			success: function (data) {
				// location.href="jurusan";
				$("#nmRuangUjian").val("");
				$("#maxCapacity").val("");
				successMsg();
				$("#inputRuangUjianModal").modal("hide");
				listRuangUjian();
			},
			error: function (data) {
				errorMsg();
			},
		});
		return false;
	});

	//------------------ Delete

	$("#listRuangUjian").on("click", ".deleteRecord", function () {
		var idRuang = $(this).data("idRuang");
		var totalPeserta = $(this).data("totalPeserta");
		$("#deleteModalRuangUjian").modal("show");
		$("#deleteRuangUjianId").val(idRuang);
		$("#deleteTotalRuangUjian").val(totalPeserta);
	});

	$("#deleteFormRuangUjian").on("submit", function () {
		var idRuang = $("#deleteRuangUjianId").val();
		var totalPeserta = $("#deleteTotalRuangUjian").val();
		if (totalPeserta > 0) {
            $("#deleteModalRuangUjian").modal("hide");
            errorMsg2();
            listRuangUjian();
            return false;
		} else {
			$.ajax({
				type: "POST",
				url: "ruang-ujian/delete",
				dataType: "JSON",
				data: { id_ruang: idRuang },
				success: function (data) {
					$("#" + idRuang).remove();
					$("#deleteRuangUjianId").val("");
					$("#deleteModalRuangUjian").modal("hide");
					successMsg();
					listRuangUjian();
				},
			});
			return false;
		}
	});

	//------------------ Edit
	$("#listRuangUjian").on("click", ".editRecord", function () {
		$("#editRuangUjianModal").modal("show");
		$("#idRuangUjianEdit").val($(this).data("idRuang"));
		$("#nmRuangUjianEdit").val($(this).data("nmRuang"));
		$("#maxRuangEdit").val($(this).data("maxCapacity"));
	});

	$("#editFormRuangUjian").on("submit", function () {
		var idRuang = $("#idRuangUjianEdit").val();
		var nmRuangUjian = $("#nmRuangUjianEdit").val();
		var maxCapacity = $("#maxRuangEdit").val();
		$.ajax({
			type: "POST",
			url: "ruang-ujian/update",
			dataType: "JSON",
			data: { id_ruang: idRuang, nm_ruang: nmRuangUjian, max: maxCapacity },
			success: function (data) {
				$("#editRuangUjianModal").modal("hide");
				successMsg();
				listRuangUjian();
			},
		});
		return false;
	});
});
