<?php
declare(strict_types=1);

namespace Toolkit\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use Toolkit\View\Helper\WebSocketHelper;

/**
 * Toolkit\View\Helper\WebSocketHelper Test Case
 */
class WebSocketHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Toolkit\View\Helper\WebSocketHelper
     */
    protected $WebSocket;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->WebSocket = new WebSocketHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->WebSocket);

        parent::tearDown();
    }
}
