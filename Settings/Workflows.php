<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
$languageStrings = array(
	//Basic Fält Namns
	'LBL_NEW' => 'Ny',
	'LBL_WORKFLOW' => 'Arbetsflöde',
	'LBL_CREATING_WORKFLOW' => 'Skapa arbetsflöde',
	'LBL_NEXT' => 'Nästa',

	//Edit view
	'LBL_STEP_1' => 'Steg 1',
	'LBL_ENTER_BASIC_DETAILS_OF_THE_WORKFLOW' => 'Skriv in grunduppgifter om arbetsflödet',
	'LBL_SPECIFY_WHEN_TO_EXECUTE' => 'Ange när du vill utföra detta arbetsflöde',
	'ON_FIRST_SAVE' => 'Bara efter första sparningen',
	'ONCE' => 'En gång',
	'ON_EVERY_SAVE' => 'Varje sparning',
	'ON_MODIFY' => 'Vid ändring',
        'ON_SCHEDULE' => 'Tidtabell',
	'MANUAL' => 'Manuell',
	'SCHEDULE_WORKFLOW' => 'Schemalägg arbetsflöde',
	'ADD_CONDITIONS' => 'Skapa villkor',
	'ADD_TASKS' => 'Skapa arbetsuppgifter',
	
	//Step2 edit view
	'LBL_EXPRESSION' => 'Uttryck',
	'LBL_FIELD_NAME' => 'Fält',
	'LBL_SET_VALUE' => 'Ange belopp',
	'LBL_USE_FIELD' => 'Använd fält',
	'LBL_USE_FUNCTION' => 'Använd funktion',
	'LBL_RAW_TEXT' => 'Rå text',
	'LBL_ENABLE_TO_CREATE_FILTERS' => 'Aktivera för att skapa filter',
	'LBL_CREATED_IN_OLD_LOOK_CANNOT_BE_EDITED' => 'Detta arbetsflödet skapades i äldre utseende. Villkor som skapats i äldre utseende kan inte redigeras. Du kan välja tills återskapa förutsättningar, eller använd de befintliga förhållanden utan att ändra dem.',
	'LBL_USE_EXISTING_CONDITIONS' => 'Använd befintliga villkor',
	'LBL_RECREATE_CONDITIONS' => 'Återskapa villkor',
	'LBL_SAVE_AND_CONTINUE' => 'Spara & Fortsätt',
	
	//Step3 edit view
	'LBL_ACTIVE' => 'Aktiv',
	'LBL_TASK_TYPE' => 'Uppgiftstyp',
	'LBL_TASK_TITLE' => 'Uppgiftstitel',
	'LBL_ADD_TASKS_FOR_WORKFLOW' => 'Skapa uppgifter för arbetsflöde',
	'LBL_EXECUTE_TASK' => 'Utför uppgift',
	'LBL_SELECT_OPTIONS' => 'Välj alternativ',
	'LBL_ADD_FIELD' => 'Skapa fält',
	'LBL_ADD_TIME' => 'Lägg till tid',
	'LBL_TITLE' => 'Titel',
	'LBL_PRIORITY' => 'Prioritet',
	'LBL_ASSIGNED_TO' => 'Tilldelad',
	'LBL_TIME' => 'Tid',
	'LBL_DUE_DATE' => 'Förfallodatum',
	'LBL_THE_SAME_VALUE_IS_USED_FOR_START_DATE' => 'Samma värde används för startdatum',
	'LBL_EVENT_NAME' => 'Händelsenamn',
	'LBL_TYPE' => 'Typ',
	'LBL_METHOD_NAME' => 'Metodnamn',
	'LBL_RECEPIENTS' => 'Mottagare',
	'LBL_ADD_FIELDS' => 'Skapa flera fält',
	'LBL_SMS_TEXT' => 'Sms-Text',
	'LBL_SET_FIELD_VALUES' => 'Skapa fältvärden',
	'LBL_IN_ACTIVE' => 'Inaktiv',
	'LBL_SEND_NOTIFICATION' => 'Skicka notifikation',
	'LBL_START_TIME' => 'Starttid',
	'LBL_START_DATE' => 'Startdatum',
	'LBL_END_TIME' => 'Sluttid',
	'LBL_END_DATE' => 'Slutdatum',
	'LBL_ENABLE_REPEAT' => 'Tillåt Upprepning',
	'LBL_NO_METHOD_IS_AVAILABLE_FOR_THIS_MODULE' => 'Ingen metod är tillgänglig för denna modul',
	'LBL_FINISH' => 'Avslutad',
	'LBL_NO_TASKS_ADDED' => 'Inga uppgifter tillades',
	'LBL_CANNOT_DELETE_DEFAULT_WORKFLOW' => 'Du kan inte radera förvalda arbetsflöden',
	'LBL_MODULES_TO_CREATE_RECORD' => 'Moduler för att skapa inlägg',
	'LBL_EXAMPLE_EXPRESSION' => 'Uttryck',
	'LBL_EXAMPLE_RAWTEXT' => 'Råtext',
	'LBL_VTIGER' => 'Vtiger',
	'LBL_EXAMPLE_FIELD_NAME' => 'Fält',
	'LBL_NOTIFY_OWNER' => 'Motifiera_ägare',
	'LBL_ANNUAL_REVENUE' => 'Årlig_inkomst',
	'LBL_EXPRESSION_EXAMPLE2' => "Om e-postland == 'Indien' och sedan concat (förnamn, '', efternamn) annars concat (efternamn, '', förnamn) slut",
	'LBL_FROM' => 'Från',
	'Optional' => 'Valfritt',
	'LBL_ADD_TASK' => 'Skapa uppgift',
	'Portal Pdf Url' =>'Portal PDF Url',
	'LBL_ADD_TEMPLATE' => 'Skapa mall',
	'LBL_LINEITEM_BLOCK_GROUP' => 'Radposter block för grupptaxering',
	'LBL_LINEITEM_BLOCK_INDIVIDUAL' => 'Radposter block för individuell taxering',
	'LBL_RUN_WORKFLOW' => 'Starta arbetsflöde',
	'LBL_AT_TIME' => 'Tidpunkt',
	'LBL_HOURLY' => 'Timvis',
	
	'LBL_DAILY' => 'Dagligen',
	'LBL_WEEKLY' => 'Veckovis',
	'LBL_ON_THESE_DAYS' => 'På dessa dagar',
	'LBL_MONTHLY_BY_DATE' => 'Månadsvis efter datum',
	'LBL_MONTHLY_BY_WEEKDAY' => 'Månadsvis efter veckodagar',
	'LBL_YEARLY' => 'Årligen',
	'LBL_SPECIFIC_DATE' => 'Specifikt datum',
	'LBL_CHOOSE_DATE' => 'Välj datum',
	'LBL_SELECT_MONTH_AND_DAY' => 'Välj månad och datum',
	'LBL_SELECTED_DATES' => 'Valda datum',
	'LBL_EXCEEDING_MAXIMUM_LIMIT' => 'Högsta gräns överskridet',
	'LBL_NEXT_TRIGGER_TIME' => 'Nästa aktivering',
	'LBL_MESSAGE' => 'Meddelande',

	// Patch provided by http://trac.vtiger.com/cgi-bin/trac.cgi/ticket/7884
	'Workflows' => 'Arbetsflöden',
	// Field names
	'Summary' => 'Summerat',
	'Module' => 'Modul',
	'Execution Condition' => 'Startvillkor'
);

$jsLanguageStrings = array(
	'JS_STATUS_CHANGED_SUCCESSFULLY' => 'Status ändrades',
	'JS_TASK_DELETED_SUCCESSFULLY' => 'Uppgift raderades',
	'JS_SAME_FIELDS_SELECTED_MORE_THAN_ONCE' => 'Samma fält markerat mer än en gång',
	'JS_WORKFLOW_SAVED_SUCCESSFULLY' => 'Arbetsflöde sparades'
);