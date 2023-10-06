<?php

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $age=$_POST["age"];
    $country=$_POST["country"];
    $gender=$_POST["gender"];
    $jobrole=$_POST["jobrole"];
    $contact=$_POST["contact"];
    // $language="";
    // foreach($language as $row){
    //     $language .=$row . ",";
    // }
    $conn = mysqli_connect("localhost","root","","data");
    $query="INSERT INTO FORM VALUES('','$name','$age','$country','$gender','$jobrole','$contact')";
    mysqli_query($conn,$query);
    echo
    "
    <script>alert('Data Inserted Sucessfully'); </script>
    ";

}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Employee Details</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <fieldset>
      <legend>Employee Details</legend>
      <form action="" method="post" >
        <table>
            <tr>
                <td> Name :</td>
                 <td>
                 <input type="text" name="name"required value="">
                </td>
            </tr>
            <tr>
                <td>Age :</td>
                 <td>
                 <input type="text" name="age"required value="">     
                </td>
            </tr>
            <tr>
                <td>Mobile No:</td>
                 <td>
                    <input type="text" name="contact"required value="">
                </td>
            </tr>
            <tr>
                <td>Country:</td>
                 <td>
                 <select class=""name="country" required>
                       <option value=""select hidden>Select Country</option>
                        <option value="USA">USA</option>
                        <option value="India">India</option>
                        <option value="UK">UK</option>
                        <option value="Pakistan">Pakistan</option>

                </select>
                </td>
            </tr>
            <tr>
                <td>Gender :</td>
                 <td>
                 <input type="radio" name="gender" value="Male" required>Male
                 <input type="radio" name="gender" value="Female">Female
                </td>
            </tr>
            <tr>
                <td>Job Role :</td>
                 <td>
                 <select class=""name="jobrole" required>
                    <option value=""select hidden>Select Job Role</option>
                    <option value="JavaDeveloper">Java Developer</option>
                    <option value="AndroidDeveloper">Android Developer</option>
                    <option value="WebDeveloper">Web Developer</option>
                    <option value="DataEngineer">Data Engineer</option>
                    <option value="MLEngineer">ML Engineer</option>
                </select>
                </td>
            </tr>
            
            <tr>
                <td>
                    <button type="submit"name="submit">Submit</button>
                </td>
                <td><button type="clear" name="clear">Clear</button>
            </tr>
        </table>
      </form>
    </fieldset>
  </body>
</html>