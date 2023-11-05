<?php
    $inputUsername = $_POST['inputUsername'];
    $inputEmail = $_POST['inputEmail'];
    $inputFirstName = $_POST['inputFirstName'];
    $inputLastName = $_POST['inputLastName'];
    $inputAddress = $_POST['inputAddress'];
    $inputCity = $_POST['inputCity'];
    $inputCountry = $_POST['inputCountry'];
    $inputPostalCode = $_POST['inputPostalCode']; 

    //database connection
    $conn = new mysqli('localhost', 'root', '', 'motorpool')
    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(username,email,firstname,lastname,address,city,country,postalcode)
            values(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssi" ,$inputUsername, $inputEmail, $inputFirstname, $inputLastname, $inputAddress, $inputCity, $inputCountry, $inputPostalCode);
        $stmt->execute();
        echo "registration successful";
        $stmt->close();
        $conn->close();

    }
    

?>