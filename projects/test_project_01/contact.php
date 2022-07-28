<?php include('const/header.php'); ?>

<div class="contact_us">
    <div style="text-align:center">
        <h2 style ="color: #fff; padding: 10px 0px">Contact Us</h2>
        <p style ="color: #fff; padding: 10px 0px">Swing by for a cup of coffee, or leave us a message:</p>
    </div>
    <div class="row">
        <div style= "float: left;width: 40%; margin-top: 6px; padding: 20px;" class="column">
            <form method="post">
                <label style="color: #fff" for="fname">First Name</label>
                <input style="width: 97%; padding: 10px; border: 1px solid #ccc; margin-top: 6px; margin-bottom: 16px; resize: vertical;" type="text" name="firstname" placeholder="Your name..">
                <label style="color: #fff" for="lname">Last Name</label>
                <input style="width: 97%; padding: 10px; border: 1px solid #ccc; margin-top: 6px; margin-bottom: 16px; resize: vertical; " type="text" name="lastname" placeholder="Your last name..">
                <label style="color: #fff" for="country">Country</label>
                <select style="width: 97%; padding: 10px; border: 1px solid #ccc; margin-top: 6px; margin-bottom: 16px; resize: vertical; " name="country">
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="India">India</option>
                    <option value="usa">USA</option>
                </select>
                <label style="color: #fff" for="subject">Subject</label>
                <textarea style="width: 97%; padding: 10px; border: 1px solid #ccc; margin-top: 6px; margin-bottom: 16px; resize: vertical; " name="subject" placeholder="Write something.." style="height:170px"></textarea>
                <input name="submit" style= "background-color: #f9004d; color: white; padding: 12px 20px; border: none; cursor: pointer;" type="submit" value="Submit">
            </form>
            <?php 
            if($_POST['submit']){
                $f_name = $_POST['firstname'];
                $l_name = $_POST['lastname'];
                $country = $_POST['country'];
                $country = $_POST['country'];
                $sub = $_POST['subject'];
                if($f_name !="" && $l_name !="" && $country != "" && $sub != ""){
                    $con = mysqli_connect('localhost','root','','practice_php');
                    $quary = "insert into practice_1_contact values('','$f_name','$l_name','$country','$sub')";
                    $result = mysqli_query($con,$quary);
                    if($result){
                        echo "<script>alert('Form submit succesfully')</script>";
                    }

                }else{
                    echo "<script>alert('Failed to submit')</script>";
                }
            
                header("Location:index.php");
            }
            ?>


        </div>
    </div>
</div>



 
  
  

