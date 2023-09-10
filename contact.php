<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>	
<link href="style.css" rel="stylesheet" type="text/css">
	
</head>
<body>
    <section class="contact page">
<div class="container">
    
</div>
    </section>
    <section class="form-table">
        <div class="head-title">
<h2>complete this kyc</h2>
        </div>
        <div class="form">
            <legend>
            <form class="form-body" action="./mail.php">

            <div>
				<label for="fname">first name</label>
				<div class="form-group formmr">
<select class="form-control" name="budget" required="">
<option value="">Select </option>
<option value="mr">mr</option>
<option value="mrs">mrs</option>
<!--<option value="partner ">partner</option>-->
</select>
</div>
<input type="text" class="form-control" name="fname" placeholder="first name *">
            </div>
            <div>
                <label for="lname">last name</label>
                <input type="text" class="form-control" name="lname" placeholder="last name *">
            </div>
            <div>
                <label for="orgname">Organisation name</label>
                <input type="text" class="form-control" name="orgname" placeholder="organiation name *">
            </div>
            <div>
                <label for="phone">Phone number</label>
                <input type="tel" class="form-control" placeholder="phone number *"  name="phone" placeholder="Phone *" required="" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" pattern="[6-9]{1}[0-9]{9}" title="Enter Valid 10 digits Mobile Number" minlength="10" maxlength="12">
            </div>
            <div>
                <label for="homephone">Home number</label>
                <input type="tel" class="form-control" placeholder="home phone number *"  name="homephone" placeholder="Phone *" required="" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" pattern="[6-9]{1}[0-9]{9}" title="Enter Valid 10 digits Home Mobile Number" minlength="10" maxlength="12">
            </div>
            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="Email Address *" required="" title="Enter a valid Email ID">
            </div>
            <div>
                <label for="fax">Fax</label>
                <input type="text" name="fax" class="form-control" placeholder="fax *"  title="Enter a fax ID">
            </div>
            <div>
                <label for="dob">Date Of Birth</label>
                <input type="date" name="dob" class="form-control" placeholder="Date Of Birth *"  title="Date of Birth">
            </div>
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" placeholder="title *"  title="Title">
            </div>
<div>
    <label for="leads">Leads</label>
<div class="form-group">
<select class="form-control" name="budget" required="">
<option value="">Select your 3BHK Preferences</option>
<option value="direct call">direct call</option>
<option value="employee call">employee call</option>
<option value="partner ">partner</option>
<option value="direct mail">direct mail</option>
<option value="reference ">reference</option>
<option value="self generated ">self generated</option>
</select>
</div>
</div>

    <div>
    <label for="department">Department</label>
    <input type="text" name="department" class="form-control" placeholder="Department *"  title="Title">
    </div>

    <div>
    <label for="department">Department</label>
    <input type="text" name="department" class="form-control" placeholder="Department *"  title="department">
    </div>
   
<!--    <div class="customerinfo">-->
        <div>
            <label for="portaluser"> Portal User  </label>
                <input type="checkbox" name="portaluser" id="portaluser">
         
        </div>
        <div>
            <label for="startdate">Support Start Date </label>
                <input type="date" name="startdate" id="startdate">
         
        </div>
        <div>
            <label for="enddate">Support End Date </label>
                <input type="date" name="enddate" id="enddate">
      
        </div>
<!--    </div>-->

<!--    <div class="Adress-details">-->
        <div>
            <label for="mailstreet">Mailing Street </label>
            <!-- <input type="text-area" > -->
            <textarea name="mailstreet" id="mailstreet" cols="20" rows="10"></textarea>
        </div>
        <div>
            <label for="otherstreet">othering Street </label>
            <!-- <input type="text-area" > -->
            <textarea name="otherstreet" id="otherstreet" cols="20" rows="10"></textarea>
        </div>
<!--    </div>-->


            </form>
        </legend>
        </div>
    </section>
    
</body>
</html>