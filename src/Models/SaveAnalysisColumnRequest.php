<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class SaveAnalysisColumnRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $columns;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $regId;
    protected $_name = [
        'lang'    => 'Lang',
        'columns' => 'columns',
        'regId'   => 'regId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->columns) {
            $res['columns'] = $this->columns;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveAnalysisColumnRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['columns'])) {
            $model->columns = $map['columns'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        return $model;
    }
}
