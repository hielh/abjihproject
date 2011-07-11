<h1>Articles List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Category</th>
      <th>Title</th>
      <th>Article text</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($articles as $article): ?>
    <tr>
      <td><a href="<?php echo url_for('article/edit?id='.$article->getId()) ?>"><?php echo $article->getId() ?></a></td>
      <td><?php echo $article->getUserId() ?></td>
      <td><?php echo $article->getCategoryId() ?></td>
      <td><?php echo $article->getTitle() ?></td>
      <td><?php echo $article->getArticleText() ?></td>
      <td><?php echo $article->getCreatedAt() ?></td>
      <td><?php echo $article->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('article/new') ?>">New</a>
