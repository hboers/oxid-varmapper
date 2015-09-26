# oxid-varmapper

Variant Text Mapping Module for Oxid

The module will replace or enhance displayed variant texts in variant selects.

**Example:** 

The mapping table contains a (key => value) pair ('Navi' => 'Blue'). 

* 'Navi' will be replaced by 'Blue'

## Install

CD to OXID modules folder

git clone https://github.com/hboers/oxid-varmapper.git hbo

The module will create a table hbovarmaps on activation.
Some demo data for the oxid demo shop can be found in the docs folder.

## Todo

Add some configuration settings

* sMarker: a String that is appended to Variant text if the variant is not available in the mapping.
* sFormat: a string to format the Mapping output. e. g. "{key} ({value})"

**Example:** 

If Format is set to "{key} ({value})", sMarker is set to ' (!)' and the mapping 
table contains only ('Navi' => 'Blue')

* 'Navi' will be replaced with 'Navi (Blue)'
* 'Green' will be replaced with 'Green (!)'

This is already implemented but not yet made available in the admin area.


