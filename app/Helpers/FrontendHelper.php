<?php

namespace App\Helpers;


use App\Models\Navigation;

class FrontendHelper
{
    public function getPagesBySlug($alias)
    {
        return Navigation::where('alias', $alias)->first();
    }
    public function getPagesById($id)
    {
        return Navigation::where('id', $id)->first();
    }

    public function getNavigationListByParent($parent_id)
    {
        return Navigation::where('id',$parent_id)->first();
    }

}