<?php $adz = new adz; ?>
<?php $sql = $conn->query("SELECT * FROM adz;"); ?>
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Game</th>
        <th>Server</th>
        <th>Text</th>
        <th>Location</th>
        <th>Flags</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $sql->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['game']; ?></td>
        <td><?php echo $row['server']; ?></td>
        <td><?php echo $adz->convertColor($row['text']); ?></td>
        <td><?php echo $row['loc']; ?></td>
        <td><?php echo $row['flags']; ?></td>
        <td>
          <a class="btn btn-warning" href="#">Edit</a>
          <a class="btn btn-danger" href="#">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
