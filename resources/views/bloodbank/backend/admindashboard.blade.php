


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Blood Donetion</title>
	
	
	<style>

	  *{
	  
	  padding:0;
	  margin:0;
	  outline:0;	  
	  
	  }
	  
	  body{
	     
		 font-family:tahoma	  
	  
	  }

	  .coverheader{
         
         background:gray;
         overflow:hidden;

	  }

	  .logo{

          overflow:hidden;
          float:left;
          width:60%;

	  }

	  .content{

           overflow:hidden;
          float:left;
          width:20%;

	  }

	  td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}


	  
   
   
   
	</style>
</head>
<body>





<!-- Header start -->

<div class="mainheader">
    <div class="coverheader">

          <div class="logo" style="padding-top:10px;padding-bottom:10px;">
             <span style="color:white;margin-left:100px">Admin Dashboard</span>
          </div>


           <div class="content" style="padding-top:10px;padding-bottom:10px;margin-left:10px">
               <a style="text-decoration:none" href=""><span style="color:white;margin-right:10px">{{$name}}</span></a>
               <a style="text-decoration:none" href="{{URL::to('/log_out')}}"> <span style="color:white">Logout</span></a>
          </div>

    </div>
</div>

<!-- Header End -->



<!-- Table start -->

 <div class="table" style="margin:10px auto">

<p style="margin-left:20px;font-size:20px">All User</p>

<table style="width:100%">
  <tr>
    <th>Sl</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Blood Graoup</th>
    <th>Age</th>
    <th>District</th>
    <th>Status</th>
    <th>Action</th>
  </tr>


   @foreach($all_doner as $v_show)

  <tr>
    <td>{{$v_show->doner_id}}</td>
    <td>{{$v_show->doner_name}}</td>
    <td>{{$v_show->doner_email}}</td>
    <td>{{$v_show->doner_phn}}</td>
    <td>{{$v_show->doner_blood_group}}</td>

    <td>{{$v_show->doner_age}}</td>
    <td>{{$v_show->doner_district}}</td>
    

    <td>
        
         @if($v_show->doner_status==1)
        <button style="background:green;padding:5px 7px 5px 7px;color:white;margin-left:60px">Success</button>

    	 @else
    	   
    	    <a href="{{URL::to('/doner_status_success/'.$v_show->doner_id)}}"><button type="submit" style="background:red;padding:5px 7px 5px 7px;color:white;margin-left:60px">Pending</button></a>
         @endif


    </td>


      <td>
      	
      	     <a href="{{URL::to('/blood_doner_delete/'.$v_show->doner_id)}}"><button style="background:green;padding:5px 7px 5px 7px;color:white;margin-left:30px">Delete</button></a>

      </td>


  </tr>

         @endforeach
</table>
























 </div>
<!-- Table End -->



<!-- Start Footer area -->

<div style="margin-top:700px;background:black;height:150px" class="Footer-area">
  <div style="" class="footer-area-coverage">
      
	  <center>
	 <p style="font-size:25px;font-weight:bold;padding-top:20px;color:white">Blood Donation</p>
	 <p style="color:white">Copyright @2022 Blood Bank , Design by Umme Maktum</p>
	  </center>
 
   </div>
</div>



		
			 	
</body>
</html>