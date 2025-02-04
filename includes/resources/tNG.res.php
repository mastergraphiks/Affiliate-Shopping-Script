<?php
/*
 * ADOBE SYSTEMS INCORPORATED
 * Copyright 2007 Adobe Systems Incorporated
 * All Rights Reserved
 * 
 * NOTICE:  Adobe permits you to use, modify, and distribute this file in accordance with the 
 * terms of the Adobe license agreement accompanying it. If you have received this file from a 
 * source other than Adobe, then your use, modification, or distribution of it requires the prior 
 * written permission of Adobe.
 */

$res = array(
'ERROR_LABEL' => 'Error:',
'UNKNOWN_TRIGGER' => 'Internal error.',
'SQL_ERROR' => 'SQL error: %s.',
'DEL_NO_PK_SET' => 'Internal error.',
'DEL_NO_PK_VAL' => 'Internal error.',
'DEL_NO_RS' => 'Internal error.',
'FIELDS_EVAL_EXPR_FAILED' => 'Internal error.',
'FIELDS_EVAL_EXPR_INVALID' => 'Internal error.',
'FIELDS_LOCAL_RS' => 'Internal error.',
'FIELDS_FAKE_RS_ERROR' => 'Internal error.',
'FIELDS_NO_TABLE' => 'Internal error.',
'FIELDS_AFTER_UPDATE_ERROR' => 'Internal error.',
'FIELDS_SAVEDATA_ERROR' => 'Internal error.',
'MULTIPLE_FAKE_RS_ERROR' => 'Internal error.',
'MULTIPLE_OPERATIONS_SUCCEDED' => '%s operation(s) succeeded.',
'MDEL_ERROR' => 'An error occurred while deleting the records.',
'MDEL_NO_RS' => 'Internal error.',
'MINS_ERROR' => 'An error occurred while inserting the records.',
'MUPD_ERROR' => 'An error occurred while updating the records.',
'MUPD_RS' => 'Internal error.',
'UPD_NO_PK_SET' => 'Internal error.',
'UPD_NO_FIELDS' => 'Internal error.',
'UPD_RS' => 'Internal error.',
'CHECK_TF_SQL_ERROR' => 'Internal error.',
'DEL_DR_SQL_ERROR' => 'Internal error.',
'EMAIL_FAILED' => 'Error sending e-mail.',
'EMAIL_NO_TEMPLATE' => 'Internal error.',
'FILE_DEL_ERROR' => 'File delete error.',
'FILE_UPLOAD_ERROR' => 'File upload error: %s',
'FILE_UPLOAD_WRONG_COLTYPE' => 'File upload error. No input of file type provided.',
'FILE_UPLOAD_RENAME' => 'File upload error. Cannot rename file.',
'IMG_RESIZE' => 'Image upload error. Error resizing image.',
'LOGIN_MESSAGE_LABEL' => 'Message:',
'LOGIN_FAILED' => 'Login failed.',
'LOGIN_INVALID_USERNAME' => 'Invalid username.',
'LOGIN_INVALID_PASSWORD' => 'Invalid password.',
'LOGIN_FAILED_NO_ACTIVE_FIELD' => 'Internal error.',
'LOGIN_INACTIVE_USER' => 'Login failed. Please activate your account first.<br />To activate your account, you must click on the link sent to you in the activation e-mail.',
'LOGIN_INACTIVE_USER_FIELDERR' => 'Inactive user.',
'ACTIVATION_NOT_ENABLED' => 'Internal error.',
'ACTIVATION_NO_EMAIL' => 'Internal error.',
'ACTIVATION_WRONG_TABLE' => 'Internal error.',
'ACTIVATION_WRONG_P' => 'Internal error.',
'ACTIVATION_NO_ACTIVE_FIELD' => 'Internal error.',
'ACTIVATION_NO_PARAM_RANDOM' => 'Activation error.',
'LOGIN_RECORDSET_ERR' => 'Internal error.',
'ACTIVATION_NO_PARAM_EMAIL' => 'Activation error.',
'ACTIVATION_NO_RECORDS' => 'Activation error.',
'ACTIVATION_TOOMANY_RECORDS' => 'Activation error.',
'ACTIVATION_ALREADY_ACTIVE' => 'Activation error. This account has already been activated.',
'FORGOTPASS_NO_EMAIL' => 'Internal error.',
'FORGOTPASS_WRONG_TABLE' => 'Internal error.',
'FORGOTPASS_WRONG_PK' => 'Internal error.',
'FORGOTPASS_WRONG_EMAIL' => 'Forgot password error.',
'FORGOTPASS_WRONG_EMAIL_FIELDERR' => 'Specified e-mail address does not exist.',
'FORGOTPASS_TOOMANY_RECORDS' => 'Forgot password error.',
'FORGOTPASS_TOOMANY_RECORDS_FIELDERR' => 'More than one e-mail address found.',
'FORGOTPASS_INACTIVE_USER' => 'Forgot password error. Cannot change password of inactive users.',
'UPDATEPASS_NO_NEW_PASS' => 'Please type the New Password or leave both Old Password and New Password fields empty.',
'UPDATEPASS_NO_NEW_PASS_FIELDERR' => 'New Password field is empty.',
'UPDATEPASS_NO_OLD_PASS' => 'Please type the Old Password or leave both Old Password and New Password fields empty.',
'UPDATEPASS_NO_OLD_PASS_FIELDERR' => 'Old Password field is empty.',
'UPDATEPASS_NO_RECORD' => 'Internal error.',
'UPDATEPASS_TOMANY_RECORDS' => 'Internal error.',
'UPDATEPASS_WRONG_OLD_PASS' => 'There was an error updating your account. Wrong Old Password.',
'UPDATEPASS_WRONG_OLD_PASS_FIELDERR' => 'Wrong Old Password.',
'LOGIN_MESSAGE__REG_ACTIVATE' => 'Your account was created. Check your e-mail for details on activating your account.',
'LOGIN_MESSAGE__REG_EMAIL' => 'Your account was created. Check your e-mail for details.',
'LOGIN_MESSAGE__REG' => 'Your account was created.',
'LOGIN_MESSAGE__ACTIVATED' => 'Your account was activated. Please login.',
'LOGIN_MESSAGE__FORGOT' => 'Your password was e-mailed to you.',
'LOGIN_MESSAGE__DENIED' => 'You must have the proper credentials to access this page. Please login.',
'REGISTRATION_UNIQUE_USER' => 'There was an error creating your account.',
'REGISTRATION_UNIQUE_USER_FIELDERR' => 'User already exists.',
'LOGIN_FAILED_MANYRECORDS' => 'Login failed.',
'LOGIN_FAILED_MANYRECORDS_FIELDERR' => 'More than one user found.',
'DEFAULT_TRIGGER_MESSAGE' => 'An error occurred.',
'TRIGGER_MESSAGE__CHECK_UNIQUE' => 'Duplicate record found. There is already an identical record in your database, for the \'%s\' field.',
'TRIGGER_MESSAGE__CHECK_MASTER_RECORD' => 'Check master record failed.',
'TRIGGER_MESSAGE__CHECK_DETAIL_RECORD' => 'Check detail record failed.',
'TRIGGER_MESSAGE__THROW_ERROR' => 'An error occurred.',
'ONLINE_TROUBLESHOOT' => 'Online error troubleshooter',
'EMAIL_ERROR_RECORDSET' => 'Error sending e-mail.',
'SET_ORDER_FIELD_SQL_ERROR' => 'Error while getting sort column value.',
'ERR_DOWNLOAD_FILE' => 'Error downloading file!',
'ERR_DOWNLOAD_FILE_WRONG_HASH' => 'Error downloading file. Security check failed.',
'ERR_DOWNLOAD_FILE_NO_READ' => 'Error downloading file \'%s\'.',
'ERR_DOWNLOAD_FILE_NO_READ_D' => 'Error downloading file \'%s\'.',
'IMPORT_ERROR' => 'Failed importing records.',
'IMPORT_OPERATIONS_SKIPPED' => '%s operation(s) skipped.',
'IMPORT_SKIPPED' => 'Failed importing some records.',
'IMPORT_SQL_ERROR' => 'Failed importing records.',
'CSV_IMPORT_DUPLICATE_ERROR' => 'Line %s:<br/> - Duplicate entry found, %s for field %s.',
'CSV_IMPORT_LINE_ERROR' => 'Line %s:%s',
'CSV_IMPORT_NO_FILE_ERROR' => 'No CSV file uploaded.',
'CSV_HINTS_SAMPLES' => 'Samples:',
'CSV_HINTS_NOTES' => 'Notes:',
'CSV_HINTS_STRING' => 'string',
'CSV_HINTS_TAB' => 'tab',
'CSV_HINTS_CELL_SEPARATOR' => 'The cell separator is <strong>%s</strong>',
'CSV_HINTS_CELL_ENCLOSURE' => 'The cell enclosure is <strong>%s</strong>',
'CSV_HINTS_DATE_FORMAT' => 'The date format is <strong>%s</strong>',
'CSV_HINTS_COLUMNNAME_UNIQUE' => 'The <strong>%s</strong> column should be unique',
'CSV_HINTS_COLUMNREFERENCE_UNIQUE' => 'The column <strong>#%s</strong> should be unique',
'CSV_HINTS_COLUMNS_ASSOCIATIONS' => '<strong>Column associations</strong>',
'CSV_HINTS_PER_COLUMN_IMPORT' => 'column <strong>#%s</strong> is imported to field <strong>%s</strong>',
'XML_IMPORT_DUPLICATE_ERROR' => 'Row %s:<br/> - Duplicate entry found, %s for field %s.',
'XML_IMPORT_LINE_ERROR' => 'Row %s:%s',
'XML_IMPORT_NO_FILE_ERROR' => 'No XML file uploaded.',
'XML_IMPORT_INVALID_XML_ERROR' => 'The XML source is invalid.',
'XML_IMPORT_READ_FILE_ERROR' => 'Could not read XML file.',
'XML_IMPORT_NO_URI_ERROR' => 'Invalid location of remote XML.',
'XML_IMPORT_READ_URI_ERROR' => 'Could not open location: \'%s\'.',
'PHP_XML_IMPORT_FOPEN_DISABLED_ERROR' => 'Error importing XML data.',
'PHP_XML_IMPORT_MBSTRING_DISABLED_ERROR' => 'Error importing XML data.',
'XML_HINTS_SAMPLES' => 'Samples:',
'XML_HINTS_NOTES' => 'Notes:',
'XML_HINTS_STRING' => 'string',
'XML_HINTS_DATE_FORMAT' => 'The date format is <strong>%s</strong>',
'XML_HINTS_COLUMNNAME_UNIQUE' => 'The <strong>%s</strong> column should be unique',
'TRIGGER_MESSAGE__MTM_NO_REFERENCE' => 'Internal error.',
'TRIGGER_MESSAGE__MTM_SQL_ERROR' => 'Internal error.',
'UNKNOWN_TRIGGER_D' => 'Unknown trigger type \'%s\'.',
'SQL_ERROR_D' => 'SQL error: %s.',
'DEL_NO_PK_SET_D' => 'tNG_delete.prepareSQL:<br />No Primary Key Column was set.',
'DEL_NO_PK_VAL_D' => 'tNG_delete.prepareSQL:<br />No Primary Key Column value was set.',
'FIELDS_EVAL_EXPR_FAILED_D' => 'tNG_fields.evaluateFieldExpr:<br />Could not evaluate expression: \'%s\'.',
'FIELDS_EVAL_EXPR_INVALID_D' => 'tNG_fields.evaluateFieldExpr:<br />Invalid expression: \'%s\'.<br />Use digits (0 to 9) and/or the characters: + - * / . ( )',
'FIELDS_LOCAL_RS_D' => 'tNG_fields.getLocalRecordset:<br />This method is abstract and should be overwritten.',
'FIELDS_FAKE_RS_ERROR_D' => 'tNG_fields.getFakeRecordset:<br />SQL error: %s',
'FIELDS_NO_TABLE_D' => 'tNG_fields.prepareSQL:<br />Please set a table for the current transaction.',
'FIELDS_AFTER_UPDATE_ERROR_D' => 'tNG_fields.afterUpdateField:<br />SQL error: %s.',
'FIELDS_SAVEDATA_ERROR_D' => 'tNG_fields.saveData:<br />SQL error: <br />%s<br />%s.',
'MULTIPLE_FAKE_RS_ERROR_D' => 'tNG_multiple.getFakeRecordset<br />SQL error: %s.',
'MDEL_ERROR_D' => 'tNG_multipleDelete error.<br />An error occurred while deleting the records.',
'MDEL_NO_RS_D' => 'tNG_multipleDelete.getLocalRecordset:<br />The multiple delete transaction does not export a recordset.',
'MINS_ERROR_D' => 'tNG_multipleInsert error.<br />An error occurred while inserting the records.',
'MUPD_ERROR_D' => 'tNG_multipleUpdate error.<br />An error occurred while updating the records.',
'MUPD_RS_D' => 'tNG_multipleUpdate.getLocalRecordset:<br /><strong>Error message:</strong><br />%s<br /><strong>SQL statement:</strong><br />%s.',
'UPD_NO_PK_SET_D' => 'tNG_update.prepareSQL:<br />No Primary Key Column was set.',
'UPD_NO_FIELDS_D' => 'tNG_update.prepareSQL:<br />Please specify at least one field to update.',
'UPD_RS_D' => 'tNG_update.getLocalRecordset:<br /><strong>Error message:</strong><br />%s<br /><strong>SQL statement:</strong><br />%s',
'CHECK_TF_SQL_ERROR_D' => 'Error while checking table field.<br />Error message:<br />%s<br />SQL statement:<br />%s',
'DEL_DR_SQL_ERROR_D' => 'Error while deleting from related table.<br />Error message:<br />%s<br />SQL statement:<br />%s',
'EMAIL_FAILED_D' => '%s',
'EMAIL_NO_TEMPLATE_D' => 'The template file could not be opened.',
'FILE_DEL_ERROR_D' => 'Cannot delete file \'%s\'. Please check file permissions.',
'FILE_UPLOAD_ERROR_D' => 'File upload error: %s',
'FILE_UPLOAD_WRONG_COLTYPE_D' => 'File upload error. Field "%s" does not have the "Submit as" property set to "file".',
'FILE_UPLOAD_RENAME_D' => 'File upload error. Cannot rename file \'%s\' to \'%s\'.',
'IMG_RESIZE_D' => 'Image upload error. Error resizing image: %s',
'LOGIN_FAILED_D' => '',
'LOGIN_FAILED_NO_ACTIVE_FIELD_D' => 'Please add the \'%s\' numeric column in the database to enable activation.',
'LOGIN_INACTIVE_USER_D' => '',
'ACTIVATION_NOT_ENABLED_D' => 'Activation is not enabled from Developer Toolbox Control Panel > Login Settings.',
'ACTIVATION_NO_EMAIL_D' => 'E-mail column must be set in Developer Toolbox Control Panel > Login Settings > Database, to enable account activation.',
'ACTIVATION_WRONG_TABLE_D' => 'Activation must be performed on the table set in Developer Toolbox Control Panel > Login Settings > Database.',
'ACTIVATION_WRONG_P_D' => 'Specified Primary Key Column is different from the one set in Developer Toolbox Control Panel > Login Settings > Database.',
'ACTIVATION_NO_ACTIVE_FIELD_D' => 'The \'Active\' column set in Developer Toolbox Control Panel > Login Settings > Database must exist in the current transaction.',
'ACTIVATION_NO_PARAM_RANDOM_D' => 'Activation requires the \'kt_login_random\' URL parameter.',
'LOGIN_RECORDSET_ERR_D' => 'Error creating activation recordset.',
'ACTIVATION_NO_PARAM_EMAIL_D' => 'Activation requires the \'kt_login_email\' URL parameter.',
'ACTIVATION_NO_RECORDS_D' => 'No record matching the criteria was found.',
'ACTIVATION_TOOMANY_RECORDS_D' => 'More records matching the criteria were found.',
'ACTIVATION_ALREADY_ACTIVE_D' => '',
'FORGOTPASS_NO_EMAIL_D' => 'E-mail column must be set in Developer Toolbox Control Panel > Login Settings > Database, to enable password retrieval.',
'FORGOTPASS_WRONG_TABLE_D' => 'Password retrieval must be performed on the table set in Developer Toolbox Control Panel > Login Settings > Database',
'FORGOTPASS_WRONG_PK_D' => 'Specified Primary Key Column is different from the one set in Developer Toolbox Control Panel > Login Settings > Database.',
'FORGOTPASS_WRONG_EMAIL_D' => '',
'FORGOTPASS_TOOMANY_RECORDS_D' => '',
'FORGOTPASS_INACTIVE_USER_D' => '',
'UPDATEPASS_NO_NEW_PASS_D' => '',
'UPDATEPASS_NO_OLD_PASS_D' => '',
'UPDATEPASS_NO_RECORD_D' => 'Specified record does not exist.',
'UPDATEPASS_TOMANY_RECORDS_D' => 'More than one record found.',
'UPDATEPASS_WRONG_OLD_PASS_D' => '',
'LOGIN_FAILED_MANYRECORDS_D' => '',
'DEFAULT_TRIGGER_MESSAGE_D' => 'An error occurred.',
'TRIGGER_MESSAGE__CHECK_UNIQUE_D' => '',
'TRIGGER_MESSAGE__CHECK_MASTER_RECORD_D' => 'Check master record failed.',
'TRIGGER_MESSAGE__CHECK_DETAIL_RECORD_D' => 'Check detail record failed.',
'TRIGGER_MESSAGE__THROW_ERROR_D' => 'An error occurred.',
'EMAIL_ERROR_RECORDSET_D' => 'No valid recordset was found with the name: %s.',
'SET_ORDER_FIELD_SQL_ERROR_D' => 'Error while getting sort column value.<br />SQL error: <br />%s<br />%s',
'IMPORT_ERROR_D' => '',
'IMPORT_SKIPPED_D' => '',
'IMPORT_SQL_ERROR_D' => 'Failed checking unique field. %s',
'CSV_IMPORT_DUPLICATE_ERROR_D' => '',
'CSV_IMPORT_LINE_ERROR_D' => '',
'CSV_IMPORT_NO_FILE_ERROR_D' => '',
'CSV_HINTS_SAMPLES_D' => '',
'CSV_HINTS_NOTES_D' => '',
'CSV_HINTS_STRING_D' => '',
'CSV_HINTS_TAB_D' => '',
'CSV_HINTS_CELL_SEPARATOR_D' => '',
'CSV_HINTS_CELL_ENCLOSURE_D' => '',
'CSV_HINTS_DATE_FORMAT_D' => '',
'CSV_HINTS_COLUMNNAME_UNIQUE_D' => '',
'CSV_HINTS_COLUMNREFERENCE_UNIQUE_D' => '',
'CSV_HINTS_COLUMNS_ASSOCIATIONS_D' => '',
'CSV_HINTS_PER_COLUMN_IMPORT_D' => '',
'XML_IMPORT_DUPLICATE_ERROR_D' => '',
'XML_IMPORT_LINE_ERROR_D' => '',
'XML_IMPORT_NO_FILE_ERROR_D' => '',
'XML_IMPORT_INVALID_XML_ERROR_D' => 'Error %s on line %s.',
'XML_IMPORT_READ_FILE_ERROR_D' => '',
'XML_IMPORT_NO_URI_ERROR_D' => '',
'XML_IMPORT_READ_URI_ERROR_D' => '',
'PHP_XML_IMPORT_FOPEN_DISABLED_ERROR_D' => 'Opening a remote URL is not permitted. Enable \'allow_url_fopen\' in php.ini.',
'PHP_XML_IMPORT_MBSTRING_DISABLED_ERROR_D' => 'Could not perform charset conversions. Enable the \'mbstring\' extension.',
'XML_HINTS_SAMPLES_D' => '',
'XML_HINTS_NOTES_D' => '',
'XML_HINTS_STRING_D' => '',
'XML_HINTS_DATE_FORMAT_D' => '',
'XML_HINTS_COLUMNNAME_UNIQUE_D' => '',
'TRIGGER_MESSAGE__MTM_NO_REFERENCE_D' => 'Missing foreign key reference.',
'TRIGGER_MESSAGE__MTM_SQL_ERROR_D' => 'ManyToMany SQL Error: %s<br />SQL: %s.',
'ERROR_TIDY_CONTENT' => 'Error converting to XHTML. An error occured when attempting to execute HTML Tidy!',
'ERROR_TIDY_CONTENT_D' => 'Error converting to XHTML. An error occured when attempting to execute HTML Tidy! %s',
);
?>