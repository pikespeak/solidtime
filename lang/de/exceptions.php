<?php

declare(strict_types=1);

use App\Exceptions\Api\CanNotDeleteUserWhoIsOwnerOfOrganizationWithMultipleMembers;
use App\Exceptions\Api\CanNotRemoveOwnerFromOrganization;
use App\Exceptions\Api\ChangingRoleOfPlaceholderIsNotAllowed;
use App\Exceptions\Api\ChangingRoleToPlaceholderIsNotAllowed;
use App\Exceptions\Api\EntityStillInUseApiException;
use App\Exceptions\Api\FeatureIsNotAvailableInFreePlanApiException;
use App\Exceptions\Api\InactiveUserCanNotBeUsedApiException;
use App\Exceptions\Api\InvitationForTheEmailAlreadyExistsApiException;
use App\Exceptions\Api\OnlyOwnerCanChangeOwnership;
use App\Exceptions\Api\OnlyPlaceholdersCanBeMergedIntoAnotherMember;
use App\Exceptions\Api\OrganizationHasNoSubscriptionButMultipleMembersException;
use App\Exceptions\Api\OrganizationNeedsAtLeastOneOwner;
use App\Exceptions\Api\OverlappingTimeEntryApiException;
use App\Exceptions\Api\PdfRendererIsNotConfiguredException;
use App\Exceptions\Api\PersonalAccessClientIsNotConfiguredException;
use App\Exceptions\Api\ThisPlaceholderCanNotBeInvitedUseTheMergeToolInsteadException;
use App\Exceptions\Api\TimeEntryCanNotBeRestartedApiException;
use App\Exceptions\Api\TimeEntryStillRunningApiException;
use App\Exceptions\Api\UserIsAlreadyMemberOfOrganizationApiException;
use App\Exceptions\Api\UserIsAlreadyMemberOfProjectApiException;
use App\Exceptions\Api\UserNotPlaceholderApiException;
use App\Service\Export\ExportException;

return [
    'api' => [
        TimeEntryStillRunningApiException::KEY => 'Der Zeiteintrag läuft noch',
        UserNotPlaceholderApiException::KEY => 'Der angegebene Benutzer ist kein Platzhalter',
        TimeEntryCanNotBeRestartedApiException::KEY => 'Der Zeiteintrag wurde bereits gestoppt und kann nicht neu gestartet werden',
        InactiveUserCanNotBeUsedApiException::KEY => 'Inaktiver Benutzer kann nicht verwendet werden',
        UserIsAlreadyMemberOfOrganizationApiException::KEY => 'Der Benutzer ist bereits Mitglied der Organisation',
        UserIsAlreadyMemberOfProjectApiException::KEY => 'Der Benutzer ist bereits Mitglied des Projekts',
        EntityStillInUseApiException::KEY => ':modelToDelete wird noch von :modelInUse verwendet und kann nicht gelöscht werden.',
        CanNotRemoveOwnerFromOrganization::KEY => 'Der Eigentümer kann nicht aus der Organisation entfernt werden',
        CanNotDeleteUserWhoIsOwnerOfOrganizationWithMultipleMembers::KEY => 'Ein Benutzer, der Eigentümer einer Organisation mit mehreren Mitgliedern ist, kann nicht gelöscht werden. Bitte löschen Sie zuerst die Organisation.',
        OnlyOwnerCanChangeOwnership::KEY => 'Nur der Eigentümer kann die Eigentümerschaft übertragen',
        OrganizationNeedsAtLeastOneOwner::KEY => 'Die Organisation benötigt mindestens einen Eigentümer',
        ChangingRoleToPlaceholderIsNotAllowed::KEY => 'Das Ändern der Rolle zu Platzhalter ist nicht erlaubt',
        ExportException::KEY => 'Export fehlgeschlagen, bitte versuchen Sie es später erneut oder kontaktieren Sie den Support',
        OrganizationHasNoSubscriptionButMultipleMembersException::KEY => 'Die Organisation hat kein Abonnement, aber mehrere Mitglieder',
        PdfRendererIsNotConfiguredException::KEY => 'Der PDF-Renderer ist nicht konfiguriert',
        FeatureIsNotAvailableInFreePlanApiException::KEY => 'Diese Funktion ist im kostenlosen Plan nicht verfügbar',
        PersonalAccessClientIsNotConfiguredException::KEY => 'Der Personal Access Client ist nicht konfiguriert',
        ChangingRoleOfPlaceholderIsNotAllowed::KEY => 'Das Ändern der Rolle eines Platzhalters ist nicht erlaubt',
        OnlyPlaceholdersCanBeMergedIntoAnotherMember::KEY => 'Nur Platzhalter können mit einem anderen Mitglied zusammengeführt werden',
        ThisPlaceholderCanNotBeInvitedUseTheMergeToolInsteadException::KEY => 'Dieser Platzhalter kann nicht eingeladen werden, verwenden Sie stattdessen das Zusammenführungstool',
        InvitationForTheEmailAlreadyExistsApiException::KEY => 'Diese E-Mail-Adresse wurde bereits in die Organisation eingeladen. Bitte warten Sie, bis der Benutzer die Einladung annimmt, oder senden Sie die Einladungs-E-Mail erneut.',
        OverlappingTimeEntryApiException::KEY => 'Überlappende Zeiteinträge sind nicht erlaubt.',
    ],
    'unknown_error_in_admin_panel' => 'Ein unbekannter Fehler ist aufgetreten. Bitte überprüfen Sie die Protokolle.',
];
