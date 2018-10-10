<?php

if (class_exists('PhpCsFixer\Finder')) {    // PHP-CS-Fixer 2.x
    $finder = PhpCsFixer\Finder::create()
        ->in(__DIR__)
    ;

    return PhpCsFixer\Config::create()
        ->setRules(array(
            '@PSR2' => true,
        ))
        ->setFinder($finder)
    ;
} elseif (class_exists('Symfony\CS\Finder\DefaultFinder')) {  // PHP-CS-Fixer 1.x
    $finder = Symfony\CS\Finder\DefaultFinder::create()
        ->in(__DIR__)
    ;

    return Symfony\CS\Config\Config::create()
        ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
        ->fixers(['-psr0'])    // don't lowercase namespace (use "namespace App\.." instead of "namespace app\..") to be compatible with Laravel 5
        ->finder($finder)
    ;
}


return Symfony\CS\Config\Config::create()
    ->setUsingCache(true)
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->fixers(array(
        'psr4',
        'encoding',
        'short_tag',
        'blankline_after_open_tag',
        'namespace_no_leading_whitespace',
        'no_blank_lines_after_class_opening',
        'single_array_no_trailing_comma',
        'no_empty_lines_after_phpdocs',
        'concat_with_spaces',
        'eof_ending',
        'ordered_use',
        'extra_empty_lines',
        'single_line_after_imports',
        'trailing_spaces',
        'remove_lines_between_uses',
        'return',
        'indentation',
        'linefeed',
        'braces',
        'visibility',
        'unused_use',
        'whitespacy_lines',
        'php_closing_tag',
        'phpdoc_order',
        'phpdoc_params',
        'phpdoc_trim',
        'phpdoc_scalar',
        'short_array_syntax',
        'align_double_arrow',
        'align_equals',
        'lowercase_constants',
        'lowercase_keywords',
        'multiple_use',
        'line_after_namespace',
    ))->finder($finder);
