<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <style>
        table{
            border-collapse: collapse;
            width: auto;
            display: flex;
            justify-content: center;
        }

        th, td{
            border: 2px solid black;
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
        $arrs = ['PHP', 'HTML', 'CSS', 'JS']
    ?>
    <table class="table">
        <tr class="table-item">
            <th>Tên khóa học</th> 
        </tr>  
        <?php 
            for($i=0; $i<4; $i++){
        ?>
        <tr>
            <td class="table-item"><?php echo $arrs[$i]?></td>
        </tr>
        <?php }?>
       
    </table>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
</body>
</html>