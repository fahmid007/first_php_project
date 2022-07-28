<?php include('const/header.php'); ?>

		<div class="content">
			<h4>Hello, my name is</h4>
			<h1>Fahmid <span>Imtiaz</span></h1>
			<h3>I am a Web Developer</h3>
			<div class="newslatter">
				<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<input type="email" name="email" id="mail" placeholder="Enter Your Email">
					<input type="submit" name="submit" value="Lets Start">
				</form>
				<?php 
					if($_POST['submit']){
						$email_add = $_POST['email'];  //adding to the variable

						if($email_add!=""){
							$con = mysqli_connect('localhost','root','','practice_php');
							$quary = "insert into practice_1 values('','$email_add')";
							$data = mysqli_query($con,$quary);

							if($data){
								echo "<h5 class='notification'>Email adsress submitted succesfully</h5>";
							}
						}else{
							echo "<h5 class='notification'>Failed to submit email adsress</h5>";
						}
						header("Location:index.php");
					}
				?>
			</div>
		</div>
	</div>
	<!----Head Section End---->

	<!----About Section start---->
	<section class="about" style="background-color: #191919;">
		<div class="main_abt">
			<img src="images/main-img.png" alt="">
		
			<div class="abt_txt">
				<h2>About Me</h2>
				<h3>Web Developer <span>& Designer</span></h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, fugiat aperiam. Sed, nesciunt dolor excepturi blanditiis officia suscipit optio assumenda sit. Sequi at minima nemo nam error. Dolorum quia expedita dolores cumque quis? Pariatur odio illo voluptatem iure dolores, aspernatur nemo tenetur sapiente quidem saepe repudiandae hic aut voluptate. Ex veniam accusantium vitae atque nihil dignissimos ea nostrum quod voluptatibus.</p>
				<input type="submit" class="abt_btn" value="Let's talk">
			</div>
		</div>
	</section>

	<!----About Section End---->

	<!----Services Section start---->

	<section class="service">
		<h2>Our Services</h2>
		<div class="card_list">
			<div class="card">
				<i class="fa fa-reorder"></i>
				<h3>Web Development</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ducimus dolores quaerat in voluptatibus animi provident optio, adipisci maxime mollitia earum aut exercitationem quae sequi.</p>
				<a href="#" class="service_btn">Read More</a>
			</div>
			<div class="card">
				<i class="	fa fa-user"></i>
				<h3>Web Development</h3>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias inventore facilis eligendi adipisci omnis nesciunt dignissimos impedit officia sequi, quia rem eos iusto doloribus necessitatibus?</p>
				<a href="#" class="service_btn">Read More</a>
			</div>
			<div class="card">
				<i class="fa fa-bell"></i>
				<h3>Web Development</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium libero voluptatum repellat. Ad numquam ut tempora excepturi corporis, soluta ex? Itaque quibusdam pariatur tempore?</p>
				<a href="#" class="service_btn">Read More</a>
			</div>
		</div>
	</section>


	<!----Services Section End---->


	<!----Hire Section Start---->
	<section class="hire">
		<div class="hire_me">
			<h3>Let Me Get You A Beautiful Website</h3>
			<a href="#" class="hire_btn">Hire Me</a>
		</div>
	</section>


	<!----Hire Section End---->

	<?php include('const/footer.php'); ?>