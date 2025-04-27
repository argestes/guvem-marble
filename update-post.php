<?php
// Load WordPress environment
require_once('wp-load.php');

// Example: Update a post with ID 1
$post_data = array(
    'ID'           => 1, // The post ID to update
    'post_title'   => 'Updated Title',
    'post_content' => 'This is the updated content for the post.',
);

// Update the post
$post_id = wp_update_post($post_data);

if ($post_id) {
    echo "Post updated successfully!";
} else {
    echo "Error updating post.";
}
