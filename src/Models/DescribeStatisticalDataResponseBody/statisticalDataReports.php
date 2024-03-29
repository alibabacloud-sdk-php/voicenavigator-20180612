<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeStatisticalDataResponseBody;

use AlibabaCloud\Tea\Model;

class statisticalDataReports extends Model
{
    /**
     * @example 80.00%
     *
     * @var string
     */
    public $dialoguePassRate;

    /**
     * @example 80.00%
     *
     * @var string
     */
    public $knowledgeHitRate;

    /**
     * @example 80.00%
     *
     * @var string
     */
    public $resolutionRate;

    /**
     * @example 80
     *
     * @var int
     */
    public $resolvedQuestionNum;

    /**
     * @example 19:00:00
     *
     * @var string
     */
    public $statisticalDate;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalConversationNum;

    /**
     * @example 80.0
     *
     * @var string
     */
    public $validAnswerRate;
    protected $_name = [
        'dialoguePassRate'     => 'DialoguePassRate',
        'knowledgeHitRate'     => 'KnowledgeHitRate',
        'resolutionRate'       => 'ResolutionRate',
        'resolvedQuestionNum'  => 'ResolvedQuestionNum',
        'statisticalDate'      => 'StatisticalDate',
        'totalConversationNum' => 'TotalConversationNum',
        'validAnswerRate'      => 'ValidAnswerRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dialoguePassRate) {
            $res['DialoguePassRate'] = $this->dialoguePassRate;
        }
        if (null !== $this->knowledgeHitRate) {
            $res['KnowledgeHitRate'] = $this->knowledgeHitRate;
        }
        if (null !== $this->resolutionRate) {
            $res['ResolutionRate'] = $this->resolutionRate;
        }
        if (null !== $this->resolvedQuestionNum) {
            $res['ResolvedQuestionNum'] = $this->resolvedQuestionNum;
        }
        if (null !== $this->statisticalDate) {
            $res['StatisticalDate'] = $this->statisticalDate;
        }
        if (null !== $this->totalConversationNum) {
            $res['TotalConversationNum'] = $this->totalConversationNum;
        }
        if (null !== $this->validAnswerRate) {
            $res['ValidAnswerRate'] = $this->validAnswerRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statisticalDataReports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DialoguePassRate'])) {
            $model->dialoguePassRate = $map['DialoguePassRate'];
        }
        if (isset($map['KnowledgeHitRate'])) {
            $model->knowledgeHitRate = $map['KnowledgeHitRate'];
        }
        if (isset($map['ResolutionRate'])) {
            $model->resolutionRate = $map['ResolutionRate'];
        }
        if (isset($map['ResolvedQuestionNum'])) {
            $model->resolvedQuestionNum = $map['ResolvedQuestionNum'];
        }
        if (isset($map['StatisticalDate'])) {
            $model->statisticalDate = $map['StatisticalDate'];
        }
        if (isset($map['TotalConversationNum'])) {
            $model->totalConversationNum = $map['TotalConversationNum'];
        }
        if (isset($map['ValidAnswerRate'])) {
            $model->validAnswerRate = $map['ValidAnswerRate'];
        }

        return $model;
    }
}
