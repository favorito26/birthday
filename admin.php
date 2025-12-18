<?php
include 'db.php';
$res = $db->query("SELECT * FROM guests");
?>

<table border="1" cellpadding="10">
<tr>
  <th>Name</th>
  <th>Phone</th>
  <th>RSVP</th>
  <th>Action</th>
</tr>

<?php while($g = $res->fetch_assoc()): ?>
<tr>
  <td><?= $g['name'] ?></td>
  <td><?= $g['phone'] ?></td>
  <td><?= $g['rsvp'] ?></td>
  <td>
     <a href="https://wa.me/91<?= $g['phone'] ?>?text=Assalamu%20Alaikum%20<?= urlencode($g['name']) ?>,%20Here%20is%20our%20wedding%20invite:%20http://localhost:8000/index.php?id=<?= $g['id'] ?>" target="_blank">
        Send Message
     </a>
  </td>
</tr>
<?php endwhile; ?>
</table>
