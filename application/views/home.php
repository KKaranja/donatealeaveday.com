<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Donate a Leave Day</title>
	<meta name="description" content="Donate a Leave Day">
	<meta name="author" content="isaac kimura">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:url"           content="https://neilpatel.com/blog/open-graph-meta-tags/" />
    <meta property="og:type"          content="website" />
	<meta property="og:title"         content="Donate a Leave Day" />
	<meta property="og:description"   content="Your description" />
	<meta property="og:image"         content="https://groupmfi.com/dashboard/assets/img/Farmcate_new1.png" />
	<meta property="og:site_name" content="Donate a Leave Day" />

	<meta name="twitter:title" content="Donate a Leave Day">
	<meta name="twitter:description" content="DESCRIPTION OF PAGE CONTENT">
	<meta name="twitter:image" content="https://groupmfi.com/dashboard/assets/img/Farmcate_new1.png">
	<meta name="twitter:site" content="@USERNAME">
	<meta name="twitter:creator" content="@USERNAME">

	<link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

	<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5cd516d53f59c700126bae89&product='inline-share-buttons' async='async'></script>
</head>

<body style="background: url(<?=base_url()?>assets/imgs/Website-Horizontal.png) no-repeat center center fixed;
">
	<!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <!-- <div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3"></script> -->

	<div class="row">
		<!--*** Home ***-->
		<div class="col-md-6 col-sm-12" id="home-section">
			<div id="mat-art-section">
				<img src="<?=base_url()?>assets/imgs/Mat-Art-with-shadow.png" class="img-fluid mat-art-img">
			</div>
		</div>

		<!-- ***Donation Form *** -->
		<div class="col-md-6 col-sm-12" id="donate-container">
			<div id="donate-inner">
				<img src="<?=base_url()?>assets/imgs/Mat-and-Rod.png" class="img-fluid" alt="Donate">
				<div id="donate-form">
					<form role="form" method="post" id="donation-form" action="<?php echo site_url('welcome/make_donation');?>">
						<div class="form-group">
							<input type="email" name="user_email" class="form-control inputfield" placeholder="Your official email" required>
						</div>
						<div class="form-group">
							<input type="text" name="organisation_name" class="form-control inputfield" placeholder="Your organisation" required>
						</div>
						<div class="form-group">
							<input type="text" name="mother_name" class="form-control inputfield" placeholder="Full name of mother in your organisation" required>
						</div>
						<div class="form-group">
							<input type="number" name="days_donated" class="form-control inputfield" placeholder="Number of days you want to donate" required>
						</div>
						<div class="form-group">
							<input type="email" name="hr_email" class="form-control inputfield" placeholder="Your HR's official email" required>
						</div>
						<div class="text-center">
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="terms_and_conditions" type="checkbox" id="terms-and-conditions" value="terms" required>
								<label class="form-check-label monthoers" for="terms-and-conditions">
									terms and conditions 
								</label>
								<a data-toggle="popover" data-html="true" data-content="
								<strong>Terms and Conditions for Nestle EMEA.</strong><br>

These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, Donate A Leave Day accessible at www.donatealeaveday.com

These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions.

Minors or people below 18 years old are not allowed to use this Website.

Intellectual Property Rights

Other than the content you own, under these Terms, Nestle EMEA and/or its licensors own all the intellectual property rights and materials contained in this Website.

You are granted limited license only for purposes of viewing the material contained on this Website.

Restrictions

You are specifically restricted from all of the following:

