<style>
body{width:610px;}
#frmContact {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
#frmContact div{margin-bottom: 15px}
#frmContact div label{margin-left: 5px}
.demoInputBox{padding:10px; border:#F0F0F0 1px solid; border-radius:4px;background-color:#FFF;width:50%;}
.error{background-color: #FF6600;border:#AA4502 1px solid;padding: 5px 10px;color: #FFFFFF;border-radius:4px;}
.success{background-color: #12CC1A;border:#0FA015 1px solid;padding: 5px 10px;color: #FFFFFF;border-radius:4px;}
.info{font-size:.8em;color: #FF6600;letter-spacing:2px;padding-left:5px;}
.btnAction{background-color:#2FC332;border:0;padding:10px 40px;color:#FFF;border:#F0F0F0 1px solid; border-radius:4px;}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function (e){
$("#frmContact").on('submit',(function(e){
	e.preventDefault();
	$('#loader-icon').show();
	var valid;
	valid = validateContact();
	if(valid) {
		$.ajax({
		url: "contact_mail.php",
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		$("#mail-status").html(data);
		$('#loader-icon').hide();
		},
		error: function(){}

		});
	}
}));

function validateContact() {
	var valid = true;
	$(".demoInputBox").css('background-color','');
	$(".info").html('');

	if(!$("#userName").val()) {
		$("#userName-info").html("(required)");
		$("#userName").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#userEmail").val()) {
		$("#userEmail-info").html("(required)");
		$("#userEmail").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#userEmail-info").html("(invalid)");
		$("#userEmail").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#subject").val()) {
		$("#subject-info").html("(required)");
		$("#subject").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#content").val()) {
		$("#content-info").html("(required)");
		$("#content").css('background-color','#FFFFDF');
		valid = false;
	}

	return valid;
}

});
</script>
<form id="frmContact" action="" method="post">
<div id="mail-status"></div>
<div>
<label style="padding-top:20px;">Name</label>
<span id="userName-info" class="info"></span><br/>
<input type="text" name="userName" id="userName" class="demoInputBox">
</div>
<div>
<label>Email</label>
<span id="userEmail-info" class="info"></span><br/>
<input type="text" name="userEmail" id="userEmail" class="demoInputBox">
</div>
<div>
<label>Attachment</label><br/>
<input type="file" name="attachmentFile" id="attachmentFile" class="demoInputBox">
</div>
<div>
<label>Subject</label>
<span id="subject-info" class="info"></span><br/>
<input type="text" name="subject" id="subject" class="demoInputBox">
</div>
<div>
<label>Content</label>
<span id="content-info" class="info"></span><br/>
<textarea name="content" id="content" class="demoInputBox" cols="60" rows="6"></textarea>
</div>
<div>
<input type="submit" value="Send" class="btnAction" />
</div>
</form>
<div id="loader-icon" style="display:none;"><img src="LoaderIcon.gif" /></div>
