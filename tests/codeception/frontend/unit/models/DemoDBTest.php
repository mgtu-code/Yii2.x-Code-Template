<?php
namespace tests\codeception\frontend\unit;

use Yii;
use source\common\models\Content;
use tests\codeception\common\fixtures\ContentFixture;
use Codeception\Specify;


class DemoDBTest extends DbTestCase{

    use Specify;

    public function setUp(){
        parent::setUp();
    }

    public function tearDown(){
        parent::tearDown();
    }

    public function testFindContent(){
        $content = new Content();

        $this->specify('find id =1 content', function() use ($content){
            $content = Content::find()->andWhere('id=:id',[':id'=>1])->one();
            $this->assertTrue(isset($content) && $content->title == 'test title');
        });
    }

    public function fixtures(){
        return [
            'content' => [
                'class' => ContentFixture::className(),
                'dataFile' => '@tests/codeception/frontend/unit/fixtures/data/models/content.php'
            ],
        ];
    }

}