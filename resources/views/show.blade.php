<html>
<head>
<title>Data Project</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>

</style>
<body>
    <style>
        body
        {
            background-color: #FFF8DC;
        }
        .heading
        {
            margin-top:10px;
            color: crimson;
            font-family: "Times New Roman", Times, serif;
        }
        .container
        {
            
           margin-top:30px;
            font-family: "Times New Roman", Times, serif;
        }
        .table
        {
            margin-top:0px;
        }

    </style>
<div class="heading">
	<h2 >
		<center><b><u>Project Report Submition Data</u></b></center>
	</h2>
    </div>
    <div class="container">
        
    <table class="table table-success table-striped">
 

            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Project Tiltle</th>
                <th>Brief Description About Project</th>
                <th>Project Report (PDF)</th>
                <th>Project PPT</th>
                <th>Github URL</th>
            </tr>
            @foreach($details as $list)
            <tr>
                <td>{{$list['First_Name']}}</td>
                <td>{{$list['Last_Name']}}</td>
                <td>{{$list['Email']}}</td>
                <td>{{$list['Project_Title']}}</td>
                <td>{{$list['Introduction']}}</td>
                <td><a href="{{ asset('upload/detail/'.$list->pdf) }} ">Project Report PDF</td>
                <td><a href="{{ asset('upload/detail/'.$list->ppt) }} ">Project Report PPT</td>
                <td><a href="{{$list['github']}}">Github URl</td>
            </tr>
            @endforeach
            
            </table>
    
    </div>
</body>
</html>