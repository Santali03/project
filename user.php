<?php
session_start();
include("connect.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
<link
href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
rel="stylesheet"
    <meta name="description" content="Nasarawa United Football Club Official Website: get the latest news, highlights, fixtures and results." />
<link rel="canonical" href="https://www.nufc.com/" />
<link rel="shortlink" href="https://www.nufc.com/" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nasarawa United FC Official Website | User | NUFC.com</title>
	
	
<style>
	@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap');

:root{
   --blue:#0097e6;
   --orange:#f39c12;
   --red:#e74c3c;
   --white:#fff;
   --light-color:#aaa;
   --black:#222;
   --light-bg:#333;
   --green:#26fc0a;
}

*{
   font-family: 'Nunito', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}


html{
   font-size: 62.5%;
   overflow-x: hidden;
   
}

.btn,
.delete-btn,
.option-btn{
   display: block;
   width: 100%;
   border-radius: .5rem;
   color:var(--white);
   font-size: 1.8rem;
   cursor: pointer;
   padding:1rem 3rem;
   text-transform: capitalize;
   text-align: center;
   margin-top: 1rem;
}

.btn{
   background-color: var(--green);
}

.delete-btn{
   background-color: var(--red);
   margin-top: 250px;
}

.option-btn{
   background-color: var(--orange);
}

.btn:hover,
.delete-btn:hover,
.option-btn:hover{
   background-color: var(--white);
   color:var(--black);
}

.flex-btn{
   display: flex;
   flex-wrap: wrap;
   gap:1rem;
}

.flex-btn > *{
   flex:1;
}

.form-container{
   display: flex;
   align-items: center;
   justify-content: center;
   padding:2rem;
   min-height: 100vh;
}


.profile-container{
   display: flex;
   align-items: center;
   justify-content: center;
   padding:2rem;
   min-height: 100vh;
}

.profile-container .profile{
   width: 40rem;
   border-radius: .5rem;
   background-color: var(--black);
   padding:2rem;
   text-align: center;
}

.profile-container .profile img{
   height: 20rem;
   width: 20rem;
   border-radius: 50%;
   object-fit: cover;
   margin-bottom: .5rem;
}

.profile-container .profile h3{
   font-size: 2.5rem;
   padding:.5rem 0;
   color:var(--white);
}

.update-profile-container{
   display: flex;
   align-items: center;
   justify-content: center;
   padding:2rem;
   min-height: 100vh;
}

.update-profile-container form{
   width: 70rem;
   border-radius: .5rem;
   background-color: var(--black);
   padding:2rem;
   text-align: center;
}

.update-profile-container form .flex{
   text-align: left;
   display: flex;
   flex-wrap: wrap;
   justify-content: space-between;
}

.update-profile-container form .flex .inputBox{
   width: 49%;
}

.update-profile-container form img{
   height: 20rem;
   width: 20rem;
   border-radius: 50%;
   margin-bottom: 1rem;
}

.update-profile-container form .flex .inputBox span{
   font-size: 2rem;
   color:var(--light-color);
   display: block;
   padding-top: 1rem;
}

.update-profile-container form .flex .inputBox .box{
   width: 100%;
   padding:1.2rem 1.4rem;
   border-radius: .5rem;
   font-size: 1.8rem;
   color:var(--white);
   margin:1rem 0;
   background-color: var(--light-bg);
}

.navbar-list {
  width: 100%;
  text-align: right;
  padding-right: 2rem;
  text-decoration: none;
}

.navbar-list li {
  display: inline-block;
  margin: 0 1rem;
  text-decoration: none;
}

.navbar-list li a {
  font-size: 1rem;
  font-weight: 500;
  color: var(--black);
  text-decoration: none;
}

.profile-dropdown-list {
  width: 220px;
  right: 0;
  border-radius: 10px;
  max-height: 0;
  box-shadow: var(--shadow);
  transition: max-height 0.5s;
  overflow:none;
}

.profile-dropdown-list.active {
  max-height: 500px;
}

.profile-dropdown-list-item {
  padding: 0.5rem 0rem 0.5rem 1rem;
  transition: background-color 0.2s ease-in, padding-left 0.2s;
}

.profile-dropdown-list-item a {
  display: flex;
  align-items: center;
  text-decoration: none;
  font-size: 0.9rem;
  font-weight: 500;
  color: var(--black);
}

.profile-dropdown-list-item a i {
  margin-right: 0.8rem;
  font-size: 1.1rem;
  width: 2.3rem;
  height: 2.3rem;
  background-color: var(--secondary);
  color: var(--white);
  line-height: 2.3rem;
  text-align: center;
  margin-right: 1rem;
  border-radius: 50%;
  transition: margin-right 0.3s;
}

.profile-dropdown-list-item:hover {
  padding-left: 1.5rem;
  background-color: var(--secondary-light);
}

.settings{
	color: white;
}



/* media queries  */

@media (max-width:991px){

   html{
      font-size: 55%;
   }

}

@media (max-width:768px){

   .update-profile-container form .flex .inputBox{
      width:100%;
   }

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }

   .flex-btn{
      flex-flow: column;
      gap:0;
   }

}
	
	</style>
	
