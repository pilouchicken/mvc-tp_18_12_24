<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des tâches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding-top: 50px; }
        .task-list { max-width: 800px; margin: 0 auto; }
        .completed { text-decoration: line-through; color: #6c757d; }
    </style>
</head>
<body>
    <div class="container task-list">
        <h1 class="mb-4">Liste des tâches</h1>
        <a href="/create" class="btn btn-primary mb-3">Ajouter une tâche</a>
        
        <?php if (empty($tasks)): ?>
            <div class="alert alert-info">Aucune tâche trouvée.</div>
        <?php else: ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td><?= htmlspecialchars($task['id']) ?></td>
                            <td class="<?= $task['is_completed'] ? 'completed' : '' ?>">
                                <?= htmlspecialchars($task['title']) ?>
                            </td>
                            <td>
                                <?= $task['is_completed'] ? 'Terminée' : 'En cours' ?>
                            </td>
                            <td>
                                <?php if (!$task['is_completed']): ?>
                                    <form method="POST" action="/complete" class="d-inline">
                                        <input type="hidden" name="id" value="<?= $task['id'] ?>">
                                        <button type="submit" class="btn btn-sm btn-success">
                                            Marquer comme terminée
                                        </button>
                                    </form>
                                <?php endif; ?>
                                <form method="POST" action="/delete" class="d-inline">
                                    <input type="hidden" name="id" value="<?= $task['id'] ?>">
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>