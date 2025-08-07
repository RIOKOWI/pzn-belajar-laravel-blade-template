<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## MENAMPILKAN VIEW
menampilkan view {{ $nama }}

contoh di file:
web.php
ViewTest.php
hello.blade.php

## NESTED VIEW DIRECTORY
contoh di file :
web.php
ViewTest.php
world.blade.php

## TEST VIEW TANPA ROUTING
contoh di file :
ViewTest.php

## COMMENT
contoh di file :
comment.blade.php
CommentTest.php

## HTML ENCODING
{!! $variable !!}
contoh di file :
web.php
html-encoding.blade.php

## DISABLED BLADE
@{{ $rio }}
@@if
@verbatim
@endverbatim
contoh di file :
web.php
disabled-blade.php

## IF STATEMENT
(@if, @elseif, @else, @endif)
contoh di file :
if.blade.php
IfTest.php

## UNLESS STATEMENT
kebalikannya if state
@unless
@endunless
contoh di file :
unless.blade.php
UnlessTest.php

## ISSET & EMPTY
@isset = cek apakah variable ada
@empty = cek apakah variable merupakan array kosong
contoh di file :
isset-empty.blade.php
IssetEmptyTest.php

## ENV
@env = cek apakah variable ada di env
contoh di file :
env.blade.php
EnvTest.php

## SWITCH STATEMENT
@switch
kombinasikan dengan :
@case
@break
@default
contoh di file :
switch.blade.php
SwitchTest.php

## FOR LOOP 
@for
contoh di file :
ForLoop.blade.php
ForTest.blade.php

## FOR EACH
@foreach
contoh di file :
ForEach.blade.php
ForEachTest.blade.php

## FOR ELSE
menampilkan data array yang tidak ada
@forelse
contoh di file :
ForElse.blade.php
ForElseTest.blade.php

## RAW PHP
@php
NOTE :
usahakan jangan sering di gunakan di bagian view gunakan di controller saja
contoh di file :
rawPhp.blade.php
RawPhpTest.php

## WHILE LOOP
@while
contoh di file :
while.blade.php
WhileTest.php

## LOOP VARIABLE
$loop
contoh di file :
loopVariable.blade.php
LoopVariableTest.php

## CSS CLASS
@class
contoh di file :
css.blade.php
CssTest.php

## INCLUDE
@include
contoh di file :
header.blade.php
include.blade.php
IncludeTest.php

## INCLUDE PARAMETER
@include(template, data)
contoh di file :
header.blade.php
include.blade.php
IncludeTest.php

## INCLUDE CONDITION
@includeWhen(kondisi, template, data) = kondisi true
@includeUnless(kondisi, template, data) = kondisi false
contoh di file :
header-admin.blade.php
include-condition.blade.php
includeCondition.php

## EACH & ONCE
@each(template, array, variable) = include template berkali-kali sesuai iterasi jumlah array, dimana data tiap array bisa diakses dengan variable di template nya

@once = disimpan di layout, secara otomatis jika layout tersebut di tampilkan berkali kali, bagian @once hanya di tampilkan sekali saja

contoh di file : 
user.blade.php
each.blade.php
EachOnceTest.php

## FORM
@checked(kondisi)
@selected(kondisi)
@disabled(kondisi)
@readonly(kondisi)
@required(kondisi)
jika true otomatis akan di jalankan
lebih mudah dbandingkan directive @if secara manual

contoh di file :
form.blade.php
FormTest.php

## CSRF
contoh di file :
csrf.blade.php
CSRFTest.php

## ERROR
@error(field)
$message = menangkap error

contoh di file :
error.blade.php
ErrorTest.php

## STACK
@push(name stacknya) = secara default mengirim data ke posisi paling belakang
@prepend(name stacknya) = mengirim data ke posisi paling awal
@pushIf(kondisi, nama stack) 
@stack(name stacknya) = menampilkan semua data yg terdapat di stack

contoh di file :
stack.blade.php
StackTest.php

## TEMPLATE INHERITANCE
PARENT LAYOUT
@yield(nama, default)

CHILD LAYOUT
extends(parentLayout)
@section(name) = dieksekusi di posisi @yield

contoh di file :
parent.blade.php
child.blade.php
TemplateInheritanceTest.php
