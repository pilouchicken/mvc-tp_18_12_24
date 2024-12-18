<?php
class Task
{
public static function all()
{
$db = Database::getInstance()->getPdo();
$stmt = $db->query("SELECT * FROM tasks ORDER BY created_at DESC");
return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
public static function create($title)
{
// faire la fonction
}
public static function markAsCompleted($id)
{
// faire la fonction
}
public static function delete($id)
{
// faire la fonction
}
}