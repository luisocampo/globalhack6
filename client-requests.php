<!DOCTYPE html>
<html lang="en">
<head>
  <title>Potential Clients Inbox</title>
  <meta name="description" content="">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<?php include("header-html.php") ?> 
 
  </head>
<body>

<?php include("header.php") ?>

<div class="container">
  <h1>Client Requests</h1>
  <p>This is a list of clients hoping to seek shelter.</p> 
</div>

<div class="container">
	 
 
   <div class="row">
	 <div class="col-md-12">
	 
	  <table class="table table-striped">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>SSN</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Veteran</th>
        <th>Ethnicity</th>
        <th>Details</th>
        <th>Decision</th>
      </tr>
    </thead>

     
	 <tr>
        <td>Shaun</td>
        <td>Smith</td>
        <td>*****0077</td>
        <td>10/21/1973</td>
        <td>M</td>
        <td>Y</td>
        <td>Black</td>
        <td><a class="btn btn-primary" href="details-request.php">Details</a></td>
         <td><a class="btn btn-success" href="client-requestsfix.php">Accept</a></td>
         <td><a class="btn btn-danger" href="client-requestsfix.php">Decline</a></td>
      </tr>
	 
      
    </tbody>
  </table>
	 </div>
   </div>
   
   
	 <div class="row">
	   <div class="col-md-12 text-right">
	   <ul class="pager">
  <li><a href="#">Previous</a></li>
  <li><a href="#">Next</a></li>
</ul>
	   </div>
	 </div>
	 
 </div> 

<?php include("footer.php") ?> 
</body>
</html>