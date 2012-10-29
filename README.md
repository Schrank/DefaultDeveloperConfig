# Schrank_DeveloperDefaultConfig

Installed a fresh magento, everytime the same procedure:
* Disable all caches
* Enable logging
* Enable the profiler
* Allow symlinks for modman modules
* disable merge of js files (to avoid problems in the future)
* disable merge of css files (to avoid problems in the future)
* run all indexer
* set the admin session timeout to 10hrs (Thanks to Vinai)
* Removes the admin notification observer (Thanks to fbrnc)
* * Prevends the admin notifications to be loaded
* set all admin notification as read
