<?php

$rules = [
    'array_syntax' => [
        'syntax' => 'short',
    ],
    'blank_line_after_namespace' => true,
    'blank_line_after_opening_tag' => true,
    'blank_line_before_return' => true,
    'braces' => true,
    'cast_spaces' => true,
    'concat_space' => ['spacing' => 'none'],
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_empty_statement' => true,
    'elseif' => true,
    'simplified_null_return' => true,
    'encoding' => true,
    'single_blank_line_at_eof' => true,
    'no_extra_consecutive_blank_lines' => [
        'use',
    ],
    'no_spaces_after_function_name' => true,
    'no_trailing_comma_in_list_call' => true,
    'not_operator_with_successor_space' => true,
    'function_declaration' => true,
    'include' => true,
    'indentation_type' => true,
    'no_alias_functions' => true,
    'line_ending' => true,
    'lowercase_constants' => true,
    'lowercase_keywords' => true,
    'method_argument_space' => true,
    'trailing_comma_in_multiline_array' => true,
    'no_multiline_whitespace_before_semicolons' => true,
    'single_import_per_statement' => true,
    'no_leading_namespace_whitespace' => true,
    'no_blank_lines_after_class_opening' => true,
    'no_blank_lines_after_phpdoc' => true,
    'object_operator_without_whitespace' => true,
    'binary_operator_spaces' => [
        'align_equals' => false,
    ],
    'no_spaces_inside_parenthesis' => true,
    'phpdoc_indent' => true,
    'phpdoc_inline_tag' => true,
    'phpdoc_no_access' => true,
    'phpdoc_no_package' => true,
    'phpdoc_scalar' => true,
    'phpdoc_summary' => true,
    'phpdoc_to_comment' => true,
    'phpdoc_no_alias_tag' => [
        'type' => 'var',
    ],
    'self_accessor' => true,
    'phpdoc_var_without_name' => true,
    'no_leading_import_slash' => true,
    'no_short_echo_tag' => true,
    'full_opening_tag' => true,
    'no_trailing_comma_in_singleline_array' => true,
    'single_blank_line_before_namespace' => true,
    'single_line_after_imports' => true,
    'single_quote' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'cast_spaces' => true,
    'standardize_not_equals' => true,
    'ternary_operator_spaces' => true,
    'no_trailing_whitespace' => true,
    'unary_operator_spaces' => true,
    'trim_array_spaces' => true,
    'no_unused_imports' => true,
    'visibility_required' => true,
    'no_whitespace_in_blank_line' => true,
    'ordered_imports' => [
        'sortAlgorithm' => 'length'
    ],
    'ordered_class_elements' => [
        'order' => ['use_trait', 'constant_public', 'constant_protected', 'constant_private', 'property_public', 'property_protected', 'property_private', 'construct', 'destruct', 'magic', 'phpunit', 'method_public', 'method_protected', 'method_private']
    ]
];

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules($rules)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('storage')
            ->exclude('vendor')
            ->notPath('config/routes.php')
            ->notName('*.blade.php')
            ->in(__DIR__)
    );
