<?php

namespace Drupal\kobo_data_import\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class KoboDataImportController.
 *
 * @package Drupal\kobo_data_import\Controller
 */
class KoboDataImportController extends ControllerBase {

  /**
   * Trigger the data import.
   *
   * @return array
   *   A simple render array for the response.
   */
  public function triggerImport() {
    // Call the import logic from your custom function.
    kobo_data_import_cron(); // Trigger the cron function manually.
    
    return [
      '#markup' => $this->t('Data import triggered successfully.'),
    ];
  }
}

?>
