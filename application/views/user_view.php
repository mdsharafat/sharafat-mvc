<?php include "inc/header.php"; ?>

<form action="<?php echo BASE_URL; ?>/UserController/create" method="POST">
    <table>
        <tr>
            <th>Name: </th>
            <td><input type="text" name="name" placeholder="Enter Name..."></td>
        </tr>
        <tr>
            <th>Age: </th>
            <td><input type="text" name="age" placeholder="Enter Age..."></td>
        </tr>
        <tr>
            <th>Email: </th>
            <td><input type="text" name="email" placeholder="Enter Email..."></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Submit"></td>
        </tr>
    </table>
</form>




<?php include "inc/footer.php"; ?>