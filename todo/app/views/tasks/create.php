<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une tâche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding-top: 50px; }
        .task-form { max-width: 500px; margin: 0 auto; }
    </style>
</head>
<body>
    <div class="container task-form">
        <h1 class="mb-4">Ajouter une tâche</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Titre de la tâche</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="title" 
                    name="title" 
                    required 
                    maxlength="255"
                    placeholder="Entrez le titre de votre tâche"
                >
                <div class="form-text">Soyez précis et concis.</div>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter la tâche</button>
            <a href="/" class="btn btn-secondary ms-2">Annuler</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>