<!DOCTYPE html>
<html>
<head>
  <title>Upadte data with BT-4 Modal</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'links.php'; ?>
 <link rel="stylesheet" href="style.css">
 
  <style>
    *{margin: 0; padding:0; box-sizing: border-box; font-family: 'Josefin Sans', sans-serif;}

html{
  scroll-behavior: smooth;
}
       .carousel-inner img {
    width: 100%;
    height: 70vh;
  }
   .bg-img{
    background-image: url('images/pik1.jpg');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-position: center;
    border-radius: 0;
    max-width: 100%;
    height: 70vh;
   




 }
   #mybtn{

    display: none;
    position: fixed;
    bottom: 20px;
    right: 40px;
    z-index: 99;
    border:none;
    color: #212121;
    background-color: #b2dfdb;
    padding: 17px;
    border-radius: 10px;
    cursor: pointer;
}
}
#mybtn:hover{
  background-color: red; 
}
  </style>
</head>
<body id="index.php" class="bg-light">



<section class="pt-5">
	<h1><textcenter>Saini Timber</textcenter></h1>
  	<div class="container">
   	<div class="table-wrapper">
		<div class="table-title">
			<div class="row">
				<div class="col-sm-6">
					<h2>Buyer Entry Sytem</b></h2>
				</div>
				<div class="col-sm-6">
					<button class="btn btn-warning" onClick="window.location.reload();"><i class="fa fa-refresh"></i></button>
					<button type="button" name="" id="" class="btn btn-warning" data-toggle="modal" data-target="#addmodal">Add Buyer</button>
				</div>
			</div>
		</div>
      <div class="table table-striped table-responsive table-hover" style="width:100%;">
    <table class="table table-bordered text-center">
      <thead>
        <th>Customer-id</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Bamboo Length</th>
        <th>Quantity</th>
        <th>Amount</th>
        <th>recived</th>
        <th>pending</th>
        <th> Date</th>
        <th>Due Date</th>
        <th colspan="2">Activity</th>
      </thead>
      <tbody>
        <?php
         include 'connection.php'; 
     
        
                                               if(isset($_GET['page'])){
                                                 $page = $_GET['page'];

                                                     }else{

                                                     $page = 1;

                                                     }
                                                   $num_per_page = 10;
                                                   $start_from = ($page-1)*10;
               

         $selectquery = "select * from tb_updatemodal order by id desc limit $start_from,$num_per_page ";
         $actualquery = mysqli_query($con,$selectquery);
         

         while ($result = mysqli_fetch_array($actualquery)) {
            ?>
            <tr>
			<?php
/*
<td><?php echo $result['id']; ?></td> 
*/
?>
        <td><?php echo $result['id']; ?></td>   	
				<td><?php echo $result['name']; ?></td>
				<td><?php echo $result['contact']; ?></td>
				<td><?php echo $result['email']; ?></td>
        <td><?php echo $result['blength']; ?></td>
				<td><?php echo $result['qty']; ?></td>
				<td><?php echo $result['amount']; ?></td>
        <td><?php echo $result['recived']; ?></td>
        <td><?php echo $result['pending']; ?></td>
				<td><?php echo $result['date']; ?></td>
                <td><?php echo $result['duedate']; ?></td>
             
             
              <td> <button type="button" class="btn btn-outline-success editbtn" title="edit"><i class="fa fa-edit"></i></button> </td>
              <td> <button type="button" class="btn btn-outline-danger deletebtn"><i class="fa fa-remove"></i></button> </td>
                <!--  -->
            </tr>
            <?php
         }
         ?>
      </tbody>
    </table>
    <?php
      
     $paginationquery = "select * from tb_updatemodal ";
     $page_query = mysqli_query($con,$paginationquery);
     $num_records = mysqli_num_rows($page_query);

     $total_pages = ceil($num_records/$num_per_page);
     
     if($page>1){

      echo " <a href='index.php?page= ".($page-1)." ' class='btn btn-outline-success'>Previous</a> ";
     }

     for($i=1;$i<$num_records;$i++)
     {
      echo " <a href='index.php?page= ".$i." ' class='btn btn-outline-dark' style=''> $i</a> ";
     }

     if($i>$page){

      echo " <a href='index.php?page= ".($page+1)." ' class='btn btn-outline-success'>Next</a> ";
     }

    ?>
  </div>
  </div>
  <!--   /********************************ADD-MODAL-START******************************/ -->

 <!-- The Modal -->
  <div class="modal fade" id="addmodal">
    <div class="modal-dialog">
      	<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Insert Details</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
        
        <!-- Modal body -->
			<div class="modal-body">

				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" >
					<div class="row">
						<div class="col col-lg-12 col-md-12 col-12  form-group">
						<label class="font-weight-bold">Name:</label>
						<input type="text" class="form-control" id="" placeholder="Name" name="name"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);" required>
					</div>
					<div class="col col-lg-12 col-md-12 col-12  form-group">
						<label class="font-weight-bold">Contact:</label>
						<input type="text" class="form-control" placeholder="contact" id="" name="contact"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);" minlength="8" maxlength="10">
						</div>
					</div>
					<div class="row">
						<div class="col col-lg-12 col-md-12 col-12  form-group">
						<label class="font-weight-bold">Email:</label>
						<input type="email" class="form-control" placeholder="Email" id="" name="email"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);" required>
						</div>
						<div class="col col-lg-12 col-md-12 col-12  form-group">
						<!-- <label class="font-weight-bold">Bamboo Length:</label>
						<input type="text" class="form-control" placeholder="8 feet to 20 feet" id="" name="blength"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);" required> -->
             <div class="row">

        <div class="col col-lg-6 col-md-6 col-12  form-group">
          <label>Length in Feet: </label>
          <select class="form-control" name="op1">
          <option>Select</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          <option>13</option>
          <option>14</option>
          <option>15</option>
          <option>16</option>
          <option>17</option>
          <option>18</option>
          <option>19</option>
          <option>20</option>
          </select>
        </div>
         <div class="col col-lg-6 col-md-6 col-12  form-group">
           <label>Length in Feet: </label>
          <select class="form-control" name="op2">
          <option>Select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          
          </select>
        </div>
      </div>
						</div>
					</div>
					<div class="row">
						<div class="col col-lg-12 col-md-12 col-12  form-group">
						<label class="font-weight-bold">Bamboo Qty:</label>
						<input type="text" class="form-control" placeholder="Qty" id="" name="qty"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);" required>
						</div>
						<div class="col col-lg-12 col-md-12 col-12  form-group">
						<label class="font-weight-bold">Amount:</label>
						<input type="text" class="form-control" placeholder="00,000" id="" name="amount"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);" required>
						</div>
            <div class="col col-lg-12 col-md-12 col-12  form-group">
            <label class="font-weight-bold">Recived:</label>
            <input type="text" class="form-control" placeholder="00,000" id="" name="recived"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);">
            </div>
						
					</div>
					<div class="row">
						<div class="col col-lg-12 col-md-12 col-12  form-group">
						<label class="font-weight-bold">Date:</label>
						<input type="date" class="form-control" placeholder="DD-MM-YYYY" id="" name="date"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);" required>
						</div>
                        <!-- <div class="col col-lg-12 col-md-12 col-12  form-group" style="">
						<label class="font-weight-bold">Due Date:</label>
						<input type="text" class="form-control" placeholder="DD-MM-YYYY" id="" name="duedate"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);">
						</div> -->
						<div class="col col-lg-12 col-md-12 col-12  form-group">
						<label class="font-weight-bold">Comment:</label>
						<textarea name="comment" id="" class="form-control" style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);" required></textarea>  
						</div>
						
					</div>
				
					<div class="row text-center mt-3">
						<div class="col form-group">
						<button type="submit" class="btn btn-outline-success btn-lg" name="submit" style="border-radius: 5px; width: 170px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3); height: 40px !important;">Register <i class="fa fa-arrow-right"></i></button>
					</div>
				</div>
				</form>
			</div>
        
    	<?php include 'insert.php'; ?>
        <!-- Modal footer -->
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div> -->
        
      	</div>
    </div>
  </div>
