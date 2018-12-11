<?php

namespace App\Helpers;

// Inicializando o client
$client = new Google_Client();
// Setando o nome da Api incluindo o Agent
$client -> setApplicationName('Calendar integration');
// Autenticando as credenciais do google
$client -> setAuthConfig('283318133345-vgl4lcrrnfh0obtbs9mgi21g2cdq9cbp.apps.googleusercontent.com/client_id.json');
// Setting offline here means we can pull data from the venue's calendar when they are not actively using the site.
$client->setAccessType("offline");
// This will include any other scopes (Google APIs) previously granted by the venue
$client->setIncludeGrantedScopes(true);
// Set this to force to consent form to display.
$client->setApprovalPrompt('force');
// Add the Google Calendar scope to the request.
$client->addScope(Google_Service_Calendar::CALENDAR);
// Set the redirect URL back to the site to handle the OAuth2 response. This handles both the success and failure journeys.
$client->setRedirectUri(URL::to('/') . '/oauth2callback');

