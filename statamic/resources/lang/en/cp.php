<?php

return [

    // General CP
    'dashboard' => 'Dashboard',
    'nav_dashboard' => 'Dashboard',
    'sneak_peek' => 'Live Preview',
    'sneak_peeking' => 'Live Preview',
    'view_site' => 'View Site',
    'visit_url' => 'Visit URL',
    'search_for_anything' => 'Search for anything',

    // Pages
    'page' => 'Page',
    'pages' => 'Page|Pages',
    'nav_pages' => 'Pages',
    'create_page_button' => 'Create Page',
    'edit_homepage_button' => 'Edit Homepage',
    'create_page' => 'Create a New Page',
    'page_created' => 'Page Created',
    'editing_page' => 'Editing Page',
    'page_updated' => 'Page Updated',
    'home' => 'Home',
    'show_urls' => 'Show URLs',
    'show_titles' => 'Show Titles',
    'choose_page_type' => 'Choose Page Type',
    'parent_page' => 'Parent Page',
    'pages_reordered' => 'Pages reordered successfully.',

    // Collections
    'collections' => 'Collection|Collections',
    'nav_collections' => 'Collections',
    'manage_collections' => 'Manage Collections',
    'create_collection_button' => 'Create Collection',
    'create_collection' => 'Create a New Collection',
    'collection_created' => ':title Created',
    'editing_collection' => 'Editing :collection',
    'collection_updated' => ':title Updated',
    'collections_empty' => 'Collections are containers that hold groups of similar entries all following the same URL pattern.',
    'collection_title_instructions' => 'The proper name of your collection.',
    'collection_handle_instructions' => "The collection's variable name used in settings and templates.",
    'collection_order_instructions' => "Set the default sorting method for entries in this collection.",
    'collection_fieldset_instructions' => "The default fieldset, unless otherwise specified.",
    'collection_template_instructions' => "The default template, unless otherwise specified.",
    'collection_route_instructions' => "The route controls the URL pattern all entries in the collection will follow.",
    'collection_does_not_exist' => 'Collection :collection does not exist.',

    // Entries
    'entry' => 'Entry',
    'entries' => 'Entry|Entries',
    'nav_entries' => 'Entries',
    'create_entry_button' => 'Create Entry',
    'create_entry' => 'New :noun',
    'entry_created' => 'Entry Created',
    'editing_entry' => 'Editing Entry',
    'entry_updated' => 'Entry Updated',
    'entries_empty_heading' => ':type Entries',
    'entries_empty' => 'Entries are bits of content that have their own URL and are often shown in lists, like blog posts, press releases, and events.',

    // Taxonomies
    'taxonomy' => 'Taxonomy',
    'taxonomies' => 'Taxonomy|Taxonomies',
    'nav_taxonomies' => 'Taxonomies',
    'create_taxonomy' => 'Create New Taxonomy',
    'create_taxonomy_button' => 'Create Taxonomy',
    'manage_taxonomies' => 'Manage Taxonomies',
    'editing_taxonomy' => 'Editing taxonomy',
    'taxonomy_updated' => 'Taxonomy Updated',
    'taxonomy_created' => 'Taxonomy Created',
    'taxonomies_empty_heading' => 'Taxonomies',
    'taxonomies_empty' => 'A Taxonomy is a system of classifying data around a set of unique characteristics, such as category or color.',
    'taxonomies_title_instructions' => 'The name of your taxonomy.',
    'taxonomies_slug_instructions' => 'This is how the taxonomy will be referenced in templates.',
    'taxonomies_fieldset_instructions' => 'The fields that should be displayed when editing terms in this taxonomy.',
    'taxonomies_route_instructions' => 'The terms in this taxonomy will have URLs that follow this routing scheme.',

    'taxonomy_terms' => 'Term|Terms',
    'create_taxonomy_term_button' => 'Create :term',
    'create_taxonomy_term' => 'Create a New :term',
    'taxonomy_term_created' => 'Taxonomy term created',
    'taxonomy_terms_empty_heading' => 'Terms in :term',
    'taxonomy_terms_empty' => 'Where a Taxonomy is the grouping, a Term is the actual label applied to a piece of content. For example, "Red" would be a term in "Colors".',

    // Globals
    'global' => 'Global',
    'globals' => 'Global|Globals',
    'nav_globals' => 'Globals',
    'global_sets' => 'Global Sets',
    'manage_global_sets' => 'Manage Global Sets',
    'configuring_global_set' => 'Configuring Global Set',
    'create_global_set_button' => 'Create Global Set',
    'create_global_set' => 'Create New Global Set',
    'global_set_created' => ':type created',
    'editing_globals' => 'Editing Globals',
    'globals_updated' => 'Globals Updated',
    'globals_empty_heading' => 'Global Sets',
    'globals_empty' => 'Global sets are groups of variables that represent content that isn\'t tied to a URL, such as company name, address, contact info, or even template level settings like limits, offsets, and show/hide toggles.',
    'general_globals' => 'General',
    'globals_title_instructions' => "The proper name of your global set. For example: Footer Content, or Sidebar Settings.",
    'globals_slug_instructions' => "This is the variable used in your templates. For example: <code>footer_content</code> or <code>sidebar_settings</code>.",
    'globals_fieldset_instructions' => "Pick which group of fields you want to use to manage this fieldset.",

    // Assets
    'assets' => 'Asset|Assets',
    'nav_assets' => 'Assets',
    'new_asset' => 'New Asset',
    'add_asset' => 'Add Asset',
    'browse_assets' => 'Browse Assets',
    'browsing_assets' => 'Browsing Assets',
    'creating_asset' => 'Creating Asset',
    'asset_created' => 'Asset Created',
    'editing_asset' => 'Editing Asset',
    'asset_updated' => 'Asset Updated',
    'drop_to_upload' => 'Drop to Upload',
    'upload_asset' => 'Upload Asset',
    'sync_assets' => 'Sync assets',
    'syncing_assets' => 'Syncing assets',
    'new_folder' => 'New Folder',
    'upload' => 'Upload',
    'uploads' => 'Upload|Uploads',
    'filename' => 'Filename',
    'filesize' => 'File size',
    'date_modified' => 'Date modified',
    'parent_folder' => 'Parent folder',
    'containers' => 'Containers',
    'asset_folder_empty_heading' => 'Empty folder',
    'asset_folder_empty' => 'Upload files by dragging and dropping them into this area.',
    'focal_point' => 'Focal point',
    'focal_point_label' => 'Click image to adjust the focal point',
    'focal_point_instructions' => 'The focal point is used when cropping so the most important part of the image is not removed.',
    'or_drag_and_drop_files' => 'or drag and drop files.',
    'no_asset_container_specified' => 'No asset container specified.',
    'rename_file' => 'Rename File',
    'rename_file_warning' => 'Renaming a file will not update any references to it, which _may_ result in broken links in your site.',
    'move_file' => 'Move file',
    'move_file_warning' => 'Moving a file will not update any references to it, which _may_ result in broken links in your site.',
    'dimensions' => 'Dimensions',
    'last_modified' => 'Last Modified',
    'url_resolves_to' => 'URL resolves to: :path',


    // Folder
    'folder_title_instructions' => 'The display name of the folder.',
    'folder_directory_instructions' => 'The filesystem directory name',

    // Asset Containers
    'asset_containers' => 'Asset Container|Asset Containers',
    'manage_asset_containers' => 'Manage Asset Containers',
    'new_asset_container' => 'New Asset Container',
    'creating_asset_container' => 'Creating Asset Container',
    'asset_container_created' => 'Asset Container created',
    'editing_asset_container' => 'Editing Asset Container',
    'asset_container_updated' => 'Asset Container updated',
    'asset_containers_empty_heading' => 'There are no configured asset containers.',
    'asset_containers_empty' => 'Each asset container can be a location on your file system, which can either be publicly accessible or protected from prying eyes.',
    'select_asset_container' => 'Select an asset container.',

    // Asset Folders
    'create_folder' => 'Create Folder',
    'edit_folder' => 'Edit Folder',
    'asset_name_instructions' => 'The display name of the container.',
    'asset_handle_instructions' => 'A unique string that you can use to reference your container. <b>This cannot be changed after creation.</b>',
    'asset_fieldset_instructions' => 'The fieldset to be used by assets in this container.',
    'asset_driver_instructions' => 'Where will the assets be stored and accessed?',
    'asset_path_instructions' => 'Location of the folder on the filesystem.',
    'asset_url_instructions' => 'URL of the folder.',
    'asset_folder_basename' => 'Folder name',

    // Fields Builder
    'add_field' => 'Add New Field',
    'quick_add' => 'Quick Add',
    'toggle_fields' => 'Toggle Fields',
    'sidebar' => 'Sidebar',
    'meta' => 'Meta',
    'all' => 'All',

    // Set Builder
    'add_set' => 'Add Set',
    'edit_set' => 'Edit Set',
    'delete_set' => 'Delete Set',
    'toggle_sets' => 'Toggle Sets',
    'set_fields_instructions' => "Choose this set's fields",

    // Amazon S3
    'access_key_id' => 'Access Key ID',
    'secret_access_key' => 'Secret Access Key',

    // Users
    'user' => 'User',
    'users' => 'User|Users',
    'nav_users' => 'Users',
    'manage_users' => 'Manage Users',
    'create_user_button' => 'Create User',
    'create_user' => 'Create User',
    'create_a_user' => 'Create a User',
    'user_created' => 'User created',
    'editing_user' => 'Editing User',
    'user_updated' => 'User updated',
    'reset_password' => 'Reset Your Password',
    'choose_new_password' => 'Choose a New Password',
    'new_password' => 'New Password',
    'change_password' => 'Change password',
    'send_email' => 'Send email',
    'email_sent' => 'Email sent',
    'send_activation_email' => 'Send activation email',
    'send_password_reset_email' => 'Send password reset email',
    'password_reset_email_not_sent' => 'Email not sent. Please check your logs.',
    'copy_activation_link' => 'Copy activation link',
    'copy_password_reset_link' => 'Copy password reset link',
    'copy_password_reset_link_failed' => 'There was a problem generating the link. Please check your logs.',
    'password_reset_sent' => 'Password reset email sent',
    'account_activated' => 'Your account has been activated',
    'password_reset_success' => 'You password has been reset',
    'activate_account' => 'Activate Account',
    'account' => 'Account',
    'password' => 'Password',
    'password_for' => 'Password for :username',
    'my_account' => 'My Account',
    'profile' => 'Profile',
    'logout' => 'Logout',
    'sign_out' => 'Sign out',
    'user_options' => 'User Options',
    'user_bio_instructions' => 'A little bit about you, if you like.',
    'user_account_created' => 'A user account has been created.',
    'forgot_password' => 'Forgot password?',
    'invalid_user' => 'Invalid user',
    'invalid_code' => 'Invalid code',
    'invalid_creds' => 'Invalid credentials',
    'go_back' => 'Go Back',

    // Password Reset
    'reset_code_missing' => 'No code specified.',
    'reset_code_invalid' => 'Invalid code',

    // Roles
    'roles' => 'Role|Roles',
    'nav_user-roles' => 'User Roles',
    'create_role_button' => 'Create Role',
    'creating_role' => 'Create a Role',
    'role_created' => 'Role created',
    'editing_role' => 'Editing Role',
    'role_updated' => 'Role Updated',
    'roles_empty_heading' => 'User Roles',
    'roles_empty' => 'User Roles allow you to group a number of permissions under a single label. For example, editor, publisher, and admin.',

    // Permissions
    'permissions' => 'Permission|Permissions',
    'access' => 'Access',
    'checking_folder_permissions' => 'Checking folder permissions, please wait...',
    'folders_permission_valid' => 'File and folder permissions look great!',
    'folders_unwritable' => 'The following directories need to be writable:',

    // Error Pages
    'error' => 'Error',
    'permission_denied' => 'Permission Denied',
    'permission_denied_instructions' => "You don't have permission to view this page.",
    'page_not_found' => 'Page not found',
    'page_not_found_instructions' => 'The page you requested does not exist.',
    'session_expired' => 'Your session has expired.',
    'stache_building' => 'The cache is being updated. Please wait and try again.',
    'session_expired_error' => 'Your session has expired. Log in to continue where you left off.',
    'publish_error' => 'There was an issue saving your data. More detail can be found in your logs.',
    'error_fetching_data' => 'There was an issue fetching your data. More detail can be found in your logs.',

    // User Groups
    'usergroups' => 'User Group|User Groups',
    'nav_user-groups' => 'User Groups',
    'create_usergroup_button' => 'Create Group',
    'creating_usergroup' => 'Creating User Group',
    'usergroup_created' => 'User Group created',
    'editing_usergroup' => 'Editing User Group',
    'usergroup_updated' => 'User Group updated',
    'usergroups_empty_heading' => 'User Groups',
    'usergroups_empty' => 'User Groups allow you mix and match different roles and users together into a single group.',

    // Settings
    'settings' => 'Setting|Settings',
    'nav_settings' => 'Settings',
    'settings_cp' => 'Control Panel',
    'settings_routes' => 'Routes',
    'settings_search' => 'Search',
    'settings_system' => 'System',
    'settings_assets' => 'Assets',
    'settings_caching' => 'Caching',
    'settings_debug' => 'Debugging',
    'settings_email' => 'Email',
    'settings_theming' => 'Theming',
    'settings_users' => 'Users',
    'settings_updated' => 'Settings saved.',
    'settings_updated_and_indexed' => 'Settings saved and search indexes updated.',
    'settings_locales_instructions' => "Create a locale for each language translation. You can skip this for now and do it later if you'd prefer.",
    'settings_locales_index_php_warning' => "You will need to change the <code>\$locale</code> to <code>:locale</code> in your <code>index.php</code> file.",
    'settings_debug_mode_instructions' => "Enabling Debug Mode will display all errors on screen. It's a great tool while a site is development, but remember to disable it in production.",

    'shorthand' => 'Shorthand',
    'shorthand_instructions' => 'The 2 character language code.<br> Example: `en`, `de`.',
    'add_locale' => 'Add Locale',
    'full_locale' => 'Full Locale',
    'full_locale_instructions' => 'Used for PHP date localization.<br>Example: `en_US`, `de_DE`.',
    'locale_name_instructions' => 'Used for display.<br> Example: `English`, `German`.',
    'locale_url_instructions' => 'Example: `http://example.com/de/`',



    // Addons
    'addons' => 'Addon|Addons',
    'manage_addons' => 'Manage Addons',
    'nav_addons' => 'Addons',
    'addons_empty_heading' => 'There are no addons',
    'addons_empty' => 'Addons extend the functionality of Statamic.',

    // Fieldsets & Fields
    'fieldset' => 'Fieldset',
    'fieldsets' => 'Fieldset|Fieldsets',
    'nav_fieldsets' => 'Fieldsets',
    'create_fieldset_button' => 'Create Fieldset',
    'create_fieldset' => 'Create a Fieldset',
    'fieldset_created' => 'Fieldset created',
    'editing_fieldset' => 'Editing Fieldset',
    'fieldset_updated' => 'Fieldset updated',
    'fieldsets_empty' => 'Fieldsets let you create and manage reusable groups of fieldtypes that in turn manage your content. This is where content modeling happens.',
    'fieldset_title_instructions' => 'Display Name, usually a singular noun.',
    'fieldset_handle_instructions' => "Used in settings/templates.",
    'fieldset_create_title_instructions' => "Optional, shown when creating new content",
    'fieldset_hide_instructions' => "Hide from selection dialogs?",
    'fieldset_fields_instructions' => 'Assign and customize the fields and fieldtypes in this fieldset.',
    'fieldset_taxonomies_instructions' => 'Show, hide, and configure the taxonomies that should be displayed in this fieldset.',
    'create_title' => 'Create Title',
    'display_name' => "Display Name",
    'display_name_instructions' => "The field's label shown in the Control Panel.",
    'display_text' => 'Display Text',
    'display_text_instructions' => "The field's label",
    'field_name' => 'Field Name',
    'field_name_instructions' => 'The field variable',
    'field_required' => 'Required',
    'field_required_instructions' => 'This field is required',
    'field_variable' => "Field Variable",
    'field_variable_instructions' => "The field's template variable.",
    'field_instructions_instructions' => "Basic Markdown is allowed. Encouraged, even.",
    'field_width_instructions' => 'The size of the field in the fieldset layout.',
    'validation_rules' => "Validation Rules",
    'validation_instructions' => "Has access to all of Laravel's",
    'validation_instructions_link_text' => 'validation rules',
    'validation_rules_instructions' => 'Enter a pipe delimited string of <a href=":url" target="_blank">validation rules</a>.',
    'default_value' => 'Default Value',
    'field_default_value_instructions' => 'Enter the default value for string-type fields.',
    'edit_field' => 'Edit Field',
    'choose_field_to_edit' => "Choose a field to edit its settings.",
    'select_fieldtype' => 'Select Fieldtype',
    'field_added' => ":fieldtype field added.",
    'set_added' => "Set added.",
    'append_taxonomies' => 'Append Taxonomies on Entries',
    'append_taxonomies_instructions' => "When using this fieldset on an entry, any taxonomies not defined in the fieldset will be automatically added to the sidebar.",

    'sections' => 'Section|Sections',
    'section_label' => "Section Label",
    'section_handle' => "Section Handle",
    'section_handle_tip' => "Tip: You can name your section 'sidebar' to transform it into one.",
    'sections_and_fields' => "Sections & Fields",

    'display_conditions' => 'Display Conditions',
    'display_conditions_instructions' => 'Configure when this field will be shown.',
    'always_show' => 'Always Show',
    'show_when' => 'Show when...',
    'hide_when' => 'Hide when...',
    'standard' => 'Standard',
    'custom' => 'Custom',
    'display_standard_instructions' => 'Choose a combination of fields and corresponding values.',
    'display_custom_instructions' => 'Enter your custom JavaScript condition method name.',

    'basics' => 'Basics',
    'visibility' => 'Visibility',
    'extras' => 'Extras',

    'fieldtype_category_text' => 'Text',
    'fieldtype_category_media' => 'Media',
    'fieldtype_category_pickable' => 'Pickable',
    'fieldtype_category_structured' => 'Structured',
    'fieldtype_category_relationship' => 'Relationship',
    'fieldtype_category_special' => 'Special',
    'fieldtype_category_system' => 'System',

    // Forms
    'form' => 'Form',
    'forms' => 'Form|Forms',
    'nav_forms' => 'Forms',
    'forms_empty' => 'Forms collect, display, and report user submitted responses.',
    'create_form' => 'Create Form',
    'form_updated' => 'Form updated',
    'form_created' => 'Form created',
    'form_submission_deleted' => 'Submission deleted.',
    'submissions' => 'Submission|Submissions',
    'response' => 'response|responses',
    'empty_responses' => 'This form is awaiting responses.',
    'create_formset' => 'Create Formset',
    'creating_formset' => 'Creating Formset',
    'editing_formset' => 'Editing Formset',
    'import' => 'Import',
    'import_data' => 'Import Data',
    'import_link_text' => 'Learn about the import JSON format',
    'export' => 'Export',
    'export_csv' => 'Export as CSV',
    'export_json' => 'Export as JSON',

    // Formset Builder
    'formset_title_instructions' => "Your formset's proper label.",
    'formset_slug_instructions' => 'How the formset will be referenced.',
    'formset_metrics_instructions' => 'Specify any metrics you would like displayed.',
    'formset_metrics_grid_add_row' => 'Metric',
    'formset_metrics_grid_type_field' => 'Metric Type',
    'formset_metrics_grid_type_option_sum' => 'Sum',
    'formset_metrics_grid_type_option_total' => 'Total',
    'formset_metrics_grid_type_option_average' => 'Average',
    'formset_metrics_grid_label_field' => 'Label',
    'formset_metrics_grid_params_field' => 'Parameters',
    'formset_emails_instructions' => 'Add any emails you want to be sent upon submission.',
    'formset_emails_grid_add_row' => 'Email',
    'formset_emails_grid_to_field' => 'Recipient (To)',
    'formset_emails_grid_to_instructions' => 'Email address of the recipient.',
    'formset_emails_grid_from_field' => 'Sender (From)',
    'formset_emails_grid_from_instructions' => 'Leave blank to fall back to the site default.',
    'formset_emails_grid_reply_to_field' => 'Reply to',
    'formset_emails_grid_subject_field' => 'Subject',
    'formset_emails_grid_subject_instructions' => 'Email subject line.',
    'formset_emails_grid_template_field' => 'Template',
    'formset_emails_grid_template_instructions' => 'Leave blank to use an automagic email.',
    'formset_honeypot_field' => 'Honeypot Field',
    'formset_honeypot_instructions' => 'The field name to be used for the honeypot.',
    'formset_store_field' => 'Store Submissions',
    'formset_store_instructions' => 'Whether form submissions should be stored. Useful if you only wish to get email notifications.',
    'formset_honeypot_link' => "What's a honeypot?",
    'formset_fields_instructions' => 'Choose and customize the fields in this form.',

    // Updater
    'nav_updater' => 'Updater',
    'updates'     => 'Updates',
    'system_updates' => 'System Updates',
    'upgrade_to_latest' => 'Upgrade to Latest',
    'upgrade_to_version' => 'Upgrade to :version',
    'downgrade_to_version' => 'Downgrade to :version',
    'update_available' => 'Update Available',
    'update_complete' => 'Update complete.',
    'up_to_date' => 'Up to date!',
    'on_latest' => 'You are running the latest version of Statamic',
    'current_version' => 'Current Version',
    'released_on_date' => 'Released on :date',
    'updates_available' => 'There is an update available|There are :updates updates available',
    'backup_failed' => 'Backup Failed',
    'backup' => 'Backup',
    'backed_up' => 'Backed up',
    'backing_up' => 'Backing up...',
    'backing_up_instructions' => "We're zipping up your <code>statamic</code> folder, just in case you need to roll back.",
    'backup_reminder' => 'This is a safe process. We back up everything during running the update so you can always find your most recent version in <code>local/temp</code> if something goes wrong.',
    'couldnt_fetch_updates' => 'There was a problem fetching updates',

    // Download
    'downloading' => 'Downloading...',
    'downloaded' => 'Downloaded.',
    'download_failed' => 'Download Failed',
    'downloading_latest' => 'Getting the latest and greatest version of Statamic for you.',
    'downloading_version' => 'Getting v:version',

    // Installation
    'installation' => 'Installation',
    'installation_has_failed' => 'Installation has failed',
    'preparing_installation' => 'Installation will begin once the backup and download have completed.',
    'now_running' => "You're now running Statamic v:version",
    'statamic_ready' => 'Statamic is ready and waiting for you.',
    'delete_installer' => 'Please delete the <code>installer.php</code> file.',
    'installer_deleted' => 'I deleted it. Take me to the Control Panel &rarr;',

    // Archive
    'unzipping_files' => 'Unzipping files...',
    'unzipping_files_instructions' => 'Placing the files from the Statamic zip in a temporary location.',
    'unzipped_files' => 'Files unzipped.',

    // Dependencies
    'installing_dependencies' => 'Installing Dependencies...',
    'installing_dependencies_instructions' => 'Any addons with dependencies will need to be fetched. This may take a moment.',
    'dependencies_installed' => 'Dependencies installed.',

    // Swap Release
    'swapping_files' => 'Swapping files...',
    'swapping_files_instructions' => 'Statamic is being injected with software growth hormone (SGH). Results will be visible in mere moments.',
    'files_swapped' => 'Files swapped.',

    // Clean Up
    'cleaning_up' => 'Cleaning up...',
    'cleaning_up_instructions' => "We're deleting the temporary files created during the update.",

    // Importers
    'nav_import' => 'Import',
    'site_url' => 'Site URL',
    'import_from_version' => 'Import content from Statamic :version',
    'import_complete' => 'Import Complete',
    'import_has_completed' => 'The import has completed.',
    'import_summary' => 'Import Summary',
    'import_site_url_instructions' => 'Enter the URL of the existing website you will be importing.',

    'duplicate_item_warning'  => "There's one duplicate.|There are :count duplicates.",
    'uncheck_duplicates' => 'Uncheck Duplicates',

    'from_json' => 'From JSON',
    'json_file' => 'JSON File',
    'upload_json_file' => 'Upload a JSON file',

    // Export
    'export_failed' => 'Exporting Failed',
    'export_export_failed_with_error' => 'Export faileed with error:',

    'manage_widgets' => 'Manage Widgets',

    // Things
    'thing_created' => ':thing created.',
    'thing_updated' => ':thing updated.',
    'thing_deleted' => ':thing deleted.',
    'thing_configure' => 'Configure :thing',
    'thing_saved' => ':thing saved.',
    'thing_editing' => 'Editing :thing',

    'saved_success' => 'Saved',

    // Statuses
    'statuses' => 'Status|Statuses',
    'status_pending' => 'Pending',
    'status_active' => 'Active',
    'published' => 'Published',

    // Shortcuts
    'keyboard_shortcuts' => 'Keyboard Shortcuts',
    'show_keyboard_shortcuts' => 'Show Keyboard Shortcuts',

    // License
    'license_keys' => 'License Keys',
    'trial_mode' => 'Trial Mode',
    'trial_mode_missing_license_keys' => 'License keys need to be entered before going live.',
    'trial_mode_invalid_license_keys' => 'You have entered invalid license keys.',
    'trial_mode_license_keys_for_domains' => 'Valid license keys entered for :domains',
    'invalid_license_keys' => 'Please purchase and enter your license key or risk violating the License Agreement.',
    'license_keys_incorrect_domain' => 'License keys entered for incorrect domain. Please remedy or risk violating the License Agreement.',
    'checking_license_key' => 'Checking your license key, please wait...',
    'license_missing' => 'License key missing.',
    'license_valid' => 'You have a valid license key.',
    'license_invalid' => 'This key is invalid.',
    'license_wrong_domain' => 'Licensed to :domain',
    'license_no_domain' => 'License has no domain associated with it.',
    'license_key_instructions' => 'Please enter your license key. You can find yours in your <a href=":licenses">Statamic Account</a> or you can <a href=":buy_license">buy a new license</a> if you need to.',
    'buy_now' => 'Buy Now',
    'license_statamic_link' => 'Buy licenses and manage domains on statamic.com',

    'continue_in_trial_mode' => 'Continue in Trial Mode',
    'unlicensed' => 'Unlicensed',
    'unlicensed_message' => 'Please purchase and enter your license key or risk violating the License Agreement.',
    'on_trial_with_invalid_license' => 'You are currently on trial mode, but your license is invalid.',
    'on_trial_without_license' => 'You are currently on trial mode. Remember to add a license key before you move to a public domain.',
    'invalid_statamic_license' => 'Your Statamic license is invalid.',
    'couldnt_connect_to_outpost' => 'There was a problem communicating with the Statamic Outpost.',

    // Verbs and helpers
    'actions' => 'Action|Actions',
    'add' => 'Add',
    'edit' => 'Edit',
    'editing' => 'Editing',
    'view' => 'View',
    'remove' => 'Remove',
    'update' => 'Update',
    'delete' => 'Delete',
    'uncheck_all' => 'Uncheck All',
    'duplicate' => 'Duplicate',
    'manage' => 'Manage',
    'create' => 'Create',
    'reorder' => 'Reorder',
    'submit' => 'Submit',
    'save' => 'Save',
    'saving' => 'Saving',
    'save_changes' => 'Save Changes',
    'save_and_continue' => 'Save & Continue',
    'save_and_another' => 'Save & Add Another',
    'are_you_sure' => 'Are you sure?',
    'yes_im_sure' => 'Yes, I\'m sure',
    'refresh' => 'Refresh',
    'cancel' => 'Cancel',
    'loading' => 'Loading',
    'expand' => 'Expand',
    'collapse' => 'Collapse',
    'show' => 'Show',
    'hide' => 'Hide',
    'move' => 'Move',
    'edit_layout' => 'Edit Layout',
    'save_layout' => 'Save Layout',
    'save_order' => 'Save Order',
    'toggle_dropdown' => 'Toggle Dropdown',
    'confirm_delete_items' => 'This item will be deleted|The selected items will be deleted',
    'confirm_delete_page' => ' will be deleted along with all its children',
    'confirm_delete_folder' => 'This folder will be deleted',
    'configure' => 'Configure',
    'browse' => 'Browse',
    'select' => 'Select',
    'localizing' => 'Localizing',
    'add_row' => 'Add Row',
    'localizable' => 'Localizable',
    'please_wait' => 'Please Wait...',
    'exporting' => 'Exporting...',
    'importing' => 'Importing...',
    'return_to_dashboard' => 'Return to Dashboard',
    'publish_content' => 'Publish Content',
    'close_this_window' => 'Close this Window',
    'toggle_navigation' => 'Toggle navigation',
    'logging_in' => 'Logging in...',
    'logged_in' => 'Logged in.',
    'logged_in_taking_you_to_cp' => 'Logged in! Taking you to the control panel...',
    'write' => 'Write',
    'preview' => 'Preview',
    'collapse_all' => 'Collapse All',
    'expand_all' => 'Expand All',
    'please_select' => 'Please select',
    'selected' => 'selected',
    'add_another_item' => 'Add another item',
    'show_drafts' => 'Show Drafts',
    'hide_drafts' => 'Hide Drafts',
    'count' => 'Count',
    'reset' => 'Reset',
    'installed' => 'Installed',
    'add_condition' => 'Add Condition',
    'open' => 'Open',
    'download' => 'Download',
    'locale' => 'Locale',
    'hidden' => 'Hidden',

    // Nouns and whatnot
    'fields' => 'Field|Fields',
    'locales' => 'Locale|Locales',
    'keys' => 'Key|Keys',
    'values' => 'Value|Values',
    'names' => 'Name|Names',
    'usernames' => 'Username|Usernames',
    'emails' => 'Email|Emails',
    'passwords' => 'Password|Passwords',
    'confirm_password' => 'Confirm Password',
    'remember_me' => 'Remember me',
    'title' => 'Title',
    'titles' => 'Title|Titles',
    'slug' => 'Slug',
    'slugs' => 'Slug|Slugs',
    'rows' => 'Row|Rows',
    'columns' => 'Column|Columns',
    'folders' => 'Folder|Folders',
    'date' => 'Date',
    'dates' => 'Date|Dates',
    'date_and_time' => 'Date and Time',
    'datestring' => 'Date',
    'publish_date' => 'Publish Date',
    'items' => 'Item|Items',
    'add_date' => 'Add Date',
    'add_time' => 'Add Time',
    'login' => 'Login',
    'login_with' => 'Login with :provider',
    'login_to_continue' => "Login to Continue",
    'new' => 'New',
    'or' => 'or',
    'order' => 'Order',
    'one_quarter' => '1/4 - One quarter',
    'three_quarters' => '3/4 - Three quarters',
    'one_third' => '1/3 - One third',
    'two_thirds' => '2/3 - Two thirds',
    'half' => 'Half',
    'full_width' => 'Full width',
    'width' => 'Width',
    'version' => 'Version',
    'versions' => 'Version|Versions',
    'developer' => 'Developer',
    'developers' => 'Developer|Developers',
    'developer_mode' => 'Developer Mode',
    'description' => 'Description',
    'descriptions' => 'Description|Descriptions',
    'name' => 'Name',
    'username' => 'Username',
    'email' =>'Email',
    'done' => 'Done',
    'close' => 'Close',
    'templates' => 'Template|Templates',
    'authors' => 'Author|Authors',
    'installer' => 'Installer',
    'search' => 'Search',
    'search_results' => 'Search Results',
    'no_search_results' => 'No Search Results',
    'instructions' => 'Instructions',
    'handle' => 'Handle',
    'label' => 'Label',
    'type' => 'Type',
    'route' => 'Route',
    'terms' => 'Term|Terms',
    'progress' => 'Progress',
    'variables' => 'Variable|Variables',
    'license_key' => 'License Key',
    'driver' => 'Driver',
    'path' => 'Path',
    'url' => 'URL',
    'valid_url' => 'Valid URL',
    'invalid_url' => 'Invalid URL',
    'bucket' => 'Bucket',
    'region' => 'Region',
    'metrics' => 'Metric|Metrics',
    'whats_this' => "What's this?",
    'first_name' => 'First name',
    'last_name' => 'Last name',
    'bio' => 'Bio',
    'markdown_cheatsheet' => 'Markdown Cheatsheet',
    'locales_and_urls' => 'Locales and URLs',
    'debug_mode' => 'Debug Mode',
    'defined_in_environment' => 'Managed externally by your environment.',
    'be_right_back' => 'Be right back.',
    'size' => 'Size',
    'read_only' => "Read Only",
    'read_only_mode' => "Read Only Mode",
    'next_step' => "Next Step",
    'invalid_creds' => 'These credentials are incorrect',

    'nav_content' => 'Content',
    'nav_tools' => 'Tools',
    'nav_configure' => 'Configure',
    'nav_addons' => 'Addons',
    'nav_fieldsets' => 'Fieldsets',
    'nav_settings' => 'Settings',
    'nav_users' => 'Users',
    'nav_resolve_duplicate_ids' => 'Duplicate IDs',

    'mount_collection' => 'Mount Collection',
    'unmount_collection' => 'Unmount Collection',

    // Validation
    'handle_exists' => 'A container with this handle already exists.',

    // Duplicate ID Manager
    'duplicate_id_title' => 'Duplicate IDs',
    'no_duplicate_ids' => 'No duplicate IDs detected.',
    'generate_new_id' => 'Generate new ID.',

    // Path
    'path_resolves_to'    => 'Path resolves to: :path',
    'path_exists'         => 'Path exists.',
    'path_does_not_exist' => 'Path does not exist.',

    // Bard
    'heading_2'          => 'Heading 2',
    'heading_3'          => 'Heading 3',
    'heading_4'          => 'Heading 4',
    'heading_5'          => 'Heading 5',
    'heading_6'          => 'Heading 6',
    'bold'               => 'Bold',
    'italic'             => 'Italic',
    'underline'          => 'Underline',
    'strikethrough'      => 'Strikethrough',
    'remove_formatting'  => 'Remove Formatting',
    'unordered_list'     => 'Unordered List',
    'ordered_list'       => 'Ordered List',
    'blockquote'         => 'Blockquote',
    'superscript'        => 'Superscript',
    'subscript'          => 'Subscript',
    'add_link'           => 'Add Link',
    'remove_link'        => 'Remove Link',
    'link_to_asset'      => 'Link to Asset',
    'inline_code'        => 'Inline Code',
    'edit_link'          => 'Edit Link',
    'open_in_new_window' => 'Open in New Window',
];
