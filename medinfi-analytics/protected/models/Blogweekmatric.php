<?php

/**
 * This is the model class for table "blogweekmatric".
 *
 * The followings are the available columns in table 'blogweekmatric':
 * @property integer $id
 * @property integer $blog
 * @property integer $projectWeek
 * @property integer $tw_retweets
 * @property integer $tw_impression
 * @property integer $tw_comments
 * @property integer $fb_likes_share
 * @property integer $fb_click
 * @property integer $fb_comments
 * @property integer $blog_pageview
 * @property integer $blog_bannerclicks
 * @property integer $blog_online_sale
 *
 * The followings are the available model relations:
 * @property Blog $blog0
 * @property Projectweek $projectWeek0
 */
class Blogweekmatric extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'blogweekmatric';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('blog, projectWeek, tw_retweets, tw_impression, tw_comments, fb_likes_share, fb_click, fb_comments, blog_pageview, blog_bannerclicks, blog_online_sale', 'required'),
			array('blog, projectWeek, tw_retweets, tw_impression, tw_comments, fb_likes_share, fb_click, fb_comments, blog_pageview, blog_bannerclicks, blog_online_sale', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, blog, projectWeek, tw_retweets, tw_impression, tw_comments, fb_likes_share, fb_click, fb_comments, blog_pageview, blog_bannerclicks, blog_online_sale', 'safe', 'on'=>'search'),
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
			'blog0' => array(self::BELONGS_TO, 'Blog', 'blog'),
			'projectWeek0' => array(self::BELONGS_TO, 'Projectweek', 'projectWeek'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'blog' => 'Blog',
			'projectWeek' => 'Project Week',
			'tw_retweets' => 'Tw Retweets',
			'tw_impression' => 'Tw Impression',
			'tw_comments' => 'Tw Comments',
			'fb_likes_share' => 'Fb Likes Share',
			'fb_click' => 'Fb Click',
			'fb_comments' => 'Fb Comments',
			'blog_pageview' => 'Blog Pageview',
			'blog_bannerclicks' => 'Blog Bannerclicks',
			'blog_online_sale' => 'Blog Online Sale',
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
		$criteria->compare('blog',$this->blog);
		$criteria->compare('projectWeek',$this->projectWeek);
		$criteria->compare('tw_retweets',$this->tw_retweets);
		$criteria->compare('tw_impression',$this->tw_impression);
		$criteria->compare('tw_comments',$this->tw_comments);
		$criteria->compare('fb_likes_share',$this->fb_likes_share);
		$criteria->compare('fb_click',$this->fb_click);
		$criteria->compare('fb_comments',$this->fb_comments);
		$criteria->compare('blog_pageview',$this->blog_pageview);
		$criteria->compare('blog_bannerclicks',$this->blog_bannerclicks);
		$criteria->compare('blog_online_sale',$this->blog_online_sale);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Blogweekmatric the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
