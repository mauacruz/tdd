<?php

namespace CodePress\CodeTag\Tests\Models;

use CodePress\CodeTag\Models\Tag;
use CodePress\CodeTag\Tests\AbstractTestCase;

class TagTest extends AbstractTestCase {

    public function setUp() {
        parent::setUp();
        $this->migrate();
    }

    public function test_check_if_a_tag_can_be_persisted(){
        $tag = Tag::create(['ID'=> 1, 'Name'=>'Tag 1']);

        $this->assertEquals('Tag 1', $tag->Name);


    }
}