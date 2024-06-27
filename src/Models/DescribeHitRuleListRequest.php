<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeHitRuleListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $eventCodes;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'lang'       => 'Lang',
        'beginTime'  => 'beginTime',
        'endTime'    => 'endTime',
        'eventCodes' => 'eventCodes',
        'eventType'  => 'eventType',
        'regId'      => 'regId',
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
        if (null !== $this->beginTime) {
            $res['beginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->eventCodes) {
            $res['eventCodes'] = $this->eventCodes;
        }
        if (null !== $this->eventType) {
            $res['eventType'] = $this->eventType;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHitRuleListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['beginTime'])) {
            $model->beginTime = $map['beginTime'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['eventCodes'])) {
            $model->eventCodes = $map['eventCodes'];
        }
        if (isset($map['eventType'])) {
            $model->eventType = $map['eventType'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        return $model;
    }
}
