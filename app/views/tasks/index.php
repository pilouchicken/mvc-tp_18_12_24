<h1>Liste des tâches</h1>
<a href="/create">Ajouter une tâche</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= $task['id'] ?></td>
                <td><?= $task['title'] ?></td>
                <td><?= $task['is_completed'] ? 'Terminée' :
                        'En cours' ?></td>
                <td>
                    <?php if (!$task['is_completed']): ?>
                        <form method="POST" action="/complete">
                            <input type="hidden" name="id" value="<?=$task['id'] ?>">
                            <button type="submit">Marquer comme terminée</button>
                        </form>
                    <?php endif; ?>
                    <form method="POST" action="/delete">
                        <input type="hidden" name="id" value="<?=$task['id'] ?>">
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>