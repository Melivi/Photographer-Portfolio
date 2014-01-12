<!-- contact -->
<form action="page/send.php" method="POST" id="contact">
<fieldset>



	<input type="text" name="contact_name" id="name" placeholder="Name" required="required" tabindex="1" />


	<input type="email" name="contact_email" id="email" placeholder="E-mail" required="required" tabindex="2" />


	<input type="text" name="contact_topic" id="topic" placeholder="Topic" required="required" tabindex="3" />
	

	<textarea rows="10" columns="10" name="contact_text" id="message" placeholder="Message" required="required" tabindex="4" ></textarea>
	
	<input type="submit" value="Submit" tabindex="5" />

	Enter the result: <span class="form_check_1"></span> &times; <span class="form_check_2"></span> = <input type="text" name="contact_check" maxlength="2" tabindex="5" />
    <input type="hidden" name="contact_check_data" value="" />


	</fieldset>
 </form>

 <div id="contact_info">

<span>Phone:</span>
<p>352-408-9290</p>
<br />
<span>Studio Address:</span>
<p>978 Rhapsody Street <br />
Ocala, FL 34471</p>
<br />
<span>Email Address:</span>
<p>GraceJRaff@dayrep.com</p>
 </div>