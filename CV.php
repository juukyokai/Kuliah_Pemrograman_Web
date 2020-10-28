<?php
    //inserting connection
    include('db_connect.php');
    //Getting Profile Data
    $sql_profile = "SELECT * FROM profil";
    $sql_education = "SELECT * FROM education";
    $sql_p_skills = "SELECT * FROM skill WHERE JENIS = 'P_SKILL'";
    $sql_l_skills = "SELECT * FROM skill WHERE JENIS = 'L_SKILL'";
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>
            Curriculum Vitae
        </title>
        </head>
        <body  class="block base-text">
            <div class="center" id="Landing">
                <h1 class="" style='font-size: 50px'>Curriculum Vitae</h1>
            </div>
            <div class="row">
                <div class="column third" id="profile">
                    <div class="center">
                        <img class="image-prep" src="asset/img4.jpg" style="width: 70%">
                        <?php
                            //executing profile query
                            $result = $conn->query($sql_profile);
                            $row_profile = mysqli_fetch_array($result);                    
                            echo "<h3 class='textLarge'>" . $row_profile['NAMA'] . "</h3>";
                            echo "<h4> Student ID " . $row_profile['NPM'] . "</h4>";
                        ?>
                </div>
                <br>
                <div class="left" id="profile"> 
                    <?php
                        echo "<h4><img class='image-prep' style='width:48px; height:auto' src='asset/icons/location.png'> " . $row_profile['ALAMAT'] . "</h4>";
                        echo "<h4><img class='image-prep' style='width:48px; height:auto' src='asset/icons/phone.png'>    +62" . $row_profile['TELP'] . "</h4>";
                        echo "<h4><img class='image-prep' style='width:48px; height:auto' src='asset/icons/e-mail.png'>   " . $row_profile['MAIL'] . "</h4>";
                        echo "<a href=". $row_profile['GITHUB'] ."><h4><img class='image-prep' style='width:48px; height:auto' src='asset/icons/github.png'>   ". $row_profile['GITHUB'] ."</h4></a>";
                    
                    ?>
                    
                </div>
            </div>
            <div class="column twothird"  id="skill">
                <div id="education" style="padding-bottom: 25px;">
                    <h2 class="spread"><img class="image-prep" style="width:72px; height:auto" src="asset/icons/education.png"> EDUCATION</h2>
                    <ul class='' style="margin-left: 30px;">
                    <?php
                        //executing education query
                        $result = $conn->query($sql_education);
                        echo "";
                        while ($row_education = mysqli_fetch_array($result)){
                            echo ("
                            <li class='padding-small'>
                                (" . $row_education['Y_BEGIN'] . "-" . $row_education['Y_END'] . ") " . $row_education['NAMA'] ."
                            </li>
                            ");
                        }
                    ?>
                    </ul>
                </div>
                <div id="p_skills">
                    <h2 class="spread"><img class="image-prep" style="width:60px; height:auto" src="asset/icons/P_skills.png"> Practical Skills</h2>
                    <ul class="" style="margin-left: 30px;">
                    <?php
                        //executing P skill query
                        $result = $conn->query($sql_p_skills);
                        while($row_p_skills = mysqli_fetch_array($result)){
                            echo ("
                                <li class=''>
                                    <div class='row'>
                                        <div class='column third left'>
                                            <p>" . $row_p_skills['NAMA'] . "</p>
                                        </div>
                                        <div class='column twothird white right' style='width: 250px'>
                                            <div class='center' style='background-color:grey; color:black; height:25px; width:" . $row_p_skills['MASTERY'] . "%'> " . $row_p_skills['MASTERY'] . "% </div>
                                        </div>
                                    </div>
                                </li>
                            ");
                        }
                    ?>
                    </ul>
                </div>
                <div id="l_skills">
                    <h2 class="spread"><img class="image-prep" style="width:60px; height:auto" src="asset/icons/L_skills.png"> Linguistics</h2>
                    <ul class="" style="margin-left: 30px;">
                    <?php
                        //executing P skill query
                        $result = $conn->query($sql_l_skills);
                        while($row_l_skills = mysqli_fetch_array($result)){
                            echo ("
                                <li class=''>
                                    <div class='row'>
                                        <div class='column third left'>
                                            <p>" . $row_l_skills['NAMA'] . "</p>
                                        </div>
                                        <div class='column twothird white right' style='width: 250px'>
                                            <div class='center' style='background-color:grey; color:black; height:25px; width:" . $row_l_skills['MASTERY'] . "%'> " . $row_l_skills['MASTERY'] . "% </div>
                                        </div>
                                    </div>
                                </li>
                            ");
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </div>        
        </body>
</html>

<?php
	$conn->close();	
?>