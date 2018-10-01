<?php

/**
 * This is the model class for table "project".
 *
 * The followings are the available columns in table 'project':
 * @property integer $id
 * @property string $name
 * @property integer $company
 * @property integer $client
 * @property integer $tw_retweets_target
 * @property integer $tw_impression_target
 * @property integer $tw_comments_target
 * @property integer $fb_likes_share_target
 * @property integer $fb_click_target
 * @property integer $fb_comments_target
 * @property integer $blog_pageview_target
 * @property integer $blog_bannerclicks_target
 * @property integer $blog_online_sale_target
 * @property integer $duration
 * @property integer $accountManager
 * @property string $launchDate
 *
 * The followings are the available model relations:
 * @property Blog[] $blogs
 * @property Users $accountManager0
 * @property Company $company0
 * @property Client $client0
 * @property Projectweek[] $projectweeks
 */
class Project extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'project';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, company, client, tw_retweets_target, tw_impression_target, tw_comments_target, fb_likes_share_target, fb_click_target, fb_comments_target, blog_pageview_target, blog_bannerclicks_target, blog_online_sale_target, duration, accountManager, launchDate', 'required'),
			array('company, client, tw_retweets_target, tw_impression_target, tw_comments_target, fb_likes_share_target, fb_click_target, fb_comments_target, blog_pageview_target, blog_bannerclicks_target, blog_online_sale_target, duration, accountManager', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, company, client, tw_retweets_target, tw_impression_target, tw_comments_target, fb_likes_share_target, fb_click_target, fb_comments_target, blog_pageview_target, blog_bannerclicks_target, blog_online_sale_target, duration, accountManager, launchDate', 'safe', 'on'=>'search'),
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
			'blogs' => array(self::HAS_MANY, 'Blog', 'project'),
			'accountManager0' => array(self::BELONGS_TO, 'Users', 'accountManager'),
			'company0' => array(self::BELONGS_TO, 'Company', 'company'),
			'client0' => array(self::BELONGS_TO, 'Client', 'client'),
			'projectweeks' => array(self::HAS_MANY, 'Projectweek', 'project'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'company' => 'Company',
			'client' => 'Client',
			'tw_retweets_target' => 'Tw Retweets Target',
			'tw_impression_target' => 'Tw Impression Target',
			'tw_comments_target' => 'Tw Comments Target',
			'fb_likes_share_target' => 'Fb Likes Share Target',
			'fb_click_target' => 'Fb Click Target',
			'fb_comments_target' => 'Fb Comments Target',
			'blog_pageview_target' => 'Blog Pageview Target',
			'blog_bannerclicks_target' => 'Blog Bannerclicks Target',
			'blog_online_sale_target' => 'Blog Online Sale Target',
			'duration' => 'Duration',
			'accountManager' => 'Account Manager',
			'launchDate' => 'Launch Date',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('company',$this->company);
		$criteria->compare('client',$this->client);
		$criteria->compare('tw_retweets_target',$this->tw_retweets_target);
		$criteria->compare('tw_impression_target',$this->tw_impression_target);
		$criteria->compare('tw_comments_target',$this->tw_comments_target);
		$criteria->compare('fb_likes_share_target',$this->fb_likes_share_target);
		$criteria->compare('fb_click_target',$this->fb_click_target);
		$criteria->compare('fb_comments_target',$this->fb_comments_target);
		$criteria->compare('blog_pageview_target',$this->blog_pageview_target);
		$criteria->compare('blog_bannerclicks_target',$this->blog_bannerclicks_target);
		$criteria->compare('blog_online_sale_target',$this->blog_online_sale_target);
		$criteria->compare('duration',$this->duration);
		$criteria->compare('accountManager',$this->accountManager);
		$criteria->compare('launchDate',$this->launchDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Project the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
