
	const paymentForm = document.getElementById('paymentForm');

paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {

  e.preventDefault();

  var  unit = document.getElementById("unit").value;
    var amount =  document.getElementById("amount").value;
    var ref = Math.floor((Math.random() * 1000000000) + 1);

  let handler = PaystackPop.setup({

    key: 'pk_test_48cb8d0a54686060af95dced99fec07046397e1e', // Replace with your public key

    email: document.getElementById("email").value,
    amount: amount * 100,

   

    onClose: function(){

      alert('Window closed.');

    },

    callback: function(response){

        swal.fire({
              icon : 'success',
                 type : 'success',
                 title : 'Success',
                 text : 'Transaction Successfully',
                 confirmButtonColor: '#006600',
             }).then(function() {
                window.open("success.php?unit="+unit+"&amount="+amount+"&ref="+ref+"","_self");
            });

    }

  });

  handler.openIframe();

}