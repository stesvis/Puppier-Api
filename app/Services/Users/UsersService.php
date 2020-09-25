<?php


namespace App\Services\Users;


use App\Models\User;
use App\Services\BaseService;

class UsersService extends BaseService implements UsersServiceInterface
{
    public function __construct(User $modelClass)
    {
        parent::__construct($modelClass);
    }

    public function validationRules(): array
    {
        // TODO: Implement validationRules() method.
    }
}
