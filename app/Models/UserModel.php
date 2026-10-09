<?php
namespace App\Models;
class UserModel extends PinkPosStore
{
    public function orderBy(string $field): self { return $this; }
    public function findAll(): array { return $this->db->query('SELECT * FROM users ORDER BY id')->fetchAll(); }
    public function find(int $id): ?array
    {
        $statement = $this->db->prepare('SELECT * FROM users WHERE id = ?');
        $statement->execute([$id]);
        return $statement->fetch() ?: null;
    }
    public function insert(array $data): bool
    {
        $now = date('Y-m-d H:i:s');
        return $this->db->prepare('INSERT INTO users (username,full_name,role,avatar,created_at,updated_at) VALUES (?,?,?,?,?,?)')
            ->execute([$data['username'], $data['full_name'], $data['role'], $data['avatar'] ?? null, $now, $now]);
    }
    public function update(int $id, array $data): bool
    {
        return $this->db->prepare('UPDATE users SET username=?,full_name=?,role=?,avatar=?,updated_at=? WHERE id=?')
            ->execute([$data['username'], $data['full_name'], $data['role'], $data['avatar'] ?? null, date('Y-m-d H:i:s'), $id]);
    }
    public function usernameExists(string $username, ?int $exceptId = null): bool
    {
        if ($exceptId === null) {
            $statement = $this->db->prepare('SELECT COUNT(*) FROM users WHERE username = ?');
            $statement->execute([$username]);
        } else {
            $statement = $this->db->prepare('SELECT COUNT(*) FROM users WHERE username = ? AND id <> ?');
            $statement->execute([$username, $exceptId]);
        }
        return (int) $statement->fetchColumn() > 0;
    }
}
