<?php

/**
 * This is the model class for table "blog".
 *
 * The followings are the available columns in table 'blog':
 * @property integer $id
 * @property string $url
 * @property string $launchDate
 * @property integer $project
 * @property string $name
 * @property integer $target
 * @property integer $fb_likes_share_target
 * @property integer $fb_click_target
 * @property integer $fb_comments_target
 * @property integer $tw_impression_target
 * @property integer $tw_retweets_target
 * @property integer $tw_comments_target
 *
 * The followings are the available model relations:
 * @property Project $project0
 * @property Blogweekmatric[] $blogweekmatrics
 */
class Blog extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'blog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('url, launchDate, project, name', 'required'),
			array('project, target, fb_likes_share_target, fb_click_target, fb_comments_target, tw_impression_target, tw_retweets_target, tw_comments_target', 'numerical', 'integerOnly'=>true),
			array('url', 'length', 'max'=>1000),
			array('name', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, url, launchDate, project, name, target, fb_likes_share_target, fb_click_target, fb_comments_target, tw_impression_target, tw_retweets_target, tw_comments_target', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'project0' => array(self::BELONGS_TO, 'Project', 'project'),
			'blogweekmatrics' => array(self::HAS_MANY, 'Blogweekmatric', 'blog'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'url' => 'Url',
			'launchDate' => 'Launch Date',
			'project' => 'Project',
			'name' => 'Name',
			'target' => 'Target',
			'fb_likes_share_target' => 'Fb Likes Share Target',
			'fb_click_target' => 'Fb Click Target',
			'fb_comments_target' => 'Fb Comments Target',
			'tw_impression_target' => 'Tw Impression Target',
			'tw_retweets_target' => 'Tw Retweets Target',
			'tw_comments_target' => 'Tw Comments Target',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('launchDate',$this->launchDate,true);
		$criteria->compare('project',$this->project);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('target',$this->target);
		$criteria->compare('fb_likes_share_target',$this->fb_likes_share_target);
		$criteria->compare('fb_click_target',$this->fb_click_target);
		$criteria->compare('fb_comments_target',$this->fb_comments_target);
		$criteria->compare('tw_impression_target',$this->tw_impression_target);
		$criteria->compare('tw_retweets_target',$this->tw_retweets_target);
		$criteria->compare('tw_comments_target',$this->tw_comments_target);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Blog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
