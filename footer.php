	<!-- 3.7 Footer -->
			<footer>
				<div id="footer-wrapper">
					<div>
						<div id="left-footer">
							<div class="footer-navigation">
								<?php wp_nav_menu(array("theme_location" => "branding-footer","container_id"=> "branding-footer")) ; ?>
							</div>
						</div>
						<div id="right-footer">
							<p>Follow Us</p>
							<div id="social-media">
								<ul>
									<li><a href="#" id="facebook"></a></li>
									<li><a href="#" id="twitter"></a></li>
									<li><a href="#" id="linkedin"></a></li>
									<li><a href="#" id="gplus"></a></li>
								</ul>
							</div>
							<div id="address">
								<address>
									<p>Company Name</p>
									<p>1601 Sesame Str.<br>City, ST 12345</p>
								</address>
								<div id="license-number">
									<p>License #'s</p>
									<p id="md">MD XXXX</p>
									<p id="va">VA XXXX</p>
									<p id="dc">DC XXXX</p>
								</div>
								<p><span>&copy;</span> <?php echo date("Y") ; ?> All Rights Reserved <a href="http://vitalstorm.com" id="vitalstorm-stamp">VitalStorm</a></p>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div id="service-location">
						<p>We Proudly Serve These Local Areas:</p>
						<?php wp_nav_menu(array("theme_location" => "city-pages","container-id" => "service-cities")) ; ?>
						<!-- p id="service-cities">
							<a href="/dc/">DC</a>,
							<a href="/baltimore/">Baltimore</a>,
							<a href="/bethesda/">Bethesda</a>,
							<a href="/rockville/">Rockville</a>,
							<a href="/pasadena/">Pasadena</a>,
							<a href="/glen-burnie/">Glen Burnie</a>,
							<a href="/laurel/">Laurel</a>,
							<a href="/upper-marlboro/">Upper Marlboro</a>,
							<a href="/waldorf/">Waldorf</a>,
							<a href="/annapolis/">Annapolis</a>
						</p -->
					</div>
				</div>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>