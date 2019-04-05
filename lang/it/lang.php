<?php

return [
    'name' => 'Portfolio',
    'description' => 'Gestione del proprio portfolio',
    'services' => [
        'single' => 'Servizio',
        'multiple' => 'Servizi',
        'columns' => [
            'name' => 'Nome',
            'icon' => 'Icona',
            'works' => 'Lavori'
        ],
        'fields' => [
            'name' => 'Nome',
            'icon' => 'Icona',
            'icon_comment' => 'Inserisci solo il nome dell\'icona (es. per "icon-user" inserisci "user"). Lista icone: https://octobercms.com/docs/ui/icon'
        ],
        'toolbar' => [
            'new' => 'Nuovo servizio',
            'delete_selected' => 'Elimina selezionati',
            'confirm_deletion' => 'Sei sicuro di voler eliminare i Servizi selezionati?'
        ],
        'create' => [
            'title' => 'Crea servizio',
            'create' => 'Crea',
            'creating' => 'Creazione sevizio...',
            'create_close' => 'Crea e chiudi',
            'cancel' => 'o <a href=":url">Annulla</a>',
            'return' => 'Ritorna alla lista dei servizi'
        ],
        'update' => [
            'title' => 'Modifica servizio',
            'save' => '<u>S</u>alva',
            'saving' => 'Salvataggio servizio...',
            'save_close' => 'Salva e chiudi',
            'cancel' => 'o <a href=":url">Annulla</a>',
            'confirm_deletion' => 'Eliminare questo Servizio?',
            'deleting' => 'Eliminazione servizio...',
            'return' => 'Ritorna alla lista dei servizi'
        ],
        'preview' => [
            'title' => 'Visualizza servizio',
            'return' => 'Ritorna alla lista dei servizi'
        ],
        'list' => [
            'title' => 'Gestisci Servizi'
        ]
    ],
    'customers' => [
        'single' => 'Cliente',
        'multiple' => 'Clienti',
        'columns' => [
            'name' => 'Nome',
            'email' => 'Email',
            'phone' => 'Telefono',
            'works' => 'Lavori',
            'public' => 'Pubblico'
        ],
        'fields' => [
            'name' => 'Nome',
            'email' => 'Email',
            'phone' => 'Telefono',
            'public' => 'Pubblico',
            'logo' => 'Logo'
        ],
        'toolbar' => [
            'new' => 'Nuovo cliente',
            'delete_selected' => 'Elimina selezionati',
            'confirm_deletion' => 'Sei sicuro di voler eliminare i Clienti selezionati?'
        ],
        'create' => [
            'title' => 'Crea cliente',
            'create' => 'Crea',
            'creating' => 'Creazione cliente...',
            'create_close' => 'Crea e chiudi',
            'cancel' => 'o <a href=":url">Annulla</a>',
            'return' => 'Ritorna alla lista dei clienti'
        ],
        'update' => [
            'title' => 'Modifica cliente',
            'save' => '<u>S</u>alva',
            'saving' => 'Salvataggio cliente...',
            'save_close' => 'Salva e chiudi',
            'cancel' => 'o <a href=":url">Annulla</a>',
            'confirm_deletion' => 'Eliminare questo Cliente?',
            'deleting' => 'Eliminazione cliente...',
            'return' => 'Ritorna alla lista dei clienti'
        ],
        'preview' => [
            'title' => 'Visualizza cliente',
            'return' => 'Ritorna alla lista dei clienti'
        ],
        'list' => [
            'title' => 'Gestisci Clienti'
        ]
    ],
    'works' =>[
        'single' => 'Lavoro',
        'multiple' => 'Lavori',
        'columns' => [
            'name' => 'Nome',
            'customer_name' => 'Cliente',
            'description' => 'Descrizione',
            'link' => 'Link',
            'gross_price' => 'Prezzo lordo',
            'service_name' => 'Servizio',
            'likes' => 'Mi piace',
            'vote' => 'Voto',
            'comment' => 'Commento',
            'release_date' => 'Data rilascio',
            'expiration_date' => 'Data scadenza',
            'public' => 'Pubblico?',
            'reminder' => 'Promemoria?',
            'link_button' => 'Vai'
        ],
        'fields' => [
            'none_option' => '--- Nessuno ---',
            'name' => 'Nome',
            'customer' => 'Cliente',
            'description' => 'Descrizione',
            'link' => 'Link',
            'gross_price' => 'Prezzo lordo',
            'service' => 'Servizio',
            'likes' => 'Mi piace',
            'vote' => 'Voto',
            'comment' => 'Commento',
            'release_date' => 'Data rilascio',
            'expiration_date' => 'Data scadenza',
            'public' => 'Pubblico',
            'reminder' => 'Promemoria',
            'main_image' => 'Immagine principale',
            'gallery' => 'Galleria'
        ],
        'toolbar' => [
            'new' => 'Nuovo lavoro',
            'delete_selected' => 'Elimina selezionati',
            'confirm_deletion' => 'Sei sicuro di voler eliminare i Lavori selezionati?'
        ],
        'create' => [
            'title' => 'Crea lavoro',
            'create' => 'Crea',
            'creating' => 'Creazione lavoro...',
            'create_close' => 'Crea e chiudi',
            'cancel' => 'o <a href=":url">Annulla</a>',
            'return' => 'Ritorna alla lista dei lavori'
        ],
        'update' => [
            'title' => 'Modifica lavoro',
            'save' => '<u>S</u>alva',
            'saving' => 'Salvataggio lavoro...',
            'save_close' => 'Salva e chiudi',
            'cancel' => 'o <a href=":url">Annulla</a>',
            'confirm_deletion' => 'Eliminare questo Lavoro?',
            'deleting' => 'Eliminazione lavoro...',
            'return' => 'Ritorna alla lista dei lavori'
        ],
        'preview' => [
            'title' => 'Visualizza lavoro',
            'return' => 'Ritorna alla lista dei lavori'
        ],
        'list' => [
            'title' => 'Gestisci Lavori'
        ]
    ],
    'components' => [
        'showcase' => [
            'show' => 'Mostra:',
            'refreshed' => 'Lavori aggiornati!',
            'thanks' => 'Grazie mille! <3',
            'thanks_tooltip' => 'Grazie! :D',
            'view' => 'Vedi',
            'go' => 'Vai',
            'customer_review' => 'Recensione del cliente:',
            'customer_vote' => 'Voto:'
        ]
    ]
];
