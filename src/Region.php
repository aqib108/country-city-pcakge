<?php
namespace aqib08\LocationMap;

use aqib08\LocationMap\Models\StateModel;
use Illuminate\Database\Eloquent\Collection;

class Region
{
    protected $model;

    public function __construct(StateModel $model)
    {
        $this->model = $model;
    }
    public function getRegions(): Collection
    {
        return $this->model->all();
    }

    public function getRegionByName(string $name): ?Collection
    {
        return $this->model->where('name', $name)->get();
    }

    public function getRegionById(int $id): ?Collection
    {
        return $this->model->where('id', $id)->get();
    }

}