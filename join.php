<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="./image/icon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>join as Donor</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><p><b><i class="fa-solid fa-droplet"></i> BLOOD</b><p></div>
            <div class="nav-links">
              <a href="./index.php"><i class="fa-solid fa-house"></i> Home</a>
              <a href="./search.php"><i class="fa-solid fa-magnifying-glass"></i> Search Donors</a>
              <a href="./join.php"><i class="fa-solid fa-plus"></i> Join as Donor</a>
              <a href="#aboutUs"><i class="fa-solid fa-circle-info"></i> About Us</a>
            </div>
        </div>
    </header>
    <main>
        <div class="Registation_box">
            <form action="config/insert_data.php" method="post">
                
                <div>
                    <label for="user_name">Name:</label>
                    <input type="text" class="user_name" id="user_name" name="user_name">
                </div><br>

                <div>
                    <label for="blood_group">Blood Group:</label>
                    <select name="blood_group" id="blood_group">
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="O+">O+</option>
                        <option value="A-">A-</option>
                        <option value="B-">B-</option>
                        <option value="AB-">AB-</option>
                        <option value="O-">O-</option>
                    </select>
                </div><br>

                <div>
                    <label>Gender:</label>
                    <input type="radio" id="gender_male" name="gender" value="Male"> <label for="gender_male">Male</label>
                    <input type="radio" id="gender_female" name="gender" value="Female"> <label for="gender_female">Female</label>
                </div><br>

                <div>
                    <label for="date_of_birth">Date of Birth: </label>
                    <input type="date" class="date_of_birth" id="date_of_birth" name="date_of_birth">
                </div><br>

                <div>
                    <label for="phone_number">Contact Number: </label>
                    <input type="number" class="phone_number" id="phone_number" name="phone_number">
                </div><br>

                <div>
                    <label for="address">Address: </label>
                    <input type="text" class="address" id="address" name="address">
                </div><br>

                <div> 
                    <label for="police_station">Police Station: </label>
                    <input type="text" class="police_station" id="police_station" name="police_station">
                </div><br>

                <div>
                    <label for="district">District:</label>
                    <input type="text" class="district" id="district" name="district">
                </div><br> 

                <div>
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>
    </main>
    <footer>
        <div class="div-1">
            <h1>Blood</h1>
            <P>Blood is and automated blood service that connects blood searchers with voluntray blood donors in a moment through call.</P>
            <br>
            <div class="footer-icon">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-twitter"></i>
            </div>
            <br>
            <p style="color: black;">Terms & Condition | Privacy</p>
        </div>
        <div class="div-2">
            <h1>Important Links</h1>
            <p>Home</p>
            <p>Add Blood Request</p>
            <p>Search Blood Donors in Bangladesh</p>
            <p>Frequently Asked Questions(FAQs)</p>
            <P>About Us</P>
            <p>Contact Us</p>
        </div>
        <div class="div-3">
            <h1>About Blood</h1>
            <p>What is blood?</p>
            <p>What is blood donation</p>
            <p>What can donate blood?</p>
            <p>How often can I donate blood?</p>
            <p>Different Blood Terms</p>
            <p>Different Blood Groups</p>
        </div>
    </footer>
</body>
</html>
