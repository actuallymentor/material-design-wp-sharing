<?php

function mdsh_share() {
	global $mdsh_path, $mdsh_share_facebook, $mdsh_share_twitter, $mdsh_share_linkedin;
	
	// get current page url
	if ($_SERVER['HTTPS']) {
		$mdsh_ssl = true;
	}

	if ($mdsh_ssl) {
		$mdsh_current = "https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	} else {
		$mdsh_current = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	}
	$mdsh_current = urlencode($mdsh_current);

	// Get page title
	$mdsh_share_title = get_the_title();

	// Sharing links
	$mdsh_share_facebook = 'https://www.facebook.com/sharer/sharer.php?' . $mdsh_current;
	$mdsh_share_twitter = 'https://twitter.com/intent/tweet?text=' . $mdsh_share_title . ' - ' . '&via=' . esc_attr( get_option('mdsh_twitter') ) . '&url=' . $mdsh_current;
	$mdsh_share_linkedin = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $mdsh_current;

	?>
	<div class="container_circle">
		<div class="circle base_button">
			<i class="mdsh_share fa fa-share-alt"></i>
		</div>
		<a target="_blank" href="<?php echo $mdsh_share_facebook; ?>">
			<div class="circle facebook"><i class="mdsh_share fa fa-facebook"></i></div>
		</a>
		<a target="_blank" href="<?php echo $mdsh_share_twitter; ?>">
			<div class="circle twitter"><i class="mdsh_share fa fa-twitter"></i></div>
		</a>
		<a target="_blank" href="<?php echo $mdsh_share_linkedin; ?>">
			<div class="circle linkedin"><i class="mdsh_share fa fa-linkedin"></i></div>
		</a>
	</div>


	<style>
		.circle {
			width:60px;
			height:60px;
			border-radius:50%;
			position: absolute;
			right: 50%;
			margin-right:-30px;
			bottom: 10px;
			-webkit-transition:all 0.2s linear;
			-moz-transition:all 0.2s linear;
			-ms-transition:all 0.2s linear;
			transition:all 0.2s linear;
		}
		.container_circle:hover .circle, .container_circle.hovered .circle, .base_button {
			box-shadow: 1px 1px 3px #7D7D7D;
		}
		.base_button {
			background-color:#db4531;
			z-index: 4;
		}
		.facebook {
			z-index: 2;
			background-color: #3b5998;
		}
		.twitter {
			z-index: 1;
			background-color: #00aced;
		}
		.linkedin {
			z-index: 3;
			background-color: #007bb6;
		}
		.container_circle {
			position: fixed;
			bottom: 10px;
			right: 50px;
			top: inherit;
		}
		.container_circle:hover .base_button {

		}
		.container_circle:hover .facebook, .container_circle.hovered .facebook {
			bottom:75px;
		}
		.container_circle:hover .twitter, .container_circle.hovered .twitter {
			bottom:140px;
		}
		.container_circle:hover .linkedin, .container_circle.hovered .linkedin {
			bottom:205px;
		}
		.mdsh_share {
			position: absolute;
			color: white;
			top: 50%;
			left: 50%;
			top: 50%;
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
		}
	</style>
	<?php
}

function mdsh_bounce() {
	?>
	<script>
		$( document ).ready(function() {
			
			setTimeout(function() {
				$(".container_circle").toggleClass("hovered");
			}, 1000);
			setTimeout(function() {
				$(".container_circle").toggleClass("hovered");
			}, 3000);
			
		});

	</script>
	<?php
}

add_action( 'wp_footer', 'mdsh_share' );
add_action( 'wp_footer', 'mdsh_bounce' );
?>