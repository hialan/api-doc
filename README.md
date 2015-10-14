使用方法
========

這份文件利用 swagger-php 來產生 swagger.json，來描述 API spec

安裝開發環境
-------------

  * 請先準備好以下環境:
    * PHP composer
      * CentOS: sudo yum install composer
    * Node.js npm
      * CentOS: sudo yum install npm
  * sh install.sh

編輯 PHP 文件
-------------

  * 編輯 src/\*.php
  * sh gen.sh

在本機執行 swagger-ui
---------------------

  * sh run\_server.sh


使用 swagger editor 預覽 git 上的 swagger.json
----------------------------------------------

  * http://editor.swagger.io/#/
  * File -> Import Uri
    * https://raw.githubusercontent.com/hialan/api-doc/master/swagger.json

使用 swagger ui 預覽 git 上的 swagger.json
------------------------------------------

  * http://petstore.swagger.io/
  * 替換 swagger.json 為
    * https://raw.githubusercontent.com/hialan/api-doc/master/swagger.json 


