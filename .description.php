<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arComponentDescription = array(
   "NAME" => GetMessage("COMPONENT_NAME"),			// Имя компонента
   "DESCRIPTION" => GetMessage("COMPONENT_DESCRIPTION"),	// Описание компонента
   "ICON" => "/images/icon.gif",				// Иконка компонента
	"PATH" => array(
		"ID" => "ID_SECTION",				// ID раздела компонента
		"NAME" => GetMessage("NAME_SECTION")		// Имя раздела компонента
	),
   "CACHE_PATH" => "Y",
   "COMPLEX" => "N"
);
?>
