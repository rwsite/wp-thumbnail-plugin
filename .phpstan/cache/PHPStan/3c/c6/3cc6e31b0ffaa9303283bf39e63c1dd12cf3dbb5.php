<?php declare(strict_types = 1);

// odsl-/var/www/wp-content/plugins/wp-thumbnail-plugin/src
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v1',
   'data' => 
  array (
    '/var/www/wp-content/plugins/wp-thumbnail-plugin/src/Application/ThumbnailService.php' => 
    array (
      0 => '99e5a4b785438f41083f962969fbd940f4ee4538',
      1 => 
      array (
        0 => 'kamathumb\\application\\thumbnailservice',
      ),
      2 => 
      array (
        0 => 'kamathumb\\application\\__construct',
        1 => 'kamathumb\\application\\generatethumbnail',
        2 => 'kamathumb\\application\\resolveimagesource',
        3 => 'kamathumb\\application\\resolvefromattachmentid',
        4 => 'kamathumb\\application\\resolvefrompostid',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/wp-content/plugins/wp-thumbnail-plugin/src/Infrastructure/WordPress/Plugin.php' => 
    array (
      0 => '234f1325e2d1a7ad0f765cdb04afb07543f9bd66',
      1 => 
      array (
        0 => 'kamathumb\\infrastructure\\wordpress\\plugin',
      ),
      2 => 
      array (
        0 => 'kamathumb\\infrastructure\\wordpress\\__construct',
        1 => 'kamathumb\\infrastructure\\wordpress\\getinstance',
        2 => 'kamathumb\\infrastructure\\wordpress\\registerhooks',
        3 => 'kamathumb\\infrastructure\\wordpress\\registeradminmenu',
        4 => 'kamathumb\\infrastructure\\wordpress\\rendersettingspage',
        5 => 'kamathumb\\infrastructure\\wordpress\\handleclearcache',
        6 => 'kamathumb\\infrastructure\\wordpress\\getcontainer',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/wp-content/plugins/wp-thumbnail-plugin/src/Infrastructure/WordPress/TemplateFunctions.php' => 
    array (
      0 => 'f31e86997952bf4caa04fa1c759ad44bd55b7df8',
      1 => 
      array (
        0 => 'kamathumb\\infrastructure\\wordpress\\templatefunctions',
      ),
      2 => 
      array (
        0 => 'kamathumb\\infrastructure\\wordpress\\register',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/wp-content/plugins/wp-thumbnail-plugin/src/Infrastructure/WordPress/ServiceContainer.php' => 
    array (
      0 => '1c00fb238ef42bff073110335e6ac6edf8842e31',
      1 => 
      array (
        0 => 'kamathumb\\infrastructure\\wordpress\\servicecontainer',
      ),
      2 => 
      array (
        0 => 'kamathumb\\infrastructure\\wordpress\\__construct',
        1 => 'kamathumb\\infrastructure\\wordpress\\getinstance',
        2 => 'kamathumb\\infrastructure\\wordpress\\getimageprocessor',
        3 => 'kamathumb\\infrastructure\\wordpress\\getstorage',
        4 => 'kamathumb\\infrastructure\\wordpress\\getthumbnailgenerator',
        5 => 'kamathumb\\infrastructure\\wordpress\\getthumbnailservice',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/wp-content/plugins/wp-thumbnail-plugin/src/Infrastructure/Storage/FileSystemStorage.php' => 
    array (
      0 => '9b8c3d371a31351e5d38d1c02fdcb08fd33c8201',
      1 => 
      array (
        0 => 'kamathumb\\infrastructure\\storage\\filesystemstorage',
      ),
      2 => 
      array (
        0 => 'kamathumb\\infrastructure\\storage\\__construct',
        1 => 'kamathumb\\infrastructure\\storage\\exists',
        2 => 'kamathumb\\infrastructure\\storage\\put',
        3 => 'kamathumb\\infrastructure\\storage\\get',
        4 => 'kamathumb\\infrastructure\\storage\\delete',
        5 => 'kamathumb\\infrastructure\\storage\\url',
        6 => 'kamathumb\\infrastructure\\storage\\path',
        7 => 'kamathumb\\infrastructure\\storage\\clearcache',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/wp-content/plugins/wp-thumbnail-plugin/src/Infrastructure/ImageProcessors/GdProcessor.php' => 
    array (
      0 => '0fcfc23e8248a37a464c9a56da02e01a56e8b067',
      1 => 
      array (
        0 => 'kamathumb\\infrastructure\\imageprocessors\\gdprocessor',
      ),
      2 => 
      array (
        0 => 'kamathumb\\infrastructure\\imageprocessors\\process',
        1 => 'kamathumb\\infrastructure\\imageprocessors\\isavailable',
        2 => 'kamathumb\\infrastructure\\imageprocessors\\getsupportedformats',
        3 => 'kamathumb\\infrastructure\\imageprocessors\\createimagefromfile',
        4 => 'kamathumb\\infrastructure\\imageprocessors\\resize',
        5 => 'kamathumb\\infrastructure\\imageprocessors\\cropandresize',
        6 => 'kamathumb\\infrastructure\\imageprocessors\\preservetransparency',
        7 => 'kamathumb\\infrastructure\\imageprocessors\\saveimage',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/wp-content/plugins/wp-thumbnail-plugin/src/Infrastructure/ImageProcessors/ImagickProcessor.php' => 
    array (
      0 => '12067e63d75e73f268d390672ea9f5e9b51dab2d',
      1 => 
      array (
        0 => 'kamathumb\\infrastructure\\imageprocessors\\imagickprocessor',
      ),
      2 => 
      array (
        0 => 'kamathumb\\infrastructure\\imageprocessors\\process',
        1 => 'kamathumb\\infrastructure\\imageprocessors\\isavailable',
        2 => 'kamathumb\\infrastructure\\imageprocessors\\getsupportedformats',
        3 => 'kamathumb\\infrastructure\\imageprocessors\\cropimage',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/wp-content/plugins/wp-thumbnail-plugin/src/Domain/ValueObjects/ThumbnailProfile.php' => 
    array (
      0 => '533fffe848377d818055364bfded01bc982550ec',
      1 => 
      array (
        0 => 'kamathumb\\domain\\valueobjects\\thumbnailprofile',
      ),
      2 => 
      array (
        0 => 'kamathumb\\domain\\valueobjects\\__construct',
        1 => 'kamathumb\\domain\\valueobjects\\getwidth',
        2 => 'kamathumb\\domain\\valueobjects\\getheight',
        3 => 'kamathumb\\domain\\valueobjects\\getcrop',
        4 => 'kamathumb\\domain\\valueobjects\\getquality',
        5 => 'kamathumb\\domain\\valueobjects\\getformat',
        6 => 'kamathumb\\domain\\valueobjects\\toarray',
        7 => 'kamathumb\\domain\\valueobjects\\fromarray',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/wp-content/plugins/wp-thumbnail-plugin/src/Domain/ValueObjects/ImageSource.php' => 
    array (
      0 => '960cec703887e1de6be31f36166a5ee95a210c5b',
      1 => 
      array (
        0 => 'kamathumb\\domain\\valueobjects\\imagesource',
      ),
      2 => 
      array (
        0 => 'kamathumb\\domain\\valueobjects\\__construct',
        1 => 'kamathumb\\domain\\valueobjects\\geturl',
        2 => 'kamathumb\\domain\\valueobjects\\getpath',
        3 => 'kamathumb\\domain\\valueobjects\\getattachmentid',
        4 => 'kamathumb\\domain\\valueobjects\\islocal',
        5 => 'kamathumb\\domain\\valueobjects\\isexternal',
        6 => 'kamathumb\\domain\\valueobjects\\fromurl',
        7 => 'kamathumb\\domain\\valueobjects\\fromattachmentid',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/wp-content/plugins/wp-thumbnail-plugin/src/Domain/Contracts/StorageInterface.php' => 
    array (
      0 => '341c8ba88d3a1451dfef799c1006c5a01fb0a8c9',
      1 => 
      array (
        0 => 'kamathumb\\domain\\contracts\\storageinterface',
      ),
      2 => 
      array (
        0 => 'kamathumb\\domain\\contracts\\exists',
        1 => 'kamathumb\\domain\\contracts\\put',
        2 => 'kamathumb\\domain\\contracts\\get',
        3 => 'kamathumb\\domain\\contracts\\delete',
        4 => 'kamathumb\\domain\\contracts\\url',
        5 => 'kamathumb\\domain\\contracts\\path',
        6 => 'kamathumb\\domain\\contracts\\clearcache',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/wp-content/plugins/wp-thumbnail-plugin/src/Domain/Contracts/ImageProcessorInterface.php' => 
    array (
      0 => '7e8c6cc89650ba7ce997d3485d2df68627158f10',
      1 => 
      array (
        0 => 'kamathumb\\domain\\contracts\\imageprocessorinterface',
      ),
      2 => 
      array (
        0 => 'kamathumb\\domain\\contracts\\process',
        1 => 'kamathumb\\domain\\contracts\\isavailable',
        2 => 'kamathumb\\domain\\contracts\\getsupportedformats',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/wp-content/plugins/wp-thumbnail-plugin/src/Domain/Services/ThumbnailGenerator.php' => 
    array (
      0 => '2d9e8f85ddff40334512e091388c6688c0b17795',
      1 => 
      array (
        0 => 'kamathumb\\domain\\services\\thumbnailgenerator',
      ),
      2 => 
      array (
        0 => 'kamathumb\\domain\\services\\__construct',
        1 => 'kamathumb\\domain\\services\\generate',
        2 => 'kamathumb\\domain\\services\\generatecachekey',
      ),
      3 => 
      array (
      ),
    ),
  ),
));