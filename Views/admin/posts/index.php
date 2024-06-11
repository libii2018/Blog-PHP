<h1>Administrer les articles</h1>
 
<p>
    <a href="?p=admin.posts.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Titre</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($posts as $post): ?>
            <tr>
                <td><?= $post->id; ?></td>
                <td><?= $post->title; ?></td>
                <td>
                    <a href="?p=admin.posts.edit&id=<?= $post->id; ?>" class="btn btn-primary">Editer</a>
                    <form action="?p=admin.posts.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $post->id; ?>">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>