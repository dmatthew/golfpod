<?php

namespace dmatthew\crafttwitter\models;

use craft\base\Model;

class Settings extends Model
{
    public $twitterUsername = '';
    public $twitterUserTitle = '';

    public function rules()
    {
        return [
            [['twitterUsername'], 'required'],
        ];
    }
}