</head>


<body>


<!-- Navbar start here  -->
      <center>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid"  style="width: 5000px;">

            <img src="image/Logo.JPG" class="card-img-top" alt="..." style="width:70px;height:70px;">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html"></a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="news.html">News</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Players
                </a>
                <ul class="dropdown-menu">

                  <table class="players">
                    <tr> 
                      <th>GOAL KEEPERS </th>
                      <th>DEFENDERS</th>
                      <th>MIDFIELDERS</th>
                      <th>FORWARDS</th>
                      </tr>
                  
                      <tr> 
                        <td>Ameh Godwin</td>
                        <td>Aminu Abubakar </td>
                        <td>Emeka Onyema</td>
                        <td>Chinonso Okonkwo</td>
                      </tr>
                  
                      <tr> 
                        <td>Jerry Isaac</td>
                        <td>Hussaini Mubarak </td>
                        <td>Moses Eneyi</td>
                        <td>Sabo Gambo</td>
                      </tr>
                  
                      <tr> 
                        <td></td>
                        <td>Joshua Ogbole </td>
                        <td>Anas Yusuf</td>
                        <td>Adamu Hassan</td>
                      </tr>
                  
                      <tr> 
                        <td></td>
                        <td>Saviour Chukwu </td>
                        <td>Abubakar Abdullahi</td>
                        <td>Chidera Nduka</td>
                      </tr>
                  
                      <tr> 
                        <td></td>
                        <td>Habibu Alakija </td>
                        <td>Ebuka Ekesi</td>
                        <td>Dauda Maigishiri</td>
                      </tr>
                  
                      <tr> 
                        <td></td>
                        <td>Musa Musa </td>
                        <td>King Osanga</td>
                        <td></td>
                      </tr>
                  
                      <tr> 
                        <td></td>
                        <td>Saminu Dahiru </td>
                        <td></td>
                        <td></td>
                      </tr>
                  
                      </table> 


                  <li><hr class="dropdown-divider" ></li>
                  <li><a class="dropdown-item" href="#">Coach: Abdulmajid Jafar</a></li>
                </ul>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Fixtures
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="fixtures.html">Upcoming Matches</a></li>
                  <li><a class="dropdown-item" href="fixtures.html">Results</a></li>
                  <li><a class="dropdown-item" href="fixtures.html">Table</a></li>
                  <li><a class="dropdown-item" href="fixtures.html">LiveScores</a></li>
                  
                </ul>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Tickets
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="ticket.html">Ticket Information</a></li>
                      <li><a class="dropdown-item" href="ticket.html">How to buy ticket</a></li>
                      <li><a class="dropdown-item" href="ticket.html">Ticket exchange</a></li>
                      <li><a class="dropdown-item" href="ticket.html">Membership Information </a></li>
                      <li><a class="dropdown-item" href="ticket.html">Membership Reward</a></li>
                    </ul>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="shop.html">Shop</a>
                      </li>

              </li>
            </ul>
            <a href="logout.php">
              <button class="btn btn-outline-success" type="login"  >Logout</button>
            </a>
            </form>
          </div>
        </div>
      </nav>
    </center>
 <!-- Navbar ends here  -->



