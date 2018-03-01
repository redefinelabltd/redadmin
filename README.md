# REDADMIN

A simple admin template made with  by REDEFINELAB LTD (http://www.redefinelab.com)

## INSTALLATION INSTRUCTION

### NPM

```bash
npm install redadmin --save-dev
```

#### SETUP

#### javascript

```javascript
require('redadmin');
```

#### css

```sass
@import '~redadmin/dist/css/app';
```

### COMPOSER (LARAVEL)

```bash
composer require redefinelabltd/redadmin
php artisan vendor:publish --tag=config
```

#### SETUP

#### javascript

```html
<script type="text/javascript" src="{{url('vendor/redadmin/js/app.js')}}"></script>
```

#### css

```html
<link href="{{url('vendor/redadmin/css/app.css')}}" rel="stylesheet" type="text/css">
```