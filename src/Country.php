<?php
namespace aqib08\LocationMap;

use aqib08\LocationMap\Models\CountryModel;
use Illuminate\Database\Eloquent\Collection;

class Country
{
    protected $model;

    public function __construct(CountryModel $model)
    {
        $this->model = $model;
    }

    public function getCountries(): Collection
    {
        return $this->model->all();
    }

    public function getCountryByName(string $name): ?Collection
    {
        return $this->model->where('name', $name)->get();
    }

    public function getCountryById(int $id): ?Collection
    {
        return $this->model->where('id', $id)->get();
    }

    public function getCountryByPhoneCode(string $code): ?Collection
    {
        return $this->model->where('phone_code', $code)->get();
    }

    public function getCountryByRegion(int $regionId): ?Collection
    {
        return $this->model->where('region_id', $regionId)->get();
    }

    public function getCountryBySubRegion(int $subRegionId): ?Collection
    {
        return $this->model->where('subregion_id', $subRegionId)->get();
    }
}