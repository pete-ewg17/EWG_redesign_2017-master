<?php  if(!isset($_GET['admin'])){ ?>
<!-- Footer -->
	<footer class="footer-img img-reponsive">
		<div class="container">
			<div class="row" align="center">
				<div class="col-md-12">
					<ul class="list-inline">
						<li>
							<a href="http://eventworkforcegroup.com/academy" target="_blank"><img src="<?php echo $file_base; ?>images/ewg_acad_logo.svg" class="img-responsive footer-logo" alt="Academy Logo"> Academy</a>
						</li>
						<li>
							<a href="http://eventworkforcegroup.com/talent" target="_blank"> <img src="<?php echo $file_base; ?>images/ewg_talent_logo.svg" class="img-responsive footer-logo" alt="Talent Logo"> Talent</a>
						</li>
						<li>
							<a href="http://eventworkforcegroup.com/technology" target="_blank"> <img src="<?php echo $file_base; ?>images/ewg_tech_logo.svg" class="img-responsive footer-logo" alt="Technology Logo">Technology</a>
						</li>
					</ul>
					<p class="copyright text-muted small">Australia: 80 Market Street, Southbank VIC 3205 Australia - America: 180 Sansome St, San Francisco, CA 94104, USA</p>
					<p class="copyright text-muted small">Copyright &copy; Event Workforce Group 2017. All Rights Reserved</p>
					<p class="small"><a href="https://rosterfy.co/rosterfy_terms">Terms &amp; Conditions</a> <a href="https://eventworkforcegroup.com/technology/privacy-policy.php">Privacy Policy</a></p>
					<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
				</div>
			</div>
		</div>
	</footer>

	<!-- MODAL FOR CONTACT -->

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Contact Us</h4>
				</div>
				<div class="modal-body">
					<div class="col-lg-8 col-lg-offset-2">
						<form id="contact-form" method="post" role="form">
							<div class="messages"></div>
							<div class="controls">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group" data-toggle="validator" role="form">
											<label for="form_name">Name*</label>
											<input id="contact_name" type="text" name="name" class="form-control" placeholder="Please enter your name" required="required" data-error="Name is required.">
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="form_name">Email*</label>
											<input id="contact_email" type="email" name="email" class="form-control" placeholder="Please enter your email">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="form_phone">Phone</label>
											<input id="contact_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone number" required="required">
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="sel1">Why are you contacting us?*</label>
											<select name="option_select">
                                                <option value="work">Looking for work?</option>
                                                <option value="staff">Looking for staff?</option>
                                                <option value="software">Looking for software?</option>
                                            </select>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="form_message">Message*</label>
											<textarea id="contact_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-12">
										<button type="submit" class="btn btn-success btn-send" id="submitButton">Send Message</button>
										<br>
										<input type="hidden" id="form_type" name="form_type" value="contact_us">
										<!-- EMAIL TEMPLATE TO USE -->
										<input type="hidden" name="email_template" id="email_template" value="002_ewg_landing_page">
									</div>
									<br>
									<div class="row">
										<div class="col-md-12">
											<div id="loading_div" style="display:none"><i class='fa fa-spinner fa-pulse fa-animate'></i></div>
											<div id="submitted_div" style="display:none">Submitted</div>
											<p class="text-muted"><strong>*</strong> These fields are required.</p>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer"></div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
	</div>

	<!-- jQuery -->
	<script src="<?php echo $file_base; ?>js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo $file_base; ?>js/bootstrap.min.js"></script>
	<!--ANIMATE ON SCROLL -->
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
	<!--VALIDATOR FOR CONTACT FORM-->
	<script src="<?php echo $file_base; ?>js/validator.js"></script>
	<!--Web Script-->
	<script src="<?php echo $file_base; ?>js/script.js"></script>
</body>

</html>
<?php } ?>