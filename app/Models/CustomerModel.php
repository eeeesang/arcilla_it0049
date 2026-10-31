<?php
namespace App\Models;
class CustomerModel extends PinkPosStore
{
    public function orderBy(string $field): self { return $this; }
    public function findAll(): array { return $this->db->query('SELECT * FROM customers ORDER BY id')->fetchAll(); }
    public function find(int $id): ?array
    {
        $statement = $this->db->prepare('SELECT * FROM customers WHERE id = ?');
        $statement->execute([$id]);
        return $statement->fetch() ?: null;
    }
    public function insert(array $data): bool
    {
        $now = date('Y-m-d H:i:s');
        return $this->db->prepare('INSERT INTO customers (full_name,email,phone,created_at,updated_at) VALUES (?,?,?,?,?)')
            ->execute([$data['full_name'], $data['email'], $data['phone'], $now, $now]);
    }
    public function update(int $id, array $data): bool
    {
        return $this->db->prepare('UPDATE customers SET full_name=?,email=?,phone=?,updated_at=? WHERE id=?')
            ->execute([$data['full_name'], $data['email'], $data['phone'], date('Y-m-d H:i:s'), $id]);
    }
}
