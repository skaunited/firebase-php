<?php

declare(strict_types=1);

namespace Kreait\Tests\Firebase\Integration;

use Kreait\Firebase\Database;

abstract class DatabaseTestCase extends IntegrationTestCase
{
    /**
     * @var string
     */
    protected static $refPrefix;

    /**
     * @var Database
     */
    protected static $db;

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();

        self::$db = self::$firebase->getDatabase();
        self::$refPrefix = 'tests';

        self::$db->getReference(self::$refPrefix)->remove();
    }
}
