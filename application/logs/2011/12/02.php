<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-02 21:56:19 --- ERROR: View_Exception [ 0 ]: The requested view some/view/file could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-02 21:56:19 --- STRACE: View_Exception [ 0 ]: The requested view some/view/file could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/rado/public_html/app/filemon/system/classes/kohana/view.php(137): Kohana_View->set_filename('some/view/file')
#1 /home/rado/public_html/app/filemon/system/classes/kohana/view.php(30): Kohana_View->__construct('some/view/file', NULL)
#2 /home/rado/public_html/app/filemon/modules/userguide/classes/kohana/kodoc/markdown.php(157): Kohana_View::factory('some/view/file')
#3 /home/rado/public_html/app/filemon/modules/userguide/vendor/markdown/markdown.php(330): Kohana_Kodoc_Markdown->doIncludeViews('<h1 id="markdow...')
#4 /home/rado/public_html/app/filemon/modules/userguide/vendor/markdown/markdown.php(64): Markdown_Parser->transform('# Markdown Synt...')
#5 /home/rado/public_html/app/filemon/modules/userguide/classes/controller/userguide.php(159): Markdown('# Markdown Synt...')
#6 [internal function]: Controller_Userguide->action_docs()
#7 /home/rado/public_html/app/filemon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Userguide))
#8 /home/rado/public_html/app/filemon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/rado/public_html/app/filemon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/rado/public_html/app/filemon/index.php(58): Kohana_Request->execute()
#11 {main}
2011-12-02 21:56:39 --- ERROR: View_Exception [ 0 ]: The requested view some/view/file could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-02 21:56:39 --- STRACE: View_Exception [ 0 ]: The requested view some/view/file could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/rado/public_html/app/filemon/system/classes/kohana/view.php(137): Kohana_View->set_filename('some/view/file')
#1 /home/rado/public_html/app/filemon/system/classes/kohana/view.php(30): Kohana_View->__construct('some/view/file', NULL)
#2 /home/rado/public_html/app/filemon/modules/userguide/classes/kohana/kodoc/markdown.php(157): Kohana_View::factory('some/view/file')
#3 /home/rado/public_html/app/filemon/modules/userguide/vendor/markdown/markdown.php(330): Kohana_Kodoc_Markdown->doIncludeViews('<h1 id="markdow...')
#4 /home/rado/public_html/app/filemon/modules/userguide/vendor/markdown/markdown.php(64): Markdown_Parser->transform('# Markdown Synt...')
#5 /home/rado/public_html/app/filemon/modules/userguide/classes/controller/userguide.php(159): Markdown('# Markdown Synt...')
#6 [internal function]: Controller_Userguide->action_docs()
#7 /home/rado/public_html/app/filemon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Userguide))
#8 /home/rado/public_html/app/filemon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/rado/public_html/app/filemon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/rado/public_html/app/filemon/index.php(58): Kohana_Request->execute()
#11 {main}
2011-12-02 23:39:04 --- ERROR: View_Exception [ 0 ]: The requested view some/view/file could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-02 23:39:04 --- STRACE: View_Exception [ 0 ]: The requested view some/view/file could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/rado/public_html/app/filemon/system/classes/kohana/view.php(137): Kohana_View->set_filename('some/view/file')
#1 /home/rado/public_html/app/filemon/system/classes/kohana/view.php(30): Kohana_View->__construct('some/view/file', NULL)
#2 /home/rado/public_html/app/filemon/modules/userguide/classes/kohana/kodoc/markdown.php(157): Kohana_View::factory('some/view/file')
#3 /home/rado/public_html/app/filemon/modules/userguide/vendor/markdown/markdown.php(330): Kohana_Kodoc_Markdown->doIncludeViews('<h1 id="markdow...')
#4 /home/rado/public_html/app/filemon/modules/userguide/vendor/markdown/markdown.php(64): Markdown_Parser->transform('# Markdown Synt...')
#5 /home/rado/public_html/app/filemon/modules/userguide/classes/controller/userguide.php(159): Markdown('# Markdown Synt...')
#6 [internal function]: Controller_Userguide->action_docs()
#7 /home/rado/public_html/app/filemon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Userguide))
#8 /home/rado/public_html/app/filemon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/rado/public_html/app/filemon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/rado/public_html/app/filemon/index.php(58): Kohana_Request->execute()
#11 {main}
2011-12-02 23:39:16 --- ERROR: View_Exception [ 0 ]: The requested view some/view/file could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-02 23:39:16 --- STRACE: View_Exception [ 0 ]: The requested view some/view/file could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/rado/public_html/app/filemon/system/classes/kohana/view.php(137): Kohana_View->set_filename('some/view/file')
#1 /home/rado/public_html/app/filemon/system/classes/kohana/view.php(30): Kohana_View->__construct('some/view/file', NULL)
#2 /home/rado/public_html/app/filemon/modules/userguide/classes/kohana/kodoc/markdown.php(157): Kohana_View::factory('some/view/file')
#3 /home/rado/public_html/app/filemon/modules/userguide/vendor/markdown/markdown.php(330): Kohana_Kodoc_Markdown->doIncludeViews('<h1 id="markdow...')
#4 /home/rado/public_html/app/filemon/modules/userguide/vendor/markdown/markdown.php(64): Markdown_Parser->transform('# Markdown Synt...')
#5 /home/rado/public_html/app/filemon/modules/userguide/classes/controller/userguide.php(159): Markdown('# Markdown Synt...')
#6 [internal function]: Controller_Userguide->action_docs()
#7 /home/rado/public_html/app/filemon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Userguide))
#8 /home/rado/public_html/app/filemon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/rado/public_html/app/filemon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/rado/public_html/app/filemon/index.php(58): Kohana_Request->execute()
#11 {main}