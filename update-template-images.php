<?php
// Path to the template file
$template_file = __DIR__ . '/wp-content/themes/assembler/templates/marble-supplier.html';

// Read the template content
$content = file_get_contents($template_file);

// Define the image replacements
$replacements = [
    // First service image (keep as is)
    '/marble-images\/marble-2.jpg" alt="white marble slab"/' => '/marble-images/marble-2.jpg" alt="white marble slab"',
    
    // Second service image (line ~97)
    '/marble-images\/marble-2.jpg" alt="white marble slab"/' => '/marble-images/marble-4.jpg" alt="marble surface detail"',
    
    // Third service image (line ~119)
    '/marble-images\/marble-2.jpg" alt="white marble slab"/' => '/marble-images/marble-7.jpg" alt="polished marble texture"',
];

// Apply the replacements one by one
$count = 0;
foreach ($replacements as $search => $replace) {
    // Replace only the first occurrence after the current position
    $pos = strpos($content, $search, $count > 0 ? $count : 0);
    if ($pos !== false) {
        $content = substr_replace($content, $replace, $pos, strlen($search));
        $count = $pos + strlen($replace);
    }
}

// Write the updated content back to the file
file_put_contents($template_file, $content);

echo "Template updated successfully with new marble images.\n";
?>
