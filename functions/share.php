<?php

function mdsh_share() {
	?>
			<div class="contener_circle">
			<div class="circle base_button">
					<img src="../assets/plus.png">
				</div>
				<a href="https://plus.google.com/108431656900959318505/posts">
					<div class="circle facebook">&nbsp;</div>
				</a>
				<a href="https://plus.google.com/+JonathanLARRADET/posts">
					<div class="circle twitter">&nbsp;</div>
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
				z-index: 3;
			}
			.facebook {
				z-index: 2;
				background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/173024/rbnbrd.png);
				background-size:cover;
			}
			.twitter {
				z-index: 1;
				background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/173024/jonathanlarradet.png);
				background-size:cover;
			}
			.contener_circle:hover .facebook {
				bottom:75px;
			}
			.contener_circle:hover .twitter {
				bottom:140px;
			}
		</style>
		<?php
	}

	add_action( 'wp_footer', 'mdsh_share' );
	?>