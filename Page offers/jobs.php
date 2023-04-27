<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="offers.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="3.png">
    <title>Jobs</title>
</head>
<body>
    <div class="banner">
        
        <div class="navbar">
            
         <!--------------navbar---------------->
         <h2 class="logo">Hire<strong> ME</strong></h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="jobs.php">Offers </a></li>
                <li><a href="AboutUs.php">About Us</a></li>
                <li><a href="contactUs.php">Contact Us</a></li>
            </ul>
            <div class="main">
             <a href="login.php"><button type="button">Login</button></a>
              <a  href="register.php">  <button type="button">Register</button></a>
            </div>
       </div>
    </div>

   <!--------------search box---------->
   <div class="form-box">
            <!--     <input class="search-field skills" name="search" type="text"placeholder="Domaine de travai"/>
                <input class="search-field skills" name="location" type="text"placeholder="Poste de travail"/>
                <button class="search-btn" type="button"><span></span>Search</button>
          -->   
                <select id="categories" class="search-field skills">
                    <option > -Select Categories- </option>
                    <?php
                    include('config.php');
                    $query="SELECT * FROM tbl_categories";
                    $do = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($do)){
                        echo '<option value="'.$row['id'].'">'.$row['category'].'</option>';
                    }
                    ?>
                </select>
                <select id="wilaya" class="search-field skills">
                    <option >-Select wilayas-</option>
                    <?php
                    include('config.php');
                    $query="SELECT * FROM tbl_wilaya";
                    $do = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($do)){
                        echo '<option value="'.$row['id'].'">'.$row['nom_wilaya'].'</option>';
                    }
                    ?>
                </select>
                <button class="search-btn" type="button"><span></span>Search</button>
</div>
         </section>
       </div>


</body>
</html>
