- OKRという目標管理ツールをlaravelで作成しました
    - [OKRとは](https://www.kaonavi.jp/dictionary/okr/)

## DB
| Column | Type | 	Options |
|:-----------|:------------|:------------|
| ID       | bigIncrements    |      |
| objective     | string      |      |
| key_result    | string      |      |
| parent_id     | unsignedBigInteger  | nullable |
| master_flag   | boolean     | default(1) |
| time_stamp    | timestamps  | timestamps |


## 階層分け
* 一階層目はmaster_flagが1(true)になっているもの　
+ 二階層目以降はparent_idを見て表示する、master_flagは0（false）


## 追加方法
##### 大もと（一階層目）の設定
- ユーザーの登録、ログインをして「新しくOKRを追加する」から追加
##### 二階層目以降の追加
TOPページ（ROUTE::"/"）から追加したOBJECTIVEを閲覧できるのでその箇所をクリック → 詳細画面から「OKRを追加」から追加
