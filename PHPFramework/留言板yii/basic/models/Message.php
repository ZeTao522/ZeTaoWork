<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property string $name
 * @property string|null $url
 * @property string|null $title
 * @property string|null $content
 * @property string|null $data
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['data'], 'safe'],
            [['name'], 'string', 'max' => 32],
            [['url'], 'string', 'max' => 50],
            [['title'], 'string', 'max' => 100],
            [['content'], 'string', 'max' => 1024],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'url' => 'Url',
            'title' => 'Title',
            'content' => 'Content',
            'data' => 'Data',
        ];
    }
}
