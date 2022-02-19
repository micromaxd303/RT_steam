<?php

namespace App\Controller;

use App\Model\UserRoleModel;
use App\Policy\UserRolePolicy;
use App\Rule\ControllerInterface;
use App\Service\DataBuilder;
use App\Service\DeleteFile;
use App\Service\UploadFile;
use Core\View;

class UserRoleController extends UserRolePolicy implements ControllerInterface {
    use UploadFile;
    use DeleteFile;
    use DataBuilder;

    /**
     * @throws \Exception
     */
    public function index() : void
    {
        $users_role = new UserRoleModel();
        $result = $users_role->all();

        View::render('administrator/roles/index.php', ['users' => $result]);
    }

    /**
     * @throws \Exception
     */
    public function get($id) : object
    {
        $user = new UserRoleModel();
        return $user->find($id);
    }

    public function show() : void
    {
        // TODO: Implement show() method.
        View::render('administrator/roles/show.php');
    }

    public function edit()
    {
        // TODO: Implement edit() method.
        $users = $this->get($_GET['id']);

        View::render('administrator/roles/edit.php', ['roles' => $users]);
    }

    public function store()
    {
        // TODO: Implement store() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }
}