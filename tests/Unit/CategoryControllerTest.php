<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\CategoryController;


class CategoryControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_categoryExists()
    {
    	$cc = new CategoryController();
        $this->assertTrue($cc->categoryExists('puzzles'));
    }

    public function test_getCategoryGames():void
    {
    	$cc = new CategoryController();
    	$category = 'board';
    	$this->assertIsArray($cc->getCategoryGames($category));
    	$this->assertEquals(['Board'], array_unique(array_column($cc->getCategoryGames($category), 'category' ) ));
    }
}
