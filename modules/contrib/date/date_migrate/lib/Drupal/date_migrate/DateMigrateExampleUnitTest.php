<?php

/**
 * @file
 * Test for using date fields with Migrate module.
 */
namespace Drupal\date_migrate\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Test date migration.
 */
class DateMigrateExampleUnitTest extends WebTestBase {

  /**
   * Provides information about this test.
   */
  public static function getInfo() {
    return array(
      'name' => 'Date2 migration',
      'description' => 'Testing migration of date fields',
      'group' => 'Migrate',
    );
  }

  /**
   * Declares the module dependencies for the test.
   */
  public static $modules = array('migrate', 'features', 'date', 'date_repeat', 'date_repeat_field', 'date_migrate_example');

  /**
   * Verify that date fields are imported correctly. When no timezone is
   * explicitly provided with the source data, we want the displayed time on the
   * Drupal site to match that in the source data. To validate that, we make
   * sure we have set a consistent timezone at the PHP and Drupal levels, and
   * that the format used on the page is not locale-dependent (no day or month
   * names). Then, we can just look for the desired date/time strings in the
   * node page.
   */
  function testDateImport() {
    date_default_timezone_set('America/Los_Angeles');
    variable_set('date_default_timezone', 'America/Los_Angeles');
    variable_set('date_format_medium', 'Y-m-d H:i');
    $migration = Migration::getInstance('DateExample');
    $result = $migration->processImport();
    $this->assertEqual($result, Migration::RESULT_COMPLETED, t('Variety term import returned RESULT_COMPLETED'));
    $rawnodes = node_load_multiple(FALSE, array('type' => 'date_migrate_example'), TRUE);
    $this->assertEqual(count($rawnodes), 2, t('Two sample nodes created'));
    $node = reset($rawnodes);
    $this->drupalGet('/node/' . $node->nid);
    $this->assertText('2011-05-12 19:43', t('Simple date field found'));
    $this->assertText('2011-06-13 18:32 to 2011-07-23 10:32', t('Date range field found'));
    $this->assertText('2011-07-22 12:13', t('Datestamp field found'));
    $this->assertText('2011-08-01 00:00 to 2011-09-01 00:00', t('Datestamp range field found'));
    $this->assertText('2011-11-18 15:00', t('Datetime field with +9 timezone found'));
    $this->assertText('2011-10-30 14:43 to 2011-12-31 17:59', t('Datetime range field with -5 timezone found'));
    $this->assertText('2011-11-25 09:01', t('First date repeat instance found'));
    $this->assertText('2011-12-09 09:01', t('Second date repeat instance found'));
    $this->assertNoText('2011-12-23 09:01', t('Skipped date repeat instance not found'));
    $this->assertText('2012-05-11 09:01', t('Last date repeat instance found'));
    $node = next($rawnodes);
    $this->drupalGet('/node/' . $node->nid);
    $this->assertText('2012-06-21 15:32', t('First date value found'));
    $this->assertText('2012-12-02 11:08', t('Second date value found'));
    $this->assertText('2004-02-03 01:15', t('Start for first date range found'));
    $this->assertText('2005-03-04 22:11', t('End for first date range found'));
    $this->assertText('2014-09-01 17:21', t('Start for second date range found'));
    $this->assertText('2015-12-23 00:01', t('End for first second range found'));
  }
}
