<?php


namespace App\Services\Users;


use App\Misc\Enums\RolesEnum;
use App\Models\Role;
use App\Models\User;
use App\Services\BaseService;
use Illuminate\Support\Facades\Hash;

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

    public function create($data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $user
            ->roles()
            ->attach(Role::where('name', RolesEnum::User)->first());

        return $user;
    }
}
