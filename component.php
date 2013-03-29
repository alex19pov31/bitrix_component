<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
if(!CModule::IncludeModule("module_name")){
	echo GetMessage("MODULE_MISSING");
}

// $arParams - Массив параметров компонента
// $arResult - Массив значений для шаблона


$this->IncludeComponentTemplate();
?>
