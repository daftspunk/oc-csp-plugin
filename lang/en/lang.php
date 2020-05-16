<?php return [
    'plugin' => [
        'name' => 'CSP',
        'description' => 'Content Security Policies for October CMS',
    ],
    'settings' => [
        'description' => 'Manage the Content Security Policy for your website',
    ],
    'form' => [
        'general' => 'General',
        'nonce' => 'Nonce',
        'nonce_comment' => 'Generate a nonce for these directives',
        'sandbox' => 'Sandbox',
        'require_trusted_types' => 'Required trusted types for',
        'default_source' => 'Default source',
        'image_source' => 'Image source',
        'font_source' => 'Font source',
        'connect_source' => 'Connect source',
        'media_source' => 'Media source',
        'object_source' => 'Object source',
        'prefetch_source' => 'Prefetch source',
        'child_source' => 'Child source',
        'frame_source' => 'Frame source',
        'worker_source' => 'Worker source',
        'frame_ancestors' => 'Frame ancestors',
        'form_action' => 'Form action',
        'base_uri' => 'Base URI',
        'manifest_source' => 'Manifest source',
        'upgrade_insecure_requests' => 'Upgrade insecure requests',
        'upgrade_insecure_requests_comment' => 'Rewrite all HTTP requests to HTTPS',
        'block_all_mixed_content' => 'Block all mixed content',
        'block_all_mixed_content_comment' => 'Do not load HTTP content when the page is loaded via HTTPS',
        'inject_nonce' => 'Inject nonce',
        'inject_nonce_comment' => 'Automatically inject a nonce attribute into all script and style tags',
        'plugin_types' => 'Plugin types',
        'plugin_types_comment' => 'Separate the plugin types by a space',
        'script_source' => 'Script source',
        'script_source_fallback' => 'Script source (default, fallback)',
        'script_source_elem' => 'Script source (specific for <script> elements)',
        'script_source_attr' => 'Script source (specific for inline handlers)',
        'style_source' => 'Style source',
        'style_source_fallback' => 'Style source (default, fallback)',
        'style_source_elem' => 'Style source (specific for <style> and <link> elements)',
        'style_source_attr' => 'Style source (specific for inline styles)',
        'additional_hosts' => 'Additional hosts',
        'additional_hosts_comment' => 'Separate the definitions by a space',
        'enabled' => 'Enable CSP header',
        'enabled_comment' => 'Add the CSP header to every response',
        'report_only' => 'Report only',
        'report_only_comment' => 'Do not block anything, just log what would be blocked',
        'report_uri' => 'Report URI',
        'report_mode' => 'Report mode',
        'report_internal' => 'Log to database',
        'report_custom' => 'Custom report URI',
        'report_disabled' => 'Do not report anywhere',
    ],
    'permissions' => [
        'manage_settings' => 'Can manage Content Security Policy',
    ],
    'log' => [
        'label' => 'CSP Reporting',
        'description' => 'See what ressources have been blocked by your CSP',
        'blocked_uri' => 'Blocked URI',
        'document_uri' => 'Document URI',
        'referrer' => 'Referrer',
        'disposition' => 'Disposition',
        'status_code' => 'Status code',
        'violated_directive' => 'Violated directive',
        'script_sample' => 'Script sample',
        'effective_directive' => 'Effective directive',
        'original_policy' => 'Original policy',
        'created_at' => 'Logged at',
        'updated_at' => 'Updated at',
        'clear' => 'Clear log',
        'confirm_clear' => 'Do you really want to clear all log entries?'
    ],
];