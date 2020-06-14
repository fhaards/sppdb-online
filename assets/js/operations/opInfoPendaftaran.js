$(document).ready(function () {
	listInfoPendaftaran();

	function listInfoPendaftaran() {
		$.ajax({
			type: "ajax",
			url: "info-pendaftaran/list",
			async: false,
			dataType: "JSON",
			success: function (data) {
                var editInfoPBtn = "";
				editInfoPBtn +=
					'<a href="#" data-idinfo="' +
					data.id_info +
					'"' +
					'data-caramendaftar="' +
					data.cara_mendaftar +
					'" ' +
					'data-dokumen="' +
					data.dokumen +
					'"' +
					'data-infopembayaran="' +
					data.info_pembayaran +
					'"' +
					'data-welcomemsg="' +
					data.welcome_msg +
					'"' +
					'class="btn btn-primary editInfoPButton" data-toggle="modal">' +
                    '<i class="fa fa-pen mr-2"></i> Edit </a>';
                    
                $("#caraMendaftar").html(data.cara_mendaftar);
                $("#dokumen").html(data.dokumen);
                $("#informasiPembayaran").html(data.info_pembayaran);
                $("#welcomeMessages").html(data.welcome_msg);
                $("#editInfoPButton").html(editInfoPBtn);
			}
		});
	}

    //------------------ Edit
    
    $('#editButtonsInfo').on('click','.editInfoPButton',function(){
        $("#editInfoPendaftaranModal").modal("show");
		$("#idInfoPendaftaran").val($(this).data("idinfo"));
	});

	$("#editFormInfoPendaftaran").on("submit", function () {
		var idPendaftaran = $("#idInfoPendaftaran").val();
        var welcomeMessage = $("#welcomeMessagesEdit").val();
        var caraMendaftar = $("#caraMendaftarEdit").val();
        var infoPembayaran = $("#infoPembayaranEdit").val();
        var dokumenInfo = $("#dokumenEdit").val();
		$.ajax({
			type: "POST",
			url: "info-pendaftaran/update",
			dataType: "JSON",
			data: {
                id_info: idPendaftaran,
                cara_mendaftar : caraMendaftar,
                welcome_msg :welcomeMessage,
                dokumen: dokumenInfo,
                info_pembayaran:infoPembayaran
			},
			success: function () {
                $("#editInfoPendaftaranModal").modal("hide");
                listInfoPendaftaran();
                //successMsg();
			},
		});
		return false;
	});

});
