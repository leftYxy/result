<?php
/**
 * @CreateDate 2024-01-09 16:17
 */

declare(strict_types=1);


namespace Yaoxy\Result;


use PHPUnit\Framework\TestCase;

class ResultTest extends TestCase
{
    public function testSuccess()
    {
        $this->assertEquals(200, Result::success(['data' => 'data'])['code']);
    }

    public function testFail()
    {
        $this->assertEquals(0, Result::error('fail')['code']);
    }
}