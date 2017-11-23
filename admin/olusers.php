<h2>Всі користувачі</h2>
<?php
include("Connect.php");
if(isset($_SESSION['name'])) {?>
    <a href="MP.php?page=adm">Додати права адміністратора</a>
    <?php $r = $db->query("select login, admin from users");
    while ($row = $r->fetch_assoc())
        if ($_SESSION['name'] == $row['login'] && $row['admin'] == 1) {
            $r = $db->query("select * from users");
            ?>
            <table>
                <tr>
                    <td>Ім’я</td>
                    <td>Прізвище</td>
                    <td>По-батькові</td>
                    <td>Область</td>
                    <td>Логін</td>
                    <td>Email</td>
                    <td>Телефон</td>
                    <td>Admin</td>
                </tr>
                <?php
                while ($row = $r->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['surname']; ?></td>
                        <td><?php echo $row['pername']; ?></td>
                        <td><?php echo $row['obl']; ?></td>
                        <td><?php echo $row['login']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><input width="20" type="checkbox" disabled <?php if ($row['admin'] == 1) echo 'checked'; ?>>
                        </td>
                    </tr>
                <?php }
                ?>
            </table>
        <?php }
    else
        echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php">';
}
else
    echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php">';
?>