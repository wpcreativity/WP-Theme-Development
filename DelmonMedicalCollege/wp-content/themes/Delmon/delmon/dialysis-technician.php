<?php include 'include/header.php';?>
<div class="title-inner d-flex">
	
    <div class="container d-flex flex-fill">
        <div class="row d-flex flex-fill">
            <div class="col-md-4 d-flex flex-fill align-items-center">
                <div class="form-box">
                <h1>TAKE THE FIRST STEP</h1>
                <p>Request information to start on the path to your degree</p>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Step 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Step 2</a>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <select name="form_classroom_preference" class="form-control" id="form_classroom_preference" tabindex="1" size="1" aria-required="true" class="valid" aria-invalid="false">
    <option value="">Classroom Preference</option>
    <option value="ONSITE/ONLINE">On Campus &amp; Online</option>
    <option value="ONSITE">On Campus</option>
    <option value="ONLINE">Online</option>
</select>
<select name="form_highest_degree_earned" id="form_highest_degree_earned" class="form-control" tabindex="2" aria-required="true" size="1" class="valid" aria-invalid="false">
    <option value="">Highest Degree Earned</option>
    <option value="GED">GED</option>
    <option value="HS Diploma">HS Diploma</option>
    <option value="Associate Degree">Associate Degree</option>
    <option value="Bachelor's Degree">Bachelor's Degree</option>
    <option value="Master's Degree">Master's Degree</option>
    <option value="Doctorate/Prof Degree">Doctorate/Prof Degree</option>
</select>
<select name="form_year_earned" id="form_year_earned" class="form-control" tabindex="3" aria-required="true" size="1" class="valid" aria-invalid="false">
    <option value="">Year Earned</option>
    <option value="2020">2020</option>
    <option value="2019">2019</option>
    <option value="2018">2018</option>
    <option value="2017">2017</option>
    <option value="2016">2016</option>
    <option value="2015">2015</option>
    <option value="2014">2014</option>
    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
    <option value="2004">2004</option>
    <option value="2003">2003</option>
    <option value="2002">2002</option>
    <option value="2001">2001</option>
    <option value="2000">2000</option>
    <option value="1999">1999</option>
    <option value="1998">1998</option>
    <option value="1997">1997</option>
    <option value="1996">1996</option>
    <option value="1995">1995</option>
    <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
</select>
<a href="#" class="btn-block gobtn"> go to step 2</a>
      
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <input class="form-control"  name="form_first_name" type="text" id="form_first_name" autocorrect="off" placeholder="First Name" maxlength="50" aria-required="true">
    <input class="form-control"  name="form_last_name" type="text" id="form_last_name" autocorrect="off" placeholder="Last Name" size="30" maxlength="50" aria-required="true">
    <input  class="form-control" name="form_email" maxlength="100" id="form_email" autocorrect="off" placeholder="Email Address" size="30" type="email" aria-required="true" value="">
    <input class="form-control"  name="form_address" type="text" id="form_address" autocorrect="off" placeholder="Street Address" size="30" maxlength="100" aria-required="true">
    <input class="form-control"  name="form_zipcode" maxlength="9" id="form_zipcode" autocorrect="off" placeholder="Zip Code" size="30" type="tel" aria-required="true" value="">
    <input class="form-control"  name="form_phone" id="form_phone" autocorrect="off" placeholder="Phone" size="30" type="tel" tcpa-trigger="" aria-required="true" value="">
    <select class="form-control"  name="form_area_of_interest" id="form_area_of_interest" aria-required="true" size="1">
    <option value="" id="aoi_default">Program of Interest</option>
    <optgroup label="Undergraduate" id="undergrad_group"><option value="MKTG_UND_UG" class="ug">Undecided</option><option value="MKTG_AF_UG" class="ug">Accounting &amp; Finance</option><option value="MKTG_BUSM_UG" class="ug">Business &amp; Management</option><option value="MKTG_CA_UG" class="ug">Communications</option><option value="MKTG_CIS_UG" class="ug">Computer Information Systems</option><option value="MKTG_JS_UG" class="ug">Criminal Justice</option><option value="MKTG_EET_UG" class="ug">Electronics &amp; Engineering Technology</option><option value="MKTG_HMT_UG" class="ug">Health Management &amp; Technology</option><option value="MKTG_NCS_UG" class="ug">Information Technology &amp; Networking</option><option value="MKTG_MBC_UG" class="ug">Medical Billing &amp; Coding</option><option value="MKTG_SDV_UG" class="ug">Software Development</option><option value="MKTG_WMD_UG" class="ug">Web &amp; Digital Media</option></optgroup>     
    <optgroup label="Graduate" id="grad_group" style="display: none;"><option value="MKTG_UND_GR" class="gr">Undecided</option><option value="MKTG_AF_GR" class="gr">Accounting &amp; Finance</option><option value="MKTG_HM_GR" class="gr">Healthcare Management</option><option value="MKTG_HR_GR" class="gr">Human Resources</option><option value="MKTG_NIS_GR" class="gr">Information Technology &amp; Networking</option><option value="MKTG_MBA_GR" class="gr">MBA</option><option value="MKTG_NIS_GR" class="gr">Networking &amp; Information Systems</option><option value="MKTG_PA_GR" class="gr">Public Administration</option><option value="MKTG_PM_GR" class="gr">Project Management</option></optgroup>
    
    
    
    
    
    
    
    
