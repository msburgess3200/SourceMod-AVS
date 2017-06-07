<?php $servers = new servers; ?>
<?php $sql = $conn->query("SELECT * FROM servers WHERE id != 1;"); ?>
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Server Name</th>
        <th>Game</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $sql->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['server_name']; ?></td>
        <td><?php echo $servers->idToTitle($row['game']); ?></td>
        <td>
          <a class="btn btn-warning" href="#">Edit</a>
          <a class="btn btn-danger" href="#">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
