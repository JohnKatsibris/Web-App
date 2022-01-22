<!DOCTYPE html>
<html>
<head>
	<title>Report Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<style>
		.logo_area{width: 300px; height:  300px:; position:  absolute; left: 34%; top:  -7px; content: ""}
		.button {
	display: flex;
    border: none;
    outline: none;
    border-radius: 5px;
    overflow: hidden;
    padding: 0;
	background: #9932CC;
	cursor: pointer;
	font-size: 20px;
	position: absolute;
	top: 1320px;
	right: 5px;
}

body {
  background-image: url("network.jpg");
  margin: 0; 
  font-family: $Arial, Helvetica, sans-serif;;
  font-size: 20px;
  font-weight: bold;
  color: white;
  text-align: left; 
  background-color: $body-bg;

}

.form-control {
  display: block;
  width: 100%;
  font-size: 1rem;
}

.button:hover {
  background: #483D8B;
}

.button:active {
  background: #483D8B;
}

.button__text {
	color: #0056b3;
}
.button__icon {
  display: inline-flex;
  align-items: center;
  padding: 0 24px;
  color: #fff;
  height: 100%;
}

.button__icon {
  font-size: 1.5em;
  background: rgba(0, 0, 0, 0.08);
}

.Green
{
	background-color: green;
	color: black;
}

.Red
{
	background-color: red;
	color: black;
}

	</style>
</head>
     
<script type="text/javascript">
	$(document).ready(function(){
		//use button 
	$("#btnSubmit").click(function(){
		// get all input
		var Vessel=$("#Vessel").val();
		var Email=$("#Email").val();
		var e_vessel=$("#e_vessel").val();
		var Evonews=$("#Evonews").val();
		var Outlook=$("#Outlook").val();
		var PMS=$("#PMS").val();
		var Findaport=$("#Findaport").val();
		var Hydrus=$("#Hydrus").val();
		var Voyager=$("#Voyager").val();
		var Loading_pc=$("#Loading_pc").val();
		var message=$("#message").val();
              //call ajax
		$.post("./submitForm.php" ,{
			Vessel:Vessel,
			Email:Email,
			e_vessel:e_vessel,
			Evonews:Evonews,
			Outlook:Outlook,
			PMS:PMS,
			Findaport:Findaport,
			Hydrus:Hydrus,
			Voyager:Voyager,
			Loading_pc:Loading_pc,
			message:message
		},
		function(data,status){
                //check response
			 if(data==="success"){

			 	swal({
  title: "Successfully submitted!",
  text: "",
  icon: "success",
  button: "OK",
});
			 	$("#response").html("<div class='alert alert-info'>"+data+"</div>");
			 }else {
			 	$("#response").html("<div class='alert alert-warning'>"+data+"</div>");
                clearField();
			 };
		});
    });
    });
        //clear the all field

    function clearField(){
    	$("#Vessel").val("");
		$("#Email").val("");
		$("#e_vessel").val("");
		$("#Evonews").val("");
		$("#Outlook").val("");
		$("#PMS").val("");
		$("#Findaport").val("");
		$("#Hydrus").val("");
		$("#Voyager").val("");
		$("#Loading_pc").val("");
		$("#message").val("");
    }

     $(document).ready(function () {

        $("#form").submit(function (e) {

            e.preventDefault();

            //disable the submit button
            $("#btnSubmit").attr("disabled", true);

            return true;

        });
    });
     $(document).ready(function() {
     	$('#isChecked').change (function(){
     		if($(this).prop('checked')) {
     			$('#btnSubmit').show();
     		} else {
     			$('#btnSubmit').hide();
     		}
     	});
     });
</script>
	
<body class="bg-light">
	<div class="container">
		<div class="logo_area">
			<a href=""><img src="" alt=""></a>
	</div>
<div class="container" style="margin:0 auto;margin-top:17%;padding:12px; width: 50%; ">
	<body class="container">
		<form class="was-validated">
		<div class="form-horizontal">
		<div class="form-group">
		<label>Choose the name of Vessel:</label>
		<select class="form-control" id="Vessel" required> 
						<option selected disabled hidden>Choose an Option</option>
                        <option value="Cape Kennedy">Cape Kennedy</option>
                        <option value="Cape Araxos">Cape Araxos</option>
                        <option value="Cape Fortius">Cape Fortius</option>
                        <option value="Cape Corfu">Cape Corfu</option>
                        <option value="Cape Kasos">Cape Kasos</option>
                        <option value="Cape Syros">Cape Syros</option>
                        <option value="Cape Monterey">Cape Monterey</option>
                        <option value="Cape Orient">Cape Orient</option>
                        <option value="Cape Quest">Cape Quest</option>
                        <option value="Cape Hellas">Cape Hellas</option>
                        <option value="Cape Pioneer">Cape Pioneer</option>
                        <option value="Cape Apollo">Cape Apollo</option>
                        <option value="Cape Altius">Cape Altius</option>
                        <option value="Cape Citius">Cape Citius</option>
                        <option value="Cape Race">Cape Race</option>
        </select>
    <div class="invalid-feedback">Choose an Option</div>
