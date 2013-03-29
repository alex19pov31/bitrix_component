<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

// Подключение модуля
if(!CModule::IncludeModule("module_name"))
	return;

$arComponentParameters = array(
	// Список гупп параметров
	"GROUPS" => array(
		"GROUP_NAME" => array(
			"SORT" => 100,				// Индекс сортировки
			"NAME" => GetMessage("GROUP_NAME")	// Имя группы параметров
		)
	),
	// Список параметров
	"PARAMETERS" => array(
		"CHECKBOX" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("CHECKBOX_NAME"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y"
		),
		"MULTI_STRING" => array(
			"PARENT" => "GROUP_NAME",		// Группа параметров
			"NAME" => GetMessage("MULTI_STRING"),	// Имя параметра
			"TYPE" => "STRING",			// Тип параметра (STRING|CHECKBOX|LIST)
			"MULTIPLE" => "Y",			// Множественное значение (Y|N)
			"ADDITIONAL_VALUES" => "Y",		// Добавление значений (Y|N)
			"DEFAULT" => GetMessage("SOME_STRING")	// Значение по-умолчанию
		),
		"STRING" => array(
			"PARENT" => "GROUP_NAME",
			"NAME" => GetMessage("STRING"),
			"TYPE" => "STRING"
		),
		"CACHE_TIME"  =>  Array("DEFAULT"=>36000000),
	),
);
?>
