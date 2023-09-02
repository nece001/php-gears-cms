<?php

namespace Nece\Gears\Cms\Service\CmsModelDefinition;

use Nece\Util\ArrayUtil;

class DeleteDefinitionService extends DefinitionService
{
    public function execute(array $params)
    {
        // 校验参数
        $this->validate->validate($params, array(
            'id' => 'require',
        ));

        $id = ArrayUtil::getValue($params, 'id', '');

        return $this->cmsModelDefinitionRepository->deleteById($id);
    }
}