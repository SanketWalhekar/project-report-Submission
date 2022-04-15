<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Project Report Details </title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body >
@if(session('view'))
  <h4 class="alert alert-danger" >{{session('view')}}</h4>

@endif
@if(session('show'))
  <h4 class="alert alert-danger" >{{session('show')}}</h4>

@endif
@if(session('status'))
  <h4 class="alert alert-success" >{{session('status')}}</h4>

@endif

<div class="heading">
	<h2>
		<center><b><u>Project Report Submition Form</u></b></center>
		
	</h2>
</div>

<div class="form1 fw-bold fs-5">
	<form method="POST" action="project" enctype="multipart/form-data">
        @csrf
		
		<div class="row">
			<div class="col">
				<label class="required">First Name</label>
				<input type="text" class="form-control" placeholder="First name" aria-label="First name" name="name1" required>
			</div>
			<div class="col">
				<label class="required">Last Name</label>
				<input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lastname" required >
			</div>
		</div>
		<div class="col" style="margin-top: 5px">
    		<label for="inputEmail4" class="form-label"><label class="required">Email</label></label>
    		<input type="email" class="form-control" id="inputEmail4" placeholder="xyz@gmail.com" name="email" required>
  		</div>
  		<div class="col" style="margin-top: 5px">
    		<label for="inputEmail4" class="form-label"><label class="required">Project Title</label></label>
    		<input type="Text" class="form-control" id="inputEmail4"  name="Title" required>
  		</div>
  		<div class="mb-3" style="margin-top: 5px ">
  			<label for="exampleFormControlTextarea1" class="form-label"><label class="required">Brief Introduction About Project</label></label>
  			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="intro" required></textarea>
		</div>
		<div class="mb-3" >
  			<label for="formFile" class="form-label"><label class="required">Upload Project Report(PDF)</label></label>
  			<input class="form-control" type="file" id="formFile" name="pdf" required>
		</div>
		<div class="mb-3">
  			<label for="formFile" class="form-label"><label class="required">Upload Project PPT</label></label>
  			<input class="form-control" type="file" id="formFile" name="ppt" required>
		</div>
		<label for="basic-url" class="form-label"><label class="required">Upload Your Github URL</label></label>
		<div class="input-group mb-3">
			<input type="url" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="url" required>
		</div>
		<div class="col-12" >
    		<center>
				<button class="btn btn-primary" type="submit" name="submit">Submit form</button>
			</center>
  		</div>
	</div>
</form>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>