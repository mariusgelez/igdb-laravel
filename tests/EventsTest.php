<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Tests;

use PHPUnit\Framework\Attributes\DataProvider;

/**
 * @internal
 */
class EventsTest extends TestCase
{
    #[DataProvider('modelsDataProvider')]
    public function testItShouldHaveCreatedEventForEveryModel(string $className): void
    {
        $eventClassString = 'MariusGelez\IGDBLaravel\Events\\' . $className . 'Created';
        $this->assertTrue(class_exists($eventClassString));
    }

    #[DataProvider('modelsDataProvider')]
    public function testItShouldHaveUpdatedEventForEveryModel(string $className): void
    {
        $eventClassString = 'MariusGelez\IGDBLaravel\Events\\' . $className . 'Updated';
        $this->assertTrue(class_exists($eventClassString));
    }

    #[DataProvider('modelsDataProvider')]
    public function testItShouldHaveDeletedEventForEveryModel(string $className): void
    {
        $eventClassString = 'MariusGelez\IGDBLaravel\Events\\' . $className . 'Deleted';
        $this->assertTrue(class_exists($eventClassString));
    }
}
