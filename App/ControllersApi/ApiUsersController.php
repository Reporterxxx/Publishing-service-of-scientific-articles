<?php


namespace App\ControllersApi;


use App\Models\Model;
use App\Models\Users\UsersModel;
use App\Views\Projects\ProjectView;

class ApiUsersController extends ControllerApi
{

    private ProjectView $projectView;
    private UsersModel $usersModel;

    public function __construct()
    {
        parent::__construct();
        $this->projectView = new ProjectView();
        $this->usersModel = new usersModel();
    }
#!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    #Отображение информации о пользователе через контроллер
    public function userInfo(): void
    {
        try {
            $arrayd = $this->usersModel->getUserInfoApi();
            $this->projectView->apiSender($arrayd);
            if (isset($_GET['token_id'])) {
                $this->getLogger()->debug("Запрос через GET");
                $this->getLogger()->debug(print_r($_GET, true));
            } else if (isset($_POST['token_id'])) {
                $this->getLogger()->debug("Запрос через POST");
                $this->getLogger()->debug(print_r($_POST, true));
            } else {
                $this->getLogger()->debug("Контроллер запущен");
            }
            $this->getLogger()->debug(print_r($arrayd, true));
        } catch (\Exception $e) {
            $this->getLogger()->error($e->getMessage());
        }
    }
#!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
}