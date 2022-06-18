<?php
require_once __DIR__ . "/Database.php";

class Book
{
    private $id;
    private $title;
    private $author;
    private $description;
    private $category;
    private $linkToBuy;
    private $image;
    private $db;

    public function __construct($id, $title, $author, $description, $category, $linkToBuy, $image) {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
        $this->category = $category;
        $this->linkToBuy = $linkToBuy;
        $this->image = $image;
        $this->db = new Database;
    }

    public function save()
    {
        $this->db->query("UPDATE books SET title = :title, author = :author, description = :description, category = :category, linkToBuy = :linkToBuy, image = :image WHERE id = :id");
        $this->db->bind(":title", $this->title);
        $this->db->bind(":author", $this->author);
        $this->db->bind(":description", $this->description);
        $this->db->bind(":category", $this->category);
        $this->db->bind(":linkToBuy", $this->linkToBuy);
        $this->db->bind(":image", $this->image);
        $this->db->bind(":id", $this->id);
    }

    public function getAttribute($field) {
        return $this->{$field};
    }

    public static function getList($page = 1, $listSize = 12)
    {
        $db = new Database;
        $db->query("SELECT * FROM books LIMIT :page, :listSize");
        $db->bind(":page", ($page - 1) * $listSize);
        $db->bind(":listSize", $listSize);
        return $db->resultSet();
    }

    public static function search($query, $listSize = 12)
    {
        $db = new Database;
        $db->query("SELECT * FROM books WHERE title LIKE :title LIMIT :listSize");
        $db->bind(":title", "%" . $query . "%");
        $db->bind(":listSize", $listSize);
        return $db->resultSet();
    }

    public static function get($id) {
        $db = new Database;
        $db->query("SELECT * FROM books WHERE id = :id");
        $db->bind(":id", $id);
        $result = $db->single();
        $book = new Book($result->id, $result->title, $result->author, $result->description, $result->category, $result->linkToBuy, $result->image);
        return $book;
    }
}
