<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MediaTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MediaTypesTable Test Case
 */
class MediaTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MediaTypesTable
     */
    protected $MediaTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.MediaTypes',
        'app.Books',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MediaTypes') ? [] : ['className' => MediaTypesTable::class];
        $this->MediaTypes = TableRegistry::getTableLocator()->get('MediaTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->MediaTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
