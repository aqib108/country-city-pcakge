<?php
namespace aqib08\LocationMap;

use aqib08\LocationMap\Models\StateModel;
use Illuminate\Database\Eloquent\Collection;

class State
{
    protected $model;

    public function __construct(StateModel $model)
    {
        $this->model = $model;
    }

    public function getStateByName(string $name): ?Collection
    {
        return $this->model->where('name', $name)->get();
    }

    public function getStateById(int $id): ?Collection
    {
        return $this->model->where('id', $id)->get();
    }

    public function getStateByCountryId(string $countryId): ?Collection
    {
        return $this->model->where('country_id', $countryId)->get();
    }

    public function getStateByCountryName(string $name): ?Collection
    {
        return $this->model->where('country_name', $name)->get();
    }

}