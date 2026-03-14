<?php
/**
 * Tests for NextAuthJwt
 */

use PHPUnit\Framework\TestCase;
use Nextauthjwt\Nextauthjwt;

class NextauthjwtTest extends TestCase {
    private Nextauthjwt $instance;

    protected function setUp(): void {
        $this->instance = new Nextauthjwt(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nextauthjwt::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
