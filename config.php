<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [],
    'selected' => function ($page, $sectionStr) {
        $sections = explode(",", $sectionStr);
        foreach ($sections as $section) {
            if ($page->getPath() == $section || str_contains($page->getPath(), $section) ) {
                return 'active';
            }        
        }
    },
];
