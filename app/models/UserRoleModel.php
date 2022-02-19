<?php

namespace App\Model;

use App\Rule\ModelInterface;
use Core\Model;

class UserRoleModel extends Model {
    /**
     * @var string
     */
    protected $table = "users_role";

    /**
     * @var \string[][]
     */
    protected $pivot_tables = [
        ["table" => "users", "foreign_key" => "user_id"],
        ["table" => "roles", "foreign_key" => "role_id"]
    ];

    /**
     * @return array
     */
    public function all() : array
    {
       return $this->getAll($this->table);
    }

    /**
     * @param int $id
     * @return array
     */
    public function find(int $id) : array
    {
        $users_role = new UserRoleModel();
        $selected_tables = $users_role->selected_tables($users_role->table, $users_role->pivot_tables);
        return $users_role->getById($selected_tables, $id);
    }

    public function update($args, $id)
    {
        return $this->updateForTable($this->table, $id, $args);
    }

    public function delete($id)
    {
         $args = ['id' => $id];
        return $this->deleteFromTable($this->table, $args);
    }




    /**
     * Возвращаем роль пользователя
     *
     * @return array
     */
    public function getByAuthId()
    {
        return $this->getAuthRole('role_id', $this->table, (int)$_SESSION['sid'])[0]->role_id;
    }
}