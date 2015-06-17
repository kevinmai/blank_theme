<section id="main-container">
	<div id="header-mobile">
		<div id="header-mobile-wrapper">
			<div>
				<div id="logo-mobile">
					<img alt="nav-button-mobile" id="nav-button-mobile" src="<?php echo get_template_directory_uri(); ?>/images/nav-button-mobile.png" title="company-logo">
					<a href="<?php echo home_url() ?>"><img alt="company logo" id="company-logo-mobile" src="<?php echo get_template_directory_uri(); ?>/images/winstar-mobile-button.png" title="company-logo"></a>
				</div>		
				<div id="call-to-action-mobile">
					<a href="tel:12223334444"><img alt="company logo" id="phone-button-mobile" src="<?php echo get_template_directory_uri(); ?>/images/phone-button.png" title="company-logo"></a>
					<img alt="company logo" id="email-button-mobile" src="<?php echo get_template_directory_uri(); ?>/images/email-button.png" title="company-logo">
				</div>		
				<div class="clear"></div>
			</div>
		</div>
		<div id="contact-form-mobile">
			<form id="form24" name="form24" class="wufoo rightLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" validate action="https://vitalstorm.wufoo.com/forms/mnpf9wf0db2tg5/#public">
				<ul>
					<li id="foli1" class="notranslate">
						<input id="Field1" name="Field1" type="text" class="field text medium" value="" maxlength="255" tabindex="1" placeholder="Name *" onkeyup="" required />
					</li>
					<li id="foli2" class="notranslate">
						<input id="Field2" name="Field2" type="text" class="field text nospin medium"  value="" tabindex="2" placeholder="Phone Number *" onkeyup="" required/>
					</li>
					<li id="foli3" class="notranslate">
						<input id="Field3" name="Field3" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" placeholder="Email *" tabindex="3" required />
					</li>
					<li id="foli4" class="notranslate">
						<textarea id="Field4" name="Field4" class="field textarea medium" spellcheck="true" rows="10" cols="50" tabindex="4" placeholder="Service Needed *"onkeyup="" required ></textarea>
					</li> 
					<li class="hide">
						<input alt="vsref" id="Field5" name="Field5" type="text" class="field text medium" value="" maxlength="255" tabindex="5" onkeyup="" />
					</li>
					<li class="buttons">
						<input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit" />
					</li>
					<li class="hide">
						<label for="comment">Do Not Fill This Out</label>
						<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
						<input type="hidden" id="idstamp" name="idstamp" value="csY9Lf/uHZrBcRQlZLvVr/BZ5LIBJx+OgJua8JfFg9o=" />
					</li>
				</ul>
			</form>
		</div>
	</div>
	<!-- Off canvas menu -->
	<!-- initialy left position is -100% off screen -->
	<div id="off-canvas-menu">
		<div id="close-off-canvas">
			<img alt="close button" src="<?php echo get_template_directory_uri() ; ?>/images/close_off_canvas_light.png"><span>Close Menu</span>
		</div>
		<?php wp_nav_menu(array("theme_location" => "mobile-menu","container_id" => "mobile-navigation")) ; ?>
	</div>
</section>