# Contao Data Container Extension

Provides functionality to extend Contao's data container.

## Install
```bash
composer require marcosimbuerger/contao-data-container-extension
```

## Usage

### Data container action method extension
Add `TableExtension` as data container and add a custom callback to your DCA,
```php
$GLOBALS['TL_DCA']['tl_my_module'] = array
(
	// Config
	'config' => array
	(
		'dataContainer' => 'TableExtension',
		'onload_callback' => array
		(
			array('tl_my_module', 'myOnLoadMethod'),
        ),
   
   // ...
```

or replace/extend an existing DCA.
```php
$GLOBALS['TL_DCA']['tl_iso_product_collection']['config']['dataContainer'] = 'TableExtension';
$GLOBALS['TL_DCA']['tl_iso_product_collection']['config']['onload_callback'][] = array('tl_my_module, 'myOnLoadMethod');
```

Add your custom method (e.g. `myDcMethod`) to the data container.
```php
public function myOnLoadMethod(DC_Table $dataContainer): void {
    $dataContainer->myDcMethod = function() {
        // do something
    };
}
```