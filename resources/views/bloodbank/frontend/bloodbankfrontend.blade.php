


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Blood Donetion</title>
	
	<!--  
	
		<link rel="stylesheet" type="text/css" href="js/bootstrap.min.css" media="all" />
  -->

	
	<style>

	  *{
	  
	  padding:0;
	  margin:0;
	  outline:0;
	  
	  
	  }
	  
	  .covarage-header{
	  
	  background:pink;
	  overflow:hidden;
	  
	  }
	  
	  .header-logo{
	  
	     width:70%;
		 float:left;
		 	  overflow:hidden;
		 
	  
	  }
	  
	  .header-link{
	  
	 	  overflow:hidden;
		 
	  
	  } 
	  
	  body{
	     
		 font-family:tahoma
	  
	  
	  }
	  
	.slider-image{
	
	 overflow:hidden;
	}
	
	.left-area{
	
		 overflow:hidden;
	   width:50%;
		 float:left;
	}
	
	.right-area{
	
	 overflow:hidden;
	
	}
	
	.Footer-area{
	
	overflow:hidden;
	
	}
	
	.footer-area-coverage{
	
		
	overflow:hidden;
	
	}
   
   .mession-area{
   	overflow:hidden;
   
   }
   
   
   
   
	</style>
</head>
<body>




<!-- Start Header area -->

<div class="header">
   <div class="covarage-header">
    
        <div class="header-logo">
		   <p style="margin-left:170px;font-size:22px;padding-top:10px;font-weight:bold">Blood Bank</p>
		</div>
			
		<div style="padding-top:15px;padding-bottom:15px" class="header-link">
		    	
			<p style="color:black;font-weight:bold">Donate blood and save life</p>
		
		</div>

   </div>
</div>

<!-- End Header area -->


<!-- Start Banner area -->

<div class="slider-image">
  <div class="slider-image-coverage">
    
	<img style="width:100%" src="{{ asset('/image/sliderimage.jpeg')}}" alt="notfound" />
 
   </div>
</div>
<!-- End Banner area -->



<!-- Start Mession area -->
   
   <div class="mession-area" style="margin-top:40px">
     <div class="mession-area-coverage">
	  <center>
	    <p style="font-size:30px;font-weight:bold;margin-bottom:60px">Our Mession</p>
	  </center>
	    
		<div class="left-area">
		  
		  <img style="width:100%" src="{{ asset('/image/image-blod.png')}}" alt="notfound" />
		
		</div>
		
		<div class="right-area">
		
		 <p style="font-size:20px;font-weight:bold">Aarohi Blood Bank operates under a 4 part mission:</p>
		 <p>1. To provide the high quality and safe blood and related blood products to children suffering from Thalassemia and Leukemia primarily in the Greater Hyderabad Municipality area.</p>
		 <p>2. To make blood donation 100% voluntary without any replacement donor by building individual or institutional alliances.</p>
		 <p>3. To create awareness about Thalassemia so that the incidence decreases over time.</p>
		 <p>4. To motivate and train the next generation youth leaders to ensure sustainability of the mission of Voluntary Blood Donation.</p>
		</div>

     </div>
   </div>


<!-- End Mession area -->







<!-- Start Donetion Form area -->
   
   <div class="donetion-form-area" style="margin-top:50px;margin-bottom:50px">
     <div class="donetion-form-area-coverage" style="width:30%;margin:10px auto">
	 
	  
	   
	    <p style="font-weight:bold;font-size:25px;margin-left:70px">Donate Your Blood</p>
	   
	  <form role="form" method="post" action="{{url('/blood_doner_from_submit')}}">

                                   {{ csrf_field() }}
	     <span>Enter Name :</span>
		 <input style="width:380px;border-radius:5px;border:2px solid gray;padding:5px 10px 5px 10px;margin-top:10px;margin-bottom:10px"; type="text" name="doner_name" placeholder="Enter Name"/></br>
		 
		 <span>Enter Email :</span>
	     <input style="width:380px;border-radius:5px;border:2px solid gray;padding:5px 10px 5px 10px;margin-top:10px;margin-bottom:10px"; type="email" name="doner_email" placeholder="Enter Email"/></br>
		  
		<span>Enter Phone Number :</span>
	    <input style="width:380px;border-radius:5px;border:2px solid gray;padding:5px 10px 5px 10px;margin-top:10px;margin-bottom:10px" type="text" name="doner_phn" placeholder="Enter Phone Number"/></br>
		
	     <span>Enter Age :</span>
		 <input style="width:380px;border-radius:5px;border:2px solid gray;padding:5px 10px 5px 10px;margin-top:10px;margin-bottom:10px" type="number" name="doner_age" placeholder="Enter Age" min="0"/></br>
		 
	     <span>Enter District :</span>
	    <input style="width:380px;border-radius:5px;border:2px solid gray;padding:5px 10px 5px 10px;margin-top:10px;margin-bottom:10px" type="text" name="doner_district" placeholder="Enter District" /></br>
		

	<span>Select Blood Group :</span>
    <select name="doner_blood_group" style="width:400px;border-radius:5px;border:2px solid gray;padding:5px 10px 5px 10px;margin-top:10px;margin-bottom:10px">
	    <option>Select</option>
        <option value="A+ (A positive)">A+ (A positive)</option>
        <option value="A− (A negative)">A− (A negative)</option>
        <option value="B+ (B positive)">B+ (B positive)</option>
        <option value="B− (B negative)">B− (B negative)</option>
		<option value="AB+ (AB positive)">AB+ (AB positive)</option>
	    <option value="AB− (AB negative) ">AB− (AB negative) </option>
		<option value="O+ (O positive)">O+ (O positive) </option>
       <option value="B− (B negative)">O− (O negative) </option>
    </select>
	
	<p>

	
    <button type="submit" style="width:400px;margin-top:10px;background-color:green;color:white;padding:7px 3px 5px 7px;border-radius:5px">Sumbit</button>
	
	
	
	</p>
	

	</form>

     </div>
   </div>


<!-- End Donetion Form  area -->











<!-- Start Footer area -->

<div style="margin-top:20px;background:black;height:150px" class="Footer-area">
  <div style="" class="footer-area-coverage">
      
	  <center>
	 <p style="font-size:25px;font-weight:bold;padding-top:20px;color:white">Blood Donation</p>
	 <p style="color:white">Copyright @2022 Blood Bank , Design by Umme Maktum</p>
	  </center>
 
   </div>
</div>
<!-- End Footer area -->
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  <!---
		  
		  
		   <script src="js/jquery.js"></script>
	       <script src="js/bootstrap.min.js"></script>	  
	 	
	
              ---->
		 
		
			 	
</body>
</html>