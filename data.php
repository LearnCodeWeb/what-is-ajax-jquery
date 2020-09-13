<?php
$db =   new mysqli('localhost', 'root', '', 'learncodeweb_demo');

if (isset($_GET['action']) and $_GET['action'] == "ok") {
    $uQry   =   $db->query('SELECT * FROM users WHERE useremail="' . $_GET['email'] . '" ');
} else {
    $uQry   =   $db->query('SELECT * FROM users WHERE useremail="' . $_POST['email'] . '" ');
}
$row    =   $uQry->fetch_assoc();
?>
<tr>
    <td>1</td>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['useremail'] ?></td>
    <td><?php echo $row['userphone'] ?></td>
    <td><?php echo $row['dt'] ?></td>
</tr>