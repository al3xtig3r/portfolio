<?php

return [
    'name' => 'Portfolio',
    'description' => 'Own portfolio management',
    'services' => [
        'single' => 'Service',
        'multiple' => 'Services',
        'columns' => [
            'name' => 'Name',
            'icon' => 'Icon',
            'works' => 'Works'
        ],
        'fields' => [
            'name' => 'Name',
            'icon' => 'Icon',
            'icon_comment' => 'Insert only the name of the icon (eg. for "icon-user" insert "user"). Icons list: https://octobercms.com/docs/ui/icon'
        ],
        'toolbar' => [
            'new' => 'New service',
            'delete_selected' => 'Delete selected',
            'confirm_deletion' => 'Are you sure you want to delete the selected Services?'
        ],
        'create' => [
            'title' => 'Create service',
            'create' => 'Create',
            'creating' => 'Creating service...',
            'create_close' => 'Create and close',
            'cancel' => 'or <a href=":url">Cancel</a>',
            'return' => 'Return to services list'
        ],
        'update' => [
            'title' => 'Edit service',
            'save' => '<u>S</u>ave',
            'saving' => 'Saving service...',
            'save_close' => 'Save and close',
            'cancel' => 'or <a href=":url">Cancel</a>',
            'confirm_deletion' => 'Delete this Service?',
            'deleting' => 'Deleting service...',
            'return' => 'Return to services list'
        ],
        'preview' => [
            'title' => 'Preview service',
            'return' => 'Return to services list'
        ],
        'list' => [
            'title' => 'Manage Services'
        ]
    ],
    'customers' => [
        'single' => 'Customer',
        'multiple' => 'Customers',
        'columns' => [
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'works' => 'Works',
            'public' => 'Public'
        ],
        'fields' => [
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'public' => 'Public',
            'logo' => 'Logo'
        ],
        'toolbar' => [
            'new' => 'New customer',
            'delete_selected' => 'Delete selected',
            'confirm_deletion' => 'Are you sure you want to delete the selected Customers?'
        ],
        'create' => [
            'title' => 'Create customer',
            'create' => 'Create',
            'creating' => 'Creating customer...',
            'create_close' => 'Create and close',
            'cancel' => 'or <a href=":url">Cancel</a>',
            'return' => 'Return to customers list'
        ],
        'update' => [
            'title' => 'Edit customer',
            'save' => '<u>S</u>ave',
            'saving' => 'Saving customer...',
            'save_close' => 'Save and close',
            'cancel' => 'or <a href=":url">Cancel</a>',
            'confirm_deletion' => 'Delete this Customer?',
            'deleting' => 'Deleting customer...',
            'return' => 'Return to customers list'
        ],
        'preview' => [
            'title' => 'Preview customer',
            'return' => 'Return to customers list'
        ],
        'list' => [
            'title' => 'Manage Customers'
        ]
    ],
    'works' =>[
        'single' => 'Work',
        'multiple' => 'Works',
        'columns' => [
            'name' => 'Name',
            'customer_name' => 'Customer',
            'description' => 'Description',
            'link' => 'Link',
            'gross_price' => 'Gross price',
            'service_name' => 'Service',
            'likes' => 'Likes',
            'vote' => 'Vote',
            'comment' => 'Comment',
            'release_date' => 'Release date',
            'expiration_date' => 'Expiration date',
            'public' => 'Public?',
            'reminder' => 'Reminder?',
            'link_button' => 'Go'
        ],
        'fields' => [
            'none_option' => '--- None ---',
            'name' => 'Name',
            'customer' => 'Customer',
            'description' => 'Description',
            'link' => 'Link',
            'gross_price' => 'Gross price',
            'service' => 'Servizio',
            'likes' => 'Likes',
            'vote' => 'Vote',
            'comment' => 'Comment',
            'release_date' => 'Release date',
            'expiration_date' => 'Expiration date',
            'public' => 'Public',
            'reminder' => 'Reminder',
            'main_image' => 'Main image',
            'gallery' => 'Gallery'
        ],
        'toolbar' => [
            'new' => 'New work',
            'delete_selected' => 'Delete selected',
            'confirm_deletion' => 'Are you sure you want to delete the selected Works?'
        ],
        'create' => [
            'title' => 'Create work',
            'create' => 'Create',
            'creating' => 'Creating work...',
            'create_close' => 'Create and close',
            'cancel' => 'or <a href=":url">Cancel</a>',
            'return' => 'Return to works list'
        ],
        'update' => [
            'title' => 'Edit work',
            'save' => '<u>S</u>ave',
            'saving' => 'Saving work...',
            'save_close' => 'Save and close',
            'cancel' => 'or <a href=":url">Cancel</a>',
            'confirm_deletion' => 'Delete this Work?',
            'deleting' => 'Deleting work...',
            'return' => 'Return to works list'
        ],
        'preview' => [
            'title' => 'Preview work',
            'return' => 'Return to works list'
        ],
        'list' => [
            'title' => 'Manage Works'
        ]
    ],
    'components' => [
        'showcase' => [
            'show' => 'Show:',
            'refreshed' => 'Works refreshed!',
            'thanks' => 'Thank you very much! <3',
            'thanks_tooltip' => 'Thanks! :D',
            'view' => 'View',
            'go' => 'Go',
            'customer_review' => 'Customer\'s review:',
            'customer_vote' => 'Vote:'
        ]
    ]
];
