<?php

namespace Drupal\Tests\webform\Functional\Element;

/**
 * Tests for webform element attributes.
 *
 * @group webform
 */
class WebformElementAttributesTest extends WebformElementBrowserTestBase {

  /**
   * Webforms to load.
   *
   * @var array
   */
  protected static $testWebforms = ['test_element_attributes'];

  /**
   * Tests element attributes.
   */
  public function testAttributes() {
    /* Rendering */

    $this->drupalGet('/webform/test_element_attributes');

    // Check four and five are merged in class select other text field.
    $this->assertFieldByName('webform_element_attributes[class][other]', 'four five');

    // Check one, two, four, and five are merged in class text field.
    $this->assertFieldByName('webform_element_attributes_no_classes[class]', 'one two four five');

    /* Submit */

    // Check default value handling.
    $this->drupalPostForm('/webform/test_element_attributes', [], 'Submit');
    $this->assertRaw("webform_element_attributes:
  class:
    - one
    - two
    - four
    - five
  style: 'color: red'
  custom: test
webform_element_attributes_no_classes:
  class:
    - one
    - two
    - four
    - five");
  }

}
