<?php

namespace App\Tests;

// Framework de tests PHPUNIT
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes;

use App\Message;

#[Attributes\CoversClass(Message::class)]
class MessageTest extends TestCase
{
    protected Message $message;

    public function setUp():void
    {
        $this->message = new Message('en');
    }

    public function testLangEn()
    {
        $this->assertSame("Hello World!", $this->message->get());
    }

    #[Attributes\Test()]
    public function langfr()
    {
        $this->message->setLang('fr');

        $this->assertSame("Bonjour tout le monde!", $this->message->get());
    }
}
