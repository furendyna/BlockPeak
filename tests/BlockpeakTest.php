<?php
/**
 * Tests for BlockPeak
 */

use PHPUnit\Framework\TestCase;
use Blockpeak\Blockpeak;

class BlockpeakTest extends TestCase {
    private Blockpeak $instance;

    protected function setUp(): void {
        $this->instance = new Blockpeak(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockpeak::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
