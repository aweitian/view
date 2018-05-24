<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/24
 * Time: 10:04
 * @var \Aw\View $this
 */
$a = 'aaaa';
$b = 'bbbbbbbbb';
$c = 'xx';
$this->mergeVariableScope(compact('a', 'b'));
$this->includeFile("lu_ren_jia");