<!--   /********************************ADD-MODAL-END******************************/ -->
<!--   /********************************EDIT-MODAL-START******************************/ -->

 <!-- The Modal -->
  <div class="modal fade" id="editmodal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="update.php" method="POST" >
          <input type="hidden" id="update_id" name="update_id">
  <div class="row">
    <div class="col col-lg-12 col-md-12 col-12  form-group">
      <label class="font-weight-bold">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="name" name="name"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);" required>
    </div>
    <div class="col col-lg-12 col-md-12 col-12  form-group">
      <label class="font-weight-bold">Contact:</label>
      <input type="text" class="form-control" placeholder="contact" id="contact" name="contact"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);" minlength="8" maxlength="10">
    </div>
  </div>
  <div class="row">
     <div class="col col-lg-12 col-md-12 col-12  form-group">
      <label class="font-weight-bold">Email:</label>
      <input type="email" class="form-control" placeholder="Email" id="email" name="email"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);" required>
    </div>
     <div class="col col-lg-12 col-md-12 col-12  form-group">
      <label class="font-weight-bold">Bamboo Length:</label>
      <input type="text" class="form-control" placeholder="Bamboo Length" id="blength" name="blength"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);" required>
    </div>
    <div class="col col-lg-12 col-md-12 col-12  form-group">
      <label class="font-weight-bold">Quantity:</label>
    <input type="text" class="form-control" placeholder="qty" id="qty" name="qty"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);" required>
    </div>
    
  </div>
  <div class="row">
     <div class="col col-lg-12 col-md-12 col-12  form-group">
      <label class="font-weight-bold">Amount:</label>
      <input type="text" class="form-control" placeholder="amount" id="amount" name="amount"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);" required>
    </div>
    <div class="col col-lg-12 col-md-12 col-12  form-group">
            <label class="font-weight-bold">Recived:</label>
            <input type="text" class="form-control" placeholder="00,000" id="recived" name="recived"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);" readonly>
            </div>
            <div class="col col-lg-12 col-md-12 col-12  form-group">
            <label class="font-weight-bold">New Recived:</label>
            <input type="text" class="form-control" placeholder="00,000" id="" name="newrecived"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);">
            </div>
            <div class="col col-lg-12 col-md-12 col-12  form-group">
            <label class="font-weight-bold">Pending:</label>
            <input type="text" class="form-control" placeholder="00,000" id="pending" name="pending"style="border-radius: 5px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3);" readonly="">
            </div>

  </div>
  <div class="row text-center mt-3">
    <div class="col form-group">
    <button type="submit" class="btn btn-outline-success btn-lg " name="submit" style="border-radius: 5px; width: 170px;box-shadow: 0 0 2px 0 rgba(00,0,0,0.3); height: 40px !important;">Update <i class="fa fa-arrow-right"></i></button>
  </div>
  </div>
