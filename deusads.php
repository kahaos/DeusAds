<?php
/**
 * Plugin Name: Floating Lock Box
 * Description: A PHP plugin to create a floating and scrolled lock box with settings to control its position, visibility, and number of boxes displayed.
 * Version: 1.0
 * Author: Your Name
 */

function floating_lock_box_enqueue_scripts() {
  wp_enqueue_style('floating-lock-box-css', plugin_dir_url(__FILE__) . 'styles.css');
  wp_enqueue_script('floating-lock-box-js', plugin_dir_url(__FILE__) . 'scripts.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'floating_lock_box_enqueue_scripts');

function floating_lock_box_output() {
  ?>
  <div class="content">
    <!-- Your main content goes here -->
  </div>

  <div class="lock-box" id="lockBox">
    <button class="close-button" id="closeButton">&times;</button>
    <!-- Your lock box content goes here -->
  </div>

  <div class="settings">
    <form id="settingsForm">
      <label for="lockBoxPosition">Lock Box Position:</label>
      <select name="lockBoxPosition" id="lockBoxPosition">
        <option value="top-left">Top Left</option>
        <option value="top-right">Top Right</option>
        <option value="bottom-left">Bottom Left</option>
        <option value="bottom-right">Bottom Right</option>
      </select>
      <label for="numBoxes">Number of Boxes:</label>
      <select name="numBoxes" id="numBoxes">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
      <button type="submit">Save</button>
    </form>
  </div>
  <?php
}
add_action('wp_footer', 'floating_lock_box_output');
