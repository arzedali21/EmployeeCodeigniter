<div class="panel">
 <div class="panel-body">
                             <div class="form-group">
                                  <label for="candidateName"><b style="color: red;">*</b>Name </label>
                                                    <input name="TextBox1" type="text" id="TextBox1" class="form-control" placeholder="Enter Name" />
                                                   
                                                    <!--<span style="color:red"></span>-->
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fatherName"><b style="color: red;">*</b>Father's Name</label>
                                                            <input name="TextBox2" type="text" id="TextBox2" class="form-control" placeholder="Enter father&#39;s name" />
                                                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="motherName"><b style="color: red;">*</b>Mother's Name</label>
                                                            <input name="TextBox3" type="text" id="TextBox3" class="form-control" placeholder="Enter Mother&#39;s name" />                               
                                                        </div>
                                                    </div>
                                                </div>   
                                                <div class="row">
                                                    
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="gender"><b style="color: red;">*</b>Gender</label>
                                                            <select name="gender" id="gender" class="form-control">
                                                              <option value="Please Select">Please Select</option>
                                                              <option value="Male">Male</option>
                                                              <option value="Female">Female</option>

                                                            </select>
                                                                 
                                                        </div>                            
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="dob"><b style="color: red;">*</b>Date of Birth</label>
                                                        
                                                            <input name="TextBox4" type="date" id="TextBox4" class="form-control" placeholder="dd/mm/yyyy" />
                                                            
                                                        
                                                    </div>
                                                </div>                 
                                               
                                                <br>
                                                
                                                
                                                <div class="panel panel-success">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><b style="color: red;">*</b>Address for Correspondence</h4>
                                                    </div>
                                                    <div class="panel-body corrAddressBody">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="corrAddrsLine1">Address Line 1 (Village/Town)</label>
                                                                    <textarea name="corrAddrsLine1" rows="2" cols="20" id="corrAddrsLine1" class="form-control" placeholder="Enter address line 1">
                            </textarea>
                                                                    
                                                                   
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="corrAddrsLine2">Address Line 2 (Additional Information)</label>
                                                                    
                                                                     <textarea name="corrAddrsLine2" rows="2" cols="20" id="corrAddrsLine2" class="form-control" placeholder="Enter address line 1">
                            </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                                    <div class="row">
                                                                                        
                                                                                        <div class="col-sm-6">
                                                                                            <div class="form-group">
                                                                                                <label for="corrDistrict">District</label>
                                                                                                <select name="DropDownList13" id="DropDownList13" class="form-control">
                                                            <option value="-No Respnose-">-No Respnose-</option>
                                                            <option value="1">Kamrup</option>
                                                            

                                                        </select>
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                        <div class="row">                                
                                                            <div class="col-md-6">
                                                                <div class="form-group">                                    
                                                                    <label for="corrBlock">Block</label>
                                                                    <input name="corrBlock" type="text" id="corrBlock" class="form-control" placeholder="Enter Block" />
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="corrCity">City</label>
                                                                    <input name="corrCity" type="text" id="corrCity" class="form-control" placeholder="Enter city" />
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="panel panel-success">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-default"><b style="color: red;">*</b>Permanent Address of the Applicant <br>
                                <input id="CheckBox1" type="checkbox" name="CheckBox1" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;CheckBox1\&#39;,\&#39;\&#39;)&#39;, 0)" /><label for="CheckBox1">Same as Above</label>

                                                            <!-- <label class="pull-left" style="text-decoration: none"><input type="checkbox" id="same" name="same"> Same as Above</label>! -->
                                                        </h4>
                                                    </div>
                                                    <div class="panel-body permAddressBody">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="permAddrsLine1">Address Line 1 (Village/Town)</label>
                                                                    
                                                                    <textarea name="permAddrsLine1" rows="2" cols="20" id="permAddrsLine1" class="form-control" placeholder="Enter address line 1">
                            </textarea>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="permAddrsLine2">Address Line 2 (Additional Information)</label>
                                                                   <textarea name="peraddreline2" rows="2" cols="20" id="peraddreline2" class="form-control" placeholder="Enter address line 2">
                            </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <label for="permDistrict">District</label>
                                                                                               
                                                                                            <select name="DropDownList14" id="DropDownList14" class="form-control">
                                                            <option value="-No Respnose-">-No Respnose-</option>
                                                            <option value="1">Kamrup</option>
                                                        </select>
                                                                                            </div>
                                                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">                                    
                                                                    <label for="permBlock">Block </label>
                                                                    <input name="permBlock" type="text" id="permBlock" class="form-control" placeholder="Enter Block" />
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="permCity">City</label>
                                                                     <input name="permCity" type="text" id="permCity" class="form-control" placeholder="Enter city" />
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                                                           
                                                        </div>
                                                    </div>




                                                <div class="row">
                                                    <div class="col-sm-4">
                                                       <div class="form-group">
                                                            <label for="email"><b style="color: red;">*</b>Email</label>
                                                            
                                                             <input name="email" type="text" id="email" class="form-control" placeholder="Enter email" />
                                                          
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="mobileNo"><b style="color: red;">*</b>Mobile</label>
                                                                 <input name="Mobile" type="text" id="Mobile" class="form-control" placeholder="Enter mobile no" />
                                                            </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="mobileNo"><b style="color: red;">*</b>Alternate Mobile</label>
                                                                 <input name="Mobile" type="text" id="AltMobile" class="form-control" placeholder="Enter mobile no" />
                                                            </div>
                                                    </div>
                                                </div>

                                                 <div class="row">
                                                    <div class="col-sm-6">
                                                       <div class="form-group">
                                                            <label for="email"><b style="color: red;">*</b>Pan Number</label>
                                                            
                                                             <input name="pan" type="text" id="pan" class="form-control" placeholder="Enter email" />
                                                          
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="mobileNo"><b style="color: red;">*</b>Adhar Number</label>
                                                                 <input name="adhar" type="text" id="adhar" class="form-control" placeholder="Enter mobile no" />
                                                            </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                           





                       
