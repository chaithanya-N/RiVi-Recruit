<div class="container-fluid">
        <div class="row" >
          <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <ul>
                    <li><a href="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                     <li><a href="myjobs"><i class="fas fa-user-circle"></i> MyJobs</a></li>
                      <li><a href="submissions"><i class="fas fa-users"></i> MySubmissions</a></li>
                      <li><a href="Ustatus"><i class="far fa-bell"></i> SubmissionsStatus</a></li>
                  </ul>
            </div>
            <!-- main content -->
           <div class="col-md-10 ">
            <div class="row" >
              <!-- main content heading -->
              <div class="col-md-12">
                <h2>MY SUBMISSIONS</h2><hr>
              </div>
 

  <div class="container">
  <ul class="nav nav-tabs">
    <li  class="active"> <a  style="background:none" data-toggle="tab"  id="txtc" href="#home">NEW SUBMISSIONS</a></li>
    <li><a data-toggle="pill"  style="background:none"  id="txtc" href="#menu1">ALL SUBMISSIONS</a></li>
  </ul>
  
  <div class="tab-content">
      <!-- NEW SUB START -->
    <div id="home" class="tab-pane fade in active ">
  
      
 <div  style="background-color:#fff;height:42  0px;border:2px;" class="container" >

                  <div class="col-md-12">
                    <form class="form-horizontal" action="/action_page.php">
                      <div class="col-md-12" style="border:2px solid; padding:10px;">
                      <div class="row">
                       <div class="text-center" style=" padding:15px; ">
                      <label  style="color:#000; font-size:18px;">SUBMISSION FORM</label>
                      </div>
                                  
                      <div class="col-md-6">
                        <label id="sn" class="col-sm-10" for="exampleInputName2">S.NO</label>
                      </div>
                      <div class="col-md-6">
                          <label class="col-sm-8 text-right"  id="sn" for="exampleInputName2">Date</label>
                          <input style="width:135px;" type="Date" >
                      </div>
                    </div>
                  </div>
                     <div class="col-md-12" style="border:2px solid; padding:10px;">
                       <div class="col-md-6">
                           <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Job ID:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="email" placeholder="Enter Job ID">
                        </div>
                      </div>
                      </div>
                   </div>
                   <!-- job id end -->
                    <div class="col-md-12" style="border:2px solid; padding:10px;">
                
                      <div class="col-md-6">
                         <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Client:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="email" placeholder="Enter Client">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Location:</label>
                        <div class="col-sm-10"> 
                          <input type="text" class="form-control" id="pwd" placeholder="Enter Location">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Position:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="email" placeholder="Enter Position">
                        </div>
                      </div>
                     </div>
                      <div class="col-md-6">
                         <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Rate:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="email" placeholder="Enter Rate">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Partner Company:</label>
                        <div class="col-sm-10"> 
                          <input type="text" class="form-control" id="pwd" placeholder="Enter Partner Company Name">
                        </div>
                      </div>
                       </div>
                      <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Job Description:</label>
                        <div class="col-sm-10"> 
                          <textarea style="resize:none" type="text" class="form-control" id="pwd" placeholder="Enter Job Description"></textarea>
                        </div>
                      </div>
                       </div>
                     </div>
                     <!-- second section -->
                     <div class="col-md-12" style="border:2px solid; padding:10px; font-size:12px;">
                      <!-- left panel -->
                       <div class="col-md-6">
                         <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Full Name:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="email" placeholder="Enter Full Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-3" for="pwd">Email:</label>
                        <div class="col-sm-9"> 
                          <input type="email" class="form-control" id="pwd" placeholder="Enter Email">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-sm-3" for="email">DOB:</label>
                        <div class="col-sm-9">
                          <input type="Date" class="form-control" id="email" placeholder="Enter DOB">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Current Location:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="email" placeholder="Enter Current Location">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Visa Validity Date:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="email" placeholder="Enter Visa Validity Date">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Is Green Card being processed in any way:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="email" placeholder="Enter Visa Validity Date">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-sm-3" for="email">If answer to the above question is yes, what is the current status?</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="email" placeholder="Enter Visa Validity Date">
                        </div>
                      </div>
                       <div class="form-group">
                        <label col-sm-3" >Do you accept to transfer your work visa to RiVi Consulting? Yes / No</label>
                        <div class="col-sm-9">
                          <input required="true" type="radio" name="optionsRadios1" value="option1">Yes
                           <input  required="true" type="radio" name="optionsRadios1" value="option2">No<br>
                        </div>
                      </div>
                       <div class="form-group">
                        <label col-sm-3" >Do you accept to work on our W2?</label>
                        <div class="col-sm-9">
                          <input required="true" type="radio" name="optionsRadios2" value="option1">Yes
                           <input  required="true" type="radio" name="optionsRadios2" value="option2">No<br>
                        </div>
                      </div>
                      <div class="form-group">
                        <label col-sm-3" >Do you consent to provide us with Right to Represent you with our client Verizon? </label>
                        <div class="col-sm-9">
                          <input required="true" type="radio" name="optionsRadios3" value="option1">Yes
                           <input  required="true" type="radio" name="optionsRadios3" value="option2">No<br>
                        </div>
                      </div>
                      <div class="form-group">
                        <label col-sm-3" >Do you accept to relocate to mentioned job location Piscataway, NJ?</label>
                        <div class="col-sm-9">
                          <input required="true" type="radio" name="optionsRadios4" value="option1">Yes
                           <input  required="true" type="radio" name="geoptionsRadiosnder4" value="option2">No<br>
                        </div>
                      </div>
                      <div class="form-group">
                        <label col-sm-3" >Do you have minimum 3 most recent payslips with most recent employer Yes / No</label>
                        <div class="col-sm-9">
                          <input required="true" type="radio" name="optionsRadios5" value="option1">Yes
                           <input  required="true" type="radio" name="optionsRadios5" value="option2">No<br>
                        </div>
                      </div>
                      <div class="form-group">
                        <label col-sm-3" >Have you submitted resume to "client" with other vendor(s) Yes / No</label>
                        <div class="col-sm-9">
                          <input  type="radio" name="optionsRadios6" value="option1">Yes
                           <input   type="radio" name="optionsRadios6" value="option2">No<br>
                        </div>
                      </div>
                       <div class="form-group">
                        <label col-sm-3" >If answer to the above question is YES, date of resume submission with other vendor(s)</label>
                        <div class="col-sm-9">
                          <input  type="radio" name="optionsRadios7" value="option1">Yes
                           <input   type="radio" name="optionsRadios7" value="option2">No<br>
                        </div>
                      </div>

                     </div>
                     <!-- right panel -->
                     <div class="col-md-6">
                         <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Contact Number:</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" id="email" placeholder="Enter Contact Number">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-3" for="pwd">SSN(Last 4 Digits):</label>
                        <div class="col-sm-9"> 
                          <input type="text" class="form-control" id="pwd" placeholder="Enter SSN(Last 4 Digits)">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Communication Address:</label>
                        <div class="col-sm-9">
                          <textarea   style="resize:none" class="form-control" id="email" placeholder="Enter Communication Address"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Work Authorization Status:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="email" placeholder="Ente rWork Authorization Status">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Total years of experience:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="email" placeholder="Enter Total years of experience">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Relevant years of experience:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="email" placeholder="Enter Relevant years of experience">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Current Salary:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="email" placeholder="Enter Current Salary">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Expected Salary:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="email" placeholder="Enter Expected Salary">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Date of Availability to start:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="email" placeholder="Enter Date of Availability to start">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Status of ongoing interviews with other prospects</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="email" placeholder="EnterWork Authorization Status">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Status of potential Offer(s) coming through</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="email" placeholder="Enter Status of potential Offer">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Preferred mode of communication for urgent/important messages (pick any)Phone / Text / Chat / Email :</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="email" placeholder="Enter Email or Phone">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Education Details:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="email" placeholder="Enter Education Details">
                        </div>
                      </div>
                      <div class="col-md-12">
                       <div class="form-group text-center">
                     <button type="submit" class="btn btn-default">Submit</button>
                     </div>
                   </div>

                     </div>
                     </div>
                    </form>
                    
                  </div>
                   </div>
    </div>
    <!-- NEW SUB END -->

    <!-- all sub start -->
    <div id="menu1" class="tab-pane fade">
      <h4>ALL SUBMISSIONS</h4>
      <!-- tableend -->
           <!-- DB PART2 START TABLE -->
                      
                          <div class="container ">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>S.NO</th>
                               <th>USER ID</th>
                                <th>STATUS</th>
                                <th>DATE</th>
                                <th>JOB DESCRIPTION</th>
                              
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                 <td></td>
                                  <td></td>
                                 
                              </tr>
                              <tr>
                                <td>2</td>
                                <td></td>
                                <td></td>
                                 <td></td>
                                  <td></td>
                                 
                              </tr>
                              <tr>
                                <td>3</td>
                                <td></td>
                                <td></td>
                                 <td></td>
                                  <td></td>
                                  
                              </tr>
                               <tr>
                                <td>4</td>
                                <td></td>
                                <td></td>
                                 <td></td>
                                  <td></td>
                           
                              </tr>
                              <tr>
                                <td>5</td>
                                <td></td>
                                <td></td>
                                 <td></td>
                                  <td></td>
                      
                              </tr>
                              <tr>
                                <td>6</td>
                                <td></td>
                                <td></td>
                                 <td></td>
                                  <td></td>
                              
                              </tr>
                            </tbody>
                          </table>
                        </div>

<!-- tableend -->

<!-- tableend -->
    </div>
     <!-- all sub end -->

                  </div>
                </div>
             </div>
               </div>
                       
              <!-- main content body end  -->
              </div>
            </div>
            

