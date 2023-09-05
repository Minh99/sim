<?php
header("refresh: 3; https://boisimkinhdich.com/public/");

	echo '
		<style>
			.loader {
				width: 48px;
				height: 48px;
				border-radius: 50%;
				position: relative;
				animation: rotate 1s linear infinite
			}
			.loader::before , .loader::after {
				content: "";
				box-sizing: border-box;
				position: absolute;
				inset: 0px;
				border-radius: 50%;
				border: 5px solid #FFF;
				animation: prixClipFix 2s linear infinite ;
			}
			.loader::after{
				inset: 8px;
				transform: rotate3d(90, 90, 0, 180deg );
				border-color: #FF3D00;
			}

			@keyframes rotate {
				0%   {transform: rotate(0deg)}
				100%   {transform: rotate(360deg)}
			}

			@keyframes prixClipFix {
				0%   {clip-path:polygon(50% 50%,0 0,0 0,0 0,0 0,0 0)}
				50%  {clip-path:polygon(50% 50%,0 0,100% 0,100% 0,100% 0,100% 0)}
				75%, 100%  {clip-path:polygon(50% 50%,0 0,100% 0,100% 100%,100% 100%,100% 100%)}
			}
			
			div {
				position: absolute;
				top: 0;
				bottom: 0;
				left: 0;
				right: 0;
				display: flex;
				align-items: center;
				justify-content: center;
				background: #f1d6d6
			}
		</style>
		<div>
			<span class="loader"></span>
		</div>

	';
?>