Publishing any Website material in any other media;
Selling, sublicensing and/or otherwise commercializing any Website material;
Publicly performing and/or showing any Website material;
Using this Website in any way that is or may be damaging to this Website;
Using this Website in any way that impacts user access to this Website;
Using this Website contrary to applicable laws and regulations, or in any way may cause Harm to the Website, or to any person or business entity;
Engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website;
Using this Website to engage in any advertising or marketing.
Certain areas of this Website are restricted from being access by you and Nestle EMEA may further restrict access by you to any areas of this Website, at any time, in absolute discretion. Any user ID and password you may have for this Website are confidential and you must maintain confidentiality as well.
								">
								<i class="fa fa-info-circle" ></i></a>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="privacy_policy" type="checkbox" id="pricacy-policy" value="privacy_policy" required>
								<label class="form-check-label monthoers" for="pricacy-policy">
									privacy policy
								</label>
								<a data-toggle="popover" data-content="And here's some amazing content. It's very engaging. Right?"><i class="fa fa-info-circle"></i></a>
							</div>
						</div>
						<div class="text-center">
							<button type="submit" class="btn submit-donation">donate</button>
						</div>
					</form>
				</div>	
				<a href="#" id="btn-back" class="btn-custom monthoers">< back</a>
			</div>
		</div>

		<!-- *** Thank You *** -->
		<div class="col-md-6 col-sm-12" id="thank-you-container">
			<div id="thank-you">
				<img src="<?=base_url()?>assets/imgs/Mat-and-Rod.png" class="img-fluid" alt="About">
				<div id="thank-you-inner" class="text-center">
					<h3>thank you <br>
						for your donation
					</h3>
				</div>
			</div>
		</div>

		<!-- *** About *** -->
		<div class="col-md-6 col-sm-12 text-center" id="about-container">
			<div id="about">
				<img src="<?=base_url()?>assets/imgs/Mat-and-Rod.png" class="img-fluid" alt="About">
				<div id="about-inner">
					<h4>about</h4>
					<p>At Nestle we believe that for a child to grow up healthy, they need to start healthy and stay healthy. In Kenya, mothers spend less time breastfeeding their children and more time securing their jobs at the cost of their babies' wellbeing. We can change that with the simple act of giving more time. Time to be with their babies, bond with their babies, breastdee their babies.</p>
					<p>
					Donate a leave day today and give more time to a deserving mother.
					</p>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-12 text-center right-div">
			<img src="<?=base_url()?>assets/imgs/nestle_new.png" class="img-fluid nestle-logo">
			<h4 class="village-text">it takes a village</h4>
			<h1 id="leave-h1">DONate A leAve DAY</h1>
			<div class="buttons-section">
				<!-- *** Home *** -->
				<div id="home-buttons">
					<button type="button" class="btn btn-main" data-toggle="modal" data-target="#watch-video">watch</button>
					<button type="button" class="btn btn-main" id="btn-donate">donate</button>
					<button type="button" class="btn btn-main" id="btn-about">about</button>
					<!-- <button type="button" class="btn btn-main share" id="btn-share" data-toggle="tooltip" data-html="true" title="<em>Tooltip</em> <a href='#'>with</a> <b>HTML</b>">share</button> -->
					<div class="share-button btn-main btn">
					  <a href="#" class="social-toggle monthoers">share</a>
						<div class="social-networks">
						  <ul>
						    <li class="social-twitter">
						    	<!-- <a href="https://twitter.com/intent/tweet"
						    	data-show-count="false" 
						    	data-text="Donate a Leave Day"
						    	data-hashtags="DonateALeaveDay,ItTakesAVillage">
							      	<img src="<?=base_url()?>assets/imgs/Twitter-icon.png" class="img-fluid">
							     </a> -->
						    	<a href="https://twitter.com/intent/tweet" class="twitter-share-button" data-show-count="false" 
						    	data-text="Donate a Leave Day"
						    	data-hashtags="DonateALeaveDay,ItTakesAVillage"
						    	>Tweet</a>
						    	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						    </li>
						    <li class="social-facebook">
						    	<!-- <div class="fb-share-button" data-href="https://www.facebook.com/" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div> -->
						    	<div class="fb-share-button" 
								    data-href="https://neilpatel.com/blog/open-graph-meta-tags/" 
								    data-layout="button">
								</div>
							    <!-- <a href="https://www.facebook.com">
							    	<img src="<?=base_url()?>assets/imgs/Facebook-icon.png" class="img-fluid">
							    </a> -->
						    </li>
						    <li class="social-gplus">
							    <a href="https://www.instagram.com/">
							    	<img src="<?=base_url()?>assets/imgs/instagram-icon.png" class="img-fluid">
							    </a>
						    </li>
						    <li class="social-gplus">
						    	<!-- <a href="whatsapp://send" data-text="Donate a Leave Day" data-href="" class="wa_btn wa_btn_s">Share</a> -->
						    	<!-- <div class="sharethis-inline-share-buttons"></div> -->
							    <a href="http://www.gplus.com">
							    	<!-- <img src="<?=base_url()?>assets/imgs/Watsapp-icons.png" class="img-fluid"> -->
							    	<a href="whatsapp://send?text=Donate a Leave Day!" data-action="share/whatsapp/share" class="whatsapp-mobile"><img src="<?=base_url()?>assets/imgs/Watsapp-icons.png" class="img-fluid"></a>
							    	<a href="https://web.whatsapp.com/send?text=Donate" data-action="share/whatsapp/share" target="_blank" class="whatsapp-desktop"><img src="<?=base_url()?>assets/imgs/Watsapp-icons.png" class="img-fluid"></a>
							    </a>
						    </li>
						  </ul>
						</div>
				    </div>
				</div>

				<!-- *** Donate *** -->
				<!-- <div id="donate-button" class="text-center">
					<button type="button" class="btn btn-main">donate</button>
				</div> -->

				<!-- *** Done *** -->
				<div id="done-button" class="text-center">
					<button type="button" class="btn btn-main" id="btn-done">done</button>
				</div>
				<h3 class="count-down text-center"><span id="count-down-span"></span></h3>
				<p class="monthoers">days donated</p>				
			</div>
		</div>
	</div>
	
	<div class="modal fade text-center py-5 subscribeModal-lg"  id="watch-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	    <div class="modal-dialog modal-lg" role="document">
	        <div class="modal-content">
	            <div class="modal-body">
	            	<video width="500" height="350" controls>
	            		<source src="<?=base_url()?>assets/imgs/Website-Horizontal-(withoutcloth 2).mp4" type="video/mp4">
	            	</video>
	            </div>
	        </div>
	    </div>
	</div>
	<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip({
		        placement : 'top'
		    });

		    $(function () {
				$('[data-toggle="popover"]').popover();
			})

		    $('#btn-donate').click(function(){
		    	$('#home-section').slideUp("slow");
		    	$('#donate-container').fadeIn("slow");
	    		$('#thank-you-container').slideUp("slow");
	    		$('#about-container').slideUp("slow");
	    		$('#home-buttons').slideUp("slow");
	    		$('#done-button').slideUp("slow");
	    		$('#donate-button').fadeIn("slow");
	    		// $('#home-section').hide("fast");
		    	// $('#donate-container').show("fast");
	    		// $('#thank-you-container').hide("fast");
	    		// $('#about-container').hide("fast");
	    		// $('#home-buttons').hide("fast");
	    		// $('#done-button').hide("fast");
	    		// $('#donate-button').show("fast");
		    });

		    $('#btn-back').click(function(){
		    	location.reload(true);
		    });

		    $('#btn-about').click(function(){
		    	$('#home-section').slideUp("slow");
		    	$('#thank-you-container').slideUp("slow");
		    	$('#about-container').fadeIn("slow");
		    	$('#donate-container').slideUp("slow");
		    	$('#home-buttons').fadeIn("slow");
		    	$('#done-button').slideUp("slow");
		    	$('#donate-button').slideUp("slow");
		    });

		    $('#btn-done').click(function(){
		    	location.reload(true);
		    });

			$('#donation-form').submit(function(event){
				event.preventDefault();
				$.ajax({
					method: "POST",
					url: "<?php echo site_url('welcome/make_donation');?>",
					data: $("#donation-form").serializeArray()
				})
				.done(function(return_data ){
					$('#home-section').slideUp("slow");
			    	$('#thank-you-container').fadeIn("slow");
			    	$('#about-container').slideUp("slow");
			    	$('#donate-container').slideUp("slow");
			    	$('#home-buttons').slideUp("slow");
			    	$('#done-button').fadeIn("slow");
			    	$('#donate-button').slideUp("slow");
					// alert( "Data returned: " + return_data );
					// try {
					// 	ret = $.parseJSON(return_data);
					// 	if(ret.error === 'Y' ) { 
					// 		// $("#form_msg").empty().append(ret.message);
					// 	} else{

					// 	}

					// } catch(e) {

					// }
				});
			});

			// Test
			$('.social-toggle').on('click', function() {
			  $(this).next().toggleClass('open-menu');
			});

			setInterval("getDonationsCount()", 100);
		});
		function getDonationsCount() {
			$.ajax( {
				method: "GET",
				url: "<?php echo site_url('welcome/get_count');?>",
				dataType    : 'json',
			})
			.done(function(return_data){
				$('#count-down-span').text(return_data);
			});
		}
	</script>
	<!-- <script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="<?=base_url()?>assets/js/whatsapp-button.js";h.appendChild(s);}</script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<!-- <script src="<?=base_url()?>assets/js/whatsapp-button.js"></script> -->
</body>
</html>
