<?php
include "inc/function.php";
include "inc/db.php";
include "cookie.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الاستعارة</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .h{
            padding: 30px;
        }
        .pp{
            margin-top: -30px;
            padding: 10px;
            padding-left: 35px;
        }
        .nav-item{
            list-style: none;
            margin-left:600px ;
            margin-top: 395px;
        }
        .article button{
            cursor: pointer;
        }
        li{
            margin-left: 675px;
            color: red;
        }
        .sscc{
            margin-left: 50px;
        }
        .mak{
            margin-left: 850px;
        }
        .addll{
            margin-left: 1500px;
            padding-top: 10px;
        }
        a{
            color: red;
        }
    </style>
</head>
<body>
    <div class="addll">
    <a href="admin/addcat.php">اضافة طالب</a>
    <br>
    <a href="admin/addcat2.php">اضافة كتاب</a>
    <br>
    <a href="admin/addcat3.php">مدة الاستعارة</a>
    <br>
    <a href="photo.php">الصور</a>
    </div>
        <?php get_cat(); ?>
        <div class="c"></div>
    </div>
</div>
<?php
$query = 'SELECT * FROM posts';
$result = mysqli_query($connect, $query);

if(isset($result)){
    while ($roww = mysqli_fetch_assoc($result)){?>
    
        <div class="article">
            <div class="container">
                <h3 class="h"><a href="post.php?id=<?php echo$roww['id']?>"> <?php  echo $roww['title'];?></a></h3>
                <p class="pp"><?php echo $roww['post'];?></p>
                <a href="post.php?id=<?php echo$roww['id']?>"><button>Read in page</button></a>
            </div>
        </div>

    <?php
    }
    
};
?>
<li class="nav-item">
    <a class="nav-link" href="#">&copy; Soliman Abdallah & Mohammed Abdallah </a>
    <br>
    <div class="sscc">
    <a class="nav-link" href="#">&copy; مدرسة الصحابة الرسمية للغات </a>
    </div>
    <br>
    <div class="mak">
    <a class="nav-link" href="#">&copy; تحت اشراف م/ناهد </a>
    </div>
</li>
</body>
</html>