<?php include('header.php');?>

    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="https://www.ecell-iitkgp.org/" class="navbar-brand logo">
                    <img src ="images/e_cell.png" height="100px" width="300px">
                </a>
            </div>
            <!--Logo/-->
        </div>
    </div>
    <!--Mainmenu-area/-->
    <section  class="angle-bg sky-bg section-padding">
    	 <div class="container">
                <div class="col-md-3"></div>
                <div class="col-xs-12 col-md-6">
                    <h2 style="text-align:center;">Register as a startup</h2>
                        <form method="post" action="startup_action.php" enctype='multipart/form-data'>
  
          <div class="form-group col-md-12">
            <label for="startup">Startup Name</label>
            <input type="text" class="form-control" id="startup" name="startup" placeholder="Name of the startup." required>
          </div>
           <div class="form-group col-md-12">
            <label for="founder">Founder Name</label>
            <input type="text" class="form-control" id="founder" name="founder" placeholder="Name of the founder" required>
          </div>
           <div class="form-group col-md-12">
            <label for="numberofcofounders">Number of Co-founders:</label>
            <input type="text" class="form-control" id="numberofcofounders" name="numberofcofounders" placeholder="Number of Co-founders" required>
          </div>
          <div class="form-group col-md-12">
            <label for="phone">Contact number</label>
            <input type="text" class="form-control" id="phone" name="phone" pattern="[1-9]{1}[0-9]{9}" placeholder="Contact Number without the country code."  required>
          </div>
        
        <div class="form-group col-md-12">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email Address."  required>
        </div>
         <div class="form-group col-md-12">
            <label for="linkedin">Linkedin URL</label>
            <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Linkedin URL"  required>
        </div>
        <div class="form-group col-md-12">
            <label for="startup">Based out of?(city)</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Name of the city."  required>
        </div>
        <h3>Startup Information</h3>
        <p>Please fill all the details about your startup. The selections of semi-finalists for Million at Stake will be on the basis of the information submitted here. All the submitted information will remain confidential.</p>
        
        <div class="col-md-12 form-group">
            <div class="field-set">
                <label>Startup Summary</label>
              <textarea name='summary' rows="6" id='summary' class="form-control" aria-hidden="true" placeholder="Add a description of not more than 500 words." required></textarea>
            </div>
        </div>
         <div class="form-group col-md-12">
            <label for="sector">Sector of the Startup.</label>
            <input type="text" class="form-control" id="sector" name="sector" placeholder="Sector of the Startup."  required>
        </div>
         <div class="form-group col-md-12">
            <label for="year">Founding year</label>
            <input type="text" class="form-control" id="year" name="year" placeholder="Founding year."  required>
        </div>
        <div class="form-group col-md-12">
            <label for="website">Startup Website</label>
            <input type="text" class="form-control" id="website" name="website" placeholder="Startup Website."  required>
        </div>
        <div class="form-group col-md-12">
       <label>Please upload your pitch deck here </label>
        <p>You may also upload pdfs/presentations here. If the size exceeds the limit, add the link of the uploaded file in the startup summary above.</p>
       <input type="file" id="file" name="file" required="required">
       </div>
        
        <div class="col-md-12 form-group ">
            <div class="field-set">
                <label>Current Stage of Startup</label>
                <select style="padding:0" class="form-control select-filter" name="currentstage" data-minimum-results-for-search="Infinity" id="currentstage" tabindex="-1" data-constraints="@Required" aria-hidden="true" required/>
                    <option value="" selected hidden disabled>Select</option>
                                   <option value="Idea">Idea</option>
                                   <option value="Concept">Concept</option>
                                   <option value="Prototype">Prototype</option>
                                   <option value="Proof Concept">Proof Concept</option>
                                   <option value="Pilot">Pilot</option>
                                   <option value="Operational (less than 1 year)">Operational (less than 1 year)</option>
                                   <option value="Operational (more than 1 year)">Operational (more than 1 year)</option>
                                   <option value="other">other</option>
                </select>
            </div>
        </div>
     
       <div class="col-md-12 form-group">
            <div class="field-set">
                <label>Mention achievements and/or investments of your startup:</label>
              <textarea name='achievements' rows="6" id='achievements' class="form-control" aria-hidden="true" placeholder="Your answer" ></textarea>
            </div>
        </div>
      <div class="col-md-12 form-group ">
            <div class="field-set">
                <label>How did you come to know about us?</label>
                <select style="padding:0" class="form-control select-filter" name="info" data-minimum-results-for-search="Infinity" id="info" tabindex="-1" data-constraints="@Required" aria-hidden="true" required/>
                    <option value="" selected hidden disabled>Select</option>
                                   <option value="Social Media">Social Media</option>
                                   <option value="Linkedin">Linkedin</option>
                                   <option value="From an Investor">From an Investor</option>
                                   <option value="From a Startup">From a Startup</option>
                                   <option value="News/Media">News/Media</option>
                                   <option value="Others">Others</option>
                </select>
            </div>
        </div>
      <script>
        var phone = document.getElementById("phone").innerHTML
        if (!(phone.length == 10)) {
            alert("Please enter a valid phone number.")
            return false
        } 
      </script>
      
     
        <div class="form-group col-md-12  text-center" style="margin-top: 30px;">
        <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
      </form>
                       
                </div>
       </div>
    </section>
<?php include('footer.php');?>