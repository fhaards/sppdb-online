$(document).ready(function () {
	listPeserta();

    $("#pesertaTable").DataTable({
        orderCellsTop: true,
        fixedHeader: true,
		pageLength: 10,
		lengthChange :false,
		bInfo:false,
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
						no++ +
						"</td>" +
						"<td>" +
						data[i].kd_peserta +
						"</td>" +
						"<td>" +
						data[i].nm_lengkap +
						"</td>" +
						"<td>" +
						data[i].jk +
						"</td>" +
						"<td>" +
						data[i].status +
						"</td>" +
						"<td class='float-right'>" +
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
				showRuangTersedia += "<label>Pilih Ruangan </label>"+
									 "<select class='form-control' name='id_ruang'>";
				for (i = 0; i < data.length; i++) {
					showRuangTersedia += '<option value="'+data[i].id_ruang+'">'+data[i].nm_ruang+'</option>';
				}
				showRuangTersedia += "</select>";
				$('#pilihRuang').html(showRuangTersedia);
			},
			error: function(){
				$('#pilihRuang').html('');
			},
		});
	}

	$("#listPeserta").on("click", ".changeStatus", function () {
		var idPeserta = $(this).data("idPeserta");
		var nmPeserta = $(this).data("nmPeserta");
		var statusPeserta = $(this).data("statusPeserta");
		var kdPeserta = $(this).data("kdPeserta");
		var imgBukti = $(this).data("imgBukti");

		if($(this).data("statusPeserta") === 'Valid(Waiting)'){
			$('#lala').hide();
			$('#cekStatusPeserta').html('<img src="'+base_url+'/uploads/dokumen_peserta/'+kdPeserta+'/bukti_pembayaran/'+imgBukti+'" class="img-responsive" width="100%">');
			$('#buktiPembayaran').show();
			$("#statusPeserta").change(function(){ 
				if($("#statusPeserta option:selected").val() === 'Valid(Complete)'){ 
					cekRuangTersedia();
				} else {
					$('#pilihRuang').html('');
				}
			});
		} else {
			$('#cekStatusPeserta').html('');
			$('#buktiPembayaran').hide();
			$('#pilihRuang').html('');
		}



		$("#changeStatusPesertaModal").modal("show");
		$("#idPeserta").val(idPeserta);
		$("#nmPeserta").text(nmPeserta);	
		$("#statusPeserta").val(statusPeserta);

	});
	
	$("#editFormPeserta").on("submit", function () {
		var idPeserta = $("#idPeserta").val();
		var idRuang = $("#pilihRuang").val();
		var statusPeserta = $("#statusPeserta").val();
		$.ajax({
			type: "POST",
			url: "peserta/change-status",
			dataType: "JSON",
			data: { id_pendaftaran: idPeserta,id_ruang:idRuang, status: statusPeserta},
			success: function (data) {
				$("#changeStatusPesertaModal").modal("hide");
				successMsg();
				listPeserta();
			},
		});
		return false;
	});
});

// function cekRuangTersedia() {
// 	$.ajax({
// 		type: "ajax",
// 		url: "peserta/cek-ruang",
// 		async: false,
// 		dataType: "json",
// 		success: function (data) {
// 			var showRuangTersedia = "";
// 			var i;
// 			for (i = 0; i < data.length; i++) {
// 				showRuangTersedia += '<option value="'+data[i].id_ruang+'">'+data[i].nm_ruang+'</option>';
// 			}
// 			$('#selectPilihRuang').html(showRuangTersedia);
// 		},
// 	});
// }

// $("#listPeserta").on("click", ".changeStatus", function () {
// 	var idPeserta = $(this).data("idPeserta");
// 	var nmPeserta = $(this).data("nmPeserta");
// 	var statusPeserta = $(this).data("statusPeserta");
// 	var kdPeserta = $(this).data("kdPeserta");
// 	var imgBukti = $(this).data("imgBukti");

// 	if($(this).data("statusPeserta") === 'Valid(Waiting)'){
// 		$('#cekStatusPeserta').html('<img src="'+base_url+'/uploads/dokumen_peserta/'+kdPeserta+'/bukti_pembayaran/'+imgBukti+'" class="img-responsive" width="100%">');
// 		$('#buktiPembayaran').show();
// 		$("#pilihStatus").on("click",".selectPilihStatus",function(){ 
// 			if($("#statusPeserta option:selected").attr('id') === 'Complete'){ 
// 				$('#pilihRuang').addClass('active');
// 			} else {
// 				$('#pilihRuang').removeClass('active');
// 			}
// 		});
// 	} else {
// 		$('#cekStatusPeserta').html('');
// 		$('#buktiPembayaran').hide();
// 		$('#pilihRuang').html('');
// 	}

// 	$("#changeStatusPesertaModal").modal("show");
// 	$("#idPeserta").val(idPeserta);
// 	$("#nmPeserta").text(nmPeserta);	
// 	$("#statusPeserta").val(statusPeserta);

// });

// $("#editFormPeserta").on("submit", function () {
// 	var idPeserta = $("#idPeserta").val();
// 	var idRuang = $("#selectPilihRuang").val();
// 	var statusPeserta = $("#statusPeserta").val();
// 	$.ajax({
// 		type: "POST",
// 		url: "peserta/change-status",
// 		dataType: "JSON",
// 		data: { id_pendaftaran: idPeserta,id_ruang:idRuang, status: statusPeserta},
// 		success: function (data) {
// 			$("#changeStatusPesertaModal").modal("hide");
// 			successMsg();
// 			listPeserta();
// 		},
// 	});
// 	return false;
// });