<?php

namespace Orion\Tests\Unit\Http\Controllers\Stubs;

use Orion\Http\Controllers\BaseController;
use Orion\Tests\Fixtures\App\Http\Requests\TagRequest;
use Orion\Tests\Fixtures\App\Models\Tag;

class BaseControllerStubWithWhitelistedFieldsAndRelations extends BaseController
{
    protected $model = Tag::class;

    protected $request = TagRequest::class;

    protected function exposedScopes()
    {
        return ['testScope'];
    }

    protected function filterableBy()
    {
        return ['test_filterable_field'];
    }

    protected function sortableBy()
    {
        return ['test_sortable_field'];
    }

    protected function searchableBy()
    {
        return ['test_searchable_field'];
    }

    protected function includes()
    {
        return ['testRelation'];
    }

    protected function alwaysIncludes()
    {
        return ['testAlwaysIncludedRelation'];
    }

    /**
     * @inheritDoc
     */
    public function resolveResourceModelClass(): string
    {
        return $this->getModel();
    }

    protected function bindComponents(): void
    {
        return;
    }
}
