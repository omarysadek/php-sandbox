<?php

namespace OSPSB\src\phpFeatures\arrayFilter\post;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @var PostColection
     */
    protected $posts;

    public function setUp()
    {
        $this->posts = new PostCollection(
            [
                new Post(3, 'php', false),
                new Post(10, 'ruby on rails', false),
                new Post(4, 'javascript', true),
                new Post(56, 'java', true)
            ]
        );
    }

    /**
     * @test
     */
    public function post()
    {
        $this->assertTrue(is_array($this->posts->toArray()));
    }

    /**
     * @test
     */
    public function onlyPublished()
    {
        $this->assertEquals(
            2,
            sizeof($this->posts->getPublished())
        );
    }

    /**
     * @test
     */
    public function getOnlyTitleAndStatus()
    {
        $this->assertEquals(
            ['php', 'ruby on rails', 'javascript', 'java'],
            $this->posts->getColumns('title')
        );
    }
}
