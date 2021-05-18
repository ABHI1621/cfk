<form action="form_submit.php" method="post">
			  

			 <div class="row">
			      <div class="col-sm-6">
			           <div class="form-group">
			                <label for="name">Name:</label>
			                <input type="text" class="form-control" name="name" placeholder="Enter Name"required>
			          </div>
			          <div class="form-group">
        			    <label for="name">Phone:</label>
        			    <input type="text" class="form-control" name="phone" placeholder="Enter Phone" required>
        			  </div>
        			  <div class="form-group">
        			    <label for="name">PAN:</label>
        			    <input type="text" class="form-control" placeholder="Enter PAN Number" name="pan" required>
        			  </div>
        			  <div class="form-group">
        			    <label for="name">Address:</label>
        			    <input type="text" class="form-control" placeholder="Enter Full Address" name="addr" required>
        			  </div>
			      </div>
			      <div class="col-sm-6">
			           <div class="form-group">
            			    <label for="name">Email(*):</label>
            			    <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
        			  </div>
        			  
        			    <label for="state">State:</label>
			  <div class="form-group" > 
                            <select name="state" class="form-control" required>
                            <option value="">Select State</option>
                            <option value="Andaman">Andaman and Nicobar Islands</option>
                            <option value="AndhraPradesh">Andhra Pradesh</option>
                            <option value="ArunachalPradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="DadraHaveli">Dadra and Nagar Haveli</option>
                            <option value="DamanandDiu">Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="HimachalPradesh">Himachal Pradesh</option>
                            <option value="JammundKashmir">Jammu and Kashmir</option>
                            <option value="Jharkhaand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Orissa">Orissa</option>
                            <option value="Pondicherry">Pondicherry</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="TamilNadu">Tamil Nadu</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttaranchal">Uttaranchal</option>
                            <option value="UttarPradesh">Uttar Pradesh</option>
                            <option value="WestBengal">West Bengal</option>
                            </select>
                        </div>
			      
			   

             
			   <div class="form-group">
			    <label for="name">City:</label>
			    <input type="text" class="form-control" placeholder="Enter City" name="city" required>
			  </div>
			  
			 
			
  			
  			 <label>Best Time to Contact</label><br>
<select name="btc" required>
	<option value="" selected="selected">Please select</option>
	<option value="8A-10A">Eight to Ten</option>
	<option value="10A-12P">Ten to Twelve</option>
	<option value="12P-2P">Twelve to Two</option>
	<option value="2P-5P">Two to Five</option>
	<option value="5P-8P">Five to Eight</option>
	<option value="8P-10P">Eight to Ten</option>
	<option value="Anytime">Anytime</option>
	<option value="Weekends">Weekend</option>
</select>

<br><br>	   
</div>
</div>
			
               
 <div class="form-group">
			    <label for="name">Comments:</label>
			    <textarea class="form-control" name="comm" required></textarea>
			  </div>

<br>
			  <button type="submit" class="btn btn-block btn-primary" style="margin-top: 15px;">Submit</button>
			</form>