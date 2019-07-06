<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Emailer</title>
</head>
<style>
	@font-face { 
		font-family: Monthoers; src: url('<?=base_url()?>assets/fonts/Monthoers.ttf'); 
	}
	h1, h4, a {
		font-family: Monthoers !important;
		letter-spacing: 3px;
	}
	h1 {
		font-size: 3rem;
		margin-top: 0;
	}
	h4 {
		font-size: 1.3rem;
		margin-bottom: 10px;
	}
body{
	margin: 0;
}
table {
	background: url(<?=base_url()?>assets/imgs/Website-Horizontal.png) no-repeat center center fixed;
	background-size: cover;
}
.container {
	background: #fff;
	/*padding: 5px;*/
	/*padding-top: 0;*/
	font-family: helvetica;
	text-align:center;
}
.btn {
  box-sizing: border-box;
  appearance: none;
  /*background-color: transparent;*/
  background-image: url("<?=base_url()?>assets/imgs/Button-Mat.png");
  background-repeat: no-repeat;
  /*border: 2px solid $red;*/
  /*border-radius: 0.6em;*/
  color: #585856;
  cursor: pointer;
  /*display: flex;*/
  align-self: center;
  font-size: 1.5rem;
  font-weight: 400;
  line-height: 1;
  /*margin: 20px;*/
  padding: 0.2em 1em;
  text-decoration: none;
  text-align: center;
  /*text-transform: uppercase;*/
  font-family: 'Monthoers', sans-serif;
  font-weight: 400;

  &:hover,
  &:focus {
    color: #fff;
    outline: 0;
  }
}
.btn-donate {
	
}
</style>

<body style="text-align:center;font-family:Arial, Helvetica, sans-serif;">
	<div class="container">
		<table style="margin:auto; float:none; width:600px; text-align:left;">
			<tr>
				<td style="text-align: center; padding-bottom: 7vh;">
					<img style="margin-top:25px; width: 10vh;" src="<?=base_url()?>assets/imgs/nestle_new.png"  alt="logo" />
			        <h4 class="village-text">it takes a village</h4>
					<h1 id="leave-h1">DONate A leAve DAY</h1>
					<div style="width: 500px; margin-left: 50px;">
						<img src="<?=base_url()?>assets/imgs/Mat-Art.png" style="width: 100%; margin-bottom: 10px;">
						<p style="text-align: left; font-size: 12px;">At Nestle we believe that for a child to grow up healthy, they need to start healthy and stay healthy. In Kenya, mothers spend less time breastfeeding their children and more time securing their jobs at the cost of their babies' wellbeing. We can change that with the simple act of giving more time. Time to be with their babies, bond with their babies, breastdee their babies. Donate a leave day today and give more time to a deserving mother.
						</p><br>
						<a href="#" type="button" class="btn btn-donate">donate</a>
					</div>
					
				</td>
		        
				
		    </tr>
		</table>
	</div>
</body>