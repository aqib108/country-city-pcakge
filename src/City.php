<?php
namespace aqib08\LocationMap;

use aqib08\LocationMap\Models\CityModel;
use Illuminate\Database\Eloquent\Collection;

class City
{
    protected $model;

    public function __construct(CityModel $model)
    {
        $this->model = $model;
    }

    public function getCityByName(string $name): ?Collection
    {
        return $this->model->where('name', $name)->get();
    }

    public function getCityById(int $id): ?Collection
    {
        return $this->model->where('id', $id)->get();
    }

    public function getCitiesByCountryId(string $countryId): ?Collection
    {
        return $this->model->where('country_id', $countryId)->get();
    }

    public function getCitiesByCountryName(string $name): ?Collection
    {
        return $this->model->where('country_name', $name)->get();
    }

    public function getCitiesByStateId(int $sId): ?Collection
    {
        return $this->model->where('state_id', $sId)->get();
    }
    public function getCitiesByStateName(int $name): ?Collection
    {
        return $this->model->where('state_name', $name)->get();
    }
}