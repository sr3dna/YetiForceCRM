<?php
/**
 * Back up french translation
 * @package YetiForce.Language
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 2.0 (licenses/License.html or yetiforce.com)
 */
$languageStrings = [
	'LBL_BACKUP_DESCRIPTION' => 'Créer un fichier de backup.',
	'LBL_SAVE_BACKUP' => 'Sauvegarder le backup.',
	'LBL_SCHEDULE_BACKUP' => 'Générer le Backup',
	'LBL_LOADING' => 'Backup se génere, merci de patienter...',
	'LBL_FTP_SETTINGS' => 'Paramètres FTP',
	'LBL_BACKUP_CREATING' => 'Création du Backup',
	'LBL_RESUME_BACKUP' => 'Reprendre backup',
	'LBL_START_TIME' => 'Créé à',
	'LBL_FILE_NAME' => 'Nom du fichier',
	'LBL_ACTION' => 'Action',
	'LBL_FTP_SAVE_CONFIG' => 'Sauvegarder la configuration',
	'LBL_HOST' => 'Hôte',
	'LBL_PORT' => 'Port',
	'LBL_LOGIN' => 'Login',
	'LBL_PASSWORD' => 'Mot de passe',
	'LBL_CONNECTION_STATUS' => 'Statut de la connexion',
	'LBL_SEND_TO_FTP' => 'Envoyer vers le FTP',
	'LBL_ACTIVE' => 'Actif',
	'LBL_PATH' => 'Sauvegarder le chemin',
	'LBL_PATH_INFO' => 'Si le chemin est vide, le backup sera sauvegardé dans le dossier principal',
	'LBL_EMAIL_NOTIFICATIONS' => ' Notifications E-mail',
	'LBL_USERS_FOR_NOTIFICATIONS' => 'Utilisateurs à notifier',
	'LBL_SAVE_CHANGES' => 'Sauvegarder les changements',
	'LBL_GENERAL_SETTINGS' => 'Paramètres généraux',
	'LBL_STORAGEFOLDER_INFO' => 'Voulez-vous faire un backup du dossier stockage?',
	'LBL_BACKUPFOLDER_INFO' => 'Voulez-vous faire un backup du dossier backup?',
	'LBL_VALUES' => 'Valeurs',
	'LBL_DETAIL' => 'Détail',
	'LBL_BACKUP_COPY_TYPE' => 'Type de Backup',
	'LBL_BACKUP_SINGLE' => 'Partiel',
	'LBL_BACKUP_OVERALL' => 'Complet',
	'LBL_ALERT_NO_ZIP_EXTENSION_TITLE' => 'Pas de librairie ZIP trouvé',
	'LBL_ALERT_NO_ZIP_EXTENSION_DESC' => 'Backup complet est impossible, le backup va suelement créer une copie non compressée de la base ',
	'LBL_ALERT_CRON_NOT_ACTIVE_TITLE' => 'Cron - backup des données n\'est pas actif',
	'LBL_ALERT_CRON_NOT_ACTIVE_DESC' => 'Faire un backup n\'est pas possible, pour l\'activer aller à <a href="index.php?module=CronTasks&parent=Settings&view=List" target="_blank">Harmonogram</a> and activate Backup',
	'LBL_ALERT_OUTGOING_MAIL_NOT_CONFIGURED_TITLE' => 'Serveur mail sortant n\'est pas configuré',
	'LBL_ALERT_OUTGOING_MAIL_NOT_CONFIGUREDE_DESC' => 'Les notifications emails post backup ne seront pas envoyées',
	'LBL_END_TIME' => 'Heure de fin',
	'LBL_BACKUP_TIME' => 'Durée du backup',
	'LBL_LOGS' => 'Logs',
	'Completed' => 'Correct',
	'In progress' => 'En cours',
	'LBL_SET_SCHEDULE_BACKUP' => 'Backup a été programmé',
	'LBL_ON' => 'ON',
	'LBL_OFF' => 'OFF',
	'LBL_STAGE_1' => 'Création d\'un fichier SQL vide',
	'LBL_STAGE_2' => 'Géneration de la structure du backup',
	'LBL_STAGE_3' => 'Création du backup de la DB',
	'LBL_STAGE_4' => 'Génération de la structure de dossiers et de fichiers',
	'LBL_STAGE_5' => 'Création des fichiers et dossiers de backup',
	'LBL_STAGE_6' => 'Fusion des fichiers de backup',
	'LBL_STAGE_7' => 'Nettoyage des données temporaires',
	'LBL_STAGE_8' => 'Envoi des données au FTP',
	'LBL_STAGE_9' => 'Finalisation du backup',
	'BackUp' => 'Backup',
	'LBL_TOTAL_PROGRESS' => 'Progression totale',
	'LBL_STOP_BACKUP' => 'Arrêter le backup',
];
$jsLanguageStrings = [
	'JS_MANDATORY_FIELDS_EMPTY' => 'Les champs obligatoires ne peuvent être vide',
	'JS_PORT_ONLY_NUMBERS' => 'Le champ port n\'accepte que des nombres',
	'JS_SAVE_CHANGES' => 'Sauvegarder les changements',
	'JS_HOST_NOT_CORRECT' => 'Adresse hôte incorrect',
	'JS_CONNECTION_FAIL' => 'Tentative de connexion échouée',
];