</select>
<a href="#" class="btn-block gobtn"> submit</a>
      
  </div>
  <p class="bottom-area"><img src="images/privacy_icon.png" class="mr-2">We respect your privacy.</p>
                        
  </div>
</div>
            </div>
        </div>
    </div>
</div>

<div class="carrer-glance">
<div class="abt-us w-50 d-table mx-auto mt-4 mb-3">
                            <h1><span>Career</span> at glance</h1>
                            <span class="line w-25 d-table mx-auto"></span>
                        </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <i class="fas fa-book"></i>
                    <h1>certification</h1>
                    <p>Lorem Ipsum </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <i class="far fa-heart"></i>
                    <h1>certification</h1>
                    <p>Lorem Ipsum </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <i class="fas fa-heartbeat"></i>
                    <h1>certification</h1>
                    <p>Lorem Ipsum </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <i class="fas fa-female"></i>
                    <h1>certification</h1>
                    <p>Lorem Ipsum </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <i class="fas fa-child"></i>
                    <h1>certification</h1>
                    <p>Lorem Ipsum </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <i class="fas fa-mobile-alt"></i>
                    <h1>certification</h1>
                    <p>Lorem Ipsum </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="video-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                   <video id="myVideo" width="100%" height="550">
  <source src="images/video.mp4" type="video/mp4">
  
</video>
      
<div class="buttons">
  <button class="uk-button uk-button-primary first" onclick="playVid()" type="button">
    <i class="fas fa-play"></i></button>
  <button class="uk-button uk-button-primary second" onclick="pauseVid()" type="button">
    <i class="fas fa-grip-lines-vertical"></i></button>
</div>
                  
                </div>
            </div>
        </div>
    </div>
    <div class="line-box">
        <div class="top-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>We offer a wide range of degree programs and specializations.</h1>
                    </div>
                    </div>
            </div>
        </div>
        <div class="bottom-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Request more information to speak with an admissions representative about your options. </p>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <a href="#">Get More Information on DeVry Programs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="online-learn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h1>PROGRAM <br>OBJECTIVES</h1>
<ul>
    <li>
                        To help the student attain a fundamental grounding
in hemodialysis, including:</li>
<li>
Recognizing and demonstrating knowledge of how
to utilize and maintain equipment and supplies specific
to dialysis</li>
<li>Practicing infection control following universal precautions</li>
<li>Practicing accepted procedures of preparing lab specimens</li>
<li>Practicing quality assurance and safety</li>
<li>Demonstrating skills and knowledge necessary to run
patient dialysis treatment</li>
<li>Demonstrating professional communication and
interpersonal skills specific to the hemodialysis setting</li>
</ul>
<div class="logo"><img src="images/logo2.png"></div>
<a href="#" class="btn-block">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="say-alumn">
    
    <div class="container">
        <h1>See What Our Alumni Are Saying.</h1>
        <div class="row mt-5 mb-5">
            <div class="col-md-3 col-sm-3 col-3">
                <figure class="position-reltive">
                    <img src="images/bximg.jpg">
                </figure>
            </div>
            <div class="col-md-9 col-sm-9 col-9">
                <p>My professors were awesome. They were patient, really explained the material and were willing to work with students if they need assistance. They responded quickly to emails and some will even give you their personal numbers if the issue is time sensitive.”</p>
                <h3 class="name">Lorem Ipsum </h3>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h4>

            </div>
        </div>
          <div class="row mt-5 mb-5">
            <div class="col-md-3 col-sm-3 col-3">
                <figure class="position-reltive">
                    <img src="images/bximg.jpg">
                </figure>
            </div>
            <div class="col-md-9 col-sm-9 col-9">
                <p>My professors were awesome. They were patient, really explained the material and were willing to work with students if they need assistance. They responded quickly to emails and some will even give you their personal numbers if the issue is time sensitive.”</p>
                <h3 class="name">Lorem Ipsum </h3>
                <h4>Lorem Ipsum is simply dummy text of the printing and. </h4>

            </div>
        </div>
    </div>
</div>
<div class="offarea">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="altarea">
                <div class="bg-div">
                    <h1>+23% </h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>   
                </div>
                <p>The 40 week program<br>
consists of classroom<br>
instruction concurrent with</p>
            </div>
            <div class="d-block ">
            <a href="" class="">Lorem Ipsum </a>
            <a href="" class="">Lorem Ipsum is simply dummy </a>
        </div>

        </div>
        </div>
    </div>
    </div>

<?php include 'include/footer.php';?>