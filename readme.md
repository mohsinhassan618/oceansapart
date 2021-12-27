# Task Details

## Code requirements
- [x] ACF PRO with Flexible Content,
- [x] ACF JSON sync,
- [x] Foundation Sites ZURB (v6.6.3/SCSS) should be register as NPM dependence,
- [x] XY-Grid provided by Foundation ZURB sites (building semantically) is required,
- [x] BEM methodology is required,
- [x] Use webpack.js to compile your SCSS code into CSS (minified production output),
- [x] PHP (7.4) code should follow @PSR2 standards, 

## Details

### Settings/Configurations
- Install/Activate the theme Oceans Apart
- Enable ACF Plugin 
- Import the Fields Group 
- Create a page and set page templat to Oceans Apart Task
- Add/edit the Oceans Apart Fields at the page bottom (on page edit screen) 
- That's all

### ACF Local JSON
ACF folder path: wp-content\themes\oceans-apart\customizations\acf_files

### PHP Code PSR2 Standards
All cutomizations relatedd to PHP can be find in the following file: wp-content\themes\oceans-apart\customizations\OceanApartCustomizations.php

### Webpack and Scss
Entry File for Webpack: wp-content\themes\oceans-apart\assets\src\index.js
Scss path: wp-content\themes\oceans-apart\assets\scss\app.scss

Complie assets Command: npm run webpack:production