<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // Components
    'components' => [
        'status' => [
            1 => 'Funktionsfähig',
            2 => 'Performance Probleme',
            3 => 'Teilweise Ausfall',
            4 => 'größerer Ausfall',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'keine Vorfälle.',
        'past'          => 'vergangene Vorfälle',
        'previous_week' => 'letzte Woche',
        'next_week'     => 'nächste Woche',
        'none'          => 'keine Vorfälle',
        'status'        => [
            0 => '',
            1 => 'Untersuchung läuft',
            2 => 'Problem identifiziert',
            3 => 'Problem unter Beobachtung',
            4 => 'Problem behoben',
        ],
    ],

    // Service Status
    'service' => [
        'good' => 'Alle Systeme laufen.',
        'bad'  => 'Bei einigen System sind Fehler aufgetreten.',
    ],

    'api' => [
        'regenerate' => 'API-Schlüssel generieren',
        'revoke'     => 'API-Schlüssel löschen',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => 'Hourly',
            'daily'   => 'Daily',
            'monthly' => 'Monthly',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates.',
        'button'    => 'Subscribe',
        'email'     => [
            'subscribe'   => 'Subscribe to email updates.',
            'subscribed'  => 'You\'ve been subscribed to email notifications.',
            'verified'    => 'Your email subscription has been confirmed. Thank you!',
            'unsuscribe'  => 'Unsuscribe from email updates.',
            'unsuscribed' => 'Your email subscription has been canceled,',
            'failure'     => 'Something went wrong with the subscription.',
        ]
    ],

    // Other
    'powered_by'      => ':app Status-Seite via <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'Über diese Seite',
    'rss-feed'        => 'RSS Feed',
    'atom-feed'       => 'Atom Feed',
    'feed'            => 'Status Feed',

];
