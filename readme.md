# Task Details

## Code requirements
- ✔ ACF PRO with Flexible Content,
- ✔ ACF JSON sync,
- ✔ Foundation Sites ZURB (v6.6.3/SCSS) should be register as NPM dependence,
- ✔ XY-Grid provided by Foundation ZURB sites (building semantically) is required,
- ✔ BEM methodology is required,
- ✔ Use webpack.js to compile your SCSS code into CSS (minified production output),
- ✔ PHP (7.4) code should follow @PSR2 standards, 

## Details

### Settings/Configurations
- Install/Activate the theme Oceans Apart
- Enable ACF Plugin 
- Import the ACF Fields 
- Create a page and set page template to Oceans Apart Task
- Add/edit the Oceans Apart Fields at the page bottom (on-page edit screen) 
- That's all

### ACF Local JSON
ACF folder path: 
wp-content\themes\oceans-apart\customizations\acf_files

### PHP Code PSR2 Standards
All customizations related to PHP can be find in the following file: wp-content\themes\oceans-apart\customizations\OceanApartCustomizations.php

### Webpack and Scss

Webpack Path: theme root

Entry File for Webpack: wp-content\themes\oceans-apart\assets\src\index.js

Scss path: wp-content\themes\oceans-apart\assets\scss\app.scss

Compile assets Command: npm run webpack:production