<?php

namespace App\Cms\Eloquent;

use App\Cms\Interfaces\PostRepositoryInterface;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostRepository extends AbstractRepository implements PostRepositoryInterface
{
    public function __construct(Post $model)
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

    public function datatable(Request $request, $postType): \Illuminate\Database\Query\Builder
    {
        $data = DB::table('posts')
            ->select(
                '*'
            );
        return $data;
    }
}
