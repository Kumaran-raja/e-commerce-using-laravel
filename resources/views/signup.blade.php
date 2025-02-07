<?php
    $serverName="localhost";
    $username="root";
    $dbname="ECOMMERCE";
    $dbpassword="Kumaranraja@22_02$";
    $connect= new mysqli($serverName,$username,$dbpassword,$dbname);
    if($connect->connect_error){
        die("connection faild" .$connect->connect_error);
    }
    $errors=[];
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=trim($_POST["name"]);
        $phonenumber=trim($_POST["phonenumber"]);
        $email=trim($_POST["email"]);
        $password=trim($_POST["password"]);
        $confirmpassword=trim($_POST["confirmpassword"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors['email']="Email Pattern is Not Matching";
        }
        if($password !== $confirmpassword){
            $errors['password']="Password Not Matching";
        }
        if(empty($errors)){
            $hashedPassword=password_hash($password,PASSWORD_BCRYPT);
            $statement=$connect->prepare("INSERT INTO USERS(NAME,PHONE_NUMBER,EMAIL,PASSWORD) values(?,?,?,?)");
            $statement->bind_param("ssss",$name,$phonenumber,$email,$hashedPassword);
            if($statement->execute()){
                echo "register Successfully";
            }
            else{
                echo "Error: ".$statement->error;
            }
            $statement->close();
        }
        else {
            foreach ($errors as $error) {
                echo "<p style='color:red;'>$error</p>";
            }
        }
    }
    $connect->close();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<h1 class="text-center text-4xl my-5 font-bold">Signup</h1>
<form action="{{route('signup')}}" method="post" class="block text-center">
    @csrf
    <input type="text" name="name" placeholder="Name" class="p-3 border border-black rounded-lg m-4 w-2/4 lg:w-1/4" required><br>
    <input type="text" pattern="[0-9]{10}" name="phone_number" placeholder="Phone Number" class="p-3 border border-black rounded-lg m-4 w-2/4 lg:w-1/4" required><br>
    <input type="text" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" name="email" placeholder="Email" class="p-3 border border-black rounded-lg m-4 w-2/4 lg:w-1/4" required><br>
    <input type="text" name="password" placeholder="Password" class="p-3 border border-black rounded-lg m-4 w-2/4 lg:w-1/4" required><br>
    <input type="text" name="confirmpassword" placeholder="Confirm Password" class="p-3 border border-black rounded-lg m-4 w-2/4 lg:w-1/4" required><br>
    <input type="submit" class="bg-green-700 p-3 text-white rounded-lg">
</form>

<p class="text-center mt-5">Already Have An Account? <a class="text-red-500 font-bold cursor-pointer">Login</a></p>
</body>
</html>
