<?php

namespace App\Cms\Eloquent;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cms\Interfaces\CategoryRepositoryInterface;

class CategoryRepository extends AbstractRepository implements CategoryRepositoryInterface
{

    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    /**
     * @inheritDoc
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * @inheritDoc
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * @inheritDoc
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * @inheritDoc
     */
    public function update($id, array $attributes)
    {
        $result = $this->model->find($id);
        if($result) {
            $result->update($attributes);
            return $result;
        }
        return false;
    }

    /**
     * @inheritDoc
     */
    public function delete($id)
    {
        $result = $this->model->find($id);
        if($result) {
            $result->delete();
            return true;
        }
        return false;
    }

    public function singleWhere($where)
    {
        return $this->model->where($where)->first();
    }

    public function datatable(Request $request): \Illuminate\Database\Query\Builder
    {
        $data = DB::table('categories')
            ->select(
                '*'
            );
        return $data;
    }

    public function getCategories($orderby, $order)
    {
        return $this->model->orderBy($orderby, $order)->get();
    }
}
