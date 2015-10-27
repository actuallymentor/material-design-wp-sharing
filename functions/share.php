<?php

function mdsh_share() {
	global $mdsh_path;
	?>
	<div class="container_circle">
		<div class="circle base_button">
			<i class="mdsh_share fa fa-share-alt"></i>
		</div>
		<a href="https://plus.google.com/108431656900959318505/posts">
			<div class="circle facebook"><i class="mdsh_share fa fa-facebook"></i></div>
		</a>
		<a href="https://plus.google.com/+JonathanLARRADET/posts">
			<div class="circle twitter"><i class="mdsh_share fa fa-twitter"></i></div>
		</a>
		<a href="https://plus.google.com/+JonathanLARRADET/posts">
			<div class="circle linkedin"><i class="mdsh_share fa fa-linkedin"></i></div>
		</a>
	</div>


	<style>
		.circle {
			width:60px;
			height:60px;
			box-shadow: 1px 1px 3px #7D7D7D; 
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
			bottom: 0;
			left: 40px;
			top: inherit;
		}
		.container_circle:hover .facebook {
			bottom:75px;
		}
		.container_circle:hover .twitter {
			bottom:140px;
		}
		.container_circle:hover .linkedin {
			bottom:205px;
		}
		.mdsh_share {
			position: relative;
			color: white;
			top: 50%;
			left: 50%;
			top: 50%;
			-webkit-transform: translate(-50%, -80%);
			-ms-transform: translate(-50%, -80%);
			transform: translate(-50%, -80%);
		}
	</style>
	<?php
}

add_action( 'wp_footer', 'mdsh_share' );
?>