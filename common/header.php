<script>
	$(document).ready(function(){
		$(".header .house_icon").click(function(){
			window.location.assign("../home/home.php");
		});
	});
	
</script>

<style>
	.header{
		position:fixed;
		height:10%;
		width:100%;
		background-color:darkblue;
		z-index:3;
	}
	.header h1{
		color: darkblue;
		background-color: white;
		position: absolute;
		top: 50%;
		transform: translate(0%,-50%);
		right: 20px;
		border-radius: 5px;
		padding: 7px;
		font-size: 70px;
		display: flex;
		margin: 0px;
		height: 60%;
		font-family: "b baran";
		padding-top: 0px;
		justify-content: center;
		padding-bottom: 0px;
		align-items: center;
	}
	.header .house_icon{
	position:absolute;
	top:50%;
	transform:translate(0%,-50%);
	left:30px;
	height:80px;
	border-radius:5px;
	padding:2px;
	transition:0.2s;
	}
	.header .house_icon:hover{
		background-color:blue;
		fill:white;
	}
</style>
<div class="header">
	<h1>کتابخانه من</h1>
	<svg class="house_icon" viewBox="0 0 16 16" fill="aqua" xmlns="http://www.w3.org/2000/svg"">
	  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
	  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
	</svg>
</div>