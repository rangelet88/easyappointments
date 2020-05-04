<?php
/**
 * System messages translation for CodeIgniter(tm)
 *
 * @author	CodeIgniter community
 * @author	Iban Eguia
 * @copyright	Copyright (c) 2014-2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$ lang ['email_must_be_array'] = 'Heu de passar un array al mètode de validació del correu electrònic.';
$ lang ['email_invalid_address'] = 'Adreça de correu electrònic no vàlida: %s';
$ lang ['email_attachment_missing'] = 'No es pot trobar l\'arxiu adjunt: %s';
$ lang ['email_attachment_unreadable'] = 'No s\'ha pogut obrir l\'arxiu adjunt: %s';
$ lang ['email_no_from'] = 'No es pot enviar un correu electrònic sense la capçalera "De".';
$ lang ['email_no_recipients'] = 'Inclou els destinataris: Per a, Cc, o Cco';
$ lang ['email_send_failure_phpmail'] = 'No s\'ha pogut enviar el correu electrònic mitjançant PHP mail(). Es possible que el vostre servidor no estigui configurat per a enviar correus electrònics amb aquest mètode.';
$ lang ['email_send_failure_sendmail'] = 'No s\'ha pogut enviar el correu electrònic mitjançant PHP Sendmail. Es possible que el vostre servidor no estigui configurat per a enviar correus electrònics amb aquest mètode.';
$ lang ['email_send_failure_smtp'] = 'No s\'ha pogut enviar el correu electrònic mitjançant PHP SMTP. Es possible que el vostre servidor no estigui configurat per a enviar correus electrònics amb aquest mètode.';
$ lang ['email_sent'] = 'El vostre missatge s\ha enviat amb èxit mitjançant el protocol: %s';
$ lang ['email_no_socket'] = 'No s\'ha pogut obrir un socket a Sendmail. Si us plau, comproveu-ne la configuració.';
$ lang ['email_no_hostname'] = 'No heu especificat un servidor SMTP.';
$ lang ['email_smtp_error'] = 'S\'ha trobat un error SMTP: %s';
$ lang ['email_no_smtp_unpw'] = 'Error: Heu d\'especificar un usuari i una contrasenya SMTP.';
$ lang ['email_failed_smtp_login'] = 'Ha fallat al enviar la comanda AUTH LOGIN. Error: %s';
$ lang ['email_smtp_auth_un'] = 'Ha fallat al verificar l\'usuari. Error: %s';
$ lang ['email_smtp_auth_pw'] = 'Ha fallat al verificar la contrasenya. Error: %s';
$ lang ['email_smtp_data_failure'] = 'No s\'han pogut enviar les dades: %s';
$ lang ['email_exit_status'] = 'Codi d\'estat al sortir:% s';