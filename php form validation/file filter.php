 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <style>
    table, tr,td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    tr,td{
        padding: 5px;
    }
 </style>
 <body>
<table>
    <tr>
        <td>filter name</td>
        <td>filter ID</td>
    </tr>
    <?php
      foreach (filter_list() as $id => $filter) {
            echo "<tr> 
                    <td>{$filter}</td> 
                    <td>{$id}</td> 
                  </tr>";
        }
    ?>
</table>
 </body>
 </html>