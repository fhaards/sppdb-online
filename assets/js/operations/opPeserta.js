$(document).ready(function () {
	listPeserta();
	cekRuangTersedia();

	$("#pesertaTable thead tr").clone(true).appendTo("#pesertaTable thead");
	$("#pesertaTable thead tr:eq(1) .search").each(function (i) {
	    var title = $(this).text();
	    $(this).html(
	        '<input type="text" id="searchSpecific" class="form-control" placeholder="Search ' +
	            title +
	            '" />'
	    );

	    $("#searchSpecific", this).on("keyup change", function () {
	        if (table.column(i).search() !== this.value) {
	            table.column(i).search(this.value).draw();
	        }
	    });
	});

	var table = $("#pesertaTable").DataTable({
	    orderCellsTop: true,
	    fixedHeader: true,
	    bLengthChange: false,
	    pageLength: 10,
		bInfo: false,
		sDom: 'lrtip',
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

	function listPeserta() {
		$.ajax({
			type: "ajax",
			url: "peserta/list",
			async: false,
			dataType: "json",
			//data: { id_pendaftaran: id_pendaftaran },
			success: function (data) {
				var showPeserta = "";
				var i;
				var no = 1;
				for (i = 0; i < data.length; i++) {
					showPeserta +=
						'<tr id="' +
						data[i].id_pendaftaran +
						'">' +
						"<td>" +
						data[i].kd_peserta +
						"</td>" +
						"<td>" +
						data[i].nm_lengkap +
						"</td>" +
						"<td>" +
						data[i].tgl_daftar +
						"</td>" +
						"<td>" +
						data[i].status +
						"<div class='float-right'>"+
						'<a href="javascript:void(0);" class="btn btn-success btn-sm changeStatus" data-id-peserta="' +
						data[i].id_pendaftaran +
						'"data-nm-peserta="' +
						data[i].nm_lengkap +
						'"data-kd-peserta="' +
						data[i].kd_peserta +
						'"data-status-peserta="' +
						data[i].status +
						'"data-img-bukti="' +
						data[i].img_bukti +
						'"><i class="fa fa-sync"></i></a>' +
						" " +
						'<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-id-peserta="' +
						data[i].id_pendaftaran +
						'"' +
						'data-total-peserta="' +
						data[i].total +
						'"><i class="fa fa-trash"></i></a>' +
						"</div>";
						"</td>" +
						"</tr>";
				}
				$("#listPeserta").html(showPeserta);
			},
		});
	}

	//------------------ Change Status
	function cekRuangTersedia() {
		$.ajax({
			type: "ajax",
			url: "peserta/cek-ruang",
			async: false,
			dataType: "json",
			//data: { id_pendaftaran: id_pendaftaran },
			success: function (data) {
				var showRuangTersedia = "";
				var i;
				showRuangTersedia +=
					"<label>Pilih Ruangan </label>" +
					"<select class='form-control' name='id_ruang' id='selectPilihRuang'>";
				for (i = 0; i < data.length; i++) {
					showRuangTersedia +=
						'<option value="' +
						data[i].id_ruang +
						'">' +
						data[i].nm_ruang +
						"</option>";
				}
				showRuangTersedia += "</select>";
				$("#pilihRuang").html(showRuangTersedia);
			},
			error: function () {
				$("#pilihRuang").html("");
			},
		});
	}

	$("#listPeserta").on("click", ".changeStatus", function () {
		var idPeserta = $(this).data("idPeserta");
		var nmPeserta = $(this).data("nmPeserta");
		var statusPeserta = $(this).data("statusPeserta");
		var kdPeserta = $(this).data("kdPeserta");
		var imgBukti = $(this).data("imgBukti");
		$("#pilihRuang").html("");

		if ($(this).data("statusPeserta") === "Valid(Waiting)") {
			$("#cekStatusPeserta").html(
				'<img src="' +
					base_url +
					"/uploads/dokumen_peserta/" +
					kdPeserta +
					"/bukti_pembayaran/" +
					imgBukti +
					'" class="img-responsive" width="100%">'
			);
			$("#buktiPembayaran").show();
			$("#pilihStatus").on("change", function () {
				if ($("#statusPeserta option:selected").attr("id") === "Complete") {
					cekRuangTersedia();
				} else {
					$("#pilihRuang").html("");
				}
			});
		} else if ($(this).data("statusPeserta") === "Valid(Complete)") {
			$("#cekStatusPeserta").html(
				'<img src="' +
					base_url +
					"/uploads/dokumen_peserta/" +
					kdPeserta +
					"/bukti_pembayaran/" +
					imgBukti +
					'" class="img-responsive" width="100%">'
			);
			$("#buktiPembayaran").show();
			cekRuangTersedia();
		} else {
			$("#cekStatusPeserta").html("");
			$("#buktiPembayaran").hide();
			$("#pilihRuang").html("");
		}

		$("#changeStatusPesertaModal").modal("show");
		$("#idPeserta").val(idPeserta);
		$("#nmPeserta").text(nmPeserta);
		$("#statusPeserta").val(statusPeserta);
	});

	$("#editFormPeserta").on("submit", function () {
		var idPeserta = $("#idPeserta").val();
		var idRuang = $("#selectPilihRuang").val();
		var statusPeserta = $("#statusPeserta").val();
		$.ajax({
			type: "POST",
			url: "peserta/change-status",
			dataType: "JSON",
			data: {
				id_pendaftaran: idPeserta,
				id_ruang: idRuang,
				status: statusPeserta,
			},
			success: function (data) {
				$("#changeStatusPesertaModal").modal("hide");
				successMsg();
				listPeserta();
			},
		});
		return false;
	});
});

// $('#pesertaTable').DataTable( {
//     initComplete: function () {
//         this.api().columns().every( function () {
//             var column = this;
//             var select = $('<select><option value=""></option></select>')
//                 .appendTo( $(column.header()).empty() )
//                 .on( 'change', function () {
//                     var val = $.fn.dataTable.util.escapeRegex(
//                         $(this).val()
//                     );
//                     column
//                         .search( val ? '^'+val+'$' : '', true, false )
//                         .draw();
//                 } );
//             column.data().unique().sort().each( function ( d, j ) {
//                 select.append( '<option value="'+d+'">'+d+'</option>' )
//             } );
//         } );
//     }
// });

// $("#pesertaTable thead tr").clone(true).appendTo("#pesertaTable thead");
// $("#pesertaTable thead tr:eq(1) .search").each(function (i) {
//     var title = $(this).text();
//     $(this).html(
//         '<input type="text" id="searchSpecific" placeholder="Search ' +
//             title +
//             '" />'
//     );

//     $("#searchSpecific", this).on("keyup change", function () {
//         if (table.column(i).search() !== this.value) {
//             table.column(i).search(this.value).draw();
//         }
//     });
// });

// var table = $("#pesertaTable").DataTable({
//     orderCellsTop: true,
//     fixedHeader: true,
//     bLengthChange: false,
//     pageLength: 1,
//     bInfo: false,
// });
