
function qrcode() {

	// $("#genQR").attr("disabled", "disabled");
					iziToast.success({
                        title: 'Success',
                        message: 'QR Code Generated',
                        position: 'topCenter',
                        animateInside: true,
                    });
		$.ajax({
			url:'generate-code.php',
			type:'POST',
			data: {formData:$("#unique_id").val(), ecc:"H", size:"3"},
			success: function(response) {
				
				$("#response").html(response);
				
				$("#genQR").html("Click to Insert");
				drawQRCode(response) 
			},
		 });
}


const canvas = document.getElementById('canvas')
const ctx = canvas.getContext('2d')
const state = document.getElementById('state')
const slogan = document.getElementById('slogan')
const plate = document.getElementById('plate')
const downloadBtn = document.getElementById('download-btn')




const image = new Image()
image.src = '/img/plate.png'
image.onload = function () {
	var data = $("#response").html();
	drawQRCode(data);
	drawImage();
	
}


function drawQRCode(data) {

	const qr = new Image()
	qr.src = data
	ctx.drawImage(qr,  550, 20)
}





function drawImage() {
	// ctx.clearRect(0, 0, canvas.width, canvas.height)
	// var ratio = image.naturalWidth / image.naturalHeight;
	// var width = canvas.width;
	// var height = width / ratio;

	ctx.drawImage(image, 0, 0, canvas.width, canvas.height)
	ctx.textAlign = 'center'
	ctx.font = 'bold 30px Verdana'
	ctx.fillStyle = ' #000'
	ctx.fillText(state.value, canvas.width/2, 60)
	ctx.font = '20px Montserrat'
	ctx.fillStyle = ' #000'
	ctx.fillText(slogan.value, canvas.width/2, 90)
	ctx.font = 'bold 80px Trebuchet MS'
	ctx.fillStyle = ' #2343fd'
	ctx.fillText(plate.value, canvas.width/2, 200)
}

state.addEventListener('change', function () {
	drawImage()
})
slogan.addEventListener('input', function () {
	drawImage()
})

plate.addEventListener('input', function () {
	drawImage()
})



downloadBtn.addEventListener('click', function () {

	// const dataUrl = document.getElementById('canvas').toDataURL('image/jpeg', 1.0); 

	downloadBtn.href = canvas.toDataURL('image/jpg', 1.0)
	downloadBtn.download = 'PlateNumber-'+plate.value


	
})


