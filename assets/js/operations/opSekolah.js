$(document).ready(function () {

	listSekolah();

	function successMsg() {
		swal({
			title: "Success",
			text: "Edit Success !!",
			timer: 1500,
			icon: "success",
		});
	}

	/*----------------------  DATA SEKOLAH */
	
	function listSekolah() {
		$.ajax({
			type: "ajax",
			url: "school/list",
			async: false,
			dataType: "json",
			success: function (data) {
				var editBtn = "";
				var editLogoBtn = "";
				editBtn +=
					'<a href="#" data-id="' +
					data.id_sekolah +
					'"' +
					'data-nmsekolah="' +
					data.nm_sekolah +
					'" ' +
					'data-email="' +
					data.email +
					'"' +
					'data-notelp="' +
					data.no_telp +
					'"' +
					'data-alamat="' +
					data.alamat +
					'"' +
					'data-nmapl="' +
					data.nm_apl +
					'"' +
					'data-initialapl="' +
					data.initial_apl +
					'"' +
					'class="btn btn-primary editSekolah" data-toggle="modal">' +
					'<i class="fa fa-pen mr-2"></i> Edit </a>';

				editLogoBtn +=
					'<a href="javascript:void(0);" data-id="' +
					data.id_sekolah +
					'"class="btn btn-primary" data-toggle="modal"  data-target="#editLogoModal" id="editLogo">' +
					'<i class="fa fa-pen mr-2"></i> Ubah Gambar </a>';

				$("#nmSekolah").html(data.nm_sekolah);
				$("#noTelpSekolah").html(data.no_telp);
				$("#emailSekolah").html(data.email);
				$("#alamatSekolah").html(data.alamat);
				$("#nmApl").html(data.nm_apl);
				$("#initialApl").html(data.initial_apl);
				$("#editSekolahBtn").html(editBtn);
				$("#editLogoBtn").html(editLogoBtn);
			}
		});
	}

	//------------------ Edit

	$("#editButtons").on("click",".editSekolah",function(){
		$("#editSekolahModal").modal("show");
		$("#idSekolahEdit").val($(this).data("id"));
		$("#nmSekolahEdit").val($(this).data("nmsekolah"));
		$("#emailSekolahEdit").val($(this).data("email"));
		$("#noTelpSekolahEdit").val($(this).data("notelp"));
		$("#alamatSekolahEdit").val($(this).data("alamat"));
		$("#nmAplEdit").val($(this).data("nmapl"));
		$("#initialAplEdit").val($(this).data("initialapl"));
	});

		//------------------ Edit Logo

		$("#editLogo").on("click", function () {
			$("#editLogoModal").modal("show");
			$("#idSekolahLogo").val($(this).data("id"));
		});
		

	$("#editFormSekolah").on("submit", function () {
		var idSekolah = $("#idSekolahEdit").val();
		var nmSekolah = $("#nmSekolahEdit").val();
		var emailSekolah = $("#emailSekolahEdit").val();
		var noTelp = $("#noTelpSekolahEdit").val();
		var alamatSekolah = $("#alamatSekolahEdit").val();
		var nmApl = $("#nmAplEdit").val();
		var initialApl = $("#initialAplEdit").val();
		$.ajax({
			type: "POST",
			url: "school/update",
			dataType: "JSON",
			data: {
				id_sekolah: idSekolah,
				nm_sekolah: nmSekolah,
				email: emailSekolah,
				no_telp: noTelp,
				alamat: alamatSekolah,
				nm_apl: nmApl,
				initial_apl: initialApl,
			},
			success: function () {
				successMsg();
				$("#editSekolahModal").modal("hide");
				listSekolah();
				//window.location.href="school";
			},
		});
		return false;
	});


});
