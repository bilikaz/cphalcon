<?php

namespace Phalcon\Test\Models\Snapshot;

use Phalcon\Test\Models\RobottersDeles;

class Robotters extends \Phalcon\Mvc\Model
{
    public function getSource()
    {
        return 'robots';
    }

    public function columnMap()
    {
        return array(
            'id' => 'code',
            'name' => 'theName',
            'type' => 'theType',
            'year' => 'theYear',
            'datetime' => 'theDatetime',
            'deleted' => 'theDeleted',
            'text' => 'theText'
        );
    }

    public function initialize()
    {
        $this->hasMany('code', RobottersDeles::class, 'robottersCode');
        $this->keepSnapshots(true);
    }
}