</div></div>
        <div class="form-group">
		<div class="form-group">
		<label>Choose your Email:</label>
		<select class="form-control" id="Email" required>
			
                        <option selected disabled hidden>Choose an option</option>
                        <option value="kennedy@cape.gr">kennedy@cape.gr</option>
                        <option value="araxos@cape.gr">araxos@cape.gr</option>
                        <option value="fortius@cape.gr">fortius@cape.gr</option>
                        <option value="corfu@cape.gr">corfu@cape.gr</option>
                        <option value="kasos@cape.gr">kasos@cape.gr</option>
                        <option value="syros@cape.gr">syros@cape.gr</option>
                        <option value="monterey@cape.gr">monterey@cape.gr</option>
                        <option value="orient@cape.gr">orient@cape.gr</option>
                        <option value="quest@cape.gr">quest@cape.gr</option>
                        <option value="hellas@cape.gr">hellas@cape.gr</option>
                        <option value="pioneer@cape.gr">pioneer@cape.gr</option>
                        <option value="apollo@cape.gr">apollo@cape.gr</option>
                        <option value="altius@cape.gr">altius@cape.gr</option>
                        <option value="citius@cape.gr">citius@cape.gr</option>
                        <option value="race@cape.gr">race@cape.gr</option>
        </select>
    <div class="invalid-feedback">Choose an Option</div>
</div>
        
	    <div class="form-group">
		<label>Application E-Vessel:</label>
		<select class="form-control" id="e_vessel" required>
                        <option selected disabled hidden>Choose an option</option>
                        <option class="Green">Work</option>
                        <option class="Red">Not Working</option>
        </select>
        <div class="invalid-feedback">Choose an Option</div>
		</div>
		
        <div class="form-group">
		<label>Application Evonews:</label>
		<select class="form-control" id="Evonews" required>
                        <option selected disabled hidden>Choose an option</option>
                        <option class="Green">Work</option>
                        <option class="Red">Not Working</option>
        </select>
        <div class="invalid-feedback">Choose an Option</div>
	    </div>
	    
		<div class="form-group">
		<label>Application Outlook:</label>
		<select class="form-control" id="Outlook" required>
						
                        <option selected disabled hidden>Choose an option</option>
                        <option class="Green">Work</option>
                        <option class="Red">Not Working</option>
        </select>
        <div class="invalid-feedback">Choose an Option</div>
	    </div>
	    
		<div class="form-group">
		<label>Application PMS:</label>
		<select class="form-control" id="PMS" required>
						
                        <option selected disabled hidden>Choose an option</option>
                        <option class="Green">Work</option>
                        <option class="Red">Not Working</option>
        </select>
        <div class="invalid-feedback">Choose an Option</div>
		</div>
		<div class="form-group">
        
		<div class="form-group">
		<label>Application FindaPort:</label>
		<select class="form-control" id="Findaport" required>
						
                        <option selected disabled hidden>Choose an option</option>
                        <option class="Green">Work</option>
                        <option class="Red">Not Working</option>
        </select>
        <div class="invalid-feedback">Choose an Option</div>
		</div>
		
		<div class="form-group">
		<label>Application Hydrus:</label>
		<select class="form-control" id="Hydrus" required>
						
                        <option selected disabled hidden>Choose an option</option>
                        <option class="Green">Work</option>
                        <option class="Red">Not Working</option>
        </select>
        <div class="invalid-feedback">Choose an Option</div>
		</div>
		
		<div class="form-group">
		<label>Application Voyager:</label>
		<select class="form-control" id="Voyager" required>
						
                        <option selected disabled hidden>Choose an option</option>
                        <option class="Green">Work</option>
                        <option class="Red">Not Working</option>
        </select>
        <div class="invalid-feedback">Choose an Option</div>
		</div>
		
		<div class="form-group">
		<label>Workstation Loading-Pc:</label>
		<select class="form-control" id="Loading_pc" required>
						
                        <option selected disabled hidden>Choose an option</option>
                        <option class="Green">Work</option>
                        <option class="Red">Not Working</option>
        </select>
        <div class="invalid-feedback">Choose an Option</div>
		</div>
		<div class="form-group">
        <label>Notes</label>
                    <textarea class="form-control" id="message" placeholder="Write here anything else you would like to add"></textarea>
                    </div>
        <div class="form-group">
        <div class="form-check">
        <input class="form-check-input is-invalid" type="checkbox" value="" id="isChecked" required>
        <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
        You must agree before submitting.
        </div>
       </div>
                </form>
                       <form id="form" action="#" method="POST">
                    	<div class="text-center">
                    	 <button class="btn btn-primary" id="btnSubmit">Submit</button>
                    	 </div>
				</form>
				<div class="text-right">
				<button class="btn btn-warning" onclick="clearField()">Clear</
				</button>
			</div>
				<span id="response"></span>
					<button type="button" class="button">
  <span class="button__text">Contact Us</span>
  <span class="button__icon">
  	<a class="mail-outline">
  	<li>
  	 <a href="https://tictac.gr/epikoinonia/" target="_blank">
  		 <i class="mail-outline"></i>
    <ion-icon name="mail-outline"></ion-icon>
  </span>
</button>
<div class="floating-text">
	 <a href="https://tictac.gr/en/contact/" target="_blank"></a>
</div>
<footer>
        <div class="footer-content">
        </div>
        <div class="footer-bottom">
            <span>Copyright &copy;2021 All Rights Reserved. Created by JK
            </span>
        </div>
    </footer>
</body>
</html>