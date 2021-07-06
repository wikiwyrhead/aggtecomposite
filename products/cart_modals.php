<style>

/**
 * ==============================================
 * Dot Flashing
 * ==============================================
 */
#idLoading {
    display: none;
}
.dot-flashing {
    bottom: 20px;
  position: relative;
  width: 10px;
  height: 10px;
  border-radius: 5px;
  background-color: #2ba52b;
  color: #2ba52b;
  animation: dotFlashing 1s infinite linear alternate;
  animation-delay: .5s;
}

.dot-flashing::before, .dot-flashing::after {
  content: '';
  display: inline-block;
  position: absolute;
  top: 0;
}

.dot-flashing::before {
  left: -15px;
  width: 10px;
  height: 10px;
  border-radius: 5px;
  background-color: #2ba52b;
  color: #2ba52b;
  animation: dotFlashing 1s infinite alternate;
  animation-delay: 0s;
}

.dot-flashing::after {
  left: 15px;
  width: 10px;
  height: 10px;
  border-radius: 5px;
  background-color: #2ba52b;
  color: #2ba52b;
  animation: dotFlashing 1s infinite alternate;
  animation-delay: 1s;
}

@keyframes dotFlashing {
  0% {
    background-color: #2ba52b;
  }
  50%,
  100% {
    background-color: #d6f5d6;
  }
}

.buttonProdView {
    background-color: #2ba52b;
    border: none;
    color: white;
    padding: 15px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 0px 2px;
    cursor: pointer;
    transition: all ease .3s;
}
.buttonProdView:hover {
    background-color: #228b22;
    border: none;
    color: #eee;
}
.formHandler{
    width: 95%;
    line-height: 5px;
    position: relative;
    margin: auto;
}
.formHandler input, label {
    margin-top: 10px;
}
.checkBoxes {
    margin-left: 20px;
}
.fileRow {
    width: 100%;
    margin-left: 20px;
}
.btn_remove {
    position: relative;
    bottom: 30px;
    left: -5px;
    color: #fff;
    background-color: red;
    height: 17px;
    width: 15px;
}
</style>
<!-- Checkbox Function -->
<script>
function loading() {
    document.getElementById("idLoading").style.display = "block";
}

function chbx() {
    if(document.getElementById('id3').checked == true) {
        document.getElementById('id3').checked = false;
    }
}
function chbx1() {
    if(document.getElementById('id3').checked == true) {
        document.getElementById('id3').checked = false;
    }
}
function chbx2() {
    if(document.getElementById('id1').checked == true || document.getElementById('id2').checked == true){
    document.getElementById('id1').checked = false;
    document.getElementById('id2').checked = false;
}
}
</script>
<!-- product quotation modal -->
        <div class="modal fade bs-example-modal-md-terms prodModal" tabindex="-1" role="dialog" id="displayModal">
        <div class="modal-dialog modal-md-terms" role="document">
          <div class="modal-content">
            <div class="top_links"><a href="#" data-dismiss="modal" aria-label="Close">Close (X)</a></div>
            <h2 class="modal-title">PRODUCT QUOTATION</h2>
                <div class="privacy-content">
                <div class="box-body">
                <table class="table table-bordered">
		        <thead>
		        	<th style="text-align: center;">Delete Product</th>
		        	<th style="text-align: center;">Photo</th>
		        	<th style="text-align: center;">Name</th>
		        </thead>
		    <tbody id="tbody">
		    </tbody>
</table>
	        			</div>
                    <div class="formHandler">
                    <form action="quote.php" id="quoteForm" method="POST" id="xs-contact-form" class="xs-form" enctype="multipart/form-data">
                                    <input type="text" class="form-control" name="clientName" placeholder="Your name" id="xs_contact_name" required>
                                    <input type="email" class="form-control invaild" name="email" placeholder="Your email" id="xs_contact_email" required>
                                    <input type="tel" class="form-control" name="phone_number" placeholder="Your phone number" id="xs_contact_phone" required>
                                    <label>Request Phone Call?:</label>
                                    <input type="radio" value="Yes" name="call" required> Yes
                                    <input type="radio" value="No" name="call"> No
                                    <br>
                                    <label>Installation Type:</label>
                                    <input type="checkbox" name="check[]" value="Cladding" id="id1" onclick="chbx()" /> Cladding
                                    <input type="checkbox" name="check[]" value="Decking" id="id2" onclick="chbx1()" /> Decking
                                    <input type="checkbox" name="check[]" value="Other" id="id3" onclick="chbx2()" /> Other
                                    <br><br>
                                    <label for="fileInput">Project Plan (Optional): </label><br>
                                    <div id="dynamic_field"></div><br><br>
                                    <a href="#dynamic_field" id="addFile" class="add">Add File <b>(.pdf, .jpg, .png files only)</b></a><br><br><br>
                            <textarea name="rq-message" placeholder="Message" id="x_contact_massage" class="form-control message-box" cols="30" rows="10"></textarea>
                            <div id="idLoading"><span style="color: #2ba52b; font-weight: bold;">Sending</span><div style="margin-left: 20px;" class="dot-flashing"></div></div>
                        </div>
                        
                    </div>
                  <input value="Confirm" name="submit" type="submit" class="tg-theme-btn tg-theme-btn-lg" onclick="loading()">
                  </form>
            </div>
        </div>
    </div>
<!--product quotation modal-->
<?php include 'includes/scripts.php'; ?>
<script>
var total = 0;
$(function(){
	$(document).on('click', '.cart_delete', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		$.ajax({
			type: 'POST',
			url: 'cart_delete.php',
			data: {id:id},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});
	getDetails();
	getTotal();

});

function getDetails(){
	$.ajax({
		type: 'POST',
		url: 'cart_details.php',
		dataType: 'json',
		success: function(response){
			$('#tbody').html(response);
			getCart();
		}
	});
}

function getTotal(){
	$.ajax({
		type: 'POST',
		url: 'cart_total.php',
		dataType: 'json',
		success:function(response){
			total = response;
		}
	});
}

</script>

<script>
$(document).ready(function() {
  var i = 1;
  $('#addFile').click(function() {
    if (i <= 3) {
      $('#dynamic_field').append('<div id="row' + i + '"><input type="file" accept="application/pdf,image/jpg,image/png,image/jpeg" name="attach' + i + '"><button title="Remove" type="button" class="btn_remove" name="remove" id="' + i + '">X</button></div>')
      i++;
    }
  });
  $(document).on('click', '.btn_remove', function() {
    var button_id = $(this).attr("id");
    i--;
    $('#row' + button_id + '').remove();
  });
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
