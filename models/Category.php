<?php
require_once __DIR__ . "/Database.php";

class Category
{
    private $id;
    private $name;
    private $db;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
        $this->db = new Database();
    }

    public function getPostList($page = 1, $listSize = 12) {
        $this->db->query("SELECT b.* FROM categories c INNER JOIN books b ON c.id = b.category WHERE c.id = :id LIMIT :limit, :listSize");
        $this->db->bind("id", $this->id);
        $this->db->bind("limit", ($page - 1) * $listSize);
        $this->db->bind("listSize", $listSize);
        return $this->db->resultSet();
    }

    public static function getList($page = 1, $listSize = 10) {
        $db = new Database();
        $db->query("SELECT id, name FROM categories LIMIT :initial, :listSize");
        $db->bind("initial", ($page - 1) * $listSize);
        $db->bind("listSize", $listSize);
        return $db->resultSet();
    }

    public static function get($id) {
        $db = new Database();
        $db->query("SELECT * FROM categories WHERE id = :id");
        $db->bind("id", $id);
        $category = $db->single();
        return new Category($category->id, $category->name);
    }
}