<?php
/**
 * Created by Larakit.
 * Link: http://github.com/larakit
 * User: Alexey Berdnikov
 * Date: 15.06.17
 * Time: 15:20
 */
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-file-upload')
    ->usePackage('larakit/lk-angular')
    ->setSourceDir('public')
    ->jsPackage('ng-thumb.js')
    ->cssPackage('ng-thumb.css')
    ->cssPackage('angular-file-upload.css')
    ->jsPackage('angular-file-upload.js');
\Larakit\LkNgModule::register('angularFileUpload');