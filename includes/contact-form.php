
<div class="container">
    <form method="post" action="/email_sent">
        <!--Row 1-->
        <div class="form-row">
            <!--First name -->
            <div class="col-md-6 mb-3">
                <label for="given-name">First Name</label>
                <input type="text" class="form-control" id="given-name" name="first-name" placeholder="First name" required>
            </div>
            <!--Surname-->
            <div class="col-md-6 mb-3">
                <label for="family-name">Surname</label>
                <input type="text" class="form-control" id="family-name" name="second-name" placeholder="Surname" required>
            </div>

        </div>
        <!--Row 2-->
        <div class="form-row">
            <!--Company name -->
            <div class="col-md-6 mb-3">
                <label for="company-name">Company Name</label>
                <input type="text" class="form-control" id="company-name" name="company-name" placeholder="Company name" autocomplete="company-name">
            </div>
            <!--Email -->
            <div class="col-md-6 mb-3">
                <label for="userEmail">Contact Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                    </div>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Contact Email" required>
                </div>
            </div>
        </div>
        <!--Message -->
        <div class="form-group">
            <label for="userMessage">Message</label>
            <textarea class="form-control" id="userMessage" name="message" rows="4" style="resize:none"  placeholder="Your Message..." required maxlength="5000"></textarea>
        </div>
        <!--Lastname (HP)-->
        <div class='req'>
            <label for='website'>Leave blank</label>
            <input type='text' name='website'>
        </div>
		<div class="text-center">
		<!--Privacy Policy-->
			<p class="small py-1">Your data will be processed in accordance with our <a href="/privacy-policy" target="_blank"> Privacy Policy </a></p>
			<!--Submit -->
			<button class="btn btn-primary my-2" type="submit">Submit</button>
		</div>
    </form>

</div>