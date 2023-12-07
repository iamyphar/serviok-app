<?php

$runonce = function(array $files, $delete = false) {
    foreach ($files as $file) {
        try {
            include $file;
        } catch (\Exception $e) {}

        $relpath = str_replace(TL_ROOT . DIRECTORY_SEPARATOR, '', $file);

        if ($delete && !unlink($file)) {
            throw new \Exception(
                'The file ' . $relpath . ' cannot be deleted. ' .
                'Please remove the file manually and correct the file permission settings on your server.'
            );
        }
    }
};

$runonce(array (
  0 => '/Users/raphael.doutaz/Sites/serviok-app/vendor/codefog/contao-haste/config/upgrade.php',
));
