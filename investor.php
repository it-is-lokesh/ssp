<?php include('header.php'); ?>

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
                <img src="images/e_cell.png" height="100px" width="300px">
            </a>
        </div>
        <!--Logo/-->
    </div>
</div>
<!--Mainmenu-area/-->
<section class="angle-bg sky-bg section-padding">
    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-xs-12 col-md-6">
            <h2 style="text-align:center;">REGISTRATION FORM</h2>
            <form method="post" action="investor_action.php">

                <div class="form-group col-md-12">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="phone">Contact number:</label>
                    <input type="text" class="form-control" id="phone" name="phone" pattern="[1-9]{1}[0-9]{9}" placeholder="Contact Number without the country code." required>
                </div>

                <div class="form-group col-md-12">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address." required>
                </div>

                <div class="form-group col-md-12">
                    <label for="linkedin">Linkedin URL:</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Linkedin URL" required>
                </div>

                <div class="form-group col-md-12">
                    <label for="sector">Investor sector:</label>
                    <input type="text" class="form-control" id="sector" name="sector" placeholder="Investor sector" required>
                </div>
                <div class="col-md-12 form-group ">
                    <div class="field-set">
                        <label>How did you come to know about us?</label>
                        <select style="padding:0" class="form-control select-filter" name="info" data-minimum-results-for-search="Infinity" id="info" tabindex="-1" data-constraints="@Required" aria-hidden="true" required>
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
<?php include('footer.php'); ?>