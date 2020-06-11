
<div class="container">
    <form>
        <div class="form-row">
            <!--First Name -->
            <div class="col-md-6 mb-3">
                <label for="userName">First name</label>
                <input type="text" class="form-control" id="userName" placeholder="First name" required>
            </div>

            <!--Email -->
            <div class="col-md-6 mb-3">
                <label for="userEmail">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                    </div>
                    <input type="email" class="form-control" id="userEmail" placeholder="Email" required>
                </div>
            </div>

        </div>
        <!--Message -->
        <div class="form-group">
            <label for="userMessage">Message</label>
            <textarea class="form-control" id="userMessage" rows="4" style="resize:none"  placeholder="Your Message..." required>Hi, I would like to request information about the <?php echo $PAGE_TITLE; ?></textarea>
        </div>
		<!--Privacy Policy-->
		<p class="small py-1">Your data will be processed in accordance with our <a href="/privacy-policy.php" target="_blank"> Privacy Policy </a></p>
        <!--Submit -->
        <button class="btn btn-primary my-2" type="submit">Submit</button>
    </form>

</div>