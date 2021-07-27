# PHPAssessment
## 1.整体思路
本地配置8000端口，用file_get_contents解析Json，用json_decode将其转换为数组，提取其有用的士兵配置。用file_put_contents生成新的Json文件。对新的Json文件进行解析,对解析出的数据进行循环遍历，根据逻辑对传入的参数进行判断，返回数据。
## 2.存储设计
根据配置提取出
## 3.接口设计
### 3.1 根据id获取战力
请求方法 
```php
Http GET
```
接口地址
```php
http://localhost:8000/ctrl/getCombatPoints.php?id
```
请求参数
```php
id
```
请求响应
```php
combatPoints
```
### 3.2 根据id获取稀有度
请求方法 
```php
Http GET
```
接口地址
```php
http://localhost:8000/ctrl/getRarity.php?id
```
请求参数
```php
id
```
请求响应
```php
rarity
```
### 3.3 输入cvc获取所有合法的士兵 
请求方法 
```php
Http GET
```
接口地址
```php
http://localhost:8000/ctrl/getLegal.php?cvc
```
请求参数
```php
cvc
```
请求响应
```php
所有合法的士兵 
```
### 3.4 获取每个阶段解锁相应士兵的json数据 
请求方法 
```php
Http GET
```
接口地址
```php
http://localhost:8000/ctrl/getLegal.php?cvc
```
请求参数
```php
无
```
请求响应
```php
士兵的json数据
```
### 3.5 输入稀有度，当前解锁阶段和cvc，获取该稀有度cvc合法且已解锁的所有士兵  
请求方法 
```php
Http GET
```
接口地址
```php
http://localhost:8000/ctrl/unlockSoldiers.php?rarity？quality？cvc
```
请求参数
```php
rarity quality cvc
```
请求响应
```php
该稀有度cvc合法且已解锁的所有士兵 
```
## 4.代码结构
### 4.1 代码结构目录
```php
|---ctrl
|
|---json
|
|---modle
|
|---service
```
