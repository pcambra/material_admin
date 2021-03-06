<?php

/**
 * @file
 * Add custom theme settings to Material Admin.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 */
function material_admin_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {
  $form['theme_ui_options'] = array(
    '#type' => 'details',
    '#title' => t('Material Admin UI Options'),
    '#weight' => -1,
  );

  $form['theme_ui_options']['material_admin_node_actions'] = array(
    '#type' => 'checkbox',
    '#title' => t('display node actions as sticky element'),
    '#description' => t('fix the node action buttons to window bottom'),
    '#default_value' => theme_get_setting('material_admin_node_actions'),
  );

  $form['theme_ui_options']['material_admin_message_length'] = array(
    '#type' => 'textfield',
    '#title' => t('Max allowed width of status message'),
    '#description' => t('Status messages use google material toast notifcation system, but this limits the length shown in the status message. Note: the full message will always appear in the bottom drawer'),
    '#default_value' => theme_get_setting('material_admin_message_length'),
  );
}
