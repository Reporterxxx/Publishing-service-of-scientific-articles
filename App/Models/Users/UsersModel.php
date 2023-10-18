<?php


namespace App\Models\Users;

use App\Models\Model;
use PDO;
use PDOException;
use function Sodium\add;

class UsersModel extends Model
{

#!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    #Отобразить все заявки из бд, которые находятся все архива запрос
    public function getUserInfoApi(): bool|array|null
    {

        $query = "SELECT user.id as user_id, user.name as user_name
        FROM user user
        WHERE archive = 0
        ORDER BY id ASC;";

        return $this->createRequestArray($query);

    }
#!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

#!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    # Костыльный промежуточный метод для получения данных запроса
    private function createRequestArray(string $query): array
    {
        $requests = $this->getAllWithNoParams($query);

        // $name_id = array_combine($this->getUserId(), $this->getUserName());

        // $worker = array_combine($this->getWorkerId(), $this->getWorkerName());
        // $copyarray = $requests;
        // foreach ($copyarray as $key => $value) {
        //     $requests[$key]['user_name_surname'] = $name_id[$value['user_id']];
        // }
        // foreach ($copyarray as $key => $value) {
        //     if ($requests[$key]['worker_id'] != null) {
        //         $requests[$key]['worker_name_surname'] = $worker[$value['worker_id']];
        //     }
        // }
        return $requests;
    }
#!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
}
