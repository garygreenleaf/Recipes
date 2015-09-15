<?php

namespace Drupal\menu_ingredients\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a 'Menu Ingredients' block.
 *
 * @Block(
 *   id = "menu_ingredients_block",
 *   admin_label = @Translation("Menu Ingredients Block"),
 * )
*/

class MenuIngredientsBlock extends BlockBase {

   /**
   * {@inheritdoc}
   */
  public function build() {

    $ingredients = array();
    $node = \Drupal::routeMatch()->getParameter('node');

    $timestamp = strtotime('next Sunday');
    $recipe_fields = array();
    for ($i = 0; $i < 7; $i++) {
        $recipe_fields[] = 'field_' . strtolower(strftime('%A', $timestamp)) . '_lunch';
        $recipe_fields[] = 'field_' . strtolower(strftime('%A', $timestamp)) . '_dinner';
        $timestamp = strtotime('+1 day', $timestamp);
    }

    if ($node) {

      foreach ($node->getFields() as $name => $fields) {

        if(in_array($name, $recipe_fields)){

          foreach ($fields as $langcode => $field) {

            $recipe_id = $field->getValue();
            $recipe = node_load($recipe_id['target_id']);

            foreach ($recipe->getFields() as $name => $fields) {

              if($name == 'field_ingredients'){

                foreach ($fields as $langcode => $field) {

                  $ingredient_id = $field->getValue();
                  $ingredient = taxonomy_term_load($ingredient_id['target_id']);

                  $ingredients_grouped[$ingredient->getVocabularyId()][] = $ingredient->getName();

                }

              }

            }

          }

        }

      }

    }

    ksort($ingredients_grouped);

    foreach($ingredients_grouped AS $ingredient_group => $ingredients) {

      $markup .= '<h3>'.ucwords(str_replace('_', ' & ', $ingredient_group)).'</h3><ul>';

      $ingredients = array_count_values($ingredients);
      arsort($ingredients);

      foreach($ingredients AS $ingredient => $count){
        $markup .= '<li>'.$count . ' x ' . $ingredient.'</li>';
      }
      $markup .= '</ul>';

    }

    return array(
      '#markup' => $markup,
    );
  }

  /**
  * {@inheritdoc}
  */
  public function blockAccess(AccountInterface $account, $return_as_object = FALSE) {
    return AccessResult::allowedIfHasPermission($account, 'access content');
  }

}
