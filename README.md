- アプリのURL
 https://okr-laapp.herokuapp.com/
    
- OKRという目標管理ツールをlaravelで作成しました
    - 参考にした記事 [OKRとは](https://www.kaonavi.jp/dictionary/okr/)

## DB
| Column       | Type               | Options    |
|:-------------|:-------------------|:-----------|
| ID           | bigIncrements      |            |
| objective    | string             |            |
| key_result   | string             |            |
| detail       | string             | nullable   |
| parent_id    | unsignedBigInteger | nullable   |
| master_flag  | boolean            | default(1) |
| time_stamp   | timestamps         | timestamps |

## 追加方法
##### 大もと（一階層目）の設定
- ユーザーの登録、ログインをして「新しくOKRを追加する」から追加
##### 二階層目以降の追加
TOPページ（ROUTE::"/"）から追加したOBJECTIVEを閲覧できるのでその箇所をクリック → 詳細画面から「OKRを追加」から追加
##### 詳細の追加


## 階層分け
* 一階層目はmaster_flagが1(true)になっているもの　
+ 二階層目以降はparent_idを見て表示する、master_flagは0（false）

## leader-line.js
- OKRの結びつきを視覚的にわかりやすくするためオレンジ色の矢印部分を実装

![参考画像](https://github.com/0506kinoshita/okr-app/blob/images/okr_show/okr.png)
