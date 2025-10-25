<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="enter your name"><br>
        <input type="text" name="designation" placeholder="enter your designation"><br>
        <input type="number" name="salary" placeholder="enter your salary here "><br>
        <button name="submit">submit</button>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $designation = $_POST['designation'];
        $salary = $_POST['salary'];

      //tax calculation
      if($salary > 50000 && $salary < 100000)
      {
        $tax = $salary * 0.005; //0.05%

      }else{ $tax = 0;

      }
      $netsalary = $salary - $tax ;
      echo "<h3> salary slip <h3>";
      echo  "name : $name <br> ";
      echo  "designation : $designation <br> ";
      echo  " gross salary : $salary <br> ";



      echo "tax (0.05%): Rs. $tax <br>";
      echo "net salary: Rs. $netsalary";


    }
    
    
    ?>
</body>
</html>