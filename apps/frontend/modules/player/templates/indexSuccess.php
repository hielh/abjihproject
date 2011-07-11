<h1>Play owners List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Name</th>
      <th>Picture</th>
      <th>Site web</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($play_owners as $play_owner): ?>
    <tr>
      <td><a href="<?php echo url_for('player/edit?id='.$play_owner->getId()) ?>"><?php echo $play_owner->getId() ?></a></td>
      <td><?php echo $play_owner->getUserId() ?></td>
      <td><?php echo $play_owner->getName() ?></td>
      <td><?php echo $play_owner->getPicture() ?></td>
      <td><?php echo $play_owner->getSiteWeb() ?></td>
      <td><?php echo $play_owner->getCreatedAt() ?></td>
      <td><?php echo $play_owner->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('player/new') ?>">New</a>
