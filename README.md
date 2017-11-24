MyFormUsingInfyomLaravelGenerator
===============

Program source for generate sample forms.

## Overview

This is sample program using infyom laravel generator module.

## The command of generate form

$ php artisan infyom:api_scaffold Sample --fieldsFile=./database/sample.json

## The command of delete form

$ php artisan infyom:rollback Sample api_scaffold

## (Example) the source of sample.json

```
[
    {
        "name": "id",
        "dbType": "increments",
        "htmlType": "",
        "validations": "",
        "searchable": false,
        "fillable": false,
        "primary": true,
        "inForm": false,
        "inIndex": false
    },
    {
        "name": "title",
        "dbType": "string",
        "htmlType": "text",
        "validations": "required|max:255",
        "inForm": true,
        "inIndex": true,
        "searchable": true
    },
    {
        "name": "subtitle",
        "dbType": "string,25",
        "htmlType": "text",
        "validations": "required|max:255",
        "fillable": true,
        "inForm": true,
        "inIndex": false,
        "searchable": false
    },
    {
        "name": "answer001",
        "dbType": "text",
        "htmlType": "textarea",
        "validations": "max:30000",
        "fillable": true,
        "inForm": true,
        "inIndex": false,
        "searchable": false
    },
    {
        "name": "email",
        "dbType": "string",
        "htmlType": "email",
        "validations": "required|max:255",
        "fillable": true,
        "inForm": true,
        "inIndex": false,
        "searchable": false
    },
    {
        "name": "start_date",
        "dbType": "string",
        "htmlType": "date",
        "validations": "",
        "fillable": true,
        "inForm": true,
        "inIndex": false,
        "searchable": false
    },
    {
        "name": "number",
        "dbType": "integer",
        "htmlType": "number",
        "validations": "",
        "fillable": true,
        "inForm": true,
        "inIndex": false,
        "searchable": false
    },
    {
        "name": "zipcode",
        "dbType": "string",
        "htmlType": "zipcode",
        "validations": "",
        "fillable": true,
        "inForm": true,
        "inIndex": false,
        "searchable": false
    },
    {
        "name": "password",
        "dbType": "string",
        "htmlType": "password",
        "validations": "required",
        "fillable": true,
        "inForm": true,
        "inIndex": false,
        "searchable": false
    },
    {
        "name": "image",
        "dbType": "string",
        "htmlType": "file",
        "validations": "",
        "inForm": true,
        "inIndex": true,
        "searchable": true
    },
    {
        "name": "category",
        "dbType": "integer",
        "htmlType": "select,none:0,one:1,two:2,three:3,four:4",
        "validations": "",
        "fillable": true,
        "inForm": true,
        "inIndex": true,
        "searchable": true
    },
    {
        "name": "popular",
        "dbType": "integer",
        "htmlType": "checkbox,1,0",
        "validations": "required",
        "inForm": true,
        "inIndex": false,
        "searchable": false
    },
    {
        "name": "display_flg",
        "dbType": "integer",
        "htmlType": "radio,is_display:1,is_not_display:0",
        "validations": "required",
        "inForm": true,
        "inIndex": false,
        "searchable": false
    },
    {
        "name": "hid",
        "dbType": "integer:default,1",
        "htmlType": "text",
        "validations": "",
        "fillable": false,
        "inForm": false,
        "inIndex": false,
        "searchable": false
    },
    {
        "name": "created_id",
        "dbType": "integer:default,1",
        "htmlType": "text",
        "validations": "",
        "fillable": false,
        "inForm": false,
        "inIndex": false,
        "searchable": false
    },
    {
        "name": "updated_id",
        "dbType": "integer:default,1",
        "htmlType": "text",
        "validations": "",
        "fillable": false,
        "inForm": false,
        "inIndex": false,
        "searchable": false
    },
    {
        "name": "created_at",
        "dbType": "timestamp",
        "htmlType": "",
        "validations": "",
        "searchable": false,
        "fillable": false,
        "primary": false,
        "inForm": false,
        "inIndex": false
    },
    {
        "name": "updated_at",
        "dbType": "timestamp",
        "htmlType": "",
        "validations": "",
        "searchable": false,
        "fillable": false,
        "primary": false,
        "inForm": false,
        "inIndex": false
    }
]
```

## How to set up

1. ソース一式を設置
2. vendor配下をcomposerでダウンロード
   composer update
3. パッチ適用
   patch < HTMLFieldGenerator.patch
   File to patch: [下記を入力]
   ./vendor/infyomlabs/laravel-generator/src/Utils/HTMLFieldGenerator.php
4. .envの設定
5. database設定
6. テーブル作成
   php artisan migrate
7. 表示確認