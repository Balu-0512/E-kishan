<?php
include("developers.php");
?>
<!DOCTYPE html>
<html>
<head>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
</head>
 <style type="text/css">
  .table_table-bordered
  {
    border-collapse: collapse;
    margin: 20px 0;
    margin-left: auto;
    margin-right: auto;
/*    margin-left: 70%;*/
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 300px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
   }
    
    .table_table-bordered thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
   .table_table-bordered th,
.table_table-bordered td {
    padding: 12px 20px;
     margin-left: 40px;
}
   .table_table-bordered tbody tr {

    border-bottom: 1px solid #dddddd;
}

.table_table-bordered tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;

}

.table_table-bordered tbody tr:last-of-type {
    border-bottom: 2px solid #009879;

}.table_table-bordered tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
h2{
  font-size: 28px;
  padding: 40px;
/*  margin-left: 40%;*/
  font-weight: bold;
  color: #334;
  text-align: center;
}
.table-responsive {
  margin-left: 40px;
}


  </style> 
  
  <style type="text/css">
    .table_table-bordered{
      margin-left: auto;
      margin-right: auto;
    }
  </style>
<body>
  
  <!-- <img src="table.jpg" id="image"> -->
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <h2>వ్యవసాయ పరికరాల అద్దెలు అవసరమైన వ్యక్తుల జాబితా</h2>
      <table class="table_table-bordered">
       <thead><tr>
         <th>Full Name</th>
         <!-- <th>Gender</th> -->
         <!-- <th>Email</th> -->
         <th>Mobile Number</th>
         <th>Equipment</th>
         <th>Date</th>
         <th>Message</th>
    </thead>
    <tbody>
   <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?> 
      <tr>    
      <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['mobile']??''; ?></td>
      <td><?php echo $data['equipment']??''; ?></td>
      <td><?php echo $data['date']??''; ?></td>
      <td><?php echo $data['message']??''; ?></td>  
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>