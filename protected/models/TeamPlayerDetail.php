<?php

class TeamPlayerDetail extends CActiveRecord {


    const TABLE_NAME = 'cms_team_player_detail';


    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return self::TABLE_NAME;
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return static model class
     */

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return [
        ];
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return [
            'TeamPlayer' => array(self::BELONGS_TO, 'TeamPlayer', 'player_id'),
        ];
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'name' => 'Name',
            'frequency' => 'Frequency',
        ];
    }

    public function select($fields){
        $criteria = new CDbCriteria();
        $criteria->select = $fields;
        return self::model()->findAll($criteria);

    }



}

?>