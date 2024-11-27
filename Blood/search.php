<?php
    require_once('config/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./image/rsz_blood-icon.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Search for donor</title>
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
    <form action="" method="post">
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

        <label for="location">Location</label>
        <input type="text" name="location" class="location" id="location">
        <input type="submit" value="Search">
    </form><br>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { 

            $bg = htmlspecialchars($_POST['blood_group'] ?? '');
            $location = htmlspecialchars($_POST['location'] ?? '');
            $sql = "SELECT * FROM users WHERE blood_group = '$bg' AND district = '$location'";

            $result=mysqli_query($conn, $sql);

            ?>
            <table>
                <div text aline="center">
                    <tr>
                        <th>Name</th>
                        <th>Blood Group</th>
                        <th>Gender</th>
                        <th>Adresse </th>
                        <th>Phone Number</th>
                        <th>Call</th>
                    </tr>
                </div>
                <div>
                    <tr>
                        <?php while($row = mysqli_fetch_assoc($result))
                        {
                        ?>
                        <td> <?php echo $row["name"]?></td>
                        <td> <?php echo $row["blood_group"]?></td>
                        <td> <?php echo $row["gender"]?></td>
                        <td> <?php echo $row["police_station"]?></td>
                        <td> <?php echo $row["phone_number"]?></td>
                        <td> <a href="tel:<?php echo $row['phone_number'];?>"><i class="bi bi-telephone-fill"></i></a></td>
                    </tr>
        </div>
            <?php } ?>
        
    </table>

    <?php }
    ?>
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