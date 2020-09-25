<?php


namespace App\Services;


class BaseService implements BaseServiceInterface
{
    protected $modelClass;

    public function __construct($modelClass)
    {
        $this->modelClass = $modelClass;
    }

    public function validationRules(): array
    {
        // TODO: Implement validationRules() method.
        return [];
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->modelClass->all();
    }

    /**
     * @param      $id
     * @param null $with Array of relationships
     * @return mixed
     */
    public function get($id, $with = null)
    {
        if ($with === null) {
            return $this->modelClass->findOrFail($id);
        }

        return $model = $this->modelClass::with($with)->findOrFail($id);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        if (!is_array($data)) {
            $data = $data->toArray();
        }

        return $this->modelClass::create($data);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data)
    {
        if (!is_array($data)) {
            $data = $data->toArray();
        }

        $model = $this->modelClass->findOrFail($id);

        if ($model->wasChanged()) {
            return $model->update($data);
        }

        return $model;
    }

}