<section class="profile-container">

   

   <div class="profile">
      <img src="pic2.png"/> 
	  
	  <div style="text-align:center; padding:5%;">
      <p  style="font-size:25px; font-weight:bold; color: white;">
       Hello  <?php 
         if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT userdata.* FROM `userdata` WHERE userdata.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
	  
	  
      <a href="pay-become-member.html" class="btn">Become a member</a>
	  
	  
	  
	  
	  <div class="profile-dropdown">
        

        <ul class="profile-dropdown-list">

          <li class="profile-dropdown-list-item">
            <a href="fixtures.html">
              <i class="fa-solid fa-chart-line"></i>
             <h4 class="settings"> Buy Ticket <h4>
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="#">
              <i class="fa-solid fa-sliders"></i>
             <h4 class="settings"> Shop <h4>
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="#">
              <i class="fa-regular fa-user"></i>
             <h4 class="settings"> Edit Profile </h4>
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="#">
              <i class="fa-regular fa-envelope"></i>
             <h4 class="settings"> Inbox </h4>
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="#">
              <i class="fa-regular fa-circle-question"></i>
             <h4 class="settings"> Help & Support <h4>
            </a>
          </li>
          

          
        </ul>
      </div>
      
	  <br>
	  
	  
      <a href="logout.php" class="delete-btn">logout</a>
   </div>

</section>


<!-- footer start here  -->
<div class="whole-footer">
<footer >
        
  <div class="row primary">
    <div class="column about">
      <h3>Sponsors</h3>
      <img src="image/nasarawaGovt.JPG" width="150px" height="150px">
      <p>
        NASARAWA STATE GOVERNMENT &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      </p>
    </div>
    
    <div class="column links">
      <h3>Quick Links</h3>
      <ul>
        <li>
          <a href="index.html">Home</a>
        </li>
        <li>
          <a href="news.html">News</a>
        </li>
        <li>
          <a href="fixtures.html">Fixtures</a>
        </li>
        <li>
          <a href="shop.html">Shop</a>
        </li>
        <li>
          <a href="ticket.html">Tickets</a>
        </li>
      </ul>
    </div>

    <div class="column subscribe">
      <h3>Subscribe</h3>
      <div>
        <input type="email" placeholder="Your email here" />
        <button>Subscribe</button>
      </div>
      <div class="social">
        <a href="https://www.facebook.com/nufclafia">
        <i class="fa-brands fa-facebook-square" ></i>
      </a>

      <a href="https://www.instagram.com/nasarawaunited?igsh=MXN5dxh1NXN0aGJ0dg==">
        <i class="fa-brands fa-instagram-square"></i>
      </a>

      <a href="https://www.x.com/NasarawaUnited?t=LYwDEFYJToD7VVJysZ56uA&s=09">
        <i class="fa-brands fa-twitter-square"></i>
      </a>
      </div>
    </div>
  </div>

  <div class="row secondary">
    <div>
      <p>
        <i class="fas fa-phone-alt"></i>
      </p>
      <p>+2349061315523</p>
    </div>
    <div>
      <p><i class="fas fa-envelope"></i></p>
      <p>nufc@gmail.com</p>
    </div>
    <div>
      <p><i class="fas fa-map-marker-alt"></i></p>
      <p>Bukan Sidi, Lafia Nasarawa State</p>
    </div>
  </div>
  <div class="row copyright">
    <p>Copyright &copy; 2024 | All Rights Reserved</p>
  </div>
</footer>
</div>


<!-- footer end here  -->




<script>
let profileDropdownList = document.querySelector(".profile-dropdown-list");
let btn = document.querySelector(".profile-dropdown-btn");

let classList = profileDropdownList.classList;

const toggle = () => classList.toggle("active");

window.addEventListener("click", function (e) {
  if (!btn.contains(e.target)) classList.remove("active");
});

</script>


</body>
</html>