<?php
namespace aqib08\LocationMap;

use aqib08\LocationMap\Models\CityModel;
use Illuminate\Database\Eloquent\Collection;

class SubRegion
{
    protected $model;

    public function __construct(CityModel $model)
    {
        $this->model = $model;
    }

    public function getSubRegionByName(string $name): ?Collection
    {
        return $this->model->where('name', $name)->get();
    }

    public function getSubRegionById(int $id): ?Collection
    {
        return $this->model->where('id', $id)->get();
    }

    public function getSubRegionByRegionId(string $rId): ?Collection
    {
        return $this->model->where('region_id', $rId)->get();
    }

    public function getSubRegionByRegionName(string $name): ?Collection
    {
        return $this->model->where('region_name', $name)->get();
    }

}