</form>
        </div>
        
        <!-- Modal footer -->
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div> -->
        
      </div>
    </div>
  </div>
<!--   /********************************EDIT-MODAL-END******************************/ -->




<!--   /********************************DELETE-MODAL-START******************************/ -->

 <!-- The Modal -->
  <div class="modal fade" id="deletemodal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Delete</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="delete.php" method="POST" >
          <input type="hidden" id="delete_id" name="delete_id">
            
            <h5>Are You Sure You Want To Delete This Data ?</h5>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-warning" name="delete">Yes! Delete It</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<!--   /********************************DELETE-MODAL-END******************************/ -->






</section>
 <footer class=" " style="background-color: #b2dfdb; margin-top: 30vh;">
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <!-- <div class="pt-2">
       <button class="btn  text-center font-weight-bold btn-lg text-dark  "style="border-radius: 50%;box-shadow: 0 0 20px 0 rgba(00,0,0,0.3);background-color: #A9D33A;"> Request <br> a <br>Quote</button>
      </div> -->
    </div>
    <div class="col-lg-4 col-md-4 col-12 p-2">
      <div class="text-center font-weight-bold text-dark pt-3">
  <p>All Rights Reserved&copy;2020</p>
</div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
       <i class="fa fa-arrow-up" onclick="topfunction()" id="mybtn" style="box-shadow: 0 0 20px 0 rgba(00,0,0,0.3);"></i>
    </div>
  </div>
</div>
</footer>
 
</body>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js" integrity="sha512-7yA/d79yIhHPvcrSiB8S/7TyX0OxlccU8F/kuB8mHYjLlF1MInPbEohpoqfz0AILoq5hoD7lELZAYYHbyeEjag==" crossorigin="anonymous"></script>
 -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- /********* for delete /***************** -->
<script>
  $(document).ready(function(){
    $('.deletebtn').on('click',function(){
        $('#deletemodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
          return $(this).text();
         
         get();
        }); 

        console.log(data);
        $('#delete_id').val(data[0]);
     
    });
  });
</script>
<!-- /****************for edit/************** -->
<script>
  $(document).ready(function(){
    $('.editbtn').on('click',function(){
        $('#editmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
          return $(this).text();
         
         get();
        }); 

        console.log(data);
        $('#update_id').val(data[0]);
        $('#name').val(data[1]);
        $('#contact').val(data[2]);
        $('#email').val(data[3]);
        $('#blength').val(data[4]);
        $('#qty').val(data[5]);
        $('#amount').val(data[6]);
        $('#recived').val(data[7]);
        $('#pending').val(data[8]);
    });
  });
</script>
  <script>
    mybutton = document.getElementById("mybtn");
    
    window.onscroll = function(){scrollfunction()};


    function scrollfunction(){
      if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30){
          mybutton.style.display = "block";
      }else{
         mybutton.style.display = "none";
      }
    }

    function topfunction(){
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0; 
    }
  </script>

</html>