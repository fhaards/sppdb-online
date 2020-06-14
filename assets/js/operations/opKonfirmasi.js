$(document).ready(function () {
	validateField2();
	validateFieldOrtu();
	initProvinceAndCity();

	/////////////////////////////// FORM UPLOAD FILE ////////////////////////////////////////////
	$(".custom-file-input").on("change", function() {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	  });
	/////////////////////////////// FORM VALIDATION ////////////////////////////////////////////

	$(".inputKonfirmasi").change(function () {
		validateField2();
	});

	function validateField2() {
		var inputFields = $(".inputKonfirmasi");
		var numOfField = 4;
		var numOfValField = 0;

		inputFields.each(function (element) {
			if (inputFields[element].value != "") {
				numOfValField++;
			}
		});

		if (numOfValField == numOfField) {
			$("#dataPribadiCheck").html(
				'<span class="badge badge-success"><small><i class="fa fa-check mr-2"></i> Data Terisi </small></span>'
			);
		} else {
			$("#dataPribadiCheck").html(
				'<span class="badge badge-danger"><small><i class="fa fa-times mr-2"></i> Data Belum Lengkap </small> </span>'
			);
		}
	}

	$(".inputKonfirmasiOrtu").change(function () {
		validateFieldOrtu();
	});

	function validateFieldOrtu() {
		var inputFields = $(".inputKonfirmasiOrtu");
		var numOfField = 2;
		var numOfValField = 0;

		inputFields.each(function (element) {
			if (inputFields[element].value != "") {
				numOfValField++;
			}
		});

		if (numOfValField == numOfField) {
			$("#dataOrtuCheck").html(
				'<span class="badge badge-success"><small><i class="fa fa-check mr-2"></i> Data Terisi </small></span>'
			);
		} else {
			$("#dataOrtuCheck").html(
				'<span class="badge badge-danger"><small><i class="fa fa-times mr-2"></i> Data Belum Lengkap </small> </span>'
			);
		}
	}


	/////////////////////////////// CHANGE JURUSAN ////////////////////////////////////////////

        $("#buttonGantiJurusan").on("click", ".gantiJurusan", function () {
            var jurIdPendafaran = $(this).data("idPendaftaran");
            $("#changeJurusanPilihModal").modal("show");
            $("#idPesertaPendaftaran").val(jurIdPendafaran);
        });

        $("#changeJurusanPilihForm").on("submit", function () {
			var jurIdPendaftaran = $("#idPesertaPendaftaran").val();
			var idPilihJurusan = $("#idPilihJurusan").val();
			
            $.ajax({
                type: "POST",
                url: "konfirmasi/ganti-jurusan",
                dataType: "JSON",
                data: { id_pendaftaran:jurIdPendaftaran,id_jurusan: idPilihJurusan },
                success: function (data) {
					$("#changeJurusanPilihModal").modal("hide");
					location.reload(true);
                },
			});
			return false;
		});

	/////////////////////////////// GET PROVINCE ////////////////////////////////////////////

	$("#getProvince").on("change", function () {
		getCity();
	});

	function getProvince(callback = setProvinceList) {
		$.ajax({
			type: "GET",
			// url: "https://dev.farizdotid.com/api/daerahindonesia/provinsi",
			url: "https://x.rajaapi.com/MeP7c5ne53bUotPwdUSyrel5ubpE2DQOdHIATaKIuUHGLhwV0QQXrjWotN/m/wilayah/provinsi",
			success: function (data) {
				callback(data);
			},
		});
	}

	function initProvinceAndCity() {
		getProvince(initSetProvinceAndCityList);
	}

	function setProvinceList(data) {
		let getProvince = $("#getProvince");
		var data = data.data;
		var options = "";
		for (var i = 0; i < data.length; i++) {
			options +=
				'<option value="' + data[i].id + '">' + data[i].name + "</option>";
		}
		getProvince.append(options);
	}

	function initSetProvinceAndCityList(data){
		setProvinceList(data);
		var idProvince = $("#getProvince").data("idProvince");
		$("#getProvince").val(idProvince);
		getCity(initSetCityList);
	}

	/////////////////////////////// GET CITY ////////////////////////////////////////////

	function getCity(callback = setCityList) {
		var idProvince = $("#getProvince").val();
		let getCity = $("#getCity");
		$.ajax({
			type: "GET",
			//url:"https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=" +idProvince,
			url:"https://x.rajaapi.com/MeP7c5ne53bUotPwdUSyrel5ubpE2DQOdHIATaKIuUHGLhwV0QQXrjWotN/m/wilayah/kabupaten?idpropinsi="+idProvince,
			success: function (data) {
				callback(data);
			},
			beforeSend: function () {
				getCity.html(" ");
			},
		});
	}

	function initGetCity() {
		getCity(initSetCityList);
	}

	function setCityList(data){
		let getCity = $("#getCity");
		var options = "";
		var data = data.data;
		for (var i = 0; i < data.length; i++) {
			options +=
				'<option value="' + data[i].id + '">' + data[i].name + "</option>";
		}
		getCity.append(options);
	}

	function initSetCityList(data){
		setCityList(data);
		var idCity = $("#getCity").data("idCity");
		$("#getCity").val(idCity);
	}

});

// DUMMY
/*
	$(document).ready(function () {
		$(".inputKonfirmasi").eq(2).blur(function () {
			if ($(this).val() != "") {
				$("#dataPribadiCheck").html(
					'<span class="badge badge-success"><small><i class="fa fa-check mr-2"></i> Data Terisi </small></span>'
				);
			} else {
				$("#dataPribadiCheck").html(
					'<span class="badge badge-danger"><small><i class="fa fa-times mr-2"></i> Data Terisi </small> </span>'
				);
			}
			return true;
		});
	});

	$(document).ready(function () {
		$(".inputKonfirmasi").eq(2).on("blur",function () {
			return validateField(this);
		});

		function validateField(field) {
			let value = $(".inputKonfirmasi").val();
			if ($(value).val() != "") {
				$("#dataPribadiCheck").html(
					'<span class="badge badge-success"><small><i class="fa fa-check mr-2"></i> Data Terisi </small></span>'
				);
			} else {
				$("#dataPribadiCheck").html(
					'<span class="badge badge-danger"><small><i class="fa fa-times mr-2"></i> Data Terisi </small> </span>'
				);
				return false;
			}
		}
	});
	

	$(".inputKonfirmasi")
		.eq(8)
		.each(function () {
			validateField(this);
		});
	$(".inputKonfirmasi")
		.eq(8)
		.blur(function () {
			validateField(this);
		});
	

	function validateField(field) {
		let value = field.value;
		if (value.trim().length < 1 || value === null) {
			$("#dataPribadiCheck").html(
				'<span class="badge badge-danger"><small><i class="fa fa-times mr-2"></i> Data Belum Terisi </small> </span>'
			);
		} else {
			$("#dataPribadiCheck").html(
				'<span class="badge badge-success"><small><i class="fa fa-check mr-2"></i> Data Terisi </small></span>'
			);
		}
		return false;
	}
*